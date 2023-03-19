<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
    public function index()
    {
        $levels = Level::all();
        return view('levels.index', compact('levels'));
    }

    public function create()
    {
        return view('levels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:levels,name',
            'time_limit' => 'required|integer|min:1',
        ]);

        $user = Level::create([
            'name' => $request->name,
            'time_limit' => $request->time_limit
        ]);

        return redirect()->route('admin.levels')->with('success', 'Level has been added');
    }

    public function show($id)
    {
        $level = Level::find($id);
        return view('levels.show', compact('level'));
    }

    public function edit($id)
    {
        $level = Level::find($id);
        return view('levels.edit', compact('level'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:levels,name',
            'time_limit' => 'required|integer|min:1',
        ]);

        $level = Level::find($id);
        $level->name = $request->get('name');
        $level->time_limit = $request->get('time_limit');
        $level->save();

        return redirect()->route('admin.levels')->with('success', 'Level has been updated');
    }

    public function destroy($id)
    {
        $level = Level::find($id);
        $level->delete();

        return redirect()->route('admin.levels')->with('success', 'Level has been deleted');
    }
}
