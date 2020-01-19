@extends('layouts.app')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<div class="mb-4">
@foreach ($akiyas as $akiya)
<br>
@foreach ($akiya as $aki)
@if ($loop->first)

<p>{{ link_to("/akiya/{$aki}/show", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
@endif
<div>
	<p>{{$aki}}</p>
</div>

@endforeach
@endforeach]
</div>


</div>

@stop