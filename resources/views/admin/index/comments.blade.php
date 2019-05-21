@extends('admin.master')
@section('content')
<!-- BEGIN BODY -->
<body class="top-body ">

<!-- MAIN WRAPPER -->

    <!-- HEADER SECTION -->

    <!-- END HEADER SECTION -->

    <!-- RIGHT SIDEBAR-->

    <!--END  RIGHT SIDEBAR-->

    <!--PAGE CONTENT -->
    <div id="content">
        <div class="inner">
            <div class="row">
                <div class="col-lg-12">
                    <h3> نظرات کاربران</h3>
                </div>
            </div>
            <hr/>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel box box-danger">
                        <div class="panel-heading">
                            <ul class="list-inline user-page-admin" style="position: relative">
                                <li>
                                    <form class="navbar-form" method="get" action="">
                                        <div class="form-group">
                                            <input type="text" name="txt_search" class="form-control"
                                                   placeholder="جستجو...">
                                        </div>
                                        <button type="submit" name="search" class="btn btn-info">بگرد</button>
                                    </form>
                                </li>
                                <form method="post">
                                    <li style="float: left">
                                        <button class="label label-danger" type="submit" name="del-all"
                                                style="position: absolute;top: 0px;left: 45px;">حذف کلی
                                        </button>
                                    </li>
                                </form>
                            </ul>

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th><input type="checkbox" class="select-all"></th>
                                        <th width="10px" class="text-center">#</th>
                                        <th class="text-center">پست</th>
                                        <th class="text-center">توضیحات</th>
                                        <th class="text-center">وضعیت</th>
                                        <th width="110px" class="text-center">تاریخ</th>
                                        <th class="text-center">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    {{--<div class="modal-dialog">--}}
                                        {{--<div class="modal-content">--}}
                                            {{--<form action="">--}}
                                                {{--<div class="modal-header">--}}
                                                    {{--<button type="button" class="close" data-dismiss="modal">--}}
                                                        {{--<span>&times;</span></button>--}}
                                                    {{--<h4 class="modal-title">پست آی دی : 12</h4>--}}
                                                {{--</div>--}}
                                                {{--<div class="modal-body">--}}

                                                    {{--<p> دیدگاه کاربر :</p>--}}
                                                    {{--<div class="alert alert-info">با سلام دوره اسکریپت نویسی php چه--}}
                                                        {{--زمانی--}}
                                                        {{--آغاز خواهد شد؟--}}
                                                    {{--</div>--}}
                                                    {{--<hr>--}}
                                                    {{--<form method="post">--}}
                                                    {{--<textarea name="answer_comment" class="form-control ckeditor"--}}
                                                              {{--style="direction: rtl"--}}
                                                              {{--placeholder="محتوای مورد نظر"></textarea>--}}
                                                    {{--</form>--}}
                                                {{--</div>--}}
                                                {{--<div class="modal-footer">--}}
                                                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">--}}
                                                        {{--Close--}}
                                                    {{--</button>--}}
                                                    {{--<button type="submit" name="send-comment" class="btn btn-success">--}}
                                                        {{--ثبت--}}
                                                    {{--</button>--}}
                                                {{--</div>--}}
                                            {{--</form>--}}
                                        {{--</div><!-- /.modal-content -->--}}
                                    {{--</div><!-- /.modal-dialog -->--}}
                                    <!-- /.modal -->
                                    <tr class="comment-row-show">
                                        {{--<th>{{ $comment->id }}</th>--}}
                                        <th style="width: 1%"><input type="checkbox" class="checkbox" name="checkbox"
                                                                     value=""></th>
                                        <th>post</th>
                                        <th style="width: 15%">
                                            description
                                        </th>
                                        <th><span class="badge" style="background-color:green;">منتشر نشده</span></th>
                                        {{--{{Verta::instance($comment->created_at)->format('%B %d، %Y')}}--}}
                                        <th>tarikh</th>
                                     <th>
                                        f
                                     </th>
                                    </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--END PAGE CONTENT -->

<!-- RIGHT STRIP  SECTION -->

<!-- END RIGHT STRIP  SECTION -->

<!--END MAIN WRAPPER -->

<!-- FOOTER -->

<!--END FOOTER -->


<!-- END GLOBAL SCRIPTS -->

<!-- PAGE LEVEL SCRIPTS -->


<!-- END PAGE LEVEL SCRIPTS -->


</body>

<!-- END BODY -->
@endsection