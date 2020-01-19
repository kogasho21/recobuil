@extends('layouts.app')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<div class="mb-4">
	<p>{{ link_to("/build/create", '建築物を新規作成する', array('class' => 'btn btn-primary')) }}</p>
    <hr />
</div>

@isset($builds)
@foreach($builds as $build)

	<h2>建築物ID：{{ $build->build_id }}
	</h2>
	<p>事務所名：{{ $build->office}}</p>
	<p>場所：{{$build->place}}</p>
	<p>竣工日：{{$build->completionDate}}</p>
	<p>{{ link_to("/build/{$build->build_id}/show", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
	<hr />

@endforeach
@endisset


</div>

@stop