<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Types;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::where('role','user')->count();
        $products = Product::count();
        $type = Types::count();
        $conversations = Message::whereNull('read_at')->count();

        return view('admin.dashboard', compact('user','products','type','conversations'));
    }
}
