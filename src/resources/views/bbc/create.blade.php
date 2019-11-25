@extends('layouts.default')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h1>投稿ページ</h1>

{{-- 投稿完了時にフラッシュメッセージを表示 --}}
@if(Session::has('message'))
	<div class="bg-info">
		<p>{{ Session::get('message') }}</p>
	</div>
@endif

{{-- エラーメッセージの表示 --}}
@foreach($errors->all() as $message)
	<p class="bg-danger">{{ $message }}</p>
@endforeach

{{ Form::open(['route' => 'bbc.store', 'files' => true ], array('class' => 'form')) }}

	<div class="form-group">
		<label for="title" class="">タイトル</label>
		<div class="">
			{{ Form::text('title', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<label for="cat_id" class="">カテゴリー</label>
		<div class="">
			<select name="cat_id" type="text" class="">
				<option></option>
				<option value="1" name="1">食事</option>
				<option value="2" name="2">買い物</option>
				<option value="3" name="3">恋愛</option>
				<option value="4" name="4">雑談</option>
				<option value="5" name="5">エンタメ</option>
				<option value="6" name="6">その他</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="image" class="">添付ファイル</label>
		<div class="">
		{{ Form::file('image', null) }}
		</div>
	</div>

	<div class="form-group">
		<label for="content" class="">本文</label>
		<div class="">
			{{ Form::textarea('content', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">投稿する</button>
	</div>

{{ Form::close() }}

</div>

<ul class="navbar-nav mr-auto">
    <a href="{{ route('bbc.index') }}" class="btn btn-primary">掲示板一覧へ戻る
    </a>
</ul>

@stop