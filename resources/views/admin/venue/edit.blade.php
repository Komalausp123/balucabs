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
                    <li class="breadcrumb-item active" aria-current="page"> Venue</li>
                </ol>
            </div>
            <!--row open-->
            <div class="row profile-card">
                <!-- Edit Profile card -->
                <div class="col-lg col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Add Venue : </h4>
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
                            <form method="POST" action="{{ route('venue_edit_post') }}">
                                @csrf
                                <div class="row add-products-page">
                                    <div class="col-md-6">
                                        <input type="hidden" name="id" value="{{ $venue->id }}">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Venue </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="name" class="form-control" placeholder="Name"
                                                    value="{{ $venue->name }}">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Address </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Address" value="{{ $venue->address }}">
                                                @error('address')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Pincode </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="pincode" class="form-control"
                                                    placeholder="Pincode " value="{{ $venue->pincode }}">
                                                @error('pincode')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Contact </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="contact" class="form-control"
                                                    placeholder="Phone No. " value="{{ $venue->phone }}">
                                                @error('contact')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> State </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <select name="state" id="state" class="form-control"
                                                    onchange="populateCities()">
                                                    <option value="{{ $venue->state }}">{{ $venue->state }}</option>

                                                </select>
                                                @error('state')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> City</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <select id="city" name="city" class="form-control">
                                                    <option value="{{ $venue->city }}">{{ $venue->city }}</option>

                                                </select>
                                                @error('city')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                        <button type="Cancel" class="btn btn-primary">Cancel</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
    <!--app-content closed-->
@endsection
