@extends('frontend.layout.app')
@section('content')


   <main class="main">

      <!-- Breadcum start --->
      <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
         <div class="container">
            <h2 class="breadcrumb-title"> Blog </h2>
            <ul class="breadcrumb-menu">
               <li><a href="index.html">Home</a></li>
               <li class="active"> Blog </li>
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
                     <h2 class="site-title"> Blog Details </h2>
                     <div class="heading-divider"></div>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- List Start --->
               <div class="col-md-10">
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
                        

                           <br>
                           <div class="bsp_reveiw_wrt">
                              <form class="comments_form">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <h4 class="title mb30" style="color: #000;">Write a review</h4>

                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Your Name"><br>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <input type="email" class="form-control" placeholder="Email">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <textarea class="form-control" rows="6" placeholder="Message"></textarea><br>
                                          <button type="submit" class="btn btn-thm"> Submit Now </button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <!-- List End  --->



            </div>
         </div>
      </div>

      <!-- our blogs -->




   </main>
   @endsection