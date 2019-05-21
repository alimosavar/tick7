@extends('admin.master')
@section('content')
    <!-- MAIN WRAPPER -->

    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner">
            <div class="row rrr" style="margin-top: 50px !important;">
                <div class="col-lg-12">
                    <h4 class="page-title"> ایجاد کاربر جدید</h4>
                </div>
            </div>
            <hr/>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel box box-success">
                        <div class="panel-heading">
                            کاربر جدید
                        </div>
                        <div class="panel-body">
                            @include('admin.partials.errors')
                            <form method="post" action="{{ route('user-Admin.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>نام و نام خانوادگی*</label>
                                    <input value="{{ old('name') }}" type="text" name="name" class="form-control"
                                           placeholder="نام...">
                                </div>
                                <div class="form-group">
                                    <label>کلمه عبور*</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                           placeholder="کلمه عبور..." required>
                                </div>
                                <div class="form-group">
                                    <label>تکرار کلمه عبور*</label>
                                    <input type="password" id="confirm_password" name="rpassword" class="form-control"
                                           placeholder="تکرار کلمه عبور..." required>
                                </div>
                                <div class="form-group">
                                    <label>تصویر*</label>
                                    <input type="file" name="pic" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>ایمیل*</label>
                                    <input value="{{ old('email') }}" id="email" type="email" name="email"
                                           class="form-control" placeholder="ایمیل..." required>
                                </div>
                                <div class="form-group">
                                    <label>نقش کاربری</label>
                                    <select name="role[]" class="form-control">
                                        <option value="0">مدیر</option>
                                        <option value="1">نویسنده</option>
                                        <option value="2">کاربرعادی</option>
                                    </select>
                                </div>
                                <input type="submit" name="btns" class="btn btn-success center-block" value="ثبت">
                            </form>
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
@endsection
