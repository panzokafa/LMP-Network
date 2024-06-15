<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;


class PageController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('user.home',['banners' => $banners]);
    }

    public function about()
    {
        return view('user.about');
    }
}
