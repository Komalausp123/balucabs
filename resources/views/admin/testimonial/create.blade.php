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
                            <h3 class="card-title">Create Testimonial</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form enctype="multipart/form-data" role="form" id="myform" method="post"
                            action="{{ route('testimonial-store') }}">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mt-2">
                                            <label for="Image"> Image</label>
                                            <input type="file" name="image" class="form-control" id="image"
                                                required>
                                            @if ($errors->has('image'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <br>
                                        <div class="form-group mt-2">
                                            <label for="Name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                required>
                                            @if ($errors->has('name'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group mt-2">
                                            <label for="Designation">Location</label>
                                            <input type="text" class="form-control" id="location" name="location"
                                                required>
                                            @if ($errors->has('location'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('location') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group mt-2">
                                            <label for="">Content </label>
                                            <textarea rows="5" class="form-control" id="content" name="content" required></textarea>
                                            @if ($errors->has('content'))
                                                <span class="required">
                                                    <strong>{{ $errors->first('content') }}</strong>
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
                                            <button id="submit" type="submit" class="btn btn-primary">Create
                                                Testimonial</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->

    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
    
@endsection
