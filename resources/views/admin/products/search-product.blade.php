@extends('admin.master')
@section('content')
    <!-- MAIN WRAPPER -->
    <!--PAGE CONTENT -->
    <div id="content">
        <div class="inner" style="margin-top: 50px !important;">
            <div class="row">
                <div class="col-lg-12">
                    <h1> محصولات جستجو شده</h1>
                </div>
            </div>
            <hr/>

            <div class="row">
                <div class="col-lg-12">
                    @if(\Illuminate\Support\Facades\Session::has('delete'))
                        <div class="alert alert-danger">
                            {{Session('delete')}}
                        </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Session::has('create'))
                        <div class="alert alert-success">
                            {{Session('create')}}
                        </div>
                    @endif
                        @if(\Illuminate\Support\Facades\Session::has('edit'))
                            <div class="alert alert-info">
                                {{Session('edit')}}
                            </div>
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
                                <form method="get" action="{{ route('product.search') }}" style="margin-top: 2px;">
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
                                        <th class="text-center">عکس محصول</th>
                                        <th class="text-center">نام</th>
                                        <th class="text-center">توضیحات</th>
                                        <th class="text-center">قیمت</th>
                                        <th class="text-center">تخفیف(%)</th>
                                        <th class="text-center">وضعیت</th>
                                        <th class="text-center">ویرایش</th>
                                        <th class="text-center">حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $counter = 1?>
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="list-product-align">{{ $counter++ }}</td>
                                            <td class="list-product-align">
                                                <img class="img-circle"
                                                     src="{{ $product->photo ? asset( $product->photo ) : 'https://uifaces.co/images/man.svg'}}"
                                                     width="70" height="70"
                                                     alt="photo">
                                            </td>
                                            <td class="list-product-align">{{ $product->name }}</td>
                                            <td class="list-product-align">{{ Str::limit($product->description,50) }}</td>
                                            <td class="list-product-align">{{number_format($product->price)}}</td>
                                            <td class="list-product-align">{{ $product->discount }}</td>
                                            @if($product->status == '1')
                                                <td class="list-product-align">  <span class="badge" style="background-color:green;">فعال</span>
                                            @else
                                                <td class="list-product-align">  <span class="badge" style="background-color:red;"> غیرفعال</span>
                                            @endif
                                            <td class="list-product-align">
                                                <a href="{{ route('product.edit',$product->id) }}"
                                                   class="btn btn-success btn-sm">ویرایش</a>
                                            </td>
                                            <td class="list-product-align">

                                                <div class="d-inline-block">
                                                    <form action="{{ route('product.destroy',$product->id) }}"
                                                          method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">حدف</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                                <div class="text-center">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                        </form>
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
