<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use App\Models\Conversation;
use App\Notifications\MessageRead;
use App\Notifications\MessageSent;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChatBox extends Component
{
    public $selectedConversation;
    public $selectedConversationId;
    public $body;
    public $loadedMessages;
    public $paginate_var = 10;
    public $messagesLoaded = false;

    protected $listeners = [
        'loadMore'
    ];

    public function getListeners()
    {
        $user = Auth::user();

        if($user->role === 'admin'){
            return [
                'loadMore',
                "echo-private:users.{$user->email},.Illuminate\\Notifications\\Events\\BroadcastNotificationCreated" => 'broadcastedNotifications'
            ];
        }else{
            return [
                'loadMore',
                "echo-private:users.{$this->selectedConversation->email_sender},.Illuminate\\Notifications\\Events\\BroadcastNotificationCreated" => 'broadcastedNotifications'
            ];
        }
    }

    public function mount($selectedConversationId)
    {
        $this->selectedConversationId = $selectedConversationId;
        $this->selectedConversation = Conversation::findOrFail($this->selectedConversationId);
        $this->loadedMessages = collect();  // Initialize as an empty collection
        $this->loadMessages();
    }

    public function hydrate()
    {
        $this->selectedConversation = Conversation::findOrFail($this->selectedConversationId);
    }

    public function broadcastedNotifications($event)
    {
        if ($event['type'] == MessageSent::class) {
            if ($event['conversation_id'] == $this->selectedConversation->id) {
                $this->dispatch('scroll-bottom');
                $newMessage = Message::find($event['message_id']);
                $this->loadedMessages->push($newMessage);
                $newMessage->read_at = now();
                $newMessage->save();
                $this->selectedConversation->getReceiver()->notify(new MessageRead($this->selectedConversation->id));
            }
        }
    }

    public function loadMore(): void
    {
        $this->paginate_var += 10;
        $this->loadMessages();
        $this->dispatch('update-chat-height');
    }

    public function loadMessages()
    {
        $emailSender =  $this->selectedConversation->getReceiver()->email_sender;
        $messagesQuery = Message::where('conversation_id', $this->selectedConversation->id)
            ->where(function ($query) use ($emailSender) {
                $query->where('email_sender', $emailSender)
                    ->whereNull('sender_deleted_at')
                    ->orWhere('email_receiver', $emailSender)
                    ->whereNull('receiver_deleted_at');
            });

        $messagesCount = $messagesQuery->count();
        $messagesToLoad = $messagesQuery
            ->skip(max(0, $messagesCount - $this->paginate_var))
            ->take($this->paginate_var)
            ->get();

        // Merge loaded messages at the beginning of the collection
        $this->loadedMessages = $messagesToLoad->merge($this->loadedMessages);
    }

    public function sendMessage()
    {
        $this->validate(['body' => 'required|string']);
        $user = Auth::user();

        if($user->role === 'admin'){
            $createdMessage = Message::create([
                'conversation_id' => $this->selectedConversation->id,
                'email_sender' => $user->email,
                'email_receiver' => $this->selectedConversation->email_sender,
                'body' => $this->body
            ]);
        }else{
            $createdMessage = Message::create([
                'conversation_id' => $this->selectedConversation->id,
                'email_sender' => $this->selectedConversation->email_sender,
                'email_receiver' => $user->email,
                'body' => $this->body
            ]);
        }

        $this->reset('body');
        $this->dispatch('scroll-bottom');
        $this->loadedMessages->push($createdMessage);
        $this->selectedConversation->updated_at = now();
        $this->selectedConversation->save();
        $this->dispatch('refresh')->to('chat.chat-list');
        $receiver = $this->selectedConversation->getReceiver();

        if ($receiver) {
            // Periksa apakah $receiver adalah instance dari Conversation
            if ($receiver instanceof Conversation) {
                // Dapatkan User dari email_sender
                $user = User::firstWhere('email', $receiver->email_sender);
                if ($user) {
                    $user->notify(new MessageSent(auth()->user(), $createdMessage, $this->selectedConversation, $user->id));
                }
            } else {
                // Jika bukan instance Conversation, langsung notify
                $receiver->notify(new MessageSent(auth()->user(), $createdMessage, $this->selectedConversation, $receiver->id));
            }
        }
    }

    public function render()
    {
        return view('livewire.chat.chat-box', [
            'loadedMessages' => $this->loadedMessages,
        ]);
    }
}
