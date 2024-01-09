<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravolt\Avatar\Facade as Avatar;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'company' => 'required|string',
            'division' => 'required|string',
            'phonenumber' => 'required|string',
            'linkedin' => 'required|string',
            'instagram' => 'required|string',

        ]);

        $isEmailExist = User::where('email', $request->email)->exists();

        if ($isEmailExist) {
            return back()
                ->withErrors([
                    'email' => 'This email already exist'
                ])
                ->withInput();
        } elseif (strlen($request->password) < 8) {
            return back()
                ->withErrors([
                    'password' => 'Password must be above 8 characters'
                ])
                ->withInput();
        } else {
           $users = User::create([
                'name'         => $request->name,
                'email'         => $request->email,
                'password'   => Hash::make($request->password),
                'company'         => $request->company,
                'division'   => $request->division,
                'phone_number'   => $request->phonenumber,
                'linkedin'         => $request->linkedin,
                'instagram'         => $request->instagram,
                'role' => 'user'
            ]);

            Avatar::create($request->name)->save(public_path('image/avatar-' . $users->id . '.png'));
        }

        return redirect()->route('user.login')->with('success', 'Success Register');
    }
}
