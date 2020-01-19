@extends('layouts.app')
@section('content')

@foreach ($akiya as $aki)
<div>
    <p>{{$aki}}</p>
</div>

@endforeach
@stop