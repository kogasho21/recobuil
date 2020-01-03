<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildController extends Controller
{
	public function index()
	{
		$builds = \DB::table('builds') ->select('builds.id as build_id', 'builds.photo as photo','builders.created_at','builders.name as builder_name' ) -> leftjoin('builders', 'builders.id', '=', 'builds.builder_id') -> orderBy('builds.id', 'desc') -> get();
		return view('build.index')->with('buoilds',$builds);
	}

	    /**
     * 進捗情報　新規登録画面表示
     *
     * @param Request $request
     * @return void
     */
    public function create()
    {
        $now = Carbon::now()->format('Y-m-d');


        $data = $this->getViewInfo();
        $data['now'] = $now;
        $data['creation_companies'] = $creation_companies;
        $data['creation_recruits'] = $creation_recruits;
        $data['recruits'] = $recruits;
        $data['humanResources'] = $humanResources;
        $data['companies'] = $companies;
        $data['progressStatus'] = config('progress.progress_status');
        return view('falcon.crm.service.progress.create', $data);
    }

    /**
     * 進捗追加
     * @param StoreProgressRequest $request
     * @return mixed
     */
    public function store(StoreProgressRequest $request)//requestの種類については保留。
    {
        $inputs = $request->all();

        $this->progress->create($inputs);

        return redirect('/crm/progress')
            ->with('flash_success', '進捗情報を登録しました');
    }

}
