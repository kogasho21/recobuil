<!-- @extends('layouts.default') -->
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h1>建築者作成ページ</h1>

{{ Form::open(['route' => 'builder.store', 'files' => true ], array('class' => 'form')) }}

	<div class="form-group">
		<label for="title" class="">建築者名</label>
		<div class="">
			{{ Form::text('name', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">誕生日</label>
		<div class="">
			{{ Form::text('birthday', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">性別</label>
		<div class="">
			{{ Form::text('unisex', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">メールアドレス</label>
		<div class="">
			{{ Form::text('mail_address', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">電話番号</label>
		<div class="">
			{{ Form::text('tell_no', null, array('class' => '')) }}
		</div>
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