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
        $now = now();

        $conversations = Conversation::all();
        // dd($conversations[0]->getReceiver()->email_sender);
        // Menyaring percakapan yang waktu terakhirnya lebih dari 10 menit yang lalu
        $conversationsToDelete = $conversations->filter(function ($conversation) use ($now) {
            $lastMessage = $conversation->messages->last();

            // Memeriksa apakah percakapan ini baru
            if ($lastMessage === null) {
                // Jika percakapan tidak memiliki pesan, maka dianggap sebagai percakapan baru
                return false;
            }

            // Jika pesan terakhir tersedia, cek apakah waktu pembuatannya lebih dari 10 menit yang lalu
            return $lastMessage->created_at->addMinutes(10)->isPast();
        });

        // Menghapus percakapan yang disaring bersama dengan pesan yang terkait
        $conversationsToDelete->each(function ($conversation) {
            $conversation->messages()->delete();
            $conversation->delete();
        });

        // Mengembalikan tampilan chat-list dengan percakapan yang tersaring
        if ($conversationsToDelete->count() > 0) {
            // Jika ada percakapan yang dihapus, arahkan ke route chat.index
            return Redirect::route('chat.index');
        }

        return view('livewire.chat.chat-list', [
            'conversations' => $conversations->diff($conversationsToDelete),
        ]);
    }
}
