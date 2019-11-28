@extends('layouts.app')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<div class="mb-4">
    <a href="{{ route('bbc.create') }}" class="btn btn-primary">
        投稿を新規作成する
    </a>
    <hr />
</div>

@foreach($posts as $post)

	<h2>タイトル：{{ $post->title }}
		<small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>
	</h2>
	<p>カテゴリー：{{ $post->cat_name }}</p>
	<p>{{ $post->content }}</p>
	<p>{{ link_to("/bbc/{$post->post_id}", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
	<p>コメント数：{{ $post->comment_count }}</p>
	<hr />
@endforeach


</div>

@stop