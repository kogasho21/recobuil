@extends('layouts.app')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<div class="mb-4">
	<p>{{ link_to("/builder/create", '建築者を新規作成する', array('class' => 'btn btn-primary')) }}</p>
    <hr />
</div>

@isset($builders)
@foreach($builders as $builder)

	<h2>名前：{{ $builder->name }}
	</h2>
	<p>誕生日：{{ $builder->birthday}}</p>
	<p>性別：{{$builder->builder_unisex}}</p>
	<p>メールアドレス：{{$builder->builder_mail_address}}</p>
	<p>電話番号：{{$builder->builder_tell_no}}</p>
	<p>{{ link_to("/builder/{$builder->builder_id}/show", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
	<hr />

@endforeach
@endisset


</div>

@stop