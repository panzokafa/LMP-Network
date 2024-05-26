<?php

namespace App\Livewire;


use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Users extends Component
{
    public function message($userId)
    {
        $authenticatedUserId = auth()->id();
        Log::info('Authenticated User ID: ' . $authenticatedUserId);
        Log::info('Recipient User ID: ' . $userId);

        // Check if conversation already exists
        $existingConversation = Conversation::where(function ($query) use ($authenticatedUserId, $userId) {
            $query->where('sender_id', $authenticatedUserId)
                ->where('receiver_id', $userId);
        })
            ->orWhere(function ($query) use ($authenticatedUserId, $userId) {
                $query->where('sender_id', $userId)
                    ->where('receiver_id', $authenticatedUserId);
            })->first();

        if ($existingConversation) {
            Log::info('Existing Conversation Found', $existingConversation->toArray());
            return redirect()->route('chat', ['query' => $existingConversation->id]);
        }

        // Create new conversation
        $createdConversation = Conversation::create([
            'sender_id' => $authenticatedUserId,
            'receiver_id' => $userId,
        ]);

        Log::info('Created Conversation', $createdConversation->toArray());

        return redirect()->route('chat', ['query' => $createdConversation->id]);
    }

    public function render()
    {
        return view('livewire.users', [
            'users' => User::where('role', 'admin')->get()
        ]);
    }
}
