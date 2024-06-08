<?php

namespace App\Livewire;


use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Users extends Component
{
    public function message(Request $request)
    {
        // Validasi data form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'company' => 'required|string|max:255',
            'email_receiver' => 'required'
        ]);

        $selectedUser = User::find($request->input('email_receiver'));
        $selectedUserId = $selectedUser->id;
        $selectedUserEmail = $selectedUser->email;

        // Cek apakah conversation dengan email_sender dan receiver_id yang sama sudah ada
        $existingConversation = Conversation::where('email_sender', $validated['email'])
            ->where('receiver_id', $selectedUserId)
            ->first();

        $validated['email_receiver'] = $selectedUserEmail;

        if ($existingConversation) {
            Session::put('chatFormData', $validated);
            return redirect()->back();
        }

        // Buat entri baru di tabel Conversation
        $createdConversation = Conversation::create([
            'receiver_id' => $selectedUserId,
            'email_sender' => $validated['email'],
            'name' => $validated['name'],
            'no_hp' => $validated['phone'],
            'company' => $validated['company'],
            'email_receiver' => $selectedUserEmail,
        ]);

        Session::put('chatFormData', $validated);

        // Kembalikan respons JSON yang menunjukkan keberhasilan
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.users', [
            'users' => User::where('role', 'admin')->get()
        ]);
    }
}
