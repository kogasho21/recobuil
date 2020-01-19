@extends('layouts.default')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h2>建築者氏名： {{$builder -> name}}
</h2>
<h3>生年月日{{$builder -> birthday}}</h3>

<h3>性別{{$builder -> unisex}}</h3>

<h3>メールアドレス{{$builder -> mail_address}}</h3>

<h3>電話番号{{$builder -> tell_no}}</h3>

<ul class="navbar-nav mr-auto">
    <p>{{ link_to("/builder", '建築者一覧へ戻る', array('class' => 'btn btn-primary')) }}</p>
    <hr />
</ul>


@stop