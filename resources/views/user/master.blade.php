<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('header')</title>
    <!-- STYLESHEETS-->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap-rtl.css') }}"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('user/css/BootSideMenu.css') }}"/>
{{-- Css & Js yield--}}
@yield('css-js')
<!--JS-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('user/js/jquery.min.1.11.2.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/kinetic.js') }}"></script>
    <script src="{{ asset('user/js/jquery.final-countdown.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.simpleTicker.js') }}"></script>
    <script src="{{ asset('user/js/jquery.totemticker.js') }}"></script>
    <script src="{{ asset('user/js/jquery.BootSideMenu.js') }}"></script>

</head>
<body>
<!--boot-side-menu-->
@if(\Illuminate\Support\Facades\Auth::check())
    <div id="slide-nav">
        <div class="user">
            <img class="img-circle user-avatar-side-nav" src="{{ asset('user/img/gravatar.png') }}" width="100"
                 height="100">
            <div class="welcome">
                <div class="text-center">خوش آمدید : <span>علی مصوری</span></div>
                <div class="text-center">آخرین بازدید شما : <span> 1396/09/15</span></div>
            </div>
        </div>
        <ul class="list-group" id="slide-list">
            <li><i class="material-icons">dashboard</i><a href="admin/index.html">پنل کاربری</a></li>
            <li><i class="material-icons">person</i><a href="@tick7-user/profile.html">پروفایل کاربری</a></li>
            <li><i class="material-icons">border_color</i><a href="#">ارسال مطلب</a></li>
            <li><i class="material-icons">forum</i><a href="#">نظرات</a>
                <span class="badge badge-slide-nav">5</span>
            <li><i class="material-icons">school</i><a href="#">آموزش های من</a>
                <span class="badge badge-slide-nav">5</span>
            </li>
            <li><i class="material-icons" id="exit-icon">power_settings_new</i><a href="#">خروج</a></li>
        </ul>
    </div>
@endif
<!--topbar-->
<div class="container-fluid" id="social-container">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 hidden-xs">
            <div id="ticker-fade" class="ticker">
                <ul>
                    <li>آيا مي دانيد تا کنون ۱۰۶۲۲ نفر در ۲۳ دوره آموزشي سون تیک ثبت نام کرده اند !</li>
                    <li>آيا مي دانيد ميانگين رضايت دانشجويان سون تیک از دوره ها، بيش از ۹۳% مي باشد!</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 clo-lg-6">
            <ul class="list-inline text-left social-icon">
                <li><a href="#"><img src="{{ asset('user/img/telegram.png') }}" height="30" width="30"/></a></li>
                <li><a href="#"><img src="{{ asset('user/img/instagram.png') }}" height="30" width="30"/></a></li>
                <li><a href="#"><img src="{{ asset('user/img/google-plus.png') }}" height="30" width="30"/></a></li>
                <li><a href="#"><img src="{{ asset('user/img/facebook.png') }}" height="30" width="30"/></a></li>
                <li><a href="#"><img src="{{ asset('user/img/twitter.png') }}" height="30" width="30"/></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid" id="topbar-link-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <a href="#"><img src="{{ asset('user/img/logo.png') }}" height="50" width="120" alt="logo"/></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <ul class="list-inline text-left" id="topbar-link">
                    <li><i class="material-icons">perm_identity</i><a
                                href="{{ route('user.login.registration') }}">ورود</a> | <a
                                href="{{ route('user.login.registration') }}">عضویت</a></li>
                    <li><i class="material-icons">contact_mail</i> <a href="#">تماس با ما</a></li>
                    <li data-toggle="tooltip" data-placement="top" title="مصور"><i class="material-icons">phone</i>67
                        29 036 0913
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!--top menu-->
<nav class="navbar navbar-default" id="navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--
                        <a class="navbar-brand" href="#">Brand</a>
            -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">برنامه نویــسی <span class="sr-only">(current)</span></a></li>
                <li><a href="#">طراحی وب</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">گرافیـک <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <!-- <form class="navbar-form navbar-left">
                 <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search">
                 </div>
                 <button type="submit" class="btn btn-default">Submit</button>
             </form>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">هوش مصنوعــی</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">وردپرس <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

@yield('content')

<!--newsletter section-->
<div class="container-fluid wrapper-margin-top"
     id="newsletter-section">
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
            <p class="newletter-title"> با اشتراک در خبرنامه از آخرین عناوین آموزشی مطلع شوید...</p>
            <form class="form-inline">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" placeholder="ایمیل خود را وارد نمایید...">
                    <span class="input-group-btn">
        <button class="btn btn-info" type="button">اشتراک</button>
      </span>
                </div>
            </form>
        </div>
    </div>
</div>
<!--footer section-->
<div class="container-fluid padding-reset" id="fooer-section">
    <div class="row" id="custom-footer-row">
        <div class="col-sm-12 col-md-4 col-lg-4 padding-reset">
            <div id="aboutus-footer"><p>درباره ما</p></div>
            <p class="aboutus-text">سون تیک مرجعی تخصصی برای یادگیری طراحی وب و برنامه نویسی است. ما در سون تیک با بهره
                گیری
                از نیروهای متخصص، باتجربه و با تحصیلات آکادمیک بالا، تمام تلاش خود را برای تهیه و تولید آموزش های با
                کیفیت و حرفه ای انجام می دهیم. پیشنهاد می کنیم تا حرفه ای شدن با سون تیک همراه باشید!</p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 padding-reset">
            <div id="sign-footer"><p>نمادها</p></div>
            <ul class="list-inline" id="nemad-style">
                <li><a href="#"><img src="{{ asset('user/img/b1.png') }}"></a></li>
                <li><a href="#"><img src="{{ asset('user/img/b3.png') }}"></a></li>
                <li><a href="#"><img src="{{ asset('user/img/b5.png') }}"></a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 padding-reset">
            <div id="comment-fooer"><p>نظـرات کاربران</p></div>
            <div id="footer-comment-slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-circle user-avatar margin-center" src="{{ asset('user/img/gravatar.png') }}"
                             width="60"
                             height="60">
                        <p class="slider-random-comment">
                            دوره بسیار عالی و مورد نیاز برای طراحی سایت های واکنش گرا واقعا دوره خوب و لازمی بود من خیلی
                            استفاده کردم.
                        </p>
                    </div>
                    <div class="item">
                        <img class="img-circle user-avatar margin-center" src="{{ asset('user/img/gravatar.png') }}"
                             width="60"
                             height="60">
                        <p class="slider-random-comment">
                            دوره بسیار عالی و مورد نیاز برای طراحی سایت های واکنش گرا واقعا دوره خوب و لازمی بود من خیلی
                            استفاده کردم.
                        </p>
                    </div>
                    <div class="item">
                        <img class="img-circle user-avatar margin-center" src="{{ asset('user/img/gravatar.png') }}"
                             width="60"
                             height="60">
                        <p class="slider-random-comment">
                            دوره بسیار عالی و مورد نیاز برای طراحی سایت های واکنش گرا واقعا دوره خوب و لازمی بود من خیلی
                            استفاده کردم.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <row>
        <div class="col-sm-12 col-md-12 col-lg-12 padding-reset">
            <p class="copy-right-text"><i class="material-icons">copyright</i>کليه حقوق محصولات و محتوای اين
                سایت متعلق به سون تیک می باشد و هر گونه کپی برداری از محتوا و محصولات سایت غیر مجاز و بدون رضایت ماست.
            </p>
        </div>
    </row>
</div>
<script src="{{ asset('user/js/js.js') }}"></script>
</body>
</html>