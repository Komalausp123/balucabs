@extends('admin.layout.app')
@section('content')
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create AboutUs</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if (Session::has('flash_success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ Session::get('flash_success') }}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger m-2">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form enctype="multipart/form-data" role="form" id="myform" method="post"
                            action="{{route('about-store')}}">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">

                                        {{--  <div class="form-group mt-2">
                                            <label for="Heading">Heading</label>
                                            <input type="text" name="heading" class="form-control" id="heading">

                                            @if ($errors->has('heading'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('heading') }}</strong>
                                                </span>
                                            @endif
                                        </div>  --}}



                                        <div class="form-group mt-2">
                                            <label for="Heading">Heading</label>
                                            <input type="text" class="form-control" id="heading" name="heading" >                                            @if ($errors->has('heading'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('heading') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group mt-2">
                                            <label for="Content">Content</label>
                                            <textarea rows="5" class="form-control" id="content" name="content" ></textarea>
                                            @if ($errors->has('content'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('content') }}</strong>
                                                </span>
                                            @endif
                                        </div>




                                        <div class="form-group mt-2">
                                            <label for="image"> Image</label>
                                            <input type="file" name="image" class="form-control" id="image"
                                                >
                                            @if ($errors->has('image'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                    


                                        <label for="">Status</label>
                                        <div class="form-group">

                                            <label for="chkYes">
                                                <input type="radio" class="status" value="Active" name="status" checked="" />
                                                @if ($errors->has('status'))
                                                    <span class="required">
                                                          <strong>{{ $errors->first('status') }}</strong>
                                                      </span>
                                                @endif
                                                Active
                                            </label>
                                            <label for="chkNo">
                                                <input type="radio" class="status" value="InActive" name="status"/>
                                                @if ($errors->has('status'))
                                                    <span class="required">
                                                          <strong>{{ $errors->first('status') }}</strong>
                                                      </span>
                                                @endif
                                                Inactive
                                            </label>
                                        </div>


                                        <div class="form-group">
                                            <button id="submit" type="submit" class="btn btn-primary">Create AboutUs</button>
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

    </div>
@endsection
