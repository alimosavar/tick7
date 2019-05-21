<!-- RIGHT SIDEBAR-->
<div id="right" style="margin-top: 50px;">
    <div class="user-image-status">
        <img style="margin: 10px auto" class="img-circle img-responsive" width="70" height="70"
             src="{{ auth()->user()->photo !=null ? auth()->user()->photo : 'https://uifaces.co/images/man.svg'}}"/>
        <p style="text-align: center;color: #fff">{{ auth()->user()->name }}</p>
        <div class="btn btn-success btn-xs btn-circle" style="margin-right: 74px;margin-bottom: 20px;width: 16px;height: 16px"> <span style="margin-right: 16px;
    font-size: 13px;
    font-weight: bold;">آنلاین</span></div>
    </div>
    <ul id="menu" class="collapse">

        <li class="panel active">
            <a href="{{ route('home') }}" >
                <i class="icon-table"></i> داشبورد


            </a>
        </li>

        <li class="panel ">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#post-management">
                <i class="icon-tasks"> </i>مدیریت مطالب

                <span class="pull-left">
                        <i class="icon-angle-down"></i>
                        </span>

            </a>
            <ul class="collapse" id="post-management">
                <li class=""><a href="posts.html"><i class="icon-angle-left"></i> کل مطالب </a></li>
                <li class=""><a href="new-post.html"><i class="icon-angle-left"></i> افزودن نوشته </a></li>
                <li class=""><a href="cats.html"><i class="icon-angle-left"></i> دسته ها </a></li>
                <li class=""><a href="create_series.html"><i class="icon-angle-left"></i>دوره های آموزشی</a></li>
            </ul>
        </li>

        <li class="panel ">
            <a href="{{ route('com') }}" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                <i class="icon-comments-alt"></i> دیدگاه ها

                <span class="pull-left">
                                       <i class="icon-angle-down"></i>
                        </span>
                &nbsp; <span class="label label-success">0</span>&nbsp;
            </a>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
                <i class=" icon-user"></i>      پروفایل کاربری

                <span class="pull-left">
                           <i class="icon-angle-down"></i>
                        </span>
            </a>
            <ul class="collapse" id="DDL-nav">
                <li><a href="profile.html"><i class="icon-angle-left"></i>شناسنامه من </a></li>
            </ul>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#transaction">
                <i class=" icon-dollar"></i> مدیریت تراکنش ها
                <span class="pull-left">
                           <i class="icon-angle-down"></i>
                        </span>
            </a>
            <ul class="collapse" id="transaction">
                <li><a href="transaction.html"><i class="icon-angle-left"></i> مشاهده تراکنش ها </a></li>

            </ul>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#tickets">
                <i class="icon-ticket"></i>مدیریت تیکت ها

                <span class="pull-left">
                           <i class="icon-angle-down"></i>
                        </span>

            </a>
            <ul class="collapse" id="tickets">
                <li><a href="tickets.html"><i class="icon-angle-left"></i> تیکت های شما  </a></li>

                <li><a href="tickets_admin.html"><i class="icon-angle-left"></i> مدیریت تیکت های کاربران </a></li>

            </ul>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#discount">
                <i class="icon-shopping-cart"></i>مدیریت تخفیف ها

                <span class="pull-left">
                           <i class="icon-angle-down"></i>
                        </span>

            </a>
            <ul class="collapse" id="discount">
                <li><a href="create-discount.html"><i class="icon-angle-left"></i> افزودن تخفیف جدید  </a></li>

            </ul>
        </li>

        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#product-management">
                <i class="icon-user"></i>   مدیریت محصولات

                <span class="pull-left">
                           <i class="icon-angle-down"></i>
                        </span>

            </a>
            <ul class="collapse" id="product-management">
                <li><a href="{{ route('product.index') }}"><i class="icon-angle-left"></i> لیست محصولات</a></li>
                <li><a href="{{ route('product.create') }}"><i class="icon-angle-left"></i> ایجاد محصول جدید </a></li>
            </ul>
        </li>

        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#user-management">
                <i class="icon-user"></i>   مدیریت کاربران

                <span class="pull-left">
                           <i class="icon-angle-down"></i>
                        </span>

            </a>
            <ul class="collapse" id="user-management">
                <li><a href="{{ route('show.user') }}"><i class="icon-angle-left"></i> لیست کاربران</a></li>
                <li><a href="{{ route('create.user') }}"><i class="icon-angle-left"></i> ایجاد کاربر جدید </a></li>
            </ul>
        </li>

        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#logs">
                <i class="icon-gears"></i> مدیریت رخدادها
                <span class="pull-left">
                          <i class="icon-angle-down"></i>
                        </span>
            </a>
            <ul class="collapse" id="logs">
                <li><a href="logs.html"><i class="icon-angle-left"></i> رخدادها (logs)  </a></li>
                <li><a href="blacklist.html"><i class="icon-angle-left"></i>لیست سیاه (Black List)</a></li>

            </ul>
        </li>
        {{--<li class="panel">--}}
            {{--<a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#polls">--}}
                {{--<i class="icon-gears"></i> نظرسنجی--}}
                {{--<span class="pull-left">--}}
                          {{--<i class="icon-angle-down"></i>--}}
                        {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="collapse" id="polls">--}}
                {{--<li><a href="poll.php"><i class="icon-angle-left"></i>نظرسنجی فعال</a></li>--}}
                {{--<li><a href="create_poll.html"><i class="icon-angle-left"></i>مدیریت نظرسنجی</a></li>--}}

            {{--</ul>--}}
        {{--</li>--}}

    </ul>
</div>