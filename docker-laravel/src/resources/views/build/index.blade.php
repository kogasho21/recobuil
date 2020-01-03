@extends('layouts.app')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<div class="mb-4">
    <a href="{{ route('bbc.create') }}" class="btn btn-primary">
        投稿を新規作成する
    </a>
    <hr />
</div>

@isset($builds)
@foreach($builds as $build)


@endforeach
@endisset


</div>

@stop