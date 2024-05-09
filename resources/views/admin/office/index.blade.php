@extends('admin.layout.app')
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> View Office </li>
                </ol><!-- End breadcrumb -->


            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">
                        <div class="card-header">
                            <h4 class="text-white"> Office's </h4>
                            <a href="{{ route('office_create') }}"
                                class="btn btn-primary btn-sm float-right mr-3 mb-3">+</a>
                        </div>
                        <div class="card-body">
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
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Office Name </th>
                                        <th>Phone</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Pincode </th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($offices as $key => $office)
                                        <tr>

                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $office->name }}</td>
                                            <td>{{ $office->phone }}</td>
                                            <td>{{ $office->state }}</td>
                                            <td>{{ $office->city }}</td>
                                            <td>{{ $office->pincode }}</td>
                                            <td>{{ $office->address }}</td>
                                            <td>
                                                <a href="{{ route('office_edit', $office->id) }}"
                                                    class="btn btn-secondary">
                                                    Edit
                                                </a>
                                                <a href="{{ route('office_delete', $office->id) }}"
                                                    class="btn btn-primary">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!--row closed-->

    </section>
    </div>
    <!--app-content closed-->
@endsection
