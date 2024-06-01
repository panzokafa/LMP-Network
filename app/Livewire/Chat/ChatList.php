<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class ChatList extends Component
{
    public $selectedConversation;
    public $query;
    public $user;
    protected $listeners = ['refresh' => '$refresh'];
    public $conversations;

    public function unreadChat()
    {
        $this->conversations = $this->user->conversations()->latest('updated_at')->get();
    }

    public function allChat()
    {
        $user = auth()->user();
        $this->conversations = $this->user->conversations()->latest('created_at')->get();
    }

    public function deleteByUser($id)
    {
        $userId = auth()->id();

        $conversation = Conversation::find(decrypt($id));

        if ($conversation) {
            $conversation->messages()->delete();

            $conversation->forceDelete();
        }

        return redirect(route('chat.index'));
    }

    public function mount()
    {
        $this->user = auth()->user();
        $this->allChat();
    }

    public function render()
    {
        return view('livewire.chat.chat-list', [
            'conversations' => $this->conversations,
        ]);
    }
}
