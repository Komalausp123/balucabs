@extends('admin.layout.app')
@section('content')
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <!-- Main content -->
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Testimonial</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
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

                        <form enctype="multipart/form-data" role="form" id="myform" method="post"
                            action="{{ route('testimonial-update', $tests->id) }}">
                            @csrf
                            {{-- @method('PATCH') --}}
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mt-2">
                                            <div class="form-group mt-2">

                                                <label for="Name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ $tests->name }}">
                                                @if ($errors->has('content'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('content') }}</strong>
                                                    </span>
                                                @endif
                                            </div>


                                            <label for="Designation">Location</label>
                                            <input type="text" class="form-control" id="location" name="location"
                                                value="{{ $tests->designation }}">
                                            @if ($errors->has('location'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('location') }}</strong>
                                                </span>
                                            @endif

                                        </div>


                                        <label for=""> content </label>
                                        <input type="hidden" name="id" value="{{ $tests->id }}"
                                            class="form-control" id="text">
                                        <textarea rows="5" class="form-control" id="content " name="content" required>{!! $tests->content !!}</textarea>
                                        @if ($errors->has('content '))
                                            <span class="required">
                                                <strong>{{ $errors->first('content') }}</strong>
                                            </span>
                                        @endif

                                        <label for=""> Image </label>
                                        <div class="table table-bordered">
                                            <img src="{{ asset('storage/testimonial/' . $tests->image) }}" alt=""
                                                class="img-responsive" width="200px" />
                                        </div>

                                        <label for=""> Image</label>
                                        <input type="file" name="image" class="form-control" id="image"
                                            value="{{ $tests->image }}">
                                        @if ($errors->has('image'))
                                            <span class="required">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif


                                        <div class="form-group">
                                            <label for="price">Status <span class="required">*</span></label><br>
                                            <label for="chkYes">
                                                <input type="radio" class="status" value="active" name="status"
                                                    checked="" @if ($tests->status == 'active') checked @endif />
                                                @if ($errors->has('status'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('status') }}</strong>
                                                    </span>
                                                @endif
                                                Active
                                            </label>
                                            <label for="chkNo">
                                                <input type="radio" class="status" value="inactive" name="status"
                                                    @if ($tests->status == 'inactive') checked @endif />
                                                @if ($errors->has('status'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('status') }}</strong>
                                                    </span>
                                                @endif
                                                Inactive
                                            </label>
                                        </div>
                                        <div>

                                            <div class="form-group">
                                                <button id="submit" type="submit" class="btn btn-primary">Update
                                                    Testimonials</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->


        <!-- /.content -->
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
    <script>
        CKEDITOR.replace('discription');
    </script>
@endsection
