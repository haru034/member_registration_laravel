@extends('layouts.app') <!--元からあるよくわからない画面のViewファイル-->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div> <!--ダッシュボード-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} <!--ログインに成功しました！-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
