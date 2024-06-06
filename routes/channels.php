<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\Conversation;
use Illuminate\Support\Facades\Log;

Broadcast::channel('conversation.{conversationReceiver}', function ($user, $conversationReceiver) {
    $conversation = Conversation::find($conversationReceiver);

    if (!$conversation) {
        return false;
    }

    Log::info('conversation channel passing success');
    return $conversation->email_sender === $user->email || $conversation->email_receiver === $user->email;
    return true;
});


Broadcast::channel('users.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
