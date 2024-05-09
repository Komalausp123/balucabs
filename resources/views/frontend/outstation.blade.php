@extends('frontend.layout.app')
@section('content')
    <main>
        <div class="site-breadcrumb" style="background: url({{ asset('frontend/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title"> OutStation Taxi </h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"> OutStation Taxi </li>
                </ul>
            </div>
        </div>
        <!-- Breadcum End --->


        <!-- outstation services started here -->

        <div class="car-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">
                                <i class="flaticon-drive"></i>
                                Balu Cabs
                            </span>
                            <h2 class="site-title"> OutStation Taxi</h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- List Start --->
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="car-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="car-img car-list-img">
                                <img src="{{ asset('frontend/img/taxi/a1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Sedan AC (4+1)</a></h4>
                                    <p style="color:#000;">5 SEATER</p>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        Fare ₹ 12.00/km <br>


                                        300km/day<br>

                                        Beta ₹ 300/day
                                        <span class="car-price" style="margin: 0 0 0 126px;">₹ 12/km </span>

                                    </li>
                                    <P style="color:#000;">Toll, state permit & parking charges extra</P>


                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Sedan%20with%20AC%20for%20OutStation%20Taxi.%0APlease%20Contact%20me"
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
                                    <h4><a href="#"> SUV Ertiga AC 6+1 </a></h4>
                                    <p style="color:#000;">7 SEATER</p>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        Fare ₹ 15.00/km <br>
                                        300km/day<br>

                                        Beta ₹ 400/day

                                        <span class="car-price" style="margin: 0 0 0 126px;">₹ 15/km </span>

                                    </li>

                                    <P style="color:#000;">Toll, state permit & parking charges extra</P>




                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20SUVErtiga%20with%20AC%20for%20OutStation%20Taxi.%0APlease%20Contact%20me"
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
                                    <h4><a href="#"> Innova AC 6+1 </a></h4>
                                    <p style="color:#000;">7 SEATER</p>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        Fare ₹ 17.00/km <br>
                                        300km/day<br>

                                        Beta ₹ 400/day
                                        <span class="car-price" style="margin: 0 0 0 126px;">₹ 17/km </span>

                                    </li>

                                    <P style="color:#000;">Toll, state permit & parking charges extra</P>



                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Innova%20with%20AC%20for%20OutStation%20Taxi.%0APlease%20Contact%20me"
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
                                    <h4><a href="#"> Innova AC 7+1 </a></h4>
                                    <p style="color:#000;">8 SEATER</p>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        Fare ₹ 18.00/km <br>
                                        300km/day<br>

                                        Beta ₹ 400/day
                                        <span class="car-price" style="margin: 0 0 0 126px;">₹ 18/km </span>

                                    </li>
                                    <P style="color:#000;">Toll, state permit & parking charges extra</P>



                                    <!-- <span class="car-price">₹ 18/km </span> -->
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20InnovaAc%20with%20AC%20for%20OutStation%20Taxi.%0APlease%20Contact%20me"
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
                                <img src="{{ asset('frontend/img/taxi/Crysta 7+1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Crysta AC 7+1 </a></h4>
                                    <p style="color:#000;">8 SEATER</p>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        Fare ₹ 20.00/km <br>
                                        300km/day<br>

                                        Beta ₹ 400/day
                                        <span class="car-price" style="margin: 0 0 0 126px;">₹ 20/km </span>

                                    </li>

                                    <P style="color:#000;">Toll, state permit & parking charges extra</P>



                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Crysta%20with%20AC%20for%20OutStation%20Taxi.%0APlease%20Contact%20me"
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
                                <img src="{{ asset('frontend/img/taxi/TempoTraveller 12+1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Tempo Traveler 12+1 </a></h4>
                                    <p style="color:#000;">13 SEATER</p>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        Fare ₹ 22.00/km <br>
                                        300km/day<br>

                                        Beta ₹ 500/day
                                        <span class="car-price" style="margin: 0 0 0 126px;">₹ 22/km </span>

                                    </li>

                                    <P style="color:#000;">Toll, state permit & parking charges extra</P>



                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('contact') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20TempoTravelers%20with%20AC%20for%20OutStation%20Taxi.%0APlease%20Contact%20me"
                                        class="theme-btn2"> <span class="fa fa-whatsapp"> </span>Whatsapp </a>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List End  --->
                </div>
            </div>
        </div>

        <!-- outstation services started here -->



        <br><br>

    </main>
@endsection
