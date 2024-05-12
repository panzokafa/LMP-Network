<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use Illuminate\Http\Request;

use App\Models\Message;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;

class Chat extends Component
{
    public $query;
    public $selectedConversation;



    public function render(Request $request, $query)
    {
        $this->query = $query;
        $this->selectedConversation = Conversation::findOrFail($this->query);

        #mark message belogning to receiver as read
        Message::where('conversation_id', $this->selectedConversation->id)
            ->where('receiver_id', auth()->id())
            ->whereNull('read_at')
            ->update(['read_at' => now()]);

        return view('livewire.chat.chat', [
            'selectedConversation' => $this->selectedConversation,
            'query' => $this->query,
        ]);
    }
}
