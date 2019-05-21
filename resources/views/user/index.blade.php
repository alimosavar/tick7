@extends('user.master')
@section('header')
    صفحه اصلی
@endsection
@section('content')
    <!--hero header-->
    <div class="container-fluid" id="hero-header">
        <div class="row">
            <h2>خودساختگی ، کسب تجربه ، ورود به بازار کار</h2>
            <h2>با اساتید مجرب و کارآزموده در خودآموز ســـون لـــرن</h2>
            <h2 class="pulsate">تخفیف ویژه به مناسب ولادت حضرت محمد (ص) آغاز شد</h2>
        </div>
        <div class="row">
            <div class="bounce text-center"><i class="material-icons">keyboard_arrow_down</i></div>
        </div>
        <div class="row">
            <div class="countdown countdown-container container" id="countdown-custom">
                <div class="clock row">
                    <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-seconds" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-seconds type-time">ثانیه</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->
                    <div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-minutes" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-minutes type-time">دقیقه</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->
                    <div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-hours" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-hours type-time">ساعت</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->


                    <div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-days" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-days type-time">روز</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->

                </div><!-- /.clock -->
            </div><!-- /.countdown-wrapper -->
        </div>
        <div class="row" id="custom-row-search-filed">
            <div class="col-sm-6 col-md-6 clo-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="دنبال چی می گردی؟">
                    <span class="input-group-btn">
            <button type="submit" class="btn btn-info">بگــرد</button>
        </span>
                </div>
            </div>
        </div>
        <div class="row hidden-xs" id="custom-row-statictis">
            <div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 ">
                <div class="col-sm-4 col-md-4 col-lg-4"><i
                            class="material-icons">library_books</i><span>110 مقالات آموزشی </span></div>
                <div class="col-sm-4 col-md-4 col-lg-4"><i
                            class="material-icons">supervisor_account</i><span>228 دانشجوها </span></div>
                <div class="col-sm-4 col-md-4 col-lg-4"><i
                            class="material-icons">access_time</i><span>400 دقیقه آموزش</span>
                </div>
            </div>

        </div>
    </div>
    <!--slider & info section-->
    <div class="container" id="custom-slider-info-container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4" id="info-section">
                <div class="wrapper-free-styles ">
                    <div class="info-box">
                        <div class="info-title-section">
                            <i class="material-icons">info_outline</i>اطلاعیه ها
                        </div>
                        <div class="info-text">
                            <span>ثبت نام دوره ی جامع آموزش برنامه نویسی ربات تلگرام با PHP آغاز شد! برای شد</span>
                            <span class="info-date">1396-09-15<i class="material-icons">date_range</i></span>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="info-title-section">
                            <i class="material-icons">info_outline</i>اطلاعیه ها
                        </div>
                        <div class="info-text">
                            <span>ثبت نام دوره ی جامع آموزش برنامه نویسی ربات تلگرام با PHP آغاز شد! برای شد</span>
                            <span class="info-date">1396-09-15<i class="material-icons">date_range</i></span>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="info-title-section">
                            <i class="material-icons">info_outline</i>اطلاعیه ها
                        </div>
                        <div class="info-text">
                            <span>ثبت نام دوره ی جامع آموزش برنامه نویسی ربات تلگرام با PHP آغاز شد! برای شد</span>
                            <span class="info-date">1396-09-15<i class="material-icons">date_range</i></span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <!--slider-indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <!--image wrapper-->
                    <div class="carousel-inner" id="custom-carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('user/img/slider1.png') }}" alt="image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('user/img/slider2.jpg') }}" alt="image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('user/img/slider3.jpg') }}" alt="image">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--new topic and random topic section-->
    <div class="container wrapper-margin-top">
        <div class="row">
            <div class="col-sm-12 clo-md-12 col-lg-12">
                <div class="col-sm-12 clo-md-12 col-lg-12 main-wrapper wrapper-free-styles ">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <p class="lesson-title"><i class="material-icons">library_books</i>جدید ترین مطالب آموزشی</p>
                        <div class="post-publish">
                            <ul class="list-group post-publish-list">
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                    <div class="post-publish-date ">
                                        <span class="hidden-xs"> 1396-09-21<i
                                                    class="material-icons">date_range</i></span>
                                        <span class="hidden-xs">32 دقیقه<i
                                                    class="material-icons">alarm</i></span>


                                    </div>

                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                    <div class="post-publish-date ">
                                        <span class="hidden-xs"> 1396-09-21<i
                                                    class="material-icons">date_range</i></span>
                                        <span class="hidden-xs">32 دقیقه<i
                                                    class="material-icons">alarm</i></span>


                                    </div>

                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                    <div class="post-publish-date ">
                                        <span class="hidden-xs"> 1396-09-21<i
                                                    class="material-icons">date_range</i></span>
                                        <span class="hidden-xs">32 دقیقه<i
                                                    class="material-icons">alarm</i></span>


                                    </div>

                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                    <div class="post-publish-date ">
                                        <span class="hidden-xs"> 1396-09-21<i
                                                    class="material-icons">date_range</i></span>
                                        <span class="hidden-xs">32 دقیقه<i
                                                    class="material-icons">alarm</i></span>


                                    </div>

                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <p class="random-title"><i class="material-icons">refresh</i>مطالب تصادفی</p>
                        <div class="post-random">
                            <ul class="list-group" id="vertical-ticker">
                                <li><a href="#"><span><img class="img-thumbnail" src="{{ asset('user/img/php.jpg') }}"
                                                           height="60"
                                                           width="60"/></span>
                                        دوره طراحی تجربه کاربری (جلسه یازدهم) :‌ کاربردپذیری و اصول آن </a></li>
                                <li><a href="#"><span><img class="img-thumbnail" src="{{ asset('user/img/php.jpg') }}"
                                                           height="60"
                                                           width="60"/></span>
                                        دوره طراحی تجربه کاربری (جلسه یازدهم) :‌ کاربردپذیری و اصول آن </a></li>
                                <li><a href="#"><span><img class="img-thumbnail" src="{{ asset('user/img/php.jpg') }}"
                                                           height="60"
                                                           width="60"/></span>
                                        دوره طراحی تجربه کاربری (جلسه یازدهم) :‌ کاربردپذیری و اصول آن </a></li>
                                <li><a href="#"><span><img class="img-thumbnail" src="{{ asset('user/img/php.jpg') }}"
                                                           height="60"
                                                           width="60"/></span>
                                        دوره طراحی تجربه کاربری (جلسه یازدهم) :‌ کاربردپذیری و اصول آن </a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--main-content-section-->
    <div class="container wrapper-margin-top ">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 ">
                <div class="content-header">مطالب آموزشی</div>
                <div class="main-content wrapper-free-styles">
                    <div class="dropdown " id="custom-dropdown">

                        <button id="btn-filter-content" class="btn btn-default dropdown-toggle" type="button"
                                id="content-filter" data-toggle="dropdown">
                            فیلتر عناوین آموزشی...
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="all-post">همه مطالب</a></li>
                            <li><a href="test">محبوب ترین مطالب</a></li>
                            <li><a href="#">پربازدید ترین مطالب</a></li>
                        </ul>
                        <img id="loading" src="{{ asset('user/img/loader.gif') }}">
                    </div>

                    <div class="load-content ">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                    <div class="panel panel-default">
                                        <div class="panel-post">
                                            <img class="img-responsive" width="300" height="300"
                                                 src="{{ $product->photo ? asset('/image/posts/'.$post->photo) :'http://placehold.it/300x300' }}">
                                            <span class="i-date">{{ Verta::instance($product->created_at)->format('Y-m-d') }}
                                                <i
                                                        class="material-icons">date_range</i></span>
                                             <div class="overlay">
                                                <div class="text-ecxerpt" ><p style="margin: 0 !important;padding: 0 !important;">{{ Str::limit($product->meta_description,30)	}}</p></div>
                                                <ul class="list-inline" id="post-detail">
                                                    <li>
                                                        <i class="material-icons">perm_identity</i><span>  {{ $product->users->name }}  </span>
                                                    </li>
                                                    {{--{{ $product->users->name }}--}}
                                                    <li>
                                                        <i class="material-icons">remove_red_eye</i><span> {{ $product->product_views }} </span>
                                                    </li>
                                                    <li><i class="material-icons">comment</i> <span> 1234 </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-link"><a
                                                    href="{{ route('user.singlePage',$product->id) }}">{{ $product->name }}</a></div>
                                        <div class="post-type-like">
                                            <span class="post-type"><i
                                                        class="material-icons">view_headline</i>رایگان</span>
                                            <span class="like-btn">
    <span class="dislike"><a href="#"><i class="material-icons" id="dislike">thumb_down</i></a> 10</span><span
                                                        class="like">1<a href="#"><i class="material-icons"
                                                                                     id="like">thumb_up</i></a> </span>
    </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="all-posts">
                        <a href="#" class="btn btn-success">همه مطالب<i class="material-icons">arrow_back</i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--course & poll-section-->
    <div class="container wrapper-margin-top">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="col-sm-12 col-md-12 col-lg-12 main-wrapper box-shadow">
                    <div class="section-title">
                        <h5>دوره های آموزشی</h5>
                    </div>
                    <div class="course-info">
                        <div class="course-thumbnail">
                            <img class="img-responsive" src="{{ asset('user/img/php-course.jpg') }}">

                        </div>
                        <div class="course-detail">
                            <h3 class="text-center course-title">جامع ترین دوره آموزش اسکریپت نویسی PHP</h3>
                            <a href="#course-meta-section" data-toggle="collapse" class="course-info-tooltip"><i
                                        class="material-icons" data-toggle="tooltip"
                                        data-placement="top" title="جزئیات بیشتر...">more_horiz</i></a>
                            <div class="collapse course-meta" id="course-meta-section">
                                <ul class="list-inline text-center">
                                    <li><i class="material-icons">person</i> مدرس : <span>علی مصوری</span></li>
                                    <li><i class="material-icons">alarm</i> طول دوره : <span>35 ساعت</span></li>
                                    <li><i class="material-icons">clear_all</i> وضعیت دوره :
                                        <span>پیش ثبت نام</span></li>
                                    <li><i class="material-icons">school</i> دانشجویان :
                                        <span><span>124</span> نفر  </span>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="#" class="btn btn-success">خرید این دوره</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="course-info">
                        <div class="course-thumbnail">
                            <img class="img-responsive" src="{{ asset('user/img/php-course.jpg') }}">

                        </div>
                        <div class="course-detail">
                            <h3 class="text-center course-title">جامع ترین دوره آموزش اسکریپت نویسی PHP</h3>
                            <a href="#course-meta-section-1" data-toggle="collapse" class="course-info-tooltip"><i
                                        class="material-icons" data-toggle="tooltip"
                                        data-placement="top" title="جزئیات بیشتر...">more_horiz</i></a>
                            <div class="collapse course-meta" id="course-meta-section-1">
                                <ul class="list-inline text-center">
                                    <li><i class="material-icons">person</i> مدرس : <span>علی مصوری</span></li>
                                    <li><i class="material-icons">alarm</i> طول دوره : <span>35 ساعت</span></li>
                                    <li><i class="material-icons">clear_all</i> وضعیت دوره :
                                        <span>پیش ثبت نام</span></li>
                                    <li><i class="material-icons">school</i> دانشجویان :
                                        <span><span>124</span> نفر  </span>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="#" class="btn btn-success">خرید این دوره</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="course-info">
                        <div class="course-thumbnail">
                            <img class="img-responsive" src="{{ asset('user/img/php-course.jpg') }}">

                        </div>
                        <div class="course-detail">
                            <h3 class="text-center course-title">جامع ترین دوره آموزش اسکریپت نویسی PHP</h3>
                            <a href="#course-meta-section-2" data-toggle="collapse" class="course-info-tooltip"><i
                                        class="material-icons" data-toggle="tooltip"
                                        data-placement="top" title="جزئیات بیشتر...">more_horiz</i></a>
                            <div class="collapse course-meta" id="course-meta-section-2">
                                <ul class="list-inline text-center">
                                    <li><i class="material-icons">person</i> مدرس : <span>علی مصوری</span></li>
                                    <li><i class="material-icons">alarm</i> طول دوره : <span>35 ساعت</span></li>
                                    <li><i class="material-icons">clear_all</i> وضعیت دوره :
                                        <span>پیش ثبت نام</span></li>
                                    <li><i class="material-icons">school</i> دانشجویان :
                                        <span><span>124</span> نفر  </span>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="#" class="btn btn-success">خرید این دوره</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-center " id="more-course">
                        <a href="#" class="btn btn-info">موارد بیشتر...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="col-sm-12 col-md-12 col-lg-12 main-wrapper box-shadow">
                    <!--vote section-->
                    <div class="section-title">
                        <h5>نظرسنجی</h5>
                    </div>
                    <div class="vote">
                        <div class="alert alert-danger text-center">با برگزاری کدامیک از دورهای زیر موافقید؟</div>
                        <!--<div class="tasks-progressbar">
                            <p> اسکریپت نویسی PHP </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success"
                                     style="width: 40%">
                                    <span>40% </span>
                                </div>
                            </div>
                            <p> برنامه نویس پایتون</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 20%">
                                    <span>20%</span>
                                </div>
                            </div>
                            <p>طراحی قالب وردپرس</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success"

                                     style="width: 60%">
                                    <span>60% </span>
                                </div>
                            </div>
                            <p>پلاگین نویسی وردپرس</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar"
                                     style="width: 55%">
                                    <span>55%</span>
                                </div>
                            </div>
                            <p> اصول طراحی قالب در فتوشاپ</p>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-success"
                                     style="width: 80%">
                                    <span>80%</span>
                                </div>
                            </div>

                        </div>-->
                        <form>
                            <label class="label-container">اسکریپت نویسی PHP
                                <input type="radio" name="radio" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-container">برنامه نویس پایتون
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-container">طراحی قالب وردپرس
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-container">پلاگین نویسی وردپرس
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-container">اصول طراحی قالب در فتوشاپ
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <div class="btn-vote text-center">
                                <input type="submit" class="btn btn-success btn-sm" value="ثبت رای">
                            </div>
                        </form>

                    </div>
                    <!--tasks section-->
                    <div class="section-title">
                        <h5>پیشرفت دورهاه</h5>
                    </div>
                    <div class="tasks-progressbar">
                        <p> دوره آموزشی برنامه نویسی شی گرا </p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped active"
                                 style="width: 40%">
                                <span>40% </span>
                            </div>
                        </div>
                        <p> دوره آموزشی فتوشاپ</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped active" style="width: 20%">
                                <span>20%</span>
                            </div>
                        </div>
                        <p>دوره آموزشی طراحی وب</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning progress-bar-striped active"

                                 style="width: 60%">
                                <span>60% </span>
                            </div>
                        </div>
                        <p>دوره آموزشی فریم ورک بوت استرپ 4</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
                                 style="width: 55%">
                                <span>55%</span>
                            </div>
                        </div>
                        <p> دوره آموزشی Flex Box و CSS Grid</p>
                        <div class="progress">
                            <div class="progress-bar  progress-bar-striped active" role="progressbar"
                                 style="width: 80%">
                                <span>80%</span>
                            </div>
                        </div>

                    </div>
                    <!--ads section-->
                    <div class="section-title">
                        <h5>تبلیــغــات</h5>
                    </div>
                    <div class="ads text-center">
                        <a href="#"><img class="img-responsive" src="{{ asset('user/img/ads-banner.jpg') }}" alt="ads"/></a>
                        <a href="#"><img class="img-responsive" src="{{ asset('user/img/ads-banner.jpg') }}" alt="ads"/></a>
                        <a href="#"><img class="img-responsive" src="{{ asset('user/img/ads-banner.jpg') }}" alt="ads"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection