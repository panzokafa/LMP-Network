<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Types;



class DashboardController extends Controller
{
    public function index()
    {
        $user = User::where('role','user')->count();
        $products = Product::count();
        $type = Types::count();


        return view('admin.dashboard', compact('user','products','type'));
    }
}
