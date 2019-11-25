@extends('layouts.default')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h2>タイトル： {{$post -> title}}
	<small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>
</h2>

<img class="image" src="{{ asset($post -> image) }}" alt="image">

<h5>カテゴリー：{{ $post->cat_name }}</h5>
<h5>{{ $post->content }}</h5>

<hr />

<h3>コメント一覧</h3>
@foreach($comments as $comment)
	<h4>名前：{{ $comment->commenter }}</h4>
	<p>コメント：{{ $comment->comment }}</p><br />
@endforeach

<h3>コメントを投稿する</h3>
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

<form class="mb-4" method="POST" action="{{ route('comments.store') }}">
    {{ csrf_field() }}

    {{ Form::hidden('post_id', $post->post_id

    ) }}


    <div>
        <label>名前</label><br>
        <input type="text" name="commenter" />
    </div>
    <div>
        <label>コメント</label><br>
        <textarea name="comment"></textarea>
    </div>


    <div class="mt-4">
        <button type="submit" class="btn btn-primary">
            コメントする
        </button>
    </div>
</form>

</div>

<ul class="navbar-nav mr-auto">
    <a href="{{ route('bbc.index') }}" class="btn btn-primary">掲示板一覧へ戻る
    </a>
</ul>


@stop