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
                    <li class="breadcrumb-item active" aria-current="page"> store</li>
                </ol>
            </div>
            <!--row open-->
            <div class="row profile-card">
                <!-- Edit Profile card -->
                <div class="col-lg col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Edit store : </h4>
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
                                action="{{ route('store_edit_post') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $store->id }}">
                                <div class="row add-products-page">
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Store Name </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Store Name " value="{{ $store->name }}">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Store Id </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="store_id" class="form-control"
                                                    placeholder="Store Id" value="{{ $store->store_id }}">
                                                @error('store_id')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Venue </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <select name="venue" id="store" class="form-control">
                                                    <option value="{{ $store->venue }}">{{ $store->venue }}</option>
                                                    @foreach ($venues as $venue)
                                                        <option value="{{ $venue->name }}">{{ $venue->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('venue')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Deposit </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="deposit" class="form-control"
                                                    placeholder="Deposit " value="{{ $store->deposit }}">
                                                @error('deposit')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Renovation Charges </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="making_charge" class="form-control"
                                                    placeholder="Renovation Charges. " value="{{ $store->making_charge }}">
                                                @error('making_charge')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Lease Period </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="lease_period" class="form-control"
                                                    placeholder=" Lease Period. " value="{{ $store->lease_period }}">
                                                @error('lease_period')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Rent </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="rent" class="form-control"
                                                    placeholder="Rent. " value="{{ $store->rent }}">
                                                @error('rent')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Maximun Sales </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="max_sale" class="form-control"
                                                    placeholder=" Maximun Sales. " value="{{ $store->max_sale }}">
                                                @error('max_sale')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Percentage </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="percent" class="form-control"
                                                    placeholder="Percentage. " value="{{ $store->percent }}">
                                                @error('percent')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-2">
                                                <label for="">Current Image</label>
                                            </div>
                                            <div class="col-10">
                                                <img src="{{ asset('storage/store/' . basename($store->image)) }}"
                                                    alt="" class="img-responsive" width="300px" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Store Image </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" name="image" class="form-control"
                                                    placeholder="image. " value="{{ old('image') }}">
                                                @error('image')
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
