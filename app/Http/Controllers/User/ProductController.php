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

    public function solution()
    {
        $mdc = Product::where('type_id', 1)->get();
        $uhd = Product::where('type_id', 2)->get();

        $product = Product::all()->groupBy('type_id');
        $productTypes = Types::whereIn('id', $product->keys())->get()->keyBy('id');

        return view('user.service', [
            'product' => $product,
            '$productTypes' => $productTypes,
            'mdc' => $mdc,
            'uhd' => $uhd]);

    }

    public function popup()
    {
        $mdc = Product::where('type_id', 1)->get();
        $uhd = Product::where('type_id', 2)->get();

        $product = Product::all()->groupBy('type_id');
        $productTypes = Types::whereIn('id', $product->keys())->get()->keyBy('id');

        return view('components.nav.product', [
            'product' => $product,
            '$productTypes' => $productTypes,
            'mdc' => $mdc,
            'uhd' => $uhd]);

    }






}
