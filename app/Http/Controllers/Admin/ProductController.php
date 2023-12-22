<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.product', ['products' => $products]);
    }

    public function create()
    {
        return view('admin.products.product-create');
    }

    public function edit($id)
    {
        $products = Product::find($id);

        return view('admin.products.product-edit', ['products' => $products]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'desc' => 'required|string',
            'type' => 'required',
        ]);

        $Image = $request->image;

        $originalImageName = Str::random(10) . $Image->getClientOriginalName();

        $Image->storeAs('public/product', $originalImageName);

        $data['image'] = $originalImageName;

        Product::create($data);

        return redirect()
            ->route('admin.product')
            ->with('success', 'Product created');
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');

        $request->validate([
            'name' => 'required|string',
            'image' => 'image|mimes:jpeg,jpg,png',
            'desc' => 'required|string',
            'type' => 'required',
        ]);

        $products = Product::find($id);

        if ($request->image) {
            # save new image
            $Image = $request->image;
            $originalImageName = Str::random(10) . $Image->getClientOriginalName();
            $Image->storeAs('public/product', $originalImageName);
            $data['image'] = $originalImageName;

            # delete old image
            Storage::delete('public/product/' . $products->image);
        }

        $products->update($data);

        return redirect()
            ->route('admin.product')
            ->with('success', 'Product updated');

    }

    public function destroy($id) {
        Product::find($id)->delete();

        return redirect()->route('admin.product')->with('success', 'Product deleted');
    }
}
