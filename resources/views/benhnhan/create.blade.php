@extends('pages.layout.layouts')
@section('title')
Thêm một bệnh nhân mới
@endsection
@section('content')
<!-- BEGIN PAGE BASE CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line boxless tabbable-reversed">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#tab_1" data-toggle="tab"> 2 Columns </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_0">
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Form Actions On Bottom
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @if($mess=Session::get('error'))
                                    <div class="alert alert-danger">
                                        <li>{{ $mess }}</li>
                                    </div>
                                    @endif
                                    <form action="{{route('benhnhan.store')}}" method="post" class="horizontal-form">
                                        @csrf
                                        <div class="form-body">
                                            <h3 class="form-section">Person Info</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Họ và tên</label>
                                                        <input name="hovaten" type="text" id="hovaten" class="form-control" placeholder="Nhập Họ và tên bệnh nhân..." value="{{old('hovaten')}}" >
                                                        @error('hovaten')
                                                            <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Số điện thoại</label>
                                                        <input name="sodienthoai" type="text" id="sodienthoai" class="form-control" placeholder="Nhập Số điện thoại"  value="{{old('sodienthoai')}}">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input name="email" type="text" id="email" class="form-control" placeholder="Nhập Email" name="email"  value="{{old('email')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Ngày tháng năm sinh</label>
                                                        <input class="form-control" data-provide="datepicker" name="ngaysinh" data-toggle="datepicker" autocomplete="off" id="ngaysinh" required /  value="{{old('ngaysinh')}}">
                                                        <!-- <input name = "ng" type="text" class="form-control" placeholder="dd/mm/yyyy"> </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Giới tính</label>
                                                        <select name="gioitinh" class="form-control">
                                                            <option value="1">Male</option>
                                                            <option value="0">Female</option>
                                                        </select>
                                                        <span class="help-block"> Select your gender </span>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                            </div>
                                            <h3 class="form-section">Địa chỉ thường trú</h3>
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <label>Địa chỉ </label>
                                                        <input type="text" class="form-control" placeholder="Nhập địa chỉ thường trú..." id="diachi" value="" > </div>
                                                </div>
                                            </div>
                                            <h3 class="form-section">Thông tin đặt lịch</h3>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Ngày Khám</label>
                                                        <input class="form-control" data-provide="datepicker" name="ngaykham" autocomplete="off" id="ngaykham" required />
                                                        <!-- <input name = "ng" type="text" class="form-control" placeholder="dd/mm/yyyy"> </div> -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Bệnh viện</label>
                                                                <select name="id_benhvien" class="form-control">
                                                                    <option value="">--Chọn bệnh viện--</option>
                                                                    @foreach($benhvien as $value)
                                                                    <option value="{{$value->id}}">{{$value->tenbenhvien}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Chuyên Khoa</label>
                                                                <select name="id_chuyenkhoa" class="form-control">
                                                                    <option value="">--Chọn chuyên khoa--</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Bác sĩ</label>
                                                                <select name="id_bacsi" class="form-control">
                                                                    <option value="">--Chọn Bác sĩ--</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Khung giờ</label>
                                                                <select name="id_khunggio" class="form-control">
                                                                    <option value="">--Chọn khung giờ--</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="pull-right">
                                                                <button type="button" class="btn default">Cancel</button>
                                                                <button type="submit" class="btn blue">
                                                                    <i class="fa fa-check"></i> Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
</div>

@endsection