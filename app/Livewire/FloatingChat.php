<?php

namespace App\Livewire;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use App\Notifications\MessageRead;
use App\Notifications\MessageSent;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FloatingChat extends Component
{
    public $selectedConversation;
    public $selectedConversationId;
    public $body;
    public $loadedMessages;
    public $paginate_var = 10;
    public $messagesLoaded = false;

    protected $listeners = ['loadMore'];

    public function getListeners()
    {
        $auth_id = auth()->user()->id;

        return ['loadMore', "echo-private:users.{$auth_id},.Illuminate\\Notifications\\Events\\BroadcastNotificationCreated" => 'broadcastedNotifications'];
    }

    public function mount()
    {
        $this->selectedConversation = Conversation::where('sender_id', Auth::id())->first();
        if (!$this->selectedConversation) {
            $this->selectedConversation = null;
        } else {
            $this->selectedConversationId = $this->selectedConversation->id;
        }
        $this->loadedMessages = collect();
        $this->loadMessages();
    }

    public function hydrate()
    {
        if ($this->selectedConversationId) {
            $this->selectedConversation = Conversation::where('sender_id', Auth::id())->first();
            if (!$this->selectedConversation) {
                $this->selectedConversationId = null;
            }
        }
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

        if ($this->selectedConversation) {
            $userId = auth()->id();
            $messagesQuery = Message::where('conversation_id', $this->selectedConversation->id)->where(function ($query) use ($userId) {
                $query->where('sender_id', $userId)->whereNull('sender_deleted_at')->orWhere('receiver_id', $userId)->whereNull('receiver_deleted_at');
            });

            $messagesCount = $messagesQuery->count();
            $messagesToLoad = $messagesQuery
                ->skip(max(0, $messagesCount - $this->paginate_var))
                ->take($this->paginate_var)
                ->get();

            $this->loadedMessages = $messagesToLoad->merge($this->loadedMessages);
        }
    }


    public function sendMessage()
    {
        $this->validate(['body' => 'required|string']);

        if ($this->selectedConversation) {
            $createdMessage = Message::create([
                'conversation_id' => $this->selectedConversation->id,
                'sender_id' => Auth::id(),
                'receiver_id' => $this->selectedConversation->getReceiver()->id,
                'body' => $this->body,
            ]);

            $this->reset('body');
            $this->dispatch('scroll-bottom');
            $this->loadedMessages->push($createdMessage);
            $this->selectedConversation->updated_at = now();
            $this->selectedConversation->save();

            $this->selectedConversation->getReceiver()->notify(new MessageSent(auth()->user(), $createdMessage, $this->selectedConversation, $this->selectedConversation->getReceiver()->id));

            $this->dispatch('newMessage', $createdMessage);
        }
    }


    public function render()
    {
        return view('livewire.floating-chat', [
            'users' => User::where('role', 'admin')->get(),
            'loadedMessages' => $this->loadedMessages,
        ]);
    }
}
