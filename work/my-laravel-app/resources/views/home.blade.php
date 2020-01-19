@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="navbar-nav mr-auto">
                        <a href="{{ route('bbc.index') }}" class="btn btn-primary">掲示板へ移動
                        </a>
                    </ul>
                    <br>
                    <ul class="navbar-nav mr-auto">
                        <a href="{{ route('mypage.index') }}" class="btn btn-primary">マイページへ移動
                        </a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <p>{{ link_to("/match/create", '好きなもの登録をする', array('class' => 'btn btn-primary')) }}</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
