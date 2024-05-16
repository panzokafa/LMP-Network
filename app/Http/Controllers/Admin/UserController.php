<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $conversations = Message::whereNull('read_at')->count();
        return view('admin.user.users', ['users' => $users,'conversations' => $conversations]);
    }

    public function destroy($id) {
        User::find($id)->delete();

        return redirect()->route('admin.user')->with('success', 'User deleted');
    }

}
