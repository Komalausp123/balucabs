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
                    <li class="breadcrumb-item active" aria-current="page"> Vendor Detail</li>
                </ol>
            </div>
            <!--row open-->
            <div class="row profile-card">
                <!-- Edit Profile card -->
                <div class="col-lg col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Add campaign : </h4>
                        </div>
                        @if (session('flash_success'))
                            <div class="alert alert-success">
                                {{ session('flash_success') }}
                            </div>
                        @endif
                        @if (session('flash_error'))
                            <p class="text-danger">
                                {{ session('flash_error') }}
                    </div>
                    @endif
                    <div class="card-body">
                        <div class="card-body ">
                            <form enctype="multipart/form-data" role="form" id="myform" method="POST"
                                action="{{ route('vendor_detail_edit_post') }}">
                                @csrf

                                <div class="row add-products-page manual_upload">
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Vendor Name </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Vendor Name " value="{{ $detail->name }}">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-2">
                                                <h6 class="mb-0"> Email </h6>
                                            </div>
                                            <div class="col-sm-10 text-secondary">
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Email" value="{{ $detail->email }}">
                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Phone </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Phone" value="{{ $detail->phone }}">
                                                @error('phone')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-2">
                                                <h6 class="mb-0"> Address </h6>
                                            </div>
                                            <div class="col-sm-10 text-secondary">
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Address" value="{{ $detail->address }}">
                                                @error('address')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <button type="submit" class="btn btn-danger mx-2">Submit</button>
                                    <a href="{{ route('vendor_detail_index') }}" class="btn btn-primary mx-2">Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
