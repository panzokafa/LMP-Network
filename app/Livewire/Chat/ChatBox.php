<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use App\Models\Conversation;
use App\Notifications\MessageRead;
use App\Notifications\MessageSent;
use Livewire\Component;

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
        $auth_id = auth()->user()->id;

        return [
            'loadMore',
            "echo-private:users.{$auth_id},.Illuminate\\Notifications\\Events\\BroadcastNotificationCreated" => 'broadcastedNotifications'
        ];
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
        $userId = auth()->id();
        $messagesQuery = Message::where('conversation_id', $this->selectedConversation->id)
            ->where(function ($query) use ($userId) {
                $query->where('sender_id', $userId)
                    ->whereNull('sender_deleted_at')
                    ->orWhere('receiver_id', $userId)
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
        $createdMessage = Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'sender_id' => auth()->id(),
            'receiver_id' => $this->selectedConversation->getReceiver()->id,
            'body' => $this->body
        ]);

        $this->reset('body');
        $this->dispatch('scroll-bottom');
        $this->loadedMessages->push($createdMessage);
        $this->selectedConversation->updated_at = now();
        $this->selectedConversation->save();
        $this->dispatch('refresh')->to('chat.chat-list');
        $this->selectedConversation->getReceiver()->notify(new MessageSent(
            auth()->user(),
            $createdMessage,
            $this->selectedConversation,
            $this->selectedConversation->getReceiver()->id
        ));
    }

    public function render()
    {
        return view('livewire.chat.chat-box', [
            'loadedMessages' => $this->loadedMessages,
        ]);
    }
}
