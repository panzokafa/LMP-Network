<?php

namespace App\Livewire;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use App\Notifications\MessageRead;
use App\Notifications\MessageSent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class FloatingChat extends Component
{
    public $selectedConversation;
    public $selectedConversationId;
    public $body;
    public $loadedMessages;
    public $paginate_var = 10;
    public $messagesLoaded = false;
    public $showUserForm = true;
    protected $listeners = ['loadMore', 'userDataLoaded'];
    protected $persist = ['showUserForm'];

    public function mount()
    {
        $this->loadedMessages = collect();
        $this->loadMessages();
    }

    protected function getListeners()
    {
        return [
            'userDataLoaded' =>
            'showUserForm'
        ];
    }

    public function userDataLoaded($userData)
    {
        // Log the received data for debugging
        Log::info('User data loaded', ['userData' => $userData]);
        dd($userData); // Dump and die to inspect the received data

        $email = $userData['email'];

        $existingConversation = Conversation::where('email_sender', $email)->first();

        if ($existingConversation) {
            $this->showUserForm = false;
            $this->selectedConversation = $existingConversation;
            $this->selectedConversationId = $this->selectedConversation->id;
        } else {
            $this->selectedConversation = null;
            $this->selectedConversationId = null;
        }

        $this->loadMessages();
    }

    public function hydrate()
    {
        if ($this->selectedConversationId) {
            $this->selectedConversation = Conversation::find($this->selectedConversationId);
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
        dd($this->showUserForm);
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
