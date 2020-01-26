<!-- @extends('layouts.default') -->
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h1>好きなもの登録ページ</h1>

{{ Form::open(['action' => 'MatchController@store'], array('class' => 'form')) }}

	<div class="form-group">
		<label for="clothes" class="">服</label>
		<div class="">
			{{Form::label('clothes', 'ガーリー')}}
			{{Form::radio('clothes', 'ガーリー')}}

			{{Form::label('clothes', 'ロック')}}
			{{Form::radio('clothes', 'ロック')}}
	
			{{Form::label('clothes', 'フェミニン')}}
			{{Form::radio('clothes', 'フェミニン')}}
	
			{{Form::label('clothes', 'コンサバ')}}
			{{Form::radio('clothes', 'コンサバ')}}

			{{Form::label('clothes', 'エレガント')}}
			{{Form::radio('clothes', 'エレガント')}}

			{{Form::label('clothes', 'マニッシュ')}}
			{{Form::radio('clothes', 'マニッシュ')}}

			{{Form::label('clothes', 'モダン')}}
			{{Form::radio('clothes', 'モダン')}}
			
			{{Form::label('clothes', 'ナチュラル')}}
			{{Form::radio('clothes', 'ナチュラル')}}
			
			{{Form::label('clothes', 'スポーティ')}}
			{{Form::radio('clothes', 'スポーティ')}}
			{{ $errors->first('clothes') }}
		</div>
	</div>

	<div class="form-group">
		<label for="clothes" class="">本</label>
		<div class="">
			{{Form::label('book', 'ミステリー・サスペンス')}}
			{{Form::radio('book', 'ミステリー・サスペンス')}}

			{{Form::label('book', 'SF')}}
			{{Form::radio('book', 'SF')}}

			{{Form::label('book', '歴史')}}
			{{Form::radio('book', '歴史')}}

			{{Form::label('book', 'ノンフィクション')}}
			{{Form::radio('book', 'ノンフィクション')}}
			
			{{Form::label('book', 'ファンタジー')}}
			{{Form::radio('book', 'ファンタジー')}}

			{{Form::label('book', '趣味・実用')}}
			{{Form::radio('book', '趣味・実用')}}
	
			{{Form::label('book', 'エッセイ')}}
			{{Form::radio('book', 'エッセイ')}}

			{{Form::label('book', '人文・思想')}}
			{{Form::radio('book', '人文・思想')}}
		
			{{Form::label('book', 'アート・建築')}}
			{{Form::radio('book', 'アート・建築')}}
			{{ $errors->first('book') }}
		</div>
	</div>

	<div class="form-group">
		<label for="clothes" class="">映画</label>
		<div class="">
			{{Form::label('move', 'SF')}}
			{{Form::radio('move', 'SF')}}
			{{Form::label('move', 'アクション')}}
			{{Form::radio('move', 'アクション')}}
			{{Form::label('move', 'コメディ')}}
			{{Form::radio('move', 'コメディ')}}
			{{Form::label('move', 'サスペンス')}}
			{{Form::radio('move', 'サスペンス')}}
			{{Form::label('move', 'スリラー')}}
			{{Form::radio('move', 'スリラー')}}
			{{Form::label('move', '恋愛')}}
			{{Form::radio('move', '恋愛')}}
			{{Form::label('move', 'ドキュメンタリー')}}
			{{Form::radio('move', 'ドキュメンタリー')}}
			{{Form::label('move', '時代劇')}}
			{{Form::radio('move', '時代劇')}}
			{{Form::label('move', 'ミュージカル')}}
			{{Form::radio('move', 'ミュージカル')}}
			{{ $errors->first('move') }}
		</div>
	</div>

	<div class="form-group">
		<label for="clothes" class="">音楽</label>
		<div class="">
			{{Form::label('music', 'メタル')}}
			{{Form::radio('music', 'メタル')}}
			{{Form::label('music', 'ロック')}}
			{{Form::radio('music', 'ロック')}}
			{{Form::label('music', 'フォークソング')}}
			{{Form::radio('music', 'フォークソング')}}
			{{Form::label('music', 'レゲエ')}}
			{{Form::radio('music', 'レゲエ')}}
			{{Form::label('music', 'テクノポップ')}}
			{{Form::radio('music', 'テクノポップ')}}
			{{Form::label('music', 'ハードコア')}}
			{{Form::radio('music', 'ハードコア')}}
			{{Form::label('music', 'オルタナ')}}
			{{Form::radio('music', 'オルタナ')}}
			{{Form::label('music', 'ジャズ')}}
			{{Form::radio('music', 'ジャズ')}}
			{{Form::label('music', '演歌')}}
			{{Form::radio('music', '演歌')}}
			{{ $errors->first('music') }}
		</div>
	</div>


	<div class="form-group">
		<button type="submit" class="btn btn-primary">投稿する</button>
	</div>

{{ Form::close() }}


</div>


@stop