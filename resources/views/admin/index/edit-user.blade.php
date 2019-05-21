@extends('admin.master')
@section('content')
    <!-- MAIN WRAPPER -->

    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner">
            <div class="row">
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
                            <form method="post" action="{{ route('user-Admin.update',$user->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label>نام و نام خانوادگی*</label>
                                    <input type="text" value="{{ $user->name }}" name="name" class="form-control"
                                           placeholder="نام خانوادگی...">
                                </div>
                                <div class="form-group">
                                    <label>کلمه عبور*</label>
                                    <input type="password" name="password" class="form-control"
                                           placeholder="کلمه عبور...">
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label>تکرار کلمه عبور*</label>--}}
                                    {{--<input type="password" name="rpassword" class="form-control"--}}
                                           {{--placeholder="تکرار کلمه عبور...">--}}
                                {{--</div>--}}
                                <div class="form-group">
                                    <label>تصویر*</label>
                                    <input type="file" name="pic" class="form-control">
                                    <img class="img-circle"
                                         style="border: 1px solid #ccc;"
                                         src="{{ $user->photo ? asset( $user->photo ) : 'https://uifaces.co/images/man.svg'}}"
                                         width="70" height="70" alt="photo">
                                </div>
                                <div class="form-group">
                                    <label>ایمیل*</label>
                                    <input type="email" value="{{ $user->email }}" name="email" class="form-control"
                                           placeholder="ایمیل...">
                                </div>
                                <div class="form-group">
                                    <label>نقش کاربری</label>
                                    <select name="role" class="form-control">
                                        <option {{ auth()->user()->status == 0 ? 'selected' : '' }} value="0">مدیر</option>
                                        <option {{ auth()->user()->status == 1 ? 'selected' : '' }}  value="1">نویسنده</option>
                                        <option {{ auth()->user()->status == 2 ? 'selected' : '' }} value="2">کاربر عادی</option>
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
