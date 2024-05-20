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

    public function create(Request $request)
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
            'brosur' => 'mimes:jpeg,jpg,png,pdf,doc,docx,xls,xlxs,ppt,pptx',
        ]);

        $keychar = [];
        foreach ($request->kchar as $char) {
            $keychar[] = $char;
        }

        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image'), $image);

        if (!$request->brosur) {
            $request->validate([
                'name' => 'required|string',
                'desc' => 'required|string',
            ]);

            Product::create([
                'name' => $request->name,
                'desc' => $request->desc,
                'char' => json_encode($keychar),
                'type_id' => $request->type_id,
                'image' => $image,
                'brosur' => '',
            ]);

            return redirect()->route('admin.product')->with('success', 'Product Created');
        }

        $brosur = basename('LMP_Brochure') . '.' . $request->brosur->extension();
        $request->brosur->move(public_path('brosur'), $brosur);

        Product::create([
            'name' => $request->name,
            'image' => $image,
            'desc' => $request->desc,
            'brosur' => $brosur,
            'char' => json_encode($keychar),
            'type_id' => $request->type_id,
        ]);

        return redirect()->route('admin.product')->with('success', 'Product created');
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');

        $request->validate([
            'name' => 'required|string',
            'image' => 'image|mimes:jpeg,jpg,png',
            'desc' => 'required|string',
            'brosur' => 'mimes:jpeg,jpg,png,pdf,doc,docx,xls,xlxs,ppt,pptx',

        ]);
        $keychar = [];
        foreach ($request->kchar as $char) {
            $keychar[] = $char;
        }


        $products = Product::find($id);


        if ($request->image) {
            if (public_path('image/' . $products->image))

        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image'), $image);

        Product::where('id', $request->id)
                ->update(([
                    'name'   => $request->name,
                    'image'  => $image,
                    'desc'   => $request->desc,
                    'char' => json_encode($keychar),
                    'type_id'   => $request->type_id,

                ]));
        return redirect()->route('admin.product')->with('success', 'Product updated');

        }

        if ($request->brosur) {
            if (public_path('brosur/' . $products->brosur))


        $brosur = basename('LMP_Brochure') . '.' . $request->brosur->extension();
        $request->brosur->move(public_path('brosur'), $brosur);

        Product::where('id', $request->id)
                ->update(([
                    'name'   => $request->name,
                    'desc'   => $request->desc,
                    'brosur' => $brosur,
                    'char' => json_encode($keychar),
                    'type_id'   => $request->type_id,

                ]));
        return redirect()->route('admin.product')->with('success', 'Product updated');

        }

        Product::where('id', $request->id)
        ->update(([
            'name'   => $request->name,
            'desc'   => $request->desc,
            'char' => json_encode($keychar),
            'type_id'   => $request->type_id,

        ]));
        $products->update($data);

        return redirect()->route('admin.product')->with('success', 'Product updated');
    }

    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->route('admin.product')->with('success', 'Product deleted');
    }
}
