<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;

class FloatingChat extends Component
{
    public function render()
    {
        return view('livewire.floating-chat', [
            'users' => User::where('role', 'admin')->get(),
        ]);
    }
}
