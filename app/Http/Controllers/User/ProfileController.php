<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.profile' , ['users' => $users]);
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('user.p-edit', ['users' => $users]);
    }

    public function update(Request $request, $id)
    {
        if ($request -> password) {
            User::where('id', $request -> id)
                ->update(([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'company' => $request->company,
                    'division' => $request->division,
                    'phone_number' => $request->phone_number,
                    'linkedin' => $request->linkedin
                ]));
        } else {
            User::where('id', $request->id)
                ->update(([
                    'name' => $request->name,
                    'email' => $request->email,
                    'company' => $request->company,
                    'division' => $request->division,
                    'phone_number' => $request->phone_number,
                    'linkedin' => $request->linkedin
                ]));
        }
        return redirect()->route('user.profile')
        ->with('success', "Siswa <strong>{$request->name}</strong> updated successfully");

    }
}
