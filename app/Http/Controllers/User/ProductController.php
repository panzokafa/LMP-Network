<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Types;



class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);
        $type = Types::where('id', $product->type_id)->get()[0];
        $similar = Product::where('type_id', $type->id)->get();


        return view('user.product', ['product' => $product, 'similar' => $similar]);

    }
}
