@extends('frontend.layout.app')
@section('content')
    <main class="main">

        <!-- Breadcum start --->
        <div class="site-breadcrumb" style="background: url({{ asset('frontend/assets/s/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title"> About Us </h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"> About Us </li>
                </ul>
            </div>
        </div>
        <!-- Breadcum End --->


        <!-- About us Start --->
        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img">
                                <img src="{{ asset('storage/about/'.@$about->image) }}" alt style="width:100%" />
                            </div>
                            <div class="about-experience">
                                <div class="about-experience-icon">
                                    <i class="fa fa-car" aria-hidden="true"></i>
                                </div>
                                <b>10 Years Of <br />
                                    Quality Service</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline justify-content-start">
                                    <i class="flaticon-drive"></i>
                                    About Us
                                </span>

                                <h2 class="site-title">{{@$about->heading}}</h2>
                            </div>

                            <p class="about-text">
                               {!! @$about->content !!}
                            </p>

                            <div class="about-list-wrapper">
                                <ul class="about-list list-unstyled">
                                    <li>Reliable and comfortable airport taxi services</li>
                                    <li>Professional drivers and well-maintained vehicles</li>
                                    <li>Hassle-free and convenient airport transfers</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About us End --->




    </main>
@endsection
