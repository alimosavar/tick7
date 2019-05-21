<div id="top">
    <nav class="navbar navbar-default navbar-fixed-top custom-navbar-default ">
        <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
            <i class="icon-align-justify"></i>
        </a>
        <!-- LOGO SECTION -->
        <header class="navbar-header">

            <a href="index.php" class="navbar-brand">
                <img src="img/7l.png" alt="" height="30" />
                <span class="site-title">پنل مدیریت</span>
            </a>
        </header>
        <!-- END LOGO SECTION -->
        <ul class="nav navbar-top-links navbar-left">
            <!-- MESSAGES SECTION -->
            <?php
            if($_SESSION["user_role"]==3){
                $num = 0;
                $sql = "SELECT * FROM `$tbl_tickets` WHERE `admin_status`=?";
                $result = $connect->prepare($sql);
                $result->bindValue(1, $num);
                $result->execute();
                $_SESSION['number_of_new_tickets'] = $result->rowCount();
            }else {
                $num =1;
                $sql = "SELECT * FROM `$tbl_tickets` WHERE `user_status`=? AND `receiver_email`=?";
                $result = $connect->prepare($sql);
                $result->bindValue(1, $num);
                $result->bindValue(2, $_SESSION["current_user_email"]);
                $result->execute();
                $_SESSION['number_of_new_tickets'] = $result->rowCount();
            }
            //var_dump($result) ;
            //echo $number_of_rows;
            /* while ($row =$result->fetch(PDO::FETCH_ASSOC));{*/
            while($row = $result->fetchObject()){
                // while ($row = $result->fetchObject()) {
                $tickets[] = $row;
                //'<pre>'.print_r($tickets).'</pre>'
                //$status=$row["status"];

            }
            ?>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="label label-success"><?=$_SESSION['number_of_new_tickets'] ?></span>    <i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages" style="padding: 0">
                    <?php if(!empty($tickets)):?>
                        <?php foreach ($tickets as $ticket): ?>
                            <li>
                                <a href="answer_ticket.php?id=<?=$ticket->ticket_number?>">
                                    <div>
                                        <img class="img-circle" width="35" src="<?=get_gravatar($ticket->email);?>">
                                        <span style="font-size: 12px"><?=$ticket->username?></span>
                                        <span class="pull-left text-muted" style="margin-top: 10px">
                                            <label class="label label-danger" style="font-size: 8px">مهم</label>
                                            <label class="label label-info" style="font-size: 8px"><?=$ticket->create_date?></label>
                                    </div>
                                    <div style="margin: 10px 0;font-size: 13px;color: #aea5a9"><?=mb_substr($ticket->subject,0,35,'UTF-8')," ... ";?>
                                        <br />
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="alert alert-danger text-center" style="margin: 0!important;font-size: 13px">در حال حاضر تیکتی ثبت نکرده ای<br><br><a href="create_ticket.php">ارسال تیکت</a></div>
                    <?php endif; ?>
                </ul>
            </li>
            <!--END MESSAGES SECTION -->

            <!--TASK SECTION -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="label label-danger">5</span>   <i class="icon-tasks"></i>&nbsp; <i class="icon-chevron-down"></i>
                </a>

                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong> پروفایل </strong>
                                    <span class="pull-left text-muted">40% تکمیل شده</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% تکمیل شده</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong> وظایف </strong>
                                    <span class="pull-left text-muted">20% تکمیل شده</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% تکمیل شده</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong> پیشرفت کار </strong>
                                    <span class="pull-left text-muted">60% پیشرفت</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% پیشرفت</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong> خلاصه </strong>
                                    <span class="pull-left text-muted">80% تکمیل شده</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% تکمیل شده </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <i class="icon-angle-left"></i>
                            <strong>مشاهده همه تسک ها</strong>
                        </a>
                    </li>
                </ul>

            </li>
            <!--END TASK SECTION -->

            <!--ALERTS SECTION -->
            <li class="chat-panel dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="label label-info">8</span>   <i class="icon-comments"></i>&nbsp; <i class="icon-chevron-down"></i>
                </a>

                <ul class="dropdown-menu dropdown-alerts">

                    <li>
                        <a href="#">
                            <div>
                                <span class="pull-left text-muted small"> 4 دقیقه پیش</span>
                                <i class="icon-comment" ></i> کامنت جدید
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <span class="pull-left text-muted small">9 دقیقه پیش</span>
                                <i class="icon-twitter info"></i> 3 دنبال کننده جدید
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <span class="pull-left text-muted small" > 20 دقیقه پیش</span>
                                <i class="icon-envelope"></i> ارسال پیغام
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <span class="pull-left text-muted small"> 1 ساعت پیش</span>
                                <i class="icon-tasks"></i> وظایف جدید
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <span class="pull-left text-muted small"> 2 ساعت پیش</span>
                                <i class="icon-upload"></i> ورود به سایت
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <i class="icon-angle-left"></i>
                            <strong>مشاهده همه اعلان ها</strong>
                        </a>
                    </li>
                </ul>

            </li>
            <!-- END ALERTS SECTION -->

            <!--ADMIN SETTINGS SECTIONS -->

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                </a>

                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="icon-user"></i> مشاهده پروفایل </a>
                    </li>
                    <li><a href="#"><i class="icon-gear"></i> تنظیمات </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="icon-signout"></i> خروج </a>
                    </li>
                </ul>

            </li>
            <!--END ADMIN SETTINGS -->
        </ul>

    </nav>

</div>