<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuilderController extends Controller
{
	public function index()
	{
		$builders = \DB::table('builders') ->select('builders.id as builder_id', 'builders.name as name','builders.birthday','builders.unisex as builder_unisex','builders.mail_address as builder_mail_address','builders.tell_no as builder_tell_no' ) -> orderBy('builders.id', 'desc') -> get();

		return view('builder.index')->with('builders',$builders);
	}

	public function store(Request $request)
	{
	    $params = $request->validate([
	        'name' => 'required|max:50',
	        'birthday' => 'required|max:200',
	        'unisex' => 'required',
	        'mail_address' => 'required|max:100',
	        'tell_no' => 'required|max:12',
	    ]);

	    \DB::table('builders')->insert($params);

	    return redirect('/builder');
	}

	public function create()
	{
	    return view('builder.create');
	}
}
