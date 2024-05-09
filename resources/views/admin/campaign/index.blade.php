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
                    <li class="breadcrumb-item active" aria-current="page"> View Campaign </li>
                </ol><!-- End breadcrumb -->


            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">
                        <div class="card-header">
                            <h4 class="text-white"> Campaign's </h4>
                            <a href="{{ route('campaign_create') }}"
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
                                        <th>Campaign Name </th>
                                        <th> campaign ID</th>
                                        <th>Campaign Image</th>
                                        <th> Venue</th>
                                        <th> From Date</th>
                                        <th> To date</th>
                                        <th> Rent </th>
                                        <th> Status </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($campaigns as $key => $campaign)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $campaign->name }}</td>
                                            <td>{{ $campaign->campaign_id }}</td>
                                            <td><img src="{{ asset('storage/campaign/' . basename($campaign->image)) }}"
                                                    alt="" class="img-responsive" width="300px" /></td>
                                            <td>{{ $campaign->venue }}</td>
                                            <td>{{ $campaign->from }}</td>
                                            <td>{{ $campaign->to }}</td>
                                            <td> {{ $campaign->rent }}</td>
                                            <td>
                                                @if (Carbon\Carbon::now() < $campaign->to)
                                                    Pending
                                                @else
                                                    Completed
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('campaign_edit', $campaign->id) }}"
                                                    class="btn btn-secondary">
                                                    Edit
                                                </a>
                                                <a href="{{ route('campaign_delete', $campaign->id) }}"
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
