<?php

namespace App\Notifications;

use Hamcrest\Core\HasToString;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\Log;

class MessageSent extends Notification implements ShouldBroadcast
{
    use Queueable;

    public $userEmail;
    public $conversation;
    public $message;
    public $receiverEmail;
    public function __construct($userEmail, $conversation, $message, $receiverEmail)
    {
        $this->userEmail = $userEmail;
        $this->conversation = $conversation;
        $this->message = $message;
        $this->receiverEmail = $receiverEmail;
    }

    public function via($notifiable): string
    {
        Log::info('broadcast');
        return 'broadcast';
    }

    public function toBroadcast($notifiable): BroadcastMessage
    {
        Log::info('broadcast 2');
        return new BroadcastMessage([
            'email_sender' => $this->userEmail,
            'conversation_id' => $this->conversation->id,
            'message_id' => $this->message->id,
            'receiver_email' => $this->receiverEmail,
        ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
