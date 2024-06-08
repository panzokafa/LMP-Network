<?php

namespace App\Livewire;

use App\Events\MessageSend;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use App\Notifications\MessageRead;
use App\Notifications\MessageSent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Http\Request;

class FloatingChat extends Component
{
    public $selectedConversation;
    public $selectedConversationId;
    public $body;
    public $loadedMessages;
    public $paginate_var = 10;
    public $messagesLoaded = false;
    public $showUserForm = true;
    public $emailAdmin;
    public $emailUser;
    protected $listeners = ['loadMore'];

    public function getListener()
    {
        return ['loadMore', "echo-private:conversation.{$this->selectedConversation->id},.Illuminate\\Notifications\\Events\\BroadcastNotificationCreated" => 'broadcastedNotifications'];
    }

    public function mount()
    {
        $sessionData = session('chatFormData',null);
        // dd($sessionData);
        if ($sessionData) {
            $this->emailUser = $sessionData['email'];
            $selectedConversation = Conversation::where('email_sender', $sessionData['email'])->first();
            $this->selectedConversation = $selectedConversation;
            if ($selectedConversation) {
                $this->selectedConversationId = $selectedConversation->id;
                $this->emailAdmin = $selectedConversation->receiver->email;
            }
        }
        $this->loadedMessages = collect();
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
    }

    public function loadMore(): void
    {
        $this->paginate_var += 10;
        $this->loadMessages();
        $this->dispatch('update-chat-height');
    }

    public function loadMessages()
    {
        if (!$this->selectedConversationId || !$this->emailUser) {
            $this->showUserForm = true;
            return [];
        }
        $this->showUserForm = false;
        $emailUser = $this->emailUser;
        $messagesQuery = Message::where('conversation_id', $this->selectedConversationId)->where(function ($query) use ($emailUser) {
            $query->where('email_sender', $emailUser)->orWhere('email_receiver', $emailUser);
        });

        $messagesCount = $messagesQuery->count();
        $messagesToLoad = $messagesQuery
            ->orderBy('created_at')
            ->skip(max(0, $messagesCount - $this->paginate_var))
            ->take($this->paginate_var)
            ->get();

        $this->loadedMessages = collect();
        $this->loadedMessages = $messagesToLoad->merge($this->loadedMessages);
    }

    public function sendMessage()
    {
        $this->validate(['body' => 'required|string']);
        $createdMessage = Message::create([
            'conversation_id' => $this->selectedConversationId,
            'email_sender' => $this->emailUser,
            'email_receiver' => $this->emailAdmin,
            'body' => $this->body,
        ]);

        $this->reset('body');
        $this->dispatch('scroll-bottom');
        $this->loadedMessages->push($createdMessage);
        $this->selectedConversation->updated_at = now();
        $this->selectedConversation->save();

        $conversation = Conversation::find($this->selectedConversation->id);
        if ($conversation) {
            $conversation->notify(new MessageSent($this->selectedConversation->email_sender, $this->selectedConversation, $createdMessage, $this->selectedConversation->email_receiver));
        }
        $this->selectedConversation->getReceiver()->notify(new MessageSent($this->emailUser, $createdMessage, $this->selectedConversation, $this->selectedConversation->receiver_id));

        $this->dispatch('message-sent', ['message' => $createdMessage]);
    }

    public function render()
    {
        return view('livewire.floating-chat', [
            'users' => User::where('role', 'admin')->get(),
            'loadedMessages' => $this->loadedMessages,
        ]);
    }
}
