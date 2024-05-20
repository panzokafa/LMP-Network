<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.users', ['users' => $users]);
    }

    public function destroy($id) {
        User::find($id)->delete();

        return redirect()->route('admin.user')->with('success', 'User deleted');
    }

    public function edit($id)
    {
        $Id = Auth::user()->id;
        $users = User::find($id);
        return view('admin.user.user-edit', ['users' => $users]);
    }

    public function update(Request $request, $id)
    {
        $Id = Auth::user()->id;

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'company' => 'required|string',
            'division' => 'required|string',
            'phone_number' => 'required|string',
            'linkedin' => 'required|string',
            'instagram' => 'required|string',
            'profile_picture' => 'image|mimes:jpeg,jpg,png',
        ]);

        if (!$request->profile_picture) {
            // jika tidak masukin gambar

            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'company' => 'required|string',
                'division' => 'required|string',
                'phone_number' => 'required|string',
                'linkedin' => 'required|string',
                'instagram' => 'required|string',
            ]);

            User::where('id', $Id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'company' => $request->company,
                'division' => $request->division,
                'phone_number' => $request->phone_number,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
            ]);

            return redirect()
                ->route('admin.user')
                ->with('success', 'Profile updated successfully');
        }

        $users = User::find($id);

        $profile_picture = time() . '.' . $request->profile_picture->extension();
        $request->profile_picture->move(public_path('image'), $profile_picture);


        // if (public_path('image/' . $users->profile_picture))
        //     unlink(public_path('image/' . $users->profile_picture));


        User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company,
            'division' => $request->division,
            'phone_number' => $request->phone_number,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'profile_picture' => $profile_picture,
        ]);

        return redirect()
            ->route('admin.user')
            ->with('success', 'Profile updated successfully');
    }

}
