<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class ProfileController extends Controller
{


    public function index()
    {
        $users = User::all();
        return view('user.profile', ['users' => $users]);
    }
}
