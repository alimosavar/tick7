@extends('admin.master')
@section('content')
    <!-- MAIN WRAPPER -->

    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner">
            <div class="row rrr" style="margin-top: 50px !important;">
                <div class="col-lg-12">
                    <h4 class="page-title"> ایجاد محصول جدید</h4>
                </div>
            </div>
            <hr/>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel box box-success">
                        <div class="panel-heading">
                            محصول جدید
                        </div>
                        <div class="panel-body">
                            @include('admin.partials.errors')
                            @if(\Illuminate\Support\Facades\Session::has('create'))
                                <div class="alert alert-success">
                                    {{ Session('create') }}
                                </div>
                            @endif
                            <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>نام*</label>
                                    <input value="{{ old('name') }}" type="text" name="name" class="form-control"
                                           placeholder="نام...">
                                </div>
                                <div class="form-group">
                                    <label>توضیحات*</label>
                                    <input type="text" value="{{ old('description') }}" name="description"
                                           class="form-control"
                                           placeholder="توضیحات...">
                                </div>
                                <div class="form-group">
                                    <label>تصویر*</label>
                                    <input type="file" name="pic" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="status" value="0" checked
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">غیر فعال</label>
                                    </span>
                                    &nbsp; | &nbsp;
                                    <span class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="status" value="1"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">فعال</label>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label>قیمت*</label>
                                    <input type="number" value="{{ old('price') }}" name="price" class="form-control"
                                           placeholder="قیمت...">
                                </div>
                                <div class="form-group">
                                    <label>تخفیف</label>
                                    <input type="number" value="{{ old('discount') }}" name="discount"
                                           class="form-control"
                                           placeholder="تخفیف...">
                                </div>

                                <input type="submit" name="createProduct-btn" class="btn btn-success center-block"
                                       value="ایجاد">
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
