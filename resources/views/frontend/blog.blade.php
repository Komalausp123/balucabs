@extends('frontend.layout.app')
@section('content')


   <main class="main">

      <!-- Breadcum start --->
      <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
         <div class="container">
            <h2 class="breadcrumb-title"> Blog  </h2>
            <ul class="breadcrumb-menu">
               <li><a href="index.html">Home</a></li>
               <li class="active"> Blog  </li>
            </ul>
         </div>
      </div>
      <!-- Breadcum End --->


         <!-- our blogs -->

    <div class="car-area bg py-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <div class="site-heading text-center">
              <h2 class="site-title"> Our Blog </h2>
              <div class="heading-divider"></div>
            </div>
          </div>
        </div>
        <div class="row">
       

          <!-- List Start --->
          @foreach($blogs as $blog)
          <!-- List Start --->
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="car-item wow fadeInUp" data-wow-delay=".25s">
              <div class="car-img car-list-img">
                <img src="{{asset('storage/blog/'.@$blog->image)}}" alt style="width:100%" />
              </div>
              <div class="car-content">
                <div class="car-top">
                  <h4><a href="#">{{@$blog->heading}}</a></h4>
                  <p>

                  {!! @$blog->content !!}

                  </p>
                  <a href="{{route('blog-details',$blog->slug)}}" class="theme-btn2">
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- our blogs -->




   </main>
  @endsection