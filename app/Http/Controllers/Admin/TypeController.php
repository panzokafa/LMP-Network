<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Types;
use App\Models\Message;

class TypeController extends Controller
{
    public function index()
    {
        $types = Types::all();
        $conversations = Message::whereNull('read_at')->count();

        return view('admin.types.types', ['types' => $types,'conversations' => $conversations]);
    }

    public function create()
    {
        return view('admin.types.type-create');
    }

    public function edit($id)
    {
        $types = Types::find($id);

        return view('admin.types.type-edit', ['types' => $types]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        $request->validate([
            'name' => 'required|string',
        ]);

        Types::create($data);

        return redirect()->route('admin.type')->with('success', 'types created');

    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');


        $request->validate([
            'name' => 'required|string',
        ]);

        $types = Types::find($id);

        $types->update($data);

        return redirect()->route('admin.type')->with('success', 'types updated');

    }

    public function destroy($id) {
        Types::find($id)->delete();

        return redirect()->route('admin.type')->with('success', 'types deleted');
    }
}
