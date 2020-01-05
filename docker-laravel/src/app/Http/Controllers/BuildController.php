<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildController extends Controller
{
	public function index()
	{
		$builds = \DB::table('builds') ->select('builds.id as build_id', 'builds.photo1 as photo1','builds.photo2 as photo2','builds.photo3 as photo3','builds.office as office','builds.place as place','builds.completionDate as completionDate','builds.floorarea as floorarea','builds.money as money', 'builds.siteArea as siteArea','builds.buildingArea as buildingArea','builds.buildingStructure as buildingStructure', 'builds.type as type') -> leftjoin('builders', 'builders.id', '=', 'builds.builder_id') -> orderBy('builds.id', 'desc') -> get();
		return view('build.index')->with('builds',$builds);
	}

	    /**
     * 進捗情報　新規登録画面表示
     *
     * @param Request $request
     * @return void
     */
    public function create()
    {
        return view('build.create');
    }

    public function store(Request $request)
    {

        $params = $request->validate([
            'builder_id' => 'required',
            'photo1' => 'nullable',
            'photo2' => 'nullable',
            'photo3' => 'nullable',
            'office' => 'required',
            'place' => 'required',
            'completionDate' => 'required',
            'floorarea' => 'required',
            'money' => 'required',
            'siteArea' => 'required',
            'buildingArea' => 'required',
            'buildingStructure' => 'required',
            'type' => 'required',
        ]);

        // dd($request);

        \DB::table('builds')->insert($params);

        return redirect('/build');
    }

}
