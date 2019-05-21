@extends('user.master')
@section('header')
    login register
@stop
@section('css-js')
    <link rel="stylesheet" href="{{ asset('user/css/videojs.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.theme.default.css') }}">
    <!--JS-->
    <script src="{{ asset('user/js/video.js') }}"></script>
    <script src="{{ asset('user/js/jquery.owl.carousel.js') }}"></script>
    <script src="{{ asset('user/js/jquery.bootstrap-show-password.js') }}"></script>
@endsection
@section('content')
    <!--login & registration-->
    <div class="container wrapper-free-styles wrapper-margin-top">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="col-sm-8 col-md-8 col-lg-8 offset-sm-4 offset-md-4 offset-lg-4 ">
                    <div class="panel panel-info wrapper-margin-top">
                        <div class="panel-heading" id="panel-register-heading">ثبت نام در سایت</div>
                        @if(isset($register) && $register==true)

                        @endif

                        @include('admin.partials.errors')
                        @if(\Illuminate\Support\Facades\Session::has('createUser'))
                            <?php sweetAlert('ثبت نام شما با موفقیت انجام شد.', 'success') ?>
                        @endif
                        <div class="panel-body">
                            <form action="{{ route('user.register') }}" method="post" class="form-horizontal"
                                  id="login-register-form">
                                @csrf
                                <div class="form-group input-container">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <input name="name" type="text" class="form-control input-lg"
                                               placeholder="نام و نام خانوادگی خود را وارد نمایید...">
                                        <i class="material-icons input-icon">perm_identity</i>
                                    </div>

                                </div>
                                <div class="form-group input-container">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <input name="email" type="email" class="form-control input-lg"
                                               placeholder="ایمیل خود را وارد نمایید...">
                                        <i class="material-icons input-icon">email</i>
                                    </div>

                                </div>
                                <div class="form-group input-container">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <input name="password" type="password" class="form-control input-lg"
                                               id="password"
                                               data-toggle="password"
                                               placeholder="کلمه عبور  خود را وارد نمایید...">
                                        <i class="material-icons input-icon">lock_open</i>
                                    </div>

                                </div>

                                <div class="form-group input-container">
                                    <div class="col-sm-6 col-sm-offset-3 text-center">
                                        <button type="submit" name="btn-register" class="btn btn-success btn-block">ثبت
                                            نام
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


