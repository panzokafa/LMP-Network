<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\Log;

class MessageSent extends Notification implements ShouldBroadcastNow
{
    use Queueable;

    public $emailSender;
    public $message;
    public $conversation;
    public $emailReceiver;

    public function __construct($emailSender, $message, $conversation, $emailReceiver)
    {
        $this->emailSender = $emailSender;
        $this->message = $message;
        $this->conversation = $conversation;
        $this->emailReceiver = $emailReceiver;
    }

    public function via($notifiable)
    {
        Log::info('broadcast');
        return ['broadcast'];
    }

    public function toBroadcast($notifiable): BroadcastMessage
    {
        Log::info('broadcast 2');
        return new BroadcastMessage([
            'emailSender' => $this->emailSender,
            'message' => $this->message,
            'conversation' => $this->conversation,
            'emailReceiver' => $this->emailReceiver,
        ]);
    }
}
