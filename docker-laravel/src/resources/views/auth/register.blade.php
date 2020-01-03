@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('新規登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="unisex" class="col-md-4 col-form-label text-md-right">{{ __('性別') }}</label>

                            <div class="col-md-6">
                                <input id="unisex" type="unisex" class="form-control" name="unisex" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワードをもう一度') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <!--  !-->
                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('誕生日') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('birthday', date('Y-m-d'), ['id' => 'datepicker']) !!}   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="job" class="col-md-4 col-form-label text-md-right">{{ __('職業') }}</label>

                            <div class="col-md-6">
                                <input id="job" type="job" class="form-control{{ $errors->has('job') ? ' is-invalid' : '' }}" name="job" value="{{ old('job') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="introduction" class="col-md-4 col-form-label text-md-right">{{ __('自己紹介') }}</label>

                            <div class="col-md-6">
                                <input id="introduction" type="introduction" class="form-control{{ $errors->has('introduction') ? ' is-invalid' : '' }}" name="introduction" value="{{ old('introduction') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="acount" class="col-md-4 col-form-label text-md-right">{{ __('アカウント名') }}</label>

                            <div class="col-md-6">
                                <input id="acount" type="acount" class="form-control{{ $errors->has('acount') ? ' is-invalid' : '' }}" name="acount" value="{{ old('acount') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prefecture" class="col-md-4 col-form-label text-md-right">{{ __('居住県') }}</label>

                            <div class="col-md-6">
                                {{Form::select('prefecture', [
                                   '1' => '北海道',
                                   '2' => '青森県',
                                   '3' => '岩手県',
                                   '4' => '宮城県',
                                   '5' => '秋田県',
                                   '6' => '山形県',
                                   '7' => '福島県',
                                   '8' => '茨城県',
                                   '9' => '栃木県',
                                   '10' => '群馬県',
                                   '11' => '埼玉県',
                                   '12' => '千葉県',
                                   '13' => '東京県',
                                   '14' => '神奈川県',
                                   '15' => '新潟県',
                                   '16' => '富山県',
                                   '17' => '石川県',
                                   '18' => '福井県',
                                   '19' => '山梨県',
                                   '20' => '長野県',
                                   '21' => '岐阜県',
                                   '22' => '静岡県',
                                   '23' => '愛知県',
                                   '24' => '三重県',
                                   '25' => '滋賀県',
                                   '26' => '京都府',
                                   '27' => '大阪府',
                                   '28' => '兵庫県',
                                   '29' => '奈良県',
                                   '30' => '和歌山県',
                                   '31' => '鳥取県',
                                   '32' => '島根県',
                                   '33' => '岡山県',
                                   '34' => '広島県',
                                   '35' => '山口県',
                                   '36' => '徳島県',
                                   '37' => '香川県',
                                   '38' => '愛媛県',
                                   '39' => '高知県',
                                   '40' => '福岡県',
                                   '41' => '佐賀県',
                                   '42' => '長崎県',
                                   '43' => '熊本県',
                                   '44' => '大分県',
                                   '45' => '宮崎県',
                                   '46' => '鹿児島県',
                                   '47' => '沖縄県',
                                   '48' => '海外',
                                   '49' => 'その他(建築者の方)'
                                   ]
                                )}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hope_prefecture" class="col-md-4 col-form-label text-md-right">{{ __('希望移住') }}</label>

                            <div class="col-md-6">
                                {{Form::select('hope_prefecture', [
                                   '40' => '福岡県',
                                   '49' => 'その他(建築者の方)'
                                   ]
                                )}}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
