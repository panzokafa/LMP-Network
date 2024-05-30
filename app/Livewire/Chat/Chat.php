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

    public function render(Request $request, $query = null)
    {
        if (empty($query)) {
            return redirect()->route('chat.index');
        }

        try {
            $this->selectedConversation = Conversation::findOrFail($query);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('chat.index');
        }

        $conversations = Conversation::all();

        if ($conversations->isEmpty()) {
            return redirect()->route('chat.index');
        }

        $selectedConversationEmail = $this->selectedConversation->getReceiver()->email_sender;

        Message::where('conversation_id', $this->selectedConversation->id)
            ->where('email_receiver', $selectedConversationEmail)
            ->whereNull('read_at')
            ->update(['read_at' => now()]);

        return view('livewire.chat.chat', [
            'selectedConversation' => $this->selectedConversation,
            'query' => $query,
        ]);
    }
}
