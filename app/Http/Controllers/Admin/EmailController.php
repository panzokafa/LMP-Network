<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Email;
use App\Models\Message;

class EmailController extends Controller
{
    public function create()
    {
        $email = Email::first();
        $conversations = Message::whereNull('read_at')->count();
        return view('admin.email_admin.emails', compact('email','conversations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:emails,email',
        ]);

        Email::create($request->only('email'));

        return redirect()->back()->with('success', 'Email berhasil disimpan');
    }

    public function update(Request $request, Email $email)
    {
        $request->validate([
            'email' => 'required|email|unique:emails,email,' . $email->id,
        ]);

        $email->update($request->only('email'));

        return redirect()->back()->with('success', 'Email berhasil diupdate');
    }
}
