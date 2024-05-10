@extends('admin.layout.app')
@section('content')
    <!-- Main content -->
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Privacy Policy</h3>
                            <a href="{{ route('privacy-create') }}" class="btn btn-primary float-right">Add</a>
                        </div>

                        @if (Session::has('flash_success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ Session::get('flash_success') }}
                            </div>
                        @endif
                        @if (Session::has('flash_error'))
                            <div class="alert alert-danger m-2">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ Session::get('flash_error') }}
                            </div>
                        @endif
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="table table-bordered " style="text-align:center">

                                <thead>
                                    <tr>
                                        <th style="width:2%">Sl No:</th>
                                        <th style="width:15%">Heading</th>
                                        <th style="width:15%">Content</th>
                                        <th style="width:15%">status</th>
                                        <th style="width:8%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($privacies as $key => $privacy)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>

                                            <td> {{ $privacy->heading }}</td>
                                            <td> {!! $privacy->content !!}</td>
                                            <td>
                                                @if ($privacy->status == 'active')
                                                    <span class="badge badge-pill bg-success">Active</span>
                                                @else
                                                    <span class="badge badge-pill bg-danger">InActive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('privacy-edit', $privacy->id) }}" class="btn btn-info">
                                                    Edit</a>
                                                <br> <br>
                                                <a onclick="return confirm('Are you sure you want to delete this item?');"
                                                    href="{{ route('privacy-destroy', $privacy->id) }}" class="btn btn-danger">
                                                    Delete
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            {{-- {{ $blog->links('pagination::bootstrap-4') }} --}}
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection
