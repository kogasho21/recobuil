@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">menu</div>

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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
