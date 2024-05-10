@extends('admin.layout.app')
@section('content')
    <!-- Main content -->
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blog Comments</h3>
                            <!-- <a href="{{ route('blog-create') }}" class="btn btn-primary float-right">Add</a> -->
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
                                        <th>Sl No:</th>
                                        <th>Blog Name</th>

                                        <th>Name</th>
                                       
                                        <th>Email</th>
                                        <th>Website</th>
                                        <th>Comment</th>

                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogcomments as $key => $blog)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td> {{$blog->blog->name}} </td>

                                            <td> {{ $blog->name }}</td>


                                            <td> {{ $blog->email }}</td>
                                            <td>
                                            {{ $blog->website }}
                                            </td>
                                           
                                            <td>
                                            {{ $blog->comment }}
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
