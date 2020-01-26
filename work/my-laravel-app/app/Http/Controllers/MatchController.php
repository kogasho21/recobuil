<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class MatchController extends Controller
{

    public function index()
    {
        $user = Auth::user();   #ログインユーザー情報を取得します。
        return view('mypage.index', ['user' => $user]);
    }

    public function create()
    {
        return view('match.create');
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'clothes' => 'required',
            'book' => 'required',
            'music' => 'required',
            'move' => 'required',
        ]);
    	$userId = Auth::id();
    	$clothes = $request->input('clothes');
    	$book = $request->input('book');
    	$move = $request->input('move');
    	$music = $request->input('music');

        \DB::table('likeclothes')->where('user_id' , $userId)->delete();

        \DB::table('likeclothes')->insert(
            ['user_id' => $userId, 'like' => $clothes]
        );

        \DB::table('likebooks')->where('user_id' ,$userId)->delete();

        \DB::table('likebooks')->insert(
            ['user_id' => $userId, 'like' => $book]
        );

        \DB::table('likemoves')->where('user_id' ,$userId)->delete();

        \DB::table('likemoves')->insert(
            ['user_id' => $userId, 'like' => $move]
        );

        \DB::table('likemusics')->where('user_id' , $userId)->delete();

        \DB::table('likemusics')->insert(
            ['user_id' => $userId, 'like' => $music]
        );


        return redirect('/home');
    }
}
