<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;


class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();


        return view('admin.banner.banners', ['banners' => $banners]);
    }

    public function create()
    {
        return view('admin.banner.banner-create');
    }

    public function edit($id)
    {
        $banners = Banner::find($id);

        return view('admin.banner.banner-edit', ['banners' => $banners]);
    }

    public function store(Request $request)
    {


        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('banner'), $image);

        Banner::create([
            'image' => $image,

        ]);


        return redirect()->route('admin.banner')->with('success', 'banners created');

    }

    public function update(Request $request, $id)
    {



        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $banners = Banner::find($id);

        if ($request->image) {
            if (public_path('banner/' . $banners->image))

        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('banner'), $image);

        Banner::where('id', $request->id)
                ->update(([
                    'image'  => $image,
                ]));


        return redirect()->route('admin.banner')->with('success', 'banners updated');
        }
    }

    public function destroy($id) {
        Banner::find($id)->delete();

        return redirect()->route('admin.banner')->with('success', 'banners deleted');
    }
}
