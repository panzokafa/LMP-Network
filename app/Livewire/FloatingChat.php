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
                $this->selectedConversation = null;
                $this->selectedConversationId = null;
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

    public function loadMore(): void
    {
        $this->paginate_var += 10;
        $this->loadMessages();
        $this->dispatch('update-chat-height');
    }

    public function loadMessages()
    {
        $sessionData = session('chatFormData', null);

        if ($sessionData) {
            $selectedConversationTrashed = Conversation::withTrashed()
            ->where('email_sender', $sessionData['email'])
            ->whereNotNull('deleted_at')
            ->first();
            if ($selectedConversationTrashed !== null) {
                $this->showUserForm = true;
                $selectedConversationTrashed->messages()->delete();
                $selectedConversationTrashed->forceDelete();
                session()->forget('chatFormData');
                return redirect()->route('user.home');
            } else {
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
        }
    }

    public function sendMessage()
    {
        $sessionData = session('chatFormData', null);
        $this->validate(['body' => 'required|string']);
        $selectedConversation = Conversation::withTrashed()
            ->where('email_sender', $sessionData['email'])
            ->first();

        if ($this->selectedConversationId === null) {
            $this->showUserForm = true;
            $selectedConversation->messages()->delete();
            $selectedConversation->forceDelete();
            session()->forget('chatFormData');
            return redirect()->route('user.home');
        }

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
