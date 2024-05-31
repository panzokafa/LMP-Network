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
    public $emailAdmin;
    public $emailUser;
    protected $listeners = ['loadMore'];

    public function mount()
    {
        $sessionData = session('chatFormData', null);
        if ($sessionData) {
            $this->emailUser = $sessionData['email'];
            $selectedConversation = Conversation::where('email_sender', $this->emailUser)->first();
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
        if (!$this->selectedConversation) {
            return [];
        }

        $emailSender = $this->emailUser;
        $emailReceiver = $this->emailAdmin;
        $messagesQuery = Message::where('conversation_id', $this->selectedConversation->id)->where(function ($query) use ($emailSender) {
            $query->where('email_sender', $emailSender)->whereNull('sender_deleted_at')->orWhere('email_receiver', $emailSender)->whereNull('receiver_deleted_at');
        });

        $messagesCount = $messagesQuery->count();
        $messagesToLoad = $messagesQuery
            ->skip(max(0, $messagesCount - $this->paginate_var))
            ->take($this->paginate_var)
            ->get();

        // Merge loaded messages at the beginning of the collection
        $this->loadedMessages = $messagesToLoad->merge($this->loadedMessages);
        dd($this->loadedMessages);
    }

    public function sendMessage()
    {
        // dd($this->showUserForm);
        $this->validate(['body' => 'required|string']);

        if ($this->selectedConversation) {
            $createdMessage = Message::create([
                'conversation_id' => $this->selectedConversation->id,
                'email_sender' => $this->emailUser,
                'email_receiver' => $this->emailAdmin,
                'body' => $this->body,
            ]);

            $this->reset('body');
            $this->dispatch('scroll-bottom');
            $this->loadedMessages->push($createdMessage);
            $this->selectedConversation->updated_at = now();
            $this->selectedConversation->save();

            $this->selectedConversation->getReceiver()->notify(new MessageSent($this->emailUser, $createdMessage, $this->selectedConversation, $this->selectedConversation->getReceiver()->id));

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
