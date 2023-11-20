<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {
        $user = User::where('role','user')->count();

        return view('admin.dashboard', compact('user'));
    }
}
