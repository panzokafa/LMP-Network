<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use App\Models\Conversation;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class ChatBox extends Component
{
    public $selectedConversation;
    public $selectedConversationId;
    public $body;
    public $loadedMessages;
    public $emailUser;
    public $paginate_var = 10;
    public $messagesLoaded = false;

    protected $listeners = [
        'loadMore'
    ];


    public function mount($selectedConversationId)
    {
        $this->selectedConversationId = $selectedConversationId;
        $this->selectedConversation = Conversation::findOrFail($this->selectedConversationId);
        $this->emailUser = $this->selectedConversation->email_sender;
        $this->readMsg();
        $this->loadedMessages = collect();
        $this->loadMessages();
    }

    public function hydrate()
    {
        $this->selectedConversation = Conversation::findOrFail($this->selectedConversationId);
        $this->readMsg();
    }


  

    public function readMsg()
    {
        $emailUser = $this->emailUser;
        $messagesQuery = Message::where('conversation_id', $this->selectedConversationId)
            ->where(function ($query) use ($emailUser) {
                $query->where('email_sender', $emailUser)->orWhere('email_receiver', $emailUser);
            })
            ->select('read_at');

        $messagesQuery->whereNull('read_at')->update(['read_at' => now()]);
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
            return [];
        }
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
        $user = Auth::user();

        if ($user->role === 'admin') {
            $createdMessage = Message::create([
                'conversation_id' => $this->selectedConversation->id,
                'email_sender' => $user->email,
                'email_receiver' => $this->selectedConversation->email_sender,
                'body' => $this->body
            ]);
        } else {
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
    }

    public function render()
    {
        return view('livewire.chat.chat-box', [
            'loadedMessages' => $this->loadedMessages,
        ]);
    }
}
