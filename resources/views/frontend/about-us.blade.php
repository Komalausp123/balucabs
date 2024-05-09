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
                                <img src="{{ asset('frontend/assets/s/img/about/ab1.jpg') }}" alt />
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

                                <h2 class="site-title">Balu Cabs</h2>
                            </div>

                            <p class="about-text">
                                At Balu Cabs, we are dedicated to providing reliable and comfortable airport
                                taxi services. With a fleet of well-maintained vehicles and professional drivers,
                                we ensure a safe and enjoyable journey for our customers.
                                Our goal is to make your airport transfer experience hassle-free
                                and convenient. <br>
                                Whether you're traveling for business or leisure, our
                                team is committed to providing prompt and efficient service, ensuring you
                                reach your destination on time, every time.
                                We strive to maintain the highest standards of customer satisfaction,
                                offering competitive rates and personalized service to meet your specific
                                travel needs. Book your airport taxi with Balu Cabs and experience the difference!
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
