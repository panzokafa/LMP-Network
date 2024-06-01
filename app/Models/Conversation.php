<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'receiver_id',
        'email_sender',
        'name',
        'no_hp',
    ];


    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }


    public function getReceiver()
    {
        if ($this->receiver_id === auth()->id()) {
            return Conversation::firstWhere('email_sender', $this->email_sender);
        } else {
            return User::firstWhere('id', $this->receiver_id);
        }
    }

    public function scopeWhereNotDeleted($query)
    {
        return $query->whereNull('deleted_at');
    }

    // public  function isLastMessageReadByUser(): bool
    // {
    //     $user = Auth()->User();
    //     $lastMessage = $this->messages()->latest()->first();

    //     if ($lastMessage) {
    //         return  $lastMessage->read_at !== null && $lastMessage->sender_id == $user->id;
    //     }
    // }

    public  function unreadMessagesCount(): int
    {

        $conversations = Conversation::all();
        $selectedConversation = $conversations[0]->getReceiver()->email_sender;

        return $unreadMessages = Message::where('conversation_id', '=', $this->id)
            ->where('email_sender', $selectedConversation)
            ->whereNull('read_at')->count();
    }
}
