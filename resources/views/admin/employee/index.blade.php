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
                    <li class="breadcrumb-item active" aria-current="page"> View Employees </li>
                </ol><!-- End breadcrumb -->


            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">
                        <div class="card-header">
                            <h4 class="text-white"> Employees's </h4>
                            <a href="{{ route('employee_create') }}"
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
                                        <th>Employees Name </th>
                                        <th>Phone</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Pincode </th>
                                        <th>Address</th>
                                        <th>Documents</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($employees as $key => $employee)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->phone }}</td>
                                            <td>{{ $employee->state }}</td>
                                            <td>{{ $employee->city }}</td>
                                            <td>{{ $employee->pincode }}</td>
                                            <td>{{ $employee->address }}</td>
                                            <td>
                                                @foreach ($employee->document as $doc)
                                                    <a href="{{ asset('storage/employee_document/' . $doc->document) }}"
                                                        target="_blank">{{ $doc->document }}</a>
                                                    <br>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('employee_edit', $employee->id) }}"
                                                    class="btn btn-secondary">
                                                    Edit
                                                </a>
                                                <a href="{{ route('employee_delete', $employee->id) }}"
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
