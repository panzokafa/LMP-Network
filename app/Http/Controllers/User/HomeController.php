<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
    $search = $request->search;

        if($request->has('search')) {
            $products = Product::where('name','LIKE', '%'.$request->search. '%')->get();
        } else {
            $products = Product::all();
        }

        return view('user.search',compact('search'), ['products' => $products]);

    }
}
