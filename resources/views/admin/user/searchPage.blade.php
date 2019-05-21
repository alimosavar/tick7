@extends('admin.master')
@section('content')
    <div id="content">
        <div class="inner" style="margin-top: 50px !important;">
            <div class="row">
                <div class="col-lg-12">
                    <h1> کاربران</h1>
                </div>
            </div>
            <hr/>

            <div class="row">
                <div class="col-lg-12">
                    @if(\Illuminate\Support\Facades\Session::has('delete'))
                        <div class="alert alert-info">
                            {{Session('delete')}}
                        </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Session::has('create'))
                        <div class="alert alert-success">
                            {{Session('create')}}
                        </div>
                        {{--<div class="alert alert-success alert-dismissible fade show">--}}
                        {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                        {{--<span aria-hidden="true">&times;</span>--}}
                        {{--</button>--}}
                        {{--{{Session('create')}}--}}
                        {{--</div>--}}
                    @endif
                    <div class="panel box box-warning">
                        <div class="panel-heading">
                            <ul class="list-inline user-page-admin" style="position: relative">
                                <li><a href="#">همه</a></li>
                                <li><a href="#">مدیران</a></li>
                                <li><a href="#">نویسندگان ارشد</a></li>
                                <li><a href="#">نویسندگان</a></li>
                                <li><a href="#">کاربران عادی (مشارکت کننده)</a></li>
                                <li style="float: left">
                                    <button href="#" class="label label-info">چاپ</button>
                                </li>
                                {{--<form method="post">--}}
                                    {{--<li style="float: left">--}}
                                        {{--<button class="label label-danger" type="submit" name="del-all"--}}
                                                {{--style="position: absolute;top: 0px;left: 45px;">حذف کلی--}}
                                        {{--</button>--}}
                                    {{--</li>--}}
                                {{--</form>--}}
                                <form method="get" action="{{ route('search') }}" style="margin-top: 2px;">
                                    @csrf
                                    <div id="div-search">
                                        <li>
                                        <span><input class="form-control search-list" type="text" name="search"
                                                     placeholder="جستجو..."></span>
                                        </li>
                                        <li>
                                            <span><input type="submit" class="btn btn-info search-btn"
                                                         value="search"></span>
                                        </li>
                                    </div>
                                </form>
                            </ul>

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        {{--<th><input type="checkbox" class="select-all"></th>--}}
                                        <th class="text-center">ردیف</th>
                                        <th class="text-center">عکس کاربری</th>
                                        <th class="text-center">نام و نام خانوادگی</th>
                                        {{--<th>نام کاربری</th>--}}
                                        <th class="text-center">ایمیل</th>
                                        <th class="text-center">وضعیت</th>
                                        <th class="text-center">ویرایش</th>
                                        <th class="text-center">حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($users) != 0)
                                        <?php $counter = 1?>
                                        @foreach($users as $user)
                                            <tr>
                                                {{--<th><input type="checkbox" class="checkbox" name="checkbox" value=""></th>--}}
                                                <td class="align-middle">{{ $counter++ }}</td>
                                                <td class="align-middle">
                                                    <img class="img-circle"
                                                         src="{{ $user->photo ? asset( $user->photo ) : 'https://uifaces.co/images/man.svg'}}"
                                                         width="70" height="70"
                                                         alt="photo">
                                                </td>
                                                <td class="align-middle">{{ $user->name }}</td>
                                                <td class="align-middle">{{ $user->email }}</td>
                                                <td class="align-middle">{{ $user->status == '1' ? 'فعال' : 'غیرفعال'  }}</td>
                                                <td>
                                                    <a href="{{ route('user.edit',$user->id) }}"
                                                       class="btn btn-success btn-sm">ویرایش</a>
                                                </td>
                                                <td class="align-middle">
                                                    <form action="{{ route('user.destroy',$user->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">حدف</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <div class="alert alert-info">
                                            <ul>
                                                <li>کاربری یافت نشد.برای مشاهده لیست کاربران <span><a
                                                                href="{{ route('show.user') }}">اینجا</a></span> کلیک
                                                    کنید.
                                                </li>
                                            </ul>
                                        </div>
                                    @endif
                                    </tbody>

                                </table>
                                {{ $users->links() }}
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection