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
                    <li class="breadcrumb-item active" aria-current="page"> View Store </li>
                </ol><!-- End breadcrumb -->


            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">
                        <div class="card-header">
                            <h4 class="text-white"> Store's </h4>
                            <a href="{{ route('store_create') }}" class="btn btn-primary btn-sm float-right mr-3 mb-3">+</a>
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
                                        <th>Store Name </th>
                                        <th> store ID</th>
                                        <th>Store Image</th>
                                        <th> Venue</th>
                                        <th> Deposit</th>
                                        <th> Renovation Charge</th>
                                        <th> Lease Period</th>
                                        <th> Rent </th>
                                        <th> Maximun Sale</th>
                                        <th> Percentage</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($stores as $key => $store)
                                        <tr>

                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $store->name }}</td>
                                            <td>{{ $store->store_id }}</td>
                                            <td><img src="{{ asset('storage/store/' . basename($store->image)) }}"
                                                    alt="" class="img-responsive" width="300px" /></td>
                                            <td>{{ $store->venue }}</td>
                                            <td>{{ $store->deposit }}</td>
                                            <td>{{ $store->making_charge }}</td>
                                            <td>{{ $store->lease_period }}</td>
                                            <td> {{ $store->rent }}</td>
                                            <td> {{ $store->max_sale }} </td>
                                            <td> {{ $store->percent }} </td>
                                            <td>
                                                <a href="{{ route('store_edit', $store->id) }}" class="btn btn-secondary">
                                                    Edit
                                                </a>
                                                <a href="{{ route('store_delete', $store->id) }}" class="btn btn-primary">
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
