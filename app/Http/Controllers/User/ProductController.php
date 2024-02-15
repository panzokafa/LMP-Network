<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);

        return view('user.product', ['product' => $product]);

    }
}
