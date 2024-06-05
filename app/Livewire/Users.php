<?php

namespace App\Livewire;


use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class Users extends Component
{
    public function message(Request $request, $userId)
    {
        // Validasi data form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'required|string|max:255',
            'receiverEmail' => 'required|string|max:255',
        ]);

        // Cek apakah conversation dengan email_sender dan receiver_id yang sama sudah ada
        $existingConversation = Conversation::where('email_sender', $validated['email'])
            ->where('receiver_id', $userId)
            ->first();

        if ($existingConversation) {
            return response()->json(['message' => 'Conversation already exists', 'conversation' => $existingConversation]);
        }

        // Buat entri baru di tabel Conversation
        $createdConversation = Conversation::create([
            'receiver_id' => $userId,
            'email_sender' => $validated['email'],
            'name' => $validated['name'],
            'no_hp' => $validated['phone'],
            'company' => $validated['company'],
            'email_receiver' => $validated['receiverEmail'],
        ]);

        // Kembalikan respons JSON yang menunjukkan keberhasilan
        return redirect()->route('chat', ['query' => $createdConversation->email_sender]);
    }

    public function render()
    {
        return view('livewire.users', [
            'users' => User::where('role', 'admin')->get()
        ]);
    }
}
