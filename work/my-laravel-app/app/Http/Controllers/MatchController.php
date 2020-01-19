<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function create()
    {
        return view('match.create');
    }

    public function store(Request $request)
    {
    	$userId = Auth::id();
    	$clothes = $request->input('clothes');
    	$book = $request->input('book');
    	$move = $request->input('move');
    	$music = $request->input('music');


        return redirect('/home');
    }
}
