@extends('pages.layout.layouts')
@section('title')
Bảng bệnh nhân
@endsection
@section('content')



<!-- BEGIN CONTAINER -->

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Patient Datatables
                    <small>users datatable samples</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->

        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Tables</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Patient Tables</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        @if($error = Session::get('error'))
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                        @endif
                        <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">Simple Table</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="{{route('benhnhan.create')}}">
                                <i class="icon-cloud-upload"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Bệnh Nhân</th>
                                        <th>Ngày Sinh</th>
                                        <th>Giới Tính</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Email</th>
                                        <th>Ngày Khám</th>
                                        <th>Tên Bệnh Viện</th>
                                        <th>Tên Bác Sĩ</th>
                                        <th>Tên Chuyên Khoa</th>
                                        <th>Khung giờ khám</th>
                                        <th width="230px">Action</th>
                                        @foreach ($benhnhan as $key => $value)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $value->hovaten }}</td>
                                            <td>{{ Carbon\Carbon::parse($value->ngaysinh)->format('d/m/Y') }}</td>
                                            <td>{{ $value->gioitinh }}</td>
                                            <td>{{ $value->sodienthoai }}</td>
                                            <td>{{ $value->email}}</td>
                                            <td>{{ Carbon\Carbon::parse($value->ngaykham)->format('d/m/Y') }}</td>
                                            <td>{{ $value->benhvien->tenbenhvien}}</td>
                                            <td>{{ $value->bacsi->tenbacsi }}</td>
                                            <td>{{ $value->chuyenkhoa->tenchuyenkhoa}}</td>
                                            <td>
                                                @if($value->khunggio)
                                                    {{ $value->khunggio->khunggio }}
                                                @else
                                                    Trống
                                                @endif
                                            </td>
                                            <td>    
                                                <a class="btn btn-primary" href="{{ route('benhnhan.edit',$value->id) }}">Edit</a>
                                                <a class="btn btn-info" href="{{ route('benhnhan.show',$value->id) }}">Show</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <!-- END SAMPLE TABLE PORTLET-->
            </div>
        </div>

    {!! $benhnhan->links() !!}
    <!-- END SAMPLE TABLE PORTLET-->
    </div>


<!-- END PAGE BASE CONTENT -->
</div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->


<!-- END CONTAINER -->





@endsection