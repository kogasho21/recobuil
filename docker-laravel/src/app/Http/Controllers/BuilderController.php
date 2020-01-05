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

    public function show(Request $request,$id)
    {
		$builder  = \DB::table('builders') ->select('builders.id as builder_id', 'builders.name as name','builders.birthday','builders.unisex','builders.mail_address as mail_address','builders.tell_no as tell_no' ) ->  where('builders.id', $id) ->get() ->first();

		$data = array('builder'=>$builder);

		return view('builder.show')->with($data);
    }

	public function store(Request $request)
	{
	    $params = $request->validate([
	        'builder_id' => 'required',
	        'photo1' => 'required',
	        'photo2' => 'required',
	        'photo3' => 'required',
	        'office' => 'required|max:30',
	        'place' => 'required|max:50',
	        'completionDate' => 'required|max:20',
	        'floorarea' => 'required|max:10',
	        'money' => 'required|max:20',
	        'siteArea' => 'required|max:20',
	        'buildingArea' => 'required|max:20',
	        'buildingStructure' => 'required|max:20',
	        'type' => 'required|max:20',
	    ]);

	    \DB::table('builders')->insert($params);

	    return redirect('/builder');
	}

	public function create()
	{
	    return view('builder.create');
	}
}
