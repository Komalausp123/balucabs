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
                            <h3 class="card-title">Edit Aboutus</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if (Session::has('flash_success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ Session::get('flash_success') }}
                            </div>
                        @endif

                        <form enctype="multipart/form-data" role="form" id="myform" method="post"
                            action="{{ route('about-update', $abouts->id) }}">
                            @csrf
                            {{-- @method('PATCH') --}}
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mt-2">
                                            <div class="form-group mt-2">



                                                <label for="Heading">Heading</label>
                                                <input type="text" class="form-control" id="heading" name="heading"
                                                    value="{{ $abouts->heading }}">
                                                @if ($errors->has('content'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('content') }}</strong>
                                                    </span>
                                                @endif
                                            </div>


                                            <label for=""> Content </label>
                                            <input type="hidden" name="id" value="{{ $abouts->id }}"
                                                class="form-control" id="text">
                                            <textarea rows="5" class="form-control" id="content " name="content">{!! $abouts->content !!}</textarea>
                                            @if ($errors->has('content '))
                                                <span class="required">
                                                    <strong>{{ $errors->first('content ') }}</strong>
                                                </span>
                                            @endif




                                            <label for=""> Image </label>
                                            <div class="table table-bordered">
                                                <img src="{{ asset('storage/about/' . $abouts->image) }}" alt=""
                                                    class="img-responsive" width="200px" />
                                            </div>

                                            <label for="image"> Image</label>
                                            <input type="file" name="image" class="form-control" id="image"
                                                value="{{ $abouts->image }}">
                                            @if ($errors->has('image'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                            @endif
                                            <br><br>

                                        </div>

                                        <div class="form-group">
                                            <label for="price">Status <span class="required">*</span></label><br>
                                            <label for="chkYes">
                                                <input type="radio" class="status" value="Active" name="status"
                                                    checked="" @if ($abouts->status == 'active') checked @endif />
                                                @if ($errors->has('status'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('status') }}</strong>
                                                    </span>
                                                @endif
                                                Active
                                            </label>
                                            <label for="chkNo">
                                                <input type="radio" class="status" value="InActive" name="status"
                                                    @if ($abouts->status == 'inactive') checked @endif />
                                                @if ($errors->has('status'))
                                                    <span class="required">
                                                        <strong>{{ $errors->first('status') }}</strong>
                                                    </span>
                                                @endif
                                                Inactive
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <button id="submit" type="submit" class="btn btn-primary">Update
                                                About</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <script>
            CKEDITOR.replace('content');
        </script>

        <!-- /.content -->
    </div>
@endsection
