<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index(Request $request) {
    	$userId = Auth::id();
    	$user = Auth::user();   #ログインユーザー情報を取得します。
    	$namelist = array();
    	$matchList = array();

    	$likeclothes = \DB::table('likeclothes') ->select('likeclothes.like', 'likeclothes.builder_id','builders.name' ) -> leftjoin('builders', 'likeclothes.builder_id', '=', 'builders.id') -> orderBy('builders.name', 'desc') -> get();

    	foreach ($likeclothes as $likeclothe) {
		    array_push($namelist,$likeclothe->name);
		}

    	$likebooks = \DB::table('likebooks') ->select('likebooks.like', 'likebooks.builder_id','builders.name' ) -> leftjoin('builders', 'likebooks.builder_id', '=', 'builders.id') -> orderBy('builders.name', 'desc') -> get();

    	foreach ($likebooks as $likebook) {
		    array_push($namelist,$llikebook->name);
		}

    	$likemoves = \DB::table('likemoves') ->select('likemoves.like', 'likemoves.builder_id','builders.name' ) -> leftjoin('builders', 'likemoves.builder_id', '=', 'builders.id') -> orderBy('builders.name', 'desc') -> get();
    	
    	foreach ($likemoves as $likemove) {
		    array_push($namelist,$llikemove->name);
		}

    	$likemusics= \DB::table('likemusics') ->select('likemusics.like', 'likemusics.builder_id','builders.name' ) -> leftjoin('builders', 'likemusics.builder_id', '=', 'builders.id') -> orderBy('builders.name', 'desc') -> get();

    	foreach ($likemusics as $likemusic) {
		    array_push($namelist,$likemusic->name);
		}

		$name_count = array_count_values($namelist);

		foreach ($name_count as $key => $value){
			if($value >= 2 ){
				array_push($matchList,$key);
			}
		}
        
        return view('mypage.index', ['matchList' => $matchList,'user' => $user]);
    }
}
