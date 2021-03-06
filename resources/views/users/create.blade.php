@extends('pages.layout.layouts')
@section('title')
Tạo người dùng mới
@endsection
@section('content')
<div class="page-content-wrapper">
<div class="page-content">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create User Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('users.index')}}">User</a> </li>
              <li class="breadcrumb-item active">Create User Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif
<!-- goi session bao loi -->
@if($mess=Session::get('error'))
<div class="alert alert-danger">
<li>{{ $mess }}</li>
</div>
@endif

    <section class="content">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleName">User Name</label>
                    <input type="text" class="form-control" id="username" placeholder="UserName" name="username" value="{{old('username')}}">
                    @error('username')
                        <p style="color: red;"><i><b>{{$message}}</b></i></p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleName">Full Name</label>
                    <input type="text" class="form-control" id="fullname" placeholder="UserName" name="fullname" value="{{old('fullname')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{old('email')}}">
                    @error('email')
                        <p style="color: red;"><i><b>{{$message}}</b></i></p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    @error('password')
                        <p style="color: red;"><i><b>{{$message}}</b></i></p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="confirmPassword" name="confirm-password">
                  </div>
                  <div class="form-group">
                    <label for="exampleDanhso">Mã nhân viên</label>
                    <input type="text" class="form-control" id="manhanvien" placeholder="" name="manhanvien" value="{{old('manhanvien')}}">
                    @error('manhanvien')
                        <p style="color: red;"><i><b>{{$message}}</b></i></p>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Input avatar</label>
                        <input type="file" class="form-control" name="avatar" value="{{old('avatar')}}">
                      
                  </div>
                  <div class="form-group">
                    <strong>Role:</strong>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
         
        </div>
      </div>
    </section>
</div>
</div>
@endsection
