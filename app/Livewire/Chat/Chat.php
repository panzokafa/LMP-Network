<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Livewire\Component;


class Chat extends Component
{
    public $query;
    public $selectedConversation;

    public function render(Request $request, $query)
    {
        $this->query = $query;

        if (auth()->user()->is_admin) {
            $this->selectedConversation = Conversation::findOrFail($this->query);
        } else {
            $this->selectedConversation = Conversation::where('id', $this->query)
                ->where(function ($query) {
                    $query->where('sender_id', auth()->id())
                        ->orWhere('receiver_id', auth()->id());
                })
                ->firstOrFail();
        }

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
