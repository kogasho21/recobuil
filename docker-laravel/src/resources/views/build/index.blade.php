@extends('layouts.app')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<div class="mb-4">
	<p>{{ link_to("/build/create", '建築物を新規作成する', array('class' => 'btn btn-primary')) }}</p>
    <hr />
</div>

@foreach($builds as $build)

	<h2>建築者ID：{{ $builr->builder_id }}
	</h2>
	<p>誕生日：{{ $builr->birthdays}}</p>
	<p>性別：{{$builder->builder_unisex}}</p>
	<p>メールアドレス：{{$builder->builder_mail_address}}</p>
	<p>電話番号：{{$builder->builder_tell_no}}</p>
	<p>{{ link_to("/build/{$builder->builder_id}/show", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
	<hr />

@endforeach


</div>

@stop