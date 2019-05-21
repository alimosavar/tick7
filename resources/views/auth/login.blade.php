@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="panel panel-info wrapper-margin-top">
                <div class="panel-heading" id="panel-login-heading">ورود به سایت</div>
                {{--@include('admin.partials.errors')--}}
                <div class="panel-body">
                    <form method="POST" class="form-signin" action="{{ route('login') }}" class="form-horizontal"
                          id="login-register-form">
                        @csrf
                        <div class="form-group input-container">
                            <div class="col-sm-10 col-sm-offset-1">
                                <input id="email" name="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-lg "
                                       placeholder="ایمیل خود را وارد نمایید..." value="{{ old('email') }}" required
                                       autocomplete="email" autofocus>
                                <i class="material-icons input-icon">email</i>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group input-container">
                            <div class="col-sm-10 col-sm-offset-1">
                                <input name="password" type="password" id="password" data-toggle="password"
                                       class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}  input-lg"
                                       placeholder="کلمه خود را وارد نمایید..." required
                                       autocomplete="current-password">
                                <i class="material-icons input-icon">lock_open</i>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        {{--<div class="form-group input-container">--}}
                            {{--<div class="col-sm-10 col-sm-offset-1">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label class="checkbox-container">مرا بخاطر بسپار--}}
                                        {{--<input type="checkbox" id="remember"--}}
                                               {{--name="remember" {{ old('remember') ? 'checked' : '' }}>--}}
                                        {{--<span class="checkmark-login"></span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group input-container">--}}
                            {{--<div class="col-sm-10 col-sm-offset-1">--}}
                                {{--کد امنیتی--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group input-container">
                            <div class="col-sm-6 col-sm-offset-3 text-center">
                                <button name="btn-login" type="submit" class="btn btn-info btn-block">ورود
                                </button>
                            </div>
                        </div>
                        {{--<div class="form-group input-container">--}}
                            {{--<div class="col-sm-6 col-sm-offset-3 text-center">--}}
                                {{--<a href="{{ route('password.request') }}" class="forget-password"><i--}}
                                            {{--class="material-icons">lock</i>بازیابی--}}
                                    {{--کلمه--}}
                                    {{--عبور</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="google-login text-center">--}}
                            {{--<a href="#">--}}
        {{--<span class="google-plus-btn">ورود از طریق اکانت گوگل<span>--}}
            {{--<img src="{{ asset('user/img/google-plus-login-icon.png') }}">--}}
        {{--</span>--}}
        {{--</span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    </form>
                </div>
            </div>
        </div>


        {{--<img id="login-logo" src="/admin/login/img/logo1.png" alt="" class="academyitLogo"/>--}}
        {{--<form method="POST" class="form-signin" action="{{ route('login') }}">--}}
            {{--@csrf--}}
            {{--<h2 class="form-signin-heading">همین حالا وارد شوید</h2>--}}
            {{--<div class="login-wrap">--}}
                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"--}}
                       {{--placeholder="نام کاربری" name="email"--}}
                       {{--value="{{ old('email') }}" required autocomplete="email" autofocus>--}}
                {{--@if ($errors->has('email'))--}}
                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                {{--@endif--}}
                {{--<input id="password" type="password"--}}
                       {{--class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
                       {{--name="password" required autocomplete="current-password" placeholder="کلمه عبور">--}}
                {{--@if ($errors->has('password'))--}}
                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                {{--@endif--}}

                {{--<label class="checkbox">--}}
                    {{--<input id="remember" type="checkbox" name="remember"--}}
                            {{--{{ old('remember') ? 'checked' : '' }}>--}}
                    {{--مرا به خاطر بسپار &nbsp;|--}}
                    {{--<span class="pull-right">--}}
                        {{--<a href="{{ route('password.request') }}">--}}
                          {{--&nbsp;کلمه عبور را فراموش کرده اید؟--}}
                        {{--</a>--}}
                    {{--</span>--}}
                {{--</label>--}}
                {{--<button class="btn btn-lg btn-login btn-block" type="submit" name="btn">ورود</button>--}}
            {{--</div>--}}

        {{--</form>--}}
    {{--</div>--}}


@endsection
