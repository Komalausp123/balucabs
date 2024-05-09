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
                    <li class="breadcrumb-item active" aria-current="page"> campaign</li>
                </ol>
            </div>
            <!--row open-->
            <div class="row profile-card">
                <!-- Edit Profile card -->
                <div class="col-lg col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Edit campaign : </h4>
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
                                action="{{ route('campaign_edit_post') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $campaign->id }}">
                                <div class="row add-products-page">
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Campaign Name </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Campaign Name " value="{{ $campaign->name }}">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Campaign Id </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="campaign_id" class="form-control"
                                                    placeholder="Campaign Id" value="{{ $campaign->campaign_id }}">
                                                @error('campaign_id')
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
                                                <select name="venue" id="venue" class="form-control">
                                                    <option value="{{ $campaign->venue }}">{{ $campaign->venue }}</option>
                                                    @foreach ($venues as $venue)
                                                        <option value="{{ $venue->name }}">{{ $venue->name }}
                                                        </option>
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
                                                <h6 class="mb-0"> Rent </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="rent" class="form-control"
                                                    placeholder="Rent. " value="{{ $campaign->rent }}">
                                                @error('rent')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> From Date </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="date" name="from" class="form-control"
                                                    placeholder="Deposit " value="{{ $campaign->from }}">
                                                @error('from')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> To Date </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="date" name="to" class="form-control"
                                                    placeholder="Deposit " value="{{ $campaign->to }}">
                                                @error('to')
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
                                                <img src="{{ asset('storage/campaign/' . basename($campaign->image)) }}"
                                                    alt="" class="img-responsive" width="300px" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Campaign Image </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="file" name="image" value="{{ old('image') }}">
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
