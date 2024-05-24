<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;
use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;
use App\Notifications\MessageRead;
use App\Notifications\MessageSent;
use App\Models\Message;

class FloatingChat extends Component
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


    public function mount()
    {
        $this->selectedConversation = Conversation::where('sender_id', Auth::id())->get()->first();
        if ($this->selectedConversation == null) {
            $this->selectedConversation = null;
        }else{
            $this->selectedConversationId = $this->selectedConversation->id;
        }

    }

    public function sendMessage()
    {
        $this->validate(['body' => 'required|string']);

        $createdMessage = Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'sender_id' => Auth::id(),
            'receiver_id' => $this->selectedConversation->getReceiver()->id,
            'body' => $this->body
        ]);

        // Reset the input field
        $this->reset('body');

        // Scroll to the bottom of the chat
        // $this->dispatchBrowserEvent('scroll-bottom');

        // Update the conversation and notify the receiver
        $this->selectedConversation->updated_at = now();
        $this->selectedConversation->save();
        $this->selectedConversation->getReceiver()->notify(new MessageSent(
            Auth::user(),
            $createdMessage,
            $this->selectedConversation,
            $this->selectedConversation->getReceiver()->id
        ));

        // Optionally, refresh the component
        // $this->emit('refreshChat');
    }

    public function render()
    {
        return view('livewire.floating-chat', [
            'users' => User::where('role', 'admin')->get(),
        ]);
    }
}
