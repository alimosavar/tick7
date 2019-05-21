<?php include 'permission.php'?>
<div id="right" >
    <div class="media user-media well-small">
        <a class="user-link" href="#">
            <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?= get_gravatar($_SESSION["current_user_email"]);?>" />
        </a>
        <br />
        <div class="media-body">
            <h5 class="media-heading"><?=$_SESSION["user_name_family"]?></h5>
            <ul class="list-unstyled user-info">

                <li>
                    <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> آنلاین
                </li>

            </ul>
        </div>
        <br />
    </div>

    <ul id="menu" class="collapse">


        <li class="panel active">
            <a href="index.php" >
                <i class="icon-table"></i> داشبورد


            </a>
        </li>



        <li class="panel ">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#post-management">
                <i class="icon-tasks"> </i>مدیریت مطالب

                        <span class="pull-left">
                          <i class="icon-angle-down"></i>
                        </span>
                &nbsp; <span class="label label-default">10</span>&nbsp;
            </a>
            <ul class="collapse" id="post-management">

                <li class=""><a href="posts.php"><i class="icon-angle-left"></i> کل مطالب </a></li>
                <li class=""><a href="new-post.php"><i class="icon-angle-left"></i> افزودن نوشته </a></li>
                <li class="active"><a href="cats.php"><i class="icon-angle-left"></i> دسته ها </a></li>
                <li class=""><a href="create_series.php"><i class="icon-angle-left"></i>دوره های آموزشی</a></li>
            </ul>
        </li>

        <li class="panel ">
            <a href="comments.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                <i class="icon-comments-alt"></i> دیدگاه ها

                        <span class="pull-left">
                                         <i class="icon-angle-down"></i>
                        </span>
                &nbsp; <span class="label label-success">0</span>&nbsp;
            </a>
        </li>

        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#progress_course">
                <i class="icon-table"></i> پیشرفت دوره ها

                        <span class="pull-left">
                            <i class="icon-angle-down"></i>
                        </span>
                &nbsp; <span class="label label-info">6</span>&nbsp;
            </a>
            <ul class="collapse" id="progress_course">
                <li><a href="create_progress.php"><i class="icon-angle-left"></i> ایجاد پیشرفت دوره </a></li>
                <li><a href="update_progress.php"><i class="icon-angle-left"></i> مدیریت پیشرفت دوره ها </a></li>

            </ul>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                <i class="icon-gears"></i> تنظیمات
                        <span class="pull-left">
                            <i class="icon-angle-down"></i>
                        </span>
            </a>
            <ul class="collapse" id="chart-nav">
                <li><a href="create_menu.php"><i class="icon-angle-left"></i> ایجاد منو  </a></li>
                <li><a href="menus.php"><i class="icon-angle-left"></i> مدیریت منوها</a></li>
                <li><a href="charts_pie.html"><i class="icon-angle-left"></i> نمودارهای دایره ای </a></li>
                <li><a href="charts_other.html"><i class="icon-angle-left"></i> سایر نمودارها </a></li>
            </ul>
        </li>

        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
                <i class=" icon-user"></i>      پروفایل کاربری

                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
            </a>
            <ul class="collapse" id="DDL-nav">
                <li><a href="profile.php"><i class="icon-angle-left"></i>شناسنامه من </a></li>
                <li><a href="#"><i class="icon-angle-left"></i> لینک 3 </a></li>
                <li><a href="#"><i class="icon-angle-left"></i> لینک 4 </a></li>
            </ul>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#transaction">
                <i class=" icon-dollar"></i> مدیریت تراکنش ها
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
            </a>
            <ul class="collapse" id="transaction">
                <li><a href="transaction.php"><i class="icon-angle-left"></i> مشاهده تراکنش ها </a></li>

            </ul>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#tickets">
                <i class="icon-ticket"></i>مدیریت تیکت ها

                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
             <!--   &nbsp; <span class="label label-warning">5</span>&nbsp;-->
            </a>
            <ul class="collapse" id="tickets">
                <li><a href="tickets.php"><i class="icon-angle-left"></i> تیکت های شما  </a></li>

                <li><a href="tickets_admin.php"><i class="icon-angle-left"></i> مدیریت تیکت های کاربران </a></li>

    </ul>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#discount">
                <i class="icon-shopping-cart"></i>مدیریت تخفیف ها

                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                &nbsp; <span class="label label-warning">5</span>&nbsp;
            </a>
            <ul class="collapse" id="discount">
                <li><a href="create-discount.php"><i class="icon-angle-left"></i> افزودن تخفیف جدید  </a></li>
                <li><a href="errors_404.html"><i class="icon-angle-left"></i> ویرایش تخفیف  </a></li>
                <li><a href="errors_405.html"><i class="icon-angle-left"></i> خطای 405  </a></li>
                <li><a href="errors_500.html"><i class="icon-angle-left"></i> خطای 500  </a></li>
                <li><a href="errors_503.html"><i class="icon-angle-left"></i> خطای 503  </a></li>
            </ul>
        </li>

        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#user-management">
                <i class="icon-user"></i>   مدیریت کاربران

                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                &nbsp; <span class="label label-warning">5</span>&nbsp;
            </a>
            <ul class="collapse" id="user-management">
                <li><a href="create-user.php"><i class="icon-angle-left"></i> ایجاد کاربر جدید </a></li>
                <li><a href="users.php"><i class="icon-angle-left"></i> ویرایش کاربران</a></li>
            </ul>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#createmenu">
                <i class="icon-gears"></i> مدیریت منو ها
                        <span class="pull-left">
                            <i class="icon-angle-down"></i>
                        </span>
            </a>
            <ul class="collapse" id="createmenu">
                <li><a href="create_menu.php"><i class="icon-angle-left"></i> ایجاد منو </a></li>
                <li><a href="menus.php"><i class="icon-angle-left"></i> ویرایش منوها</a></li>
            </ul>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#ads">
                <i class="icon-gears"></i> مدیریت تبلیغات
                        <span class="pull-left">
                            <i class="icon-angle-down"></i>
                        </span>
            </a>
            <ul class="collapse" id="ads">
                <li><a href="ads.php"><i class="icon-angle-left"></i> ایجاد تبلیغ  </a></li>

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
                <li><a href="logs.php"><i class="icon-angle-left"></i> رخدادها (logs)  </a></li>
                <li><a href="blacklist.php"><i class="icon-angle-left"></i>لیست سیاه (Black List)</a></li>

            </ul>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#polls">
                <i class="icon-gears"></i> نظرسنجی
                        <span class="pull-left">
                            <i class="icon-angle-down"></i>
                        </span>
            </a>
            <ul class="collapse" id="polls">
                <li><a href="poll.php"><i class="icon-angle-left"></i>نظرسنجی فعال</a></li>
                <li><a href="create_poll.php"><i class="icon-angle-left"></i>مدیریت نظرسنجی</a></li>

            </ul>
        </li>
        <li class="panel">
            <a href="javascript:" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#charts">
                <i class="icon-gears"></i>نمودارها
                <span class="pull-left">
                            <i class="icon-angle-down"></i>
                        </span>
            </a>
            <ul class="collapse" id="charts">
                <li><a href="chart.php"><i class="icon-angle-left"></i>نمودارانتشار مطالب</a></li>
                <li><a href="create_poll.php"><i class="icon-angle-left"></i>مدیریت نظرسنجی</a></li>

            </ul>
        </li>
    </ul>

</div>