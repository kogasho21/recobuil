<!-- @extends('layouts.default') -->
@section('content')
<?php phpinfo() ?>

<div class="col-xs-8 col-xs-offset-2">

<h1>建築者作成ページ</h1>

{{ Form::open(['route' => 'builder.store', 'files' => true ], array('class' => 'form')) }}

	<div class="form-group">
		<label for="title" class="">建築者名</label>
		<div class="">
			{{ Form::text('name', null, array('class' => '')) }}
			{{ $errors->first('name') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">事業所名</label>
		<div class="">
			{{ Form::text('office', null, array('class' => '')) }}
			{{ $errors->first('office') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">住所</label>
		<div class="">
			{{ Form::text('address', null, array('class' => '')) }}
			{{ $errors->first('address') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">メールアドレス</label>
		<div class="">
			{{ Form::text('mail_address', null, array('class' => '')) }}
			{{ $errors->first('mail_address') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">電話番号</label>
		<div class="">
			{{ Form::text('tell_no', null, array('class' => '')) }}
			{{ $errors->first('tell_no') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">誕生日</label>
		<div class="">
			{{ Form::text('birthday', null, array('class' => '')) }}
			{{ $errors->first('birthday') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">性別</label>
		<div class="">
			{{ Form::text('unisex', null, array('class' => '')) }}
			{{ $errors->first('unisex') }}
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="">誕生日</label>
		<div class="">
			{{ Form::text('birthday', null, array('class' => '')) }}
			{{ $errors->first('birthday') }}
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="">ホームページ</label>
		<div class="">
			{{ Form::text('homepage', null, array('class' => '')) }}
			{{ $errors->first('homepage') }}
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="">経歴</label>
		<div class="">
			{{ Form::text('career', null, array('class' => '')) }}
			{{ $errors->first('career') }}
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="">画像1</label>
		<div class="">
			{{ Form::file('photo1', null, array('class' => '')) }}
			{{ $errors->first('photo1') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">画像2</label>
		<div class="">
			{{ Form::file('photo2', null, array('class' => '')) }}
			{{ $errors->first('photo2') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">画像3</label>
		<div class="">
			{{ Form::file('photo3', null, array('class' => '')) }}
			{{ $errors->first('photo3') }}
		</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">投稿する</button>
	</div>

{{ Form::close() }}


<ul class="navbar-nav mr-auto">
	<p>{{ link_to("/builder", '建築者一覧', array('class' => 'btn btn-primary')) }}</p>
    <hr />
</ul>

</div>


@stop