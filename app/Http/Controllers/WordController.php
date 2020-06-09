<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class WordController extends Controller
{
    public function index()
    {
        $words = Word::all();
        return view('index', compact('words'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $word = new Word;
        $word->store($request);
        return redirect(route('index'));
    }

    public function destroy($id)
    {
        $word = Word::find($id);
	$word->delete();
	return redirect(route('index'));
    }
}
