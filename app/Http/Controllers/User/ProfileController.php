<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\FilesystemAdapter;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.profile', ['users' => $users]);
    }

    public function edit($id)
    {
        $Id = Auth::user()->id;
        $users = User::find($id);
        return view('user.p-edit', ['users' => $users]);
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
                ->route('user.profile')
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
            ->route('user.profile')
            ->with('success', 'Profile updated successfully');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('user.login');
    }

    
}

// //kalo gada gambarnya dia update (gda password gda gambar)
// if (!$request->profile_picture) {
//     // $request->validate([
//     //     'title' => 'required|string',
//     //     'desc' => 'required|string',
//     //     'price' => 'required|string',
//     // ]);

//     User::where('id', $request->id)->update([
//         'name' => $request->name,
//         'email' => $request->email,
//         'company' => $request->company,
//         'division' => $request->division,
//         'phone_number' => $request->phone_number,
//         'linkedin' => $request->linkedin,
//         'instagram' => $request->instagram,
//     ]);

//     return redirect()
//         ->route('user.profile')
//         ->with('success', 'Profile updated');
// } else {
//     if (!$request->password) {
//         $users = User::find($id);

//         // if (public_path('image/' . $users->profile_picture)) {
//         //     unlink(public_path('image/' . $users->profile_picture));
//         // }

//         // $profile_picture = time() . '.' . $request->profile_picture->extension();
//         // $request->profile_picture->move(public_path('image'), $profile_picture);

//     if ($request->profile_picture) {
//         $users = User::find($id);

//     # save new image
//     $profile_picture = $request->profile_picture;
//     $originalProfile_PictureName = Str::random(10).$profile_picture->getClientOriginalName();
//     $profile_picture->storeAs('public/profil', $originalProfile_PictureName);
//     $data['profile_picture'] = $originalProfile_PictureName;

//     # delete old image
//     Storage::delete('public/profil/'.$users->profile_picture);
// };

//         User::where('id', $request->id)->update([
//             'name' => $request->name,
//             'email' => $request->email,
//             'company' => $request->company,
//             'division' => $request->division,
//             'phone_number' => $request->phone_number,
//             'linkedin' => $request->linkedin,
//             'instagram' => $request->instagram,
//             'profile_picture' => $profile_picture,
//         ]);
//         return redirect()
//             ->route('user.profile')
//             ->with('success', 'Profile updated');
//     }

//     $users = User::find($id);
//     // if (public_path('image/' . $users->profile_picture)) {
//     //     unlink(public_path('image/' . $users->profile_picture));
//     // }

//     // $profile_picture = time() . '.' . $request->profile_picture->extension();
//     // $request->profile_picture->move(public_path('image'), $profile_picture);

//     if ($request->profile_picture) {
//         # save new image
//         $profile_picture = $request->profile_picture;
//         $originalProfile_PictureName = Str::random(10).$profile_picture->getClientOriginalName();
//         $profile_picture->storeAs('public/profil', $originalProfile_PictureName);
//         $data['profile_picture'] = $originalProfile_PictureName;

//         # delete old image
//         Storage::delete('public/profil/'.$users->profile_picture);
//     };

//     User::where('id', $request->id)->update([
//         'name' => $request->name,
//         'email' => $request->email,
//         'password' => Hash::make($request->password),
//         'company' => $request->company,
//         'division' => $request->division,
//         'phone_number' => $request->phone_number,
//         'linkedin' => $request->linkedin,
//         'instagram' => $request->instagram,
//         'profile_picture' => $profile_picture,
//     ]);

//     $users->update($data);

// jika tidak masukin password
