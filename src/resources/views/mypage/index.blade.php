@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ユーザー情報</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="navbar-nav mr-auto">
                        <p>名前：{{$user->name}}</p>
                    </ul>
                    <br>
                    <ul class="navbar-nav mr-auto">
                        <p>メールアドレス：{{$user->email}}</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


