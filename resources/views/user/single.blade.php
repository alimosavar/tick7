@extends('user.master')
@section('header')
    Singles
@endsection
@section('css-js')
    <link rel="stylesheet" href="{{ asset('user/css/videojs.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.theme.default.css') }}">
    <!--JS-->
    <script src="{{ asset('user/js/jquery.totemticker.js') }}"></script>
    <script src="{{ asset('user/js/video.js') }}"></script>
    <script src="{{ asset('user/js/jquery.owl.carousel.js') }}"></script>
@endsection

@section('content')
    <!--single header section-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" id="single-landing-layer-container">
                <div class="single-landing-layer">
                    <div class="col-sm-12 col-md-8 col-md-8 col-md-offset-2 col-lg-offset-2">
                        <img class="img-responsive img-circle" id="post-author-image"
                             src="{{ asset('user/img/gravatar.png') }}"
                             width="150" height="150"/>
                        <h1><a href="#">آموزش اسکریپت نویسی php - جلسه اول - مقدمات</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--single content section-->
    <div class="container wrapper-margin-top">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9 ">
                <div class="single-content wrapper-free-styles">
                    <div class="single-post-meta">
                        <ul class="list-inline">
                            <li><i class="material-icons">perm_identity</i> {{ $product->users->name }}</li>
                            <li>
                                <i class="material-icons">date_range</i> {{ Verta::instance($product->created_at)->format('Y-m-d') }}
                            </li>
                            <li><i class="material-icons">remove_red_eye</i> {{ $product->product_views }}</li>
                            <li><i class="material-icons">comment</i> 32</li>
                            <li><a href="#"><i class="material-icons">border_color</i></a></li>
                        </ul>
                    </div>
                    <div class="all-content">
                        <p>{{ $product->description }}</p>
                        <img src="{{ asset('user/img/php.jpg') }}">
                        <video
                                id="my-player"
                                class="video-js my-video-js-style"
                                controls
                                preload="auto"
                                poster="{{ asset('user/img/7learn-blue.png') }}"
                                data-setup='{}'>
                            <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4"></source>
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a
                                web browser that
                                <a href="http://videojs.com/html5-video-support/" target="_blank">
                                    supports HTML5 video
                                </a>
                            </p>
                        </video>
                        <div class="text-center">
                            <a href="#" class="btn btn-info">دانلود ویدئو</a>
                            <a href="#" class="btn btn-info">دانلود فایل</a>
                        </div>
                    </div>
                    <div class="tags-section">
                        <ul class="list-inline tags">
                            <li><a href="#" class="tag">{{ $product->slug }}</a></li>

                        </ul>
                    </div>
                </div>
                <div class="reated-post wrapper-free-styles wrapper-margin-top">
                    <div class="related-post-section-title text-center">
                        مطالب مرتبط
                    </div>
                    <div class="related-post-slider">
                        <div class="owl-carousel owl-theme" id="custom-owl-carousel">
                            <div class="item">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-post">
                                            <img class="img-responsive" src="{{ asset('user/img/sample.png') }}">
                                            <span class="i-date">1396-09-15<i
                                                        class="material-icons">date_range</i></span>
                                            <div class="overlay">
                                                <div class="text-ecxerpt">در جلسه اول این دوره آموزشی می پردازیم به
                                                    پیاده
                                                    سازی
                                                    موارد اولیه...
                                                </div>
                                                <ul class="list-inline" id="post-detail">
                                                    <li>
                                                        <i class="material-icons">perm_identity</i><span> علی مصوری </span>
                                                    </li>
                                                    <li><i class="material-icons">remove_red_eye</i><span> 1234 </span>
                                                    </li>
                                                    <li><i class="material-icons">comment</i> <span> 1234 </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-link"><a href="single.blade.php">جلسه اول دوره اسکریپت نویسی
                                                php</a>
                                        </div>
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
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-post">
                                            <img class="img-responsive" src="{{ asset('user/img/sample.png') }}">
                                            <span class="i-date">1396-09-15<i
                                                        class="material-icons">date_range</i></span>
                                            <div class="overlay">
                                                <div class="text-ecxerpt">در جلسه اول این دوره آموزشی می پردازیم به
                                                    پیاده
                                                    سازی
                                                    موارد اولیه...
                                                </div>
                                                <ul class="list-inline" id="post-detail">
                                                    <li>
                                                        <i class="material-icons">perm_identity</i><span> علی مصوری </span>
                                                    </li>
                                                    <li><i class="material-icons">remove_red_eye</i><span> 1234 </span>
                                                    </li>
                                                    <li><i class="material-icons">comment</i> <span> 1234 </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-link"><a href="single.blade.php">جلسه اول دوره اسکریپت نویسی
                                                php</a>
                                        </div>
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
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-post">
                                            <img class="img-responsive" src="{{ asset('user/img/sample.png') }}">
                                            <span class="i-date">1396-09-15<i
                                                        class="material-icons">date_range</i></span>
                                            <div class="overlay">
                                                <div class="text-ecxerpt">در جلسه اول این دوره آموزشی می پردازیم به
                                                    پیاده
                                                    سازی
                                                    موارد اولیه...
                                                </div>
                                                <ul class="list-inline" id="post-detail">
                                                    <li>
                                                        <i class="material-icons">perm_identity</i><span> علی مصوری </span>
                                                    </li>
                                                    <li><i class="material-icons">remove_red_eye</i><span> 1234 </span>
                                                    </li>
                                                    <li><i class="material-icons">comment</i> <span> 1234 </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-link"><a href="single.blade.php">جلسه اول دوره اسکریپت نویسی
                                                php</a>
                                        </div>
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
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-post">
                                            <img class="img-responsive" src="{{ asset('user/img/sample.png') }}">
                                            <span class="i-date">1396-09-15<i
                                                        class="material-icons">date_range</i></span>
                                            <div class="overlay">
                                                <div class="text-ecxerpt">در جلسه اول این دوره آموزشی می پردازیم به
                                                    پیاده
                                                    سازی
                                                    موارد اولیه...
                                                </div>
                                                <ul class="list-inline" id="post-detail">
                                                    <li>
                                                        <i class="material-icons">perm_identity</i><span> علی مصوری </span>
                                                    </li>
                                                    <li><i class="material-icons">remove_red_eye</i><span> 1234 </span>
                                                    </li>
                                                    <li><i class="material-icons">comment</i> <span> 1234 </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-link"><a href="single.blade.php">جلسه اول دوره اسکریپت نویسی
                                                php</a>
                                        </div>
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
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-post">
                                            <img class="img-responsive" src="{{ asset('user/img/sample.png') }}">
                                            <span class="i-date">1396-09-15<i
                                                        class="material-icons">date_range</i></span>
                                            <div class="overlay">
                                                <div class="text-ecxerpt">در جلسه اول این دوره آموزشی می پردازیم به
                                                    پیاده
                                                    سازی
                                                    موارد اولیه...
                                                </div>
                                                <ul class="list-inline" id="post-detail">
                                                    <li>
                                                        <i class="material-icons">perm_identity</i><span> علی مصوری </span>
                                                    </li>
                                                    <li><i class="material-icons">remove_red_eye</i><span> 1234 </span>
                                                    </li>
                                                    <li><i class="material-icons">comment</i> <span> 1234 </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-link"><a href="single.blade.php">جلسه اول دوره اسکریپت نویسی
                                                php</a>
                                        </div>
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
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-post">
                                            <img class="img-responsive" src="{{ asset('user/img/sample.png') }}">
                                            <span class="i-date">1396-09-15<i
                                                        class="material-icons">date_range</i></span>
                                            <div class="overlay">
                                                <div class="text-ecxerpt">در جلسه اول این دوره آموزشی می پردازیم به
                                                    پیاده
                                                    سازی
                                                    موارد اولیه...
                                                </div>
                                                <ul class="list-inline" id="post-detail">
                                                    <li>
                                                        <i class="material-icons">perm_identity</i><span> علی مصوری </span>
                                                    </li>
                                                    <li><i class="material-icons">remove_red_eye</i><span> 1234 </span>
                                                    </li>
                                                    <li><i class="material-icons">comment</i> <span> 1234 </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-link"><a href="single.blade.php">جلسه اول دوره اسکریپت نویسی
                                                php</a>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-section wrapper-free-styles wrapper-margin-top">
                    <div class="comment-section-title text-center">
                        دیدگاه کاربران
                    </div>
                    <div class="media">
                        <div class="media-right" id="custom-media-right">
                            <img class="media-object img-circle" id="custom-media-object"
                                 src="{{ asset('user/img/gravatar.png') }}"
                                 width="50" height="50" alt="commenter">
                            <div class="comment-line"></div>
                        </div>
                        <div class="media-body user-comment">
                            <div class="user-comment-title">
                                <ul class="list-inline">
                                    <li><i class="material-icons">perm_identity</i>علی مصوری</li>
                                    <li><i class="material-icons">date_range</i>1396-09-23</li>
                                    <li class="comment-answer"><a href="#">پاسخ</a></li>
                                    <li class="comment-edit"><a href="#">ویرایش</a></li>
                                    <li></li>
                                </ul>
                            </div>
                            <p>آموزش اسکریپت نویسی php چه زمانی برگزار خواهد شد؟</p>
                            <a data-toggle="collapse" href="#collapse1" type="button"
                               class=" btn-cm-single btn btn-success">پاسخ</a>
                            <br>
                            <br>
                            <br>

                            <div class="row">
                                <div id="collapse1" class="panel-collapse collapse textarear-cm-single">
                                    <textarea class="form-control " name="" placeholder="متن پاسخ شما..." cols="30"
                                              rows="10"></textarea>

                                    <div id="input-cm-single">
                                        <input value="ارسال دیدگاه شما" type="button" class="btn btn-danger btn-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media comment-answer-section">
                        <div class="media-right" id="custom-media-right">
                            <img class="media-object img-circle" id="custom-media-object"
                                 src="{{ asset('user/img/gravatar.png') }}"
                                 width="50" height="50" alt="commenter">
                            <div class="comment-line"></div>
                        </div>
                        <div class="media-body user-comment" id="comment-question">
                            <div class="user-comment-title">
                                <ul class="list-inline">
                                    <li><i class="material-icons">perm_identity</i>علی مصوری</li>
                                    <li>
                                        <i class="material-icons">date_range</i>{{ Verta::instance($product->created_at)->format('Y-m-d') }}
                                    </li>
                                    <li class="comment-answer"><a href="#">پاسخ</a></li>
                                    <li class="comment-edit"><a href="#">ویرایش</a></li>
                                    <li></li>
                                </ul>

                            </div>
                            <p>آموزش اسکریپت نویسی php چه زمانی برگزار خواهد شد؟</p>
                        </div>
                    </div>

                    <div class="send-comment">
                        <div class="alert alert-danger text-center">کاربر گرامی برای ارسال دیدگاه خود ابتدا باید در سایت
                            <a
                                    href="#">لاگین</a> نمایید
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading"><i class="material-icons">mode_comment</i>ارسال دیدگــاه</div>
                            <div class="panel-body">
                                <p>علی مصوری عزیز، شما لاگین هستید و می توانید سوال و یا دیدگاه خود را برای ما ارسال
                                    نمایید
                                    :</p>
                                <form method="post" action="{{ route('comment.single.page') }}">
                                    @csrf
                                    <textarea class="form-control" rows="8" placeholder="متن دیدگاه شما..."> </textarea>
                                    <br>
                                    <button class="btn btn-success comment-btn-send">ارسال دیدگاه</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="wrapper-free-styles">
                    <!--tab navigation-->
                    <ul class="nav nav-tabs" id="custom-nav-tabs">
                        <li class="active"><a href="#papular" data-toggle="tab">محبوب ترین ها</a></li>
                        <li><a href="#hot" data-toggle="tab">داغ تریـن ها</a></li>
                        <li><a href="#rands" data-toggle="tab">تصـادفـی</a></li>
                    </ul>
                    <!--tab contents   -->
                    <div class="tab-content" id="custom-tab-content">
                        <div class="tab-pane fade in active" id="papular">
                            <ul class="list-group post-publish-list" id="single-post-publish-list">
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="hot">
                            <ul class="list-group post-publish-list" id="single-post-publish-list">
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="rands">
                            <ul class="list-group post-publish-list" id="single-post-publish-list">
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                                <li><span class="list-icon"></span>
                                    <div><a href="#">دوره مجازی اسکریپت نویسی php : جلسه اول - معرفی دوره</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

