<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WordController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $words = Word::where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(10);
        return view('words.index', compact('user', 'words'));
    }

    public function create()
    {
        $user = Auth::user();
        $levels = Level::all();
        return view('words.create', compact('user', 'levels'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'word' => 'required',
            'level_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $word = new Word;
        $word->word = $request->word;
        $word->level_id = $request->level_id;
        $word->user_id = Auth::user()->id;
        $word->save();

        return redirect()->route('admin.words')->with('success', 'Word added successfully!');
    }

    public function edit(Word $word)
    {
        $levels = Level::all();
        return view('words.edit', compact('word', 'levels'));
    }

    public function update(Request $request, Word $word)
    {
        $validator = Validator::make($request->all(), [
            'word' => 'required',
            'level_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $word->word = $request->word;
        $word->level_id = $request->level_id;
        $word->save();

        return redirect()->route('admin.words')->with('success', 'Word updated successfully!');
    }

    public function destroy(Word $word)
    {
        $word->delete();
        return redirect()->route('admin.words')->with('success', 'Word deleted successfully!');
    }

}
