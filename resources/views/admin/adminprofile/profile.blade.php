@extends('admin.layout.app')
@section('content')

    <!--app-content open-->
    <div class="app-content">
        <section class="section">
            <!--page-header open-->
            <div class="page-header">
                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i>Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                </ol>
                <!-- End breadcrumb -->

            </div>
            <!--page-header closed-->
            <!--row open-->
            <div class="row">
                <div class="col-lg-12 col-xl-5 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="userprofile social">
                                    <div class="userpic"> <img src="{{ asset('/storage/admins/'.@$admin->image) }}"
                                            alt=""  class="userpicimg" > </div>
                                    <h3 class="username"></h3>
                                    <p>{{ Auth::guard('admin')->user()->name }}</p>
                                    <div class="text-center mb-2">
                                        <h3 class="username"></h3>
                                    </div>
                                    <div class="mt-3">
                                        <a href="mailto:admin@gmail.com" class="btn btn-secondary btn-sm mt-1">
                                            <i class="fe fe-envelope followbtn ml-1"></i>{{ Auth::guard('admin')->user()->email }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-7 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Admin Details</h4>
                        </div>
                        <div class="card-body">
                            {{-- <p><b>User ID :</b> admin123</p> --}}
                            <p><b>Name :</b> {{ Auth::guard('admin')->user()->name }}</p>
                            <p><b>Email :</b> {{ Auth::guard('admin')->user()->email }}</p>
                            {{-- <p><b>Phone :</b> {{@$admin->phone}}</p>
                            <p><b>Address : </b> {{@$admin->address}}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!--row closed-->
            <!--row open-->
            @if (Session::has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ Session::get('message') }}
                            </div>
                        @endif
            <div class="row profile-card">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{ route('admin-update-profile',Auth::guard('admin')->user()->id) }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <input type="hidden" name="name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Name" value="{{ Auth::guard('admin')->user()->id }}">


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Name" value="{{ Auth::guard('admin')->user()->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email" value="{{ Auth::guard('admin')->user()->email }}">
                                    </div>
                                  <div class="form-group">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Phone"  maxlength="10" value="{{ Auth::guard('admin')->user()->id }}">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <textarea type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" value="{{@$admin->address}}">{{@$admin->address}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Profile Pic </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                            <input type="file" name="image" class="form-control" id="image" >

                                            </div>
                                        </div>
                                    </div>                                 </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Change Password</h4>
                        </div>
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ Session::get('success') }}
                            </div>
                        @endif
                            @if (session('old_password'))
                        <div class="alert alert-danger">
                            {{ session('old_password') }}
                        </div>
                        @endif
                        <div class="card-body">
                            <form action="{{ route('admin-change-password',Auth::guard('admin')->user()->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter Name" value="{{ Auth::guard('admin')->user()->id }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Old Password</label>
                                        <input type="text" value="{{@$admin->passwordhint}}" name="old_password" class="form-control"
                                            id="exampleInputPassword1" placeholder="Old Password">
                                            @if ($errors->has('old_password'))
                                            <span style="color: red" class="invalid feedback"role="alert">
                                                <strong>{{ $errors->first('old_password') }}.</strong>
                                            </span>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Password</label>
                                        <input type="password" name="new_password" class="form-control"
                                            id="exampleInputPassword1" placeholder="New Password">
                                            @if ($errors->has('new_password'))
                                            <span style="color: red" class="invalid feedback"role="alert">
                                                <strong>{{ $errors->first('new_password') }}.</strong>
                                            </span>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control"
                                            id="exampleInputPassword1" placeholder="Confirm Password">
                                            @if ($errors->has('confirm_password'))
                                            <span  style="color: red" class="invalid feedback"role="alert">
                                                <strong>{{ $errors->first('confirm_password') }}.</strong>
                                            </span>
                                    @endif
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--row closed-->
        </section>
    </div>
    <!--app-content closed-->
@endsection
