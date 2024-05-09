@extends('frontend.layout.app')
@section('content')
    <main class="main">

        <!-- Breadcum start --->
        <div class="site-breadcrumb" style="background: url({{ asset('frontend/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title"> Oneway Drop Taxi </h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"> Oneway Drop Taxi </li>
                </ul>
            </div>
        </div>
        <!-- Breadcum End --->

        <!---  Oneway Drop Taxi  Services Section Start --->
        <div class="car-area bg py-120 bg-grey1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">
                                <i class="flaticon-drive"></i>
                                Balu Cabs
                            </span>
                            <h2 class="site-title"> Oneway Drop Taxi </h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- List Start --->


                    <!-- List Start --->
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="car-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="car-img car-list-img">
                                <img src="{{ asset('frontend/img/taxi/a1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Sedan (4+1) with AC </a></h4>
                                    <P style="color:#000;">5 SEATER </P>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 18.00/km
                                    </li>

                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        150km/day
                                    </li>

                                    <li>
                                        <i class="far fa-road"></i>
                                        Bata ₹300/day
                                    </li>
                                    <span class="car-price"> ₹ 18/km</span>

                                    <li>Toll, state permit & parking charges extra</li>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Sedan%20with%20AC%20for%20OneWayDrop%20Taxi.%0APlease%20Contact%20me"
                                        class="theme-btn2"> <span class="fa fa-whatsapp"> </span>Whatsapp </a>


                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- List End  --->

                    <!-- List Start --->
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="car-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="car-img car-list-img">
                                <img src="{{ asset('frontend/img/taxi/a4.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Prime Sedan (4+1) with AC </a></h4>
                                    <P style="color:#000;">5 SEATER </P>


                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 18.00/km
                                    </li>

                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        150km/day
                                    </li>

                                    <li>
                                        <i class="far fa-road"></i>
                                        Bata ₹300/day
                                    </li>
                                    <span class="car-price"> ₹ 18/km</span>

                                    <li>Toll, state permit & parking charges extra</li>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20PrimeSedan%20with%20AC%20for%20OneWayDrop%20Taxi.%0APlease%20Contact%20me"
                                        class="theme-btn2"> <span class="fa fa-whatsapp"> </span>Whatsapp </a>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List End  --->

                    <!-- List Start --->
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="car-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="car-img car-list-img">
                                <img src="{{ asset('frontend/img/taxi/ER.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> SUV Ertiga (6+1) with AC </a></h4>
                                    <P style="color:#000;">7 SEATER </P>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 25.00/km
                                    </li>

                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        150km/day
                                    </li>

                                    <li>
                                        <i class="far fa-road"></i>
                                        Bata ₹400/day
                                    </li>
                                    <span class="car-price"> ₹ 25/km</span>

                                    <li>Toll, state permit & parking charges extra</li>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>



                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20SuvErtiga%20with%20AC%20for%20OneWayDrop%20Taxi.%0APlease%20Contact%20me"
                                        class="theme-btn2"> <span class="fa fa-whatsapp"> </span>Whatsapp </a>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List End  --->

                    <!-- List Start --->
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="car-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="car-img car-list-img">
                                <img src="{{ asset('frontend/img/taxi/Innova 6+1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#">Innova (6+1) with AC</a></h4>
                                    <P style="color:#000;">7 SEATER </P>


                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 28.00/km
                                    </li>

                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        150km/day
                                    </li>

                                    <li>
                                        <i class="far fa-road"></i>
                                        Bata ₹400/day
                                    </li>
                                    <span class="car-price"> ₹ 28/km</span>

                                    <li>Toll, state permit & parking charges extra</li>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Innova%20with%20AC%20for%20OneWayDrop%20Taxi.%0APlease%20Contact%20me"
                                        class="theme-btn2"> <span class="fa fa-whatsapp"> </span>Whatsapp </a>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List End  --->

                    <!-- List Start --->
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="car-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="car-img car-list-img">
                                <img src="{{ asset('frontend/img/taxi/Innova AC 7+1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Innova (7+1) with AC </a></h4>
                                    <P style="color:#000;">8 SEATER </P>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 28.00/km
                                    </li>

                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        150km/day
                                    </li>

                                    <li>
                                        <i class="far fa-road"></i>
                                        Bata ₹400/day
                                    </li>
                                    <span class="car-price"> ₹ 28/km</span>

                                    <li>Toll, state permit & parking charges extra</li>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Innova%20with%20AC%20for%20OneWayDrop%20Taxi.%0APlease%20Contact%20me"
                                        class="theme-btn2"> <span class="fa fa-whatsapp"> </span>Whatsapp </a>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="car-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="car-img car-list-img">
                                <img src="{{ asset('frontend/img/taxi/Crysta 7+1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Innova crysta (7+1) with AC </a></h4>
                                    <P style="color:#000;">8 SEATER </P>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 30.00/km
                                    </li>

                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        150km/day
                                    </li>

                                    <li>
                                        <i class="far fa-road"></i>
                                        Bata ₹400/day
                                    </li>
                                    <span class="car-price"> ₹ 30/km</span>

                                    <li>Toll, state permit & parking charges extra</li>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20InnovaCrysta%20with%20AC%20for%20OneWayDrop%20Taxi.%0APlease%20Contact%20me"
                                        class="theme-btn2"> <span class="fa fa-whatsapp"> </span>Whatsapp </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List End  --->
                </div>
            </div>
        </div>
        <!--- Oneway Drop Taxi Services Section End --->


    </main>
@endsection
