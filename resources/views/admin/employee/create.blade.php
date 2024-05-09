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
                    <li class="breadcrumb-item active" aria-current="page"> employee</li>
                </ol>
            </div>
            <!--row open-->
            <div class="row profile-card">
                <!-- Edit Profile card -->
                <div class="col-lg col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Add employee : </h4>
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
                                action="{{ route('employee_post') }}">
                                @csrf
                                <div class="row add-products-page">
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Employee Name </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Employee Name " value="{{ old('name') }}">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Phone Number</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="phone number" value="{{ old('phone') }}">
                                                @error('phone')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Alternative Phone Number</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="alt_phone" class="form-control"
                                                    placeholder="Alternative Phone number" value="{{ old('alt_phone') }}">
                                                @error('alt_phone')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Email ID</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Email" value="{{ old('email') }}">
                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Qualification</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="qualification" class="form-control"
                                                    placeholder="Qualification" value="{{ old('qualification') }}">
                                                @error('qualification')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Joining Date</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="date" name="joining" class="form-control"
                                                    placeholder="Qualification" value="{{ old('joining') }}">
                                                @error('joining')
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
                                                    <option value="">--Select State--</option>
                                                    <!-- Add Indian states here -->
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
                                                    <option value="">--Select City--</option>
                                                </select>
                                                @error('city')
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
                                                    placeholder=" Pincode. " value="{{ old('pincode') }}">
                                                @error('pincode')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Adharr Number </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="adharr" class="form-control"
                                                    placeholder=" adharr. " value="{{ old('adharr') }}">
                                                @error('adharr')
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

                                                <textarea name="address" class="form-control" cols="30" rows="10">{{ old('address') }}</textarea>
                                                @error('address')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Document's </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" name="document[]" class="form-control"
                                                    placeholder=" document. " value="{{ old('document') }}" multiple>
                                                @error('document')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <button type="submit" class="btn btn-danger mx-2">Submit</button>
                                    <button type="Cancel" class="btn btn-primary mx-2">Cancel</button>
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
