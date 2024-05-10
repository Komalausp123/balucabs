@extends('admin.layout.app')
@section('content')
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="app-content">
        <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
            <div class="card card-primary mt-4">
                <div class="card-header">
                  <h3 class="card-title">Social Media</h3>
                </div>
                <!-- /.card-header -->
                @if(Session::has('flash_success'))
                <div class="alert alert-warning alert-dismissible fade show m-2" role="alert">
                    {{Session::get('flash_success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif

                  <div class="container">

                   <div class="row">
                    <div class="col-sm-2"></div>
                      <div class="col-sm-12">
                        <div class="form-body">
                            {{-- {{dd($social)}} --}}
                            <form method="post" action="{{route('social-update-submit')}}">
                                @csrf
                                <div class="row">
                                <div class="form-group col-md-6 col-sx-12 col-lg-6">
                                    <label class="col-md-3 control-label"> Facebook :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="facebook" maxlength="60" class="form-control" placeholder="facebook link" value="{{($social)?$social->facebook:''}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sx-12 col-lg-6">
                                    <label class="col-md-3 control-label">Instagram :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="instagram" maxlength="60" class="form-control" placeholder="instagram link" value="{{($social)?$social->instagram:''}}">
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sx-12 col-lg-6">
                                    <label class="col-md-3 control-label">Youtube :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="youtube" maxlength="60" class="form-control" placeholder="youtube link" value="{{($social)?$social->youtube:''}}">
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sx-12 col-lg-6">
                                    <label class="col-md-3 control-label">Twitter :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="twitter" maxlength="60" class="form-control" placeholder="twitter link" value="{{($social)?$social->twitter:''}}">
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sx-12 col-lg-6">
                                    <label class="col-md-3 control-label">LinkedIn :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="linkedin" maxlength="60" class="form-control" placeholder="linkedin link" value="{{($social)?$social->linkedin:''}}">
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sx-12 col-lg-6">
                                    <label class="col-md-3 control-label">Pinterest :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="pinterest" maxlength="60" class="form-control" placeholder="pinterest link" value="{{($social)?$social->pinterest:''}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sx-12 col-lg-6">
                                    <label class="col-md-3 control-label">Phone :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="phone" maxlength="60" class="form-control" placeholder="Phone " value="{{($social)?$social->phone:''}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sx-12 col-lg-6">
                                    <label class="col-md-3 control-label">Email :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" maxlength="60" class="form-control" placeholder="Email " value="{{($social)?$social->email:''}}">
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sx-12 col-lg-6">
                                    <label class="col-md-3 control-label">Location :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="location" maxlength="60" class="form-control" placeholder="Location " value="{{($social)?$social->location:''}}">
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sx-12 col-lg-6">
                                    <!-- <label class="col-md-3 control-label">Address :</label>
                                    <div class="col-md-9">
                                        <textarea rows="5" class="form-control" type="text" name="address" >{{($social)?$social->address:''}}</textarea>
                                    </div> -->
                                </div>
                                <!-- <div class="form-group col-md-12 col-sx-12 col-lg-6">
                                    <label class="col-md-3 control-label">Footer Content :</label>
                                    <div class="col-md-9">
                                        <textarea rows="5" class="form-control" type="text" name="footer_content" >{{($social)?$social->footer_content:''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sx-12 col-lg-6">
                                    <label class="col-md-3 control-label">Map :</label>
                                    <div class="col-md-9">
                                        <textarea rows="5" class="form-control" type="link" name="map" >{{($social)?$social->map:''}}</textarea>



                                    </div>
                                </div> -->

                                <div class="form-group col-md-12 col-sx-12 col-lg-6">
                                        @if($social)
                                        <input type="submit" class="btn btn-primary px-4" value="Update">
                                        @else
                                        <input type="submit" class="btn btn-primary px-4" value="Add">
                                        @endif
                                        <a href="{{url('admin-dashboard')}}" class="btn btn-danger px-4" >Cancel</a>

                                </div>
                                </div>
                            </form>
                        </div>
                      </div>
                    <div class="col-sm-2"></div>
                   </div>
                  </div>

            </div>
          </div>
         </div>
        </div><!-- /.container-fluid -->
    </div>

      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection