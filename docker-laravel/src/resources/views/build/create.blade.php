<!-- @extends('layouts.default') -->
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h1>建築作成ページ</h1>

{{ Form::open(['route' => 'build.store', 'files' => true ], array('class' => 'form')) }}

	<div class="form-group">
		<label for="title" class="">建築者ID</label>
		<div class="">
			{{ Form::text('builder_id', null, array('class' => '')) }}
			{{ $errors->first('builder_id') }}
		</div>
	</div>

	<div class="form-group">
		<label for="photo1" class="">建物写真1</label>
		<div class="">
		{{ Form::text('photo1', null, array('class' => '')) }}
		{{ $errors->first('photo1') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">建物写真2</label>
		<div class="">
			{{ Form::text('photo2', null, array('class' => '')) }}
			{{ $errors->first('photo2') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">建物写真3</label>
		<div class="">
			{{ Form::text('photo3', null, array('class' => '')) }}
			{{ $errors->first('photo3') }}
		</div>
	</div>


	<div class="form-group">
		<label for="title" class="">事務所</label>
		<div class="">
			{{ Form::text('office', null, array('class' => '')) }}
			{{ $errors->first('office') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">場所</label>
		<div class="">
			{{ Form::text('place', null, array('class' => '')) }}
			{{ $errors->first('place') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">竣工日</label>
		<div class="">
			{{ Form::text('completionDate', null, array('class' => '')) }}
			{{ $errors->first('completionDate') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">延べ床面積</label>
		<div class="">
			{{ Form::text('floorarea', null, array('class' => '')) }}
			{{ $errors->first('floorarea') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">金額</label>
		<div class="">
			{{ Form::text('money', null, array('class' => '')) }}
			{{ $errors->first('money') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">敷地面積</label>
		<div class="">
			{{ Form::text('siteArea', null, array('class' => '')) }}
			{{ $errors->first('siteArea') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">建物面積</label>
		<div class="">
			{{ Form::text('buildingArea', null, array('class' => '')) }}
			{{ $errors->first('buildingArea') }}
		</div>
	</div>

	<div class="form-group">
		<label for="title" class="">建物構造</label>
		<div class="">
			{{ Form::text('buildingStructure', null, array('class' => '')) }}
			{{ $errors->first('buildingStructure') }}
		</div>
	</div>

		<div class="form-group">
		<label for="title" class="">タイプ</label>
		<div class="">
			{{ Form::text('type', null, array('class' => '')) }}
			{{ $errors->first('type') }}
		</div>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">投稿する</button>
	</div>

{{ Form::close() }}


<ul class="navbar-nav mr-auto">
	<p>{{ link_to("/build", '建築物一覧', array('class' => 'btn btn-primary')) }}</p>
    <hr />
</ul>

</div>


@stop