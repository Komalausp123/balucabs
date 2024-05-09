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
                    <li class="breadcrumb-item active" aria-current="page"> View Vendor Campaign </li>
                </ol><!-- End breadcrumb -->


            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card export-database">
                        <div class="card-header">
                            <h4 class="text-white"> Vendor Campaign's </h4>
                            <a href="{{ route('vendor_campaign_create') }}"
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
                                        <th> Vendor Name </th>
                                        <th> Campaign ID</th>
                                        <th> Category name</th>
                                        <th>Campaign Rent</th>
                                        <th>Profit Percentage</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $prevMain = null;
                                    @endphp

                                    @foreach ($campaigns as $main => $data)
                                        @php
                                            $code = $data->vc_id;
                                            $rowspan =
                                                $code != $prevMain ? count($campaigns->where('vc_id', $code)) : 0;
                                            $prevMain = $code;
                                        @endphp
                                        <tr>
                                            @if ($rowspan > 0)
                                                <td rowspan="{{ $rowspan }}">{{ $main + 1 }}</td>
                                                <td rowspan="{{ $rowspan }}">{{ $data->vendor->name }}</td>
                                            @endif
                                            <td>{{ $data->campaign->name }}</td>
                                            <td>{{ $data->category->name }}</td>
                                            <td>{{ $data->rent }}</td>
                                            <td>{{ $data->percent }}</td>
                                            @if ($rowspan > 0)
                                                <td rowspan="{{ $rowspan }}">
                                                    <a href="{{ route('vendor_campaign_edit', $data->vc_id) }}"
                                                        class="btn btn-secondary">Edit</a>
                                                    <a href="{{ route('vendor_campaign_delete', $data->vc_id) }}"
                                                        class="btn btn-primary">Delete</a>
                                                </td>
                                            @endif
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
