<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class SearchController extends Controller
{
    public function search()
    {
        $products = Product::orderBy('created_at', 'DESC')
        ->get();

        return view('user.search', ['products' => $products]);

    }
}
