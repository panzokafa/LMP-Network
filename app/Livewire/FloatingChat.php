<?php

namespace App\Livewire;

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
        return ['loadMore', "echo-private:conversation.{$this->selectedConversationId},.Illuminate\\Notifications\\Events\\BroadcastNotificationCreated" => 'broadcastedNotifications'];
    }

    public function mount()
    {
        $sessionData = session('chatFormData', null);
        if ($sessionData) {
            $this->emailUser = $sessionData['email'];
            $this->emailAdmin = $sessionData['email_receiver'];
            $selectedConversation = Conversation::where('email_sender', $sessionData['email'])->first();
            if ($selectedConversation) {
                $this->selectedConversation = $selectedConversation;
                $this->selectedConversationId = $selectedConversation->id;
            } else {
                // Menghandle ketika conversation tidak ditemukan
                $this->selectedConversation = null;
                $this->selectedConversationId = null;
                session()->forget('chatFormData'); // hapus data sesi jika tidak ada conversation
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
                // Menghandle ketika conversation tidak ditemukan
                $this->selectedConversationId = null;
                session()->forget('chatFormData'); // hapus data sesi jika tidak ada conversation
            }
        }
    }

    public function broadcastedNotifications($event)
    {
        if ($event['type'] == MessageSent::class) {
            if ($event['conversation_id'] == $this->selectedConversationId) {
                $this->dispatch('scroll-bottom');

                $newMessage = Message::find($event['id']);
                if ($newMessage) {
                    $this->loadedMessages->push($newMessage);
                    $newMessage->read_at = now();
                    $newMessage->save();

                    $this->selectedConversation->getReceiver()->notify(new MessageRead($this->selectedConversation->id));
                }
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
        $sessionData = session('chatFormData', null);

        if (!$this->selectedConversationId && !$this->emailUser && !$sessionData) {
            $this->showUserForm = true;
            return;
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
        if ($this->selectedConversation) {
            $this->selectedConversation->updated_at = now();
            $this->selectedConversation->save();

            $conversation = Conversation::find($this->selectedConversation->id);
            if ($conversation) {
                $conversation->notify(new MessageSent($this->selectedConversation->email_sender, $this->selectedConversation, $createdMessage, $this->selectedConversation->email_receiver));
            }
            $this->selectedConversation->getReceiver()->notify(new MessageSent($this->emailUser, $createdMessage, $this->selectedConversation, $this->selectedConversation->receiver_id));

            $this->dispatch('message-sent', ['message' => $createdMessage]);
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
