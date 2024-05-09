@extends('admin.layout.app')
@section('content')
    <!--app-content open-->
    <style>
        .button {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: rgb(20, 20, 20);
            border: none;
            font-weight: 600;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
            cursor: pointer;
            transition-duration: 0.3s;
            overflow: hidden;
            position: relative;
            gap: 2px;
        }

        .svgIcon {
            width: 12px;
            transition-duration: 0.3s;
        }

        .svgIcon path {
            fill: white;
        }

        .button:hover {
            transition-duration: 0.3s;
            background-color: rgb(255, 69, 69);
            align-items: center;
            gap: 0;
        }

        .bin-top {
            transform-origin: bottom right;
        }

        .button:hover .bin-top {
            transition-duration: 0.5s;
            transform: rotate(160deg);
        }
    </style>
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
                            <h4> Edit employee : </h4>
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
                                action="{{ route('employee_edit_post') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $employee->id }}">
                                <div class="row add-products-page">
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Employee Name </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Employee Name " value="{{ $employee->name }}">
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
                                                    placeholder="phone number" value="{{ $employee->phone }}">
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
                                                    placeholder="Alternative Phone number"
                                                    value="{{ $employee->alt_phone }}">
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
                                                    placeholder="Email" value="{{ $employee->email }}">
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
                                                    placeholder="Qualification" value="{{ $employee->qualification }}">
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
                                                    placeholder="Qualification" value="{{ $employee->joining }}">
                                                @error('joining')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Currecnt State </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text " class="form-control" value="{{ $employee->state }}"
                                                    readonly>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> State </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <select name="state" id="state" class="form-control"
                                                    onchange="populateCities()">
                                                    <option value="">--Select State--</option>

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
                                                <h6 class="mb-0">Current City</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text " class="form-control" value="{{ $employee->city }}"
                                                    readonly>
                                            </div>
                                        </div>
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
                                                    placeholder=" Pincode. " value="{{ $employee->pincode }}">
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
                                                    placeholder=" adharr. " value="{{ $employee->adharr }}">
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

                                                <textarea name="address" class="form-control" cols="30" rows="10">{{ $employee->address }}</textarea>
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
                                        <div class="row mb-3 ">
                                            @foreach ($employee->document as $doc)
                                                <div class="col-11">
                                                    <a class="form-control"
                                                        href="{{ asset('storage/employee_document/' . $doc->document) }}"
                                                        target="_blank">{{ $doc->document }}</a>
                                                </div>
                                                <div class="col-1 px-0">
                                                    <a class="button"
                                                        href="{{ route('employee_document_delete', $doc->id) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 69 14" class="svgIcon bin-top">
                                                            <g clip-path="url(#clip0_35_24)">
                                                                <path fill="black"
                                                                    d="M20.8232 2.62734L19.9948 4.21304C19.8224 4.54309 19.4808 4.75 19.1085 4.75H4.92857C2.20246 4.75 0 6.87266 0 9.5C0 12.1273 2.20246 14.25 4.92857 14.25H64.0714C66.7975 14.25 69 12.1273 69 9.5C69 6.87266 66.7975 4.75 64.0714 4.75H49.8915C49.5192 4.75 49.1776 4.54309 49.0052 4.21305L48.1768 2.62734C47.3451 1.00938 45.6355 0 43.7719 0H25.2281C23.3645 0 21.6549 1.00938 20.8232 2.62734ZM64.0023 20.0648C64.0397 19.4882 63.5822 19 63.0044 19H5.99556C5.4178 19 4.96025 19.4882 4.99766 20.0648L8.19375 69.3203C8.44018 73.0758 11.6746 76 15.5712 76H53.4288C57.3254 76 60.5598 73.0758 60.8062 69.3203L64.0023 20.0648Z">
                                                                </path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_35_24">
                                                                    <rect fill="white" height="14" width="69">
                                                                    </rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>

                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 69 57" class="svgIcon bin-bottom">
                                                            <g clip-path="url(#clip0_35_22)">
                                                                <path fill="black"
                                                                    d="M20.8232 -16.3727L19.9948 -14.787C19.8224 -14.4569 19.4808 -14.25 19.1085 -14.25H4.92857C2.20246 -14.25 0 -12.1273 0 -9.5C0 -6.8727 2.20246 -4.75 4.92857 -4.75H64.0714C66.7975 -4.75 69 -6.8727 69 -9.5C69 -12.1273 66.7975 -14.25 64.0714 -14.25H49.8915C49.5192 -14.25 49.1776 -14.4569 49.0052 -14.787L48.1768 -16.3727C47.3451 -17.9906 45.6355 -19 43.7719 -19H25.2281C23.3645 -19 21.6549 -17.9906 20.8232 -16.3727ZM64.0023 1.0648C64.0397 0.4882 63.5822 0 63.0044 0H5.99556C5.4178 0 4.96025 0.4882 4.99766 1.0648L8.19375 50.3203C8.44018 54.0758 11.6746 57 15.5712 57H53.4288C57.3254 57 60.5598 54.0758 60.8062 50.3203L64.0023 1.0648Z">
                                                                </path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_35_22">
                                                                    <rect fill="white" height="57" width="69">
                                                                    </rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>

                                                </div>
                                            @endforeach
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
