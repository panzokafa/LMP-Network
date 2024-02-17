<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Types;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.product', ['products' => $products]);
    }

    public function create()
    {
        $types = Types::all();
        return view('admin.products.product-create', ['types' => $types]);
    }

    public function edit($id)
    {
        $products = Product::find($id);
        $types = Types::all();

        return view('admin.products.product-edit', ['products' => $products, 'types' => $types]);
    }

    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'desc' => 'required|string',
            'char' => 'required',
        ]);

        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image'), $image);


        Product::create([
            'name' => $request->name,
            'image' => $image,
            'desc' => $request->desc,
            'char' => $request->char,
            'type_id'   => $request->type_id,

        ]);

        return redirect()
            ->route('admin.product')
            ->with('success', 'Product created');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string',
            'image' => 'image|mimes:jpeg,jpg,png',
            'desc' => 'required|string',
            'char' => 'required',
        ]);

        $products = Product::find($id);

        if (!$request->image) {
            $request->validate([
                'name' => 'required|string',
                'desc' => 'required|string',
                'char' => 'required',
            ]);

            Product::where('id', $request->id)
                ->update(([
                    'name'         => $request->name,
                    'desc'   => $request->desc,
                    'char'   => $request->char,
                    'type_id'   => $request->type_id,

                ]));

            return redirect()->route('admin.product')->with('success', 'Product updated');
        }

        $products = Product::find($id);

        if (public_path('image/' . $products->image))
            unlink(public_path('image/' . $products->image));

        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image'), $image);

        Product::where('id', $request->id)
                ->update(([
                    'name'   => $request->name,
                    'image'  => $image,
                    'desc'   => $request->desc,
                    'char'   => $request->char,
                    'type_id'   => $request->type_id,

                ]));

        return redirect()
            ->route('admin.product')
            ->with('success', 'Product updated');

    }

    public function destroy($id) {
        Product::find($id)->delete();

        return redirect()->route('admin.product')->with('success', 'Product deleted');
    }
}
