@extends('frontend.layout.app')
@section('content')
    <main class="main"><br><br>
        <!-- WEB Banners Start -->
        <div class="hero-section d-none d-lg-block">
            <div class="hero-slider owl-carousel owl-theme">

                <!-- List Start -->

                <div class="hero-singl position-relative">
                    <img class="hero-single-image" src="{{ asset('frontend/assets/img/banners-new/banner1s.png') }}" />
                </div>
                <!-- List End -->

                <!-- List Start -->
                <div class="hero-single">
                    <img class="hero-single-image" src="{{ asset('frontend/assets/img/banners-new/banner2s.png') }}" />
                </div>
                <!-- List End -->

            </div>
        </div>

        <!-- WEB Banners End -->

        <!-- MOBILE VIEW Banners Section Start -->
        <div id="carouselExample" class="mobile-banner carousel slide d-block d-lg-none">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/assets/img/banners-new/mob1.png') }}" class="" alt="">

                    <!-- Text Start -->
                    <div class="">
                        <p class="caption-title1">
                            Bangalore Airport Taxi Pick or
                        </p>

                        <p class="caption-title2">
                            Drop at <span class="price-title1"> Rs.699 </span> Book Now!
                        </p>

                        <p class="caption-title3">
                            Sedan AC cars 4+1 ( 5 SEATER )
                        </p>

                        <p class="caption-button1">
                            Free Cancellation
                        </p>

                        <p class="caption-button2">
                            24-Hour Support
                        </p>

                        <p class="caption-button3">
                            Save up to 35%
                        </p>

                        <p class="caption-button4">
                            <i class="fa fa-phone-square fa-call" aria-hidden="true"></i>
                            Call us now to make your booking <span class="phone-title1"> +91 8884400238 </span>
                        </p>


                    </div>
                    <!-- Text End -->

                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/assets/img/banners-new/mob2.png') }}" class="" alt="">

                    <!-- Text Start -->
                    <div class="">
                        <p class="caption2-title1">
                            Booking for Airport Sedan AC Cars
                        </p>

                        <p class="caption2-title3">
                            4+1 ( 5 SEATER )
                        </p>

                        <p class="caption2-button1">
                            Free Cancellation
                        </p>

                        <p class="caption2-button2">
                            24-Hour Support
                        </p>

                        <p class="caption2-button3">
                            Save up to 35%
                        </p>

                        <p class="caption2-button4">
                            <i class="fa fa-phone-square fa-call" aria-hidden="true"></i>
                            Call us now to make your booking <span class="phone2-title1"> +91 8884400238 </span>
                        </p>


                    </div>
                    <!-- Text End -->


                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--  MOBILE VIEW Banners Section END -->


        <div class="user-profile py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="user-profile-wrapper">
                            <div class="user-profile-card-title">
                                <h5 style="color:#000;"> Estimate Fare Rs 699.00 (Toll Optional) </h5>
                                <p style="font-size: 18px;"> Upto 30 km Included/Extra ₹18.00/km </p>
                            </div>
                            <div class="radio-buttons">
                                <input type="radio" id="cityToAirport" name="direction" value="cityToAirport" checked>
                                <label for="cityToAirport" style="color: #000;"> <b> City to Airport </b></label>
                                <input type="radio" id="airportToCity" name="direction" value="airportToCity">
                                <label for="airportToCity" style="color: #000;"> <b> Airport to City </b></label>
                            </div>
                            <div class="form-group airport-name">
                                <form method="post" action="contact_form2.php" class="form-horizontal"><br>

                                    <div class="row">
                                        <!-- First Column -->
                                        <div class="col-12">
                                            <input type="hidden" name="triptype" value="cityToAirport">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter Name" required><br>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="phone" class="form-control" maxlength="10"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                placeholder="Enter Number" required style="margin: -15px 0 0 0;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Second Column -->
                                        <div class="col-12">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter Email" required><br>
                                        </div>
                                        <!-- <div class="col-12">
                                                    <input type="text" class="form-control" placeholder="Vahical Type"><br>
                                                  </div> -->
                                        <div class="col-12 col-lg-12 mb-3">
                                            <div class="form-group">
                                                <!-- Dropdown for Vehicle Service Selection -->
                                                <select class="form-control" name="vehicleService" id="vehicleService"
                                                    required style="margin: -15px 0 0 0;">
                                                    <option value=""> Select Vehicle Type </option>
                                                    <!-- Placeholder option -->
                                                    <option value="Sedan"> Sedan </option>
                                                    <option value="Prime Sedan"> Prime Sedan </option>
                                                    <option value="Ertiga"> Ertiga</option>
                                                    <option value="SUV Ertiga">SUV Ertiga </option>
                                                    <option value="Innova"> Innova </option>
                                                    <option value="Crysta"> Crysta </option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="pickup_location"
                                                placeholder="Enter Pickup Location" required><br>
                                        </div>
                                        <div class="col-12">
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="pickup_landmark"
                                                    placeholder="Enter Pickup Landmark" required
                                                    style="margin: -15px 0 0 0;"><br>
                                            </div>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="drop_location"
                                                    value="Drop to Kempegowda International AirPort"
                                                    placeholder="Drop to Kempegowda International AirPort" readonly
                                                    style="margin: -15px 0 0 0;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- third Column -->
                                    </div>
                                    <div class="row">
                                        <!-- four Column -->
                                        <div class="col-12">
                                            <input type="text" name="date" class="form-control date-class"
                                                placeholder="Date" data-bs-toggle="modal" data-bs-target="#Datebtn"
                                                required style="margin: -15px 0 0 0;">
                                            <br>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" id="timeInput" class="form-control time-class"
                                                data-bs-toggle="modal" name="time" data-bs-target="#timebtn"
                                                placeholder="Time" required style="margin: -15px 0 0 0;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-left">
                                            <button type="submit" class="btn btn-primary submit-button">Book Now
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div class="form-group city-landmark" style="display: none;">
                                <form method="post" action="contact_form2.php" class="form-horizontal"><br>

                                    <div class="row">
                                        <!-- First Row -->
                                        <div class="col-12">
                                            <input type="hidden" name="triptype" value="airportToCity">

                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter Name" required><br>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="phone" maxlength="10"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                placeholder="Enter Number" required style="margin: -15px 0 0 0;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Second Row -->
                                        <div class="col-12">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter Email" required><br>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-12 col-lg-12 mb-3">
                                            <div class="form-group">
                                                <!-- Dropdown for Vehicle Service Selection -->
                                                <select class="form-control" name="vehicleService" id="vehicleService"
                                                    required style="margin: -25px 0 0 0;">
                                                    <option value=""> Select Vehicle Type </option>
                                                    <!-- Placeholder option -->
                                                    <option value="Sedan"> Sedan </option>
                                                    <option value="Prime Sedan"> Prime Sedan </option>
                                                    <option value="Ertiga"> Ertiga</option>
                                                    <option value="SUV Ertiga">SUV Ertiga </option>
                                                    <option value="Innova"> Innova </option>
                                                    <option value="Crysta"> Crysta </option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>




                                    </div>
                                    <br>

                                    <div class="row">
                                        <!-- Second Row -->
                                        <div class="col-12">
                                            <input type="text" name="pickup_location" class="form-control"
                                                value="Pickup Kempegowda International AirPort"
                                                placeholder="Pickup Kempegowda International AirPort" readonly
                                                style="margin: -45px 0 0 0;"><br>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="drop_location"
                                                placeholder="Drop Location" required style="margin: -10px 0 0 0;">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <input type="text" class="form-control" name="drop_landmark"
                                            placeholder="Enter Drop Landmark" required><br>
                                    </div>

                                    <div class="row">
                                        <!-- four Column -->
                                        <div class="col-12">
                                            <input type="text" name="date" class="form-control date-class1"
                                                placeholder="Date" data-bs-toggle="modal" data-bs-target="#Datebtn"
                                                required style="margin: -10px 0 0 0;">
                                            <br>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" id="timeInput1" class="form-control time-class1"
                                                data-bs-toggle="modal" name="time" data-bs-target="#timebtn"
                                                placeholder="Time" required style="margin: -12px 0 0 0;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-left">
                                            <button type="submit" class="btn btn-primary submit-button"> Book Now
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- new from section started here -->

        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <!-- <span class="site-title-tagline justify-content-start">
                                                <i class="flaticon-drive"></i>
                                                About Us
                                              </span> -->

                                <h2 class="site-title">Book AirPort Taxi With Balu Cabs</h2>
                            </div>

                            <p> Book Taxi For Airport Pickup or Drop with safe and secured professional taxi services.</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- new from section started here -->

        <!-- second section started here -->

        <!-- Section Start -->


        <!-- Section End -->

        <!-- second section started here -->


        <!---  Airport Taxi  Services Section Start --->
        <div class="car-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">
                                <i class="flaticon-drive"></i>
                                Balu Cabs
                            </span>
                            <h2 class="site-title">Airport Taxi</h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- List Start --->
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="car-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="car-img car-list-img">
                                <img src="{{ asset('frontend/assets/img/taxi/a1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Sedan (4+1) with AC</a></h4>
                                    <!--
                                                           <div class="car-rate">
                                                               <span>Demo</span>
                                                            </div>
                                                            -->
                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 699.00/-
                                    </li>
                                    <p style="color:#000;">Toll Optional</p>




                                    <li>
                                        <i class="far fa-road"></i>
                                        Upto 30 km
                                    </li>
                                    <span class="car-price">₹ 699.00</span>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('airport_form') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>




                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Sedan%20with%20AC%20for%20Airport%20Taxi.%0APlease%20Contact%20me"
                                        class="theme-btn2"> <span class="fa fa-whatsapp"> </span>Whatsapp
                                    </a>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List End  --->

                    <!-- List Start --->
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="car-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="car-img car-list-img">
                                <img src="{{ asset('frontend/assets/img/taxi/ETIOS.jpeg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Etios with AC </a></h4>
                                    <!--
                                                           <div class="car-rate">
                                                               <span>Demo</span>
                                                            </div>
                                                            -->
                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 749.00/-
                                    </li>

                                    <p style="color:#000;">Toll Optional</p>



                                    <li>
                                        <i class="far fa-road"></i>
                                        Upto 30 km
                                    </li>
                                    <span class="car-price">₹ 749.00</span>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('airport_form') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Etios%20with%20AC%20for%20Airport%20Taxi.%0APlease%20Contact%20me"
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
                                <img src="{{ asset('frontend/assets/img/taxi/a4.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#">Prime Sedan (4+1) with AC</a></h4>
                                    <!--
                                                           <div class="car-rate">
                                                               <span>Demo</span>
                                                            </div>
                                                            -->
                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 799.00/-
                                    </li>

                                    <p style="color:#000;">Toll Optional</p>


                                    <li>
                                        <i class="far fa-road"></i>
                                        Upto 30 km
                                    </li>
                                    <span class="car-price">₹ 799.00</span>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('airport_form') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Prime%20with%20AC%20for%20Airport%20Taxi.%0APlease%20Contact%20me"
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
                                <img src="{{ asset('frontend/assets/img/taxi/ER.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#">SUV Ertiga (6+1) with AC</a></h4>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 1300.00/-
                                    </li>

                                    <p style="color:#000;">Toll Optional</p>


                                    <li>
                                        <i class="far fa-road"></i>
                                        Upto 30 km
                                    </li>
                                    <span class="car-price">₹ 1300.00</span>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('airport_form') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20SUVeRTIGA%20with%20AC%20for%20Airport%20Taxi.%0APlease%20Contact%20me"
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
                                <img src="{{ asset('frontend/assets/img/taxi/Innova AC 7+1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Innova (7+1) with AC</a></h4>
                                    <!--
                                                           <div class="car-rate">
                                                               <span>Demo</span>
                                                            </div>
                                                            -->
                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 1500.00/-
                                    </li>

                                    <p style="color:#000;">Toll Optional</p>


                                    <li>
                                        <i class="far fa-road"></i>
                                        Upto 30 km
                                    </li>
                                    <span class="car-price">₹ 1500.00</span>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('airport_form') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Innova%20with%20AC%20for%20Airport%20Taxi.%0APlease%20Contact%20me"
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
                                <img src="{{ asset('frontend/assets/img/taxi/Crysta 7+1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Innova Crysta (7+1) with AC </a></h4>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="fa fa-inr"></i>
                                        Fare ₹ 1800.00/-
                                    </li>

                                    <p style="color:#000;">Toll Optional</p>

                                    <li>
                                        <i class="far fa-road"></i>
                                        Upto 30 km
                                    </li>
                                    <span class="car-price">₹ 1800.00</span>
                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('airport_form') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20InnovaCrysta%20with%20AC%20for%20Airport%20Taxi.%0APlease%20Contact%20me"
                                        class="theme-btn2"> <span class="fa fa-whatsapp"> </span>Whatsapp </a>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List End  --->
                </div>
            </div>
        </div>
        <!--- Airport Taxi  Services Section End --->

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
                                <img src="{{ asset('frontend/assets/img/taxi/a1.jpg') }}" alt />
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
                                <img src="{{ asset('frontend/assets/img/taxi/ER.jpg') }}" alt />
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
                                <img src="{{ asset('frontend/assets/img/taxi/Innova 6+1.jpg') }}" alt />
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
                                <img src="{{ asset('frontend/assets/img/taxi/Innova AC 7+1.jpg') }}" alt />
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
                                <img src="{{ asset('frontend/assets/img/taxi/Crysta 7+1.jpg') }}" alt />
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
                                <img src="{{ asset('frontend/assets/img/taxi/TempoTraveller 12+1.jpg') }}" alt />
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
                                <img src="{{ asset('frontend/assets/img/taxi/a1.jpg') }}" alt />
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
                                <img src="{{ asset('frontend/assets/img/taxi/a4.jpg') }}" alt />
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
                                <img src="{{ asset('frontend/assets/img/taxi/ER.jpg') }}" alt />
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
                                <img src="{{ asset('frontend/assets/img/taxi/Innova 6+1.jpg') }}" alt />
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
                                <img src="{{ asset('frontend/assets/img/taxi/Innova AC 7+1.jpg') }}" alt />
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
                                <img src="{{ asset('frontend/assets/img/taxi/Crysta 7+1.jpg') }}" alt />
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

        <!---  Local Taxi Services Section Start --->
        <div class="car-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">
                                <i class="flaticon-drive"></i>
                                Balu Cabs
                            </span>
                            <h2 class="site-title">Local Package </h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- List Start --->
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="car-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="car-img car-list-img">
                                <img src="{{ asset('frontend/assets/img/taxi/a1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Sedan (4+1) with AC </a></h4>
                                    <p style="color:#000;">5 SEATER </p>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        4Hrs 40Kms
                                    </li>

                                    <li>
                                        <i class="fa fa-inr"></i>
                                        <span class="car-price"> Fare ₹ 1100.00/- </span>
                                    </li>

                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        8Hrs 80Kms
                                    </li>

                                    <li>
                                        <i class="fa fa-inr"></i>
                                        <span class="car-price"> Fare ₹ 2000.00/- </span>
                                    </li>



                                    <li>
                                        <i class="far fa-list"></i>
                                        Extra ₹15.00 /km
                                    </li>

                                    <li>
                                        <i class="far fa-list"></i>
                                        Extra hour ₹130.00 /hour
                                    </li>

                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('local_form') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Sedan%20with%20AC%20for%20LocalPackage%20Taxi.%0APlease%20Contact%20me"
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
                                <img src="{{ asset('frontend/assets/img/taxi/a4.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Prime Sedan (4+1) with AC</a></h4>
                                    <P style="color:#000;">5 SEATER </P>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        4Hrs 40Kms
                                    </li>

                                    <li>
                                        <i class="fa fa-inr"></i>
                                        <span class="car-price"> Fare ₹ 1200.00/- </span>
                                    </li>

                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        8Hrs 80Kms
                                    </li>

                                    <li>
                                        <i class="fa fa-inr"></i>
                                        <span class="car-price"> Fare ₹ 2200.00/- </span>
                                    </li>



                                    <li>
                                        <i class="far fa-list"></i>
                                        Extra ₹15.00 /km
                                    </li>

                                    <li>
                                        <i class="far fa-list"></i>
                                        Extra hour ₹150.00 /hour
                                    </li>

                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('local_form') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Prime%20with%20AC%20for%20LocalPackage%20Taxi.%0APlease%20Contact%20me"
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
                                <img src="{{ asset('frontend/assets/img/taxi/ER.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> SUV Ertiga (6+1) with AC</a></h4>
                                    <P style="color:#000;">7 SEATER </P>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        4Hrs 40Kms
                                    </li>

                                    <li>
                                        <i class="fa fa-inr"></i>
                                        <span class="car-price"> Fare ₹ 1700.00/- </span>
                                    </li>

                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        8Hrs 80Kms
                                    </li>

                                    <li>
                                        <i class="fa fa-inr"></i>
                                        <span class="car-price"> Fare ₹ 2700.00/- </span>
                                    </li>



                                    <li>
                                        <i class="far fa-list"></i>
                                        Extra ₹15.00 /km
                                    </li>

                                    <li>
                                        <i class="far fa-list"></i>
                                        Extra hour ₹150.00 /hour
                                    </li>

                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('local_form') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20SUVeRTIGA%20with%20AC%20for%20LocalPackage%20Taxi.%0APlease%20Contact%20me"
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
                                <img src="{{ asset('frontend/assets/img/taxi/Innova AC 7+1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Innova (7+1) with AC </a></h4>
                                    <P style="color:#000;">8 SEATER</P>

                                </div>

                                <ul class="car-list">
                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        4Hrs 40Kms
                                    </li>

                                    <li>
                                        <i class="fa fa-inr"></i>
                                        <span class="car-price"> Fare ₹ 2000.00/- </span>
                                    </li>

                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        8Hrs 80Kms
                                    </li>

                                    <li>
                                        <i class="fa fa-inr"></i>
                                        <span class="car-price"> Fare ₹ 3000.00/- </span>
                                    </li>



                                    <li>
                                        <i class="far fa-list"></i>
                                        Extra ₹17.00 /km
                                    </li>

                                    <li>
                                        <i class="far fa-list"></i>
                                        Extra hour ₹170.00 /hour
                                    </li>

                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('local_form') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20Innova%20with%20AC%20for%20LocalPackage%20Taxi.%0APlease%20Contact%20me"
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
                                <img src="{{ asset('frontend/assets/img/taxi/Crysta 7+1.jpg') }}" alt />
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"> Innova Crysta (7+1) with AC </a></h4>
                                    <P style="color:#000;"> 8 SEATER </P>

                                </div>
                                <ul class="car-list">
                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        4Hrs 40Kms
                                    </li>

                                    <li>
                                        <i class="fa fa-inr"></i>
                                        <span class="car-price"> Fare ₹ 2400.00/- </span>
                                    </li>

                                    <li>
                                        <i class="far fa-steering-wheel"></i>
                                        8Hrs 80Kms
                                    </li>

                                    <li>
                                        <i class="fa fa-inr"></i>
                                        <span class="car-price"> Fare ₹ 3500.00/- </span>
                                    </li>



                                    <li>
                                        <i class="far fa-list"></i>
                                        Extra ₹18.00 /km
                                    </li>

                                    <li>
                                        <i class="far fa-list"></i>
                                        Extra hour ₹180.00 /hour
                                    </li>

                                </ul>
                                <div class="car-footer">
                                    <a href="{{ route('local_form') }}" class="theme-btn1">
                                        <span class="fa fa-car"></span>
                                        Book Now
                                    </a>

                                    <a href="https://api.whatsapp.com/send?phone=+91 8884400237&text=Hi%20Balu%20Cabs,%20Need%20to%20Book%20InnovaCrysta%20with%20AC%20for%20LocalPackage%20Taxi.%0APlease%20Contact%20me"
                                        class="theme-btn2"> <span class="fa fa-whatsapp"> </span>Whatsapp </a>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List End  --->
                </div>
            </div>
        </div>
        <!--- Local Taxi Services Section End --->

        <!--- Why choose us start --->

        <div class="choose-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-content">
                            <div class="site-heading wow fadeInDown" data-wow-delay=".25s">
                                <span class="site-title-tagline text-white justify-content-start">
                                    <i class="flaticon-drive"></i>
                                    About Us
                                </span>
                                <h2 class="site-title text-white mb-10">
                                    We are dedicated <span>to provide</span> quality service
                                </h2>
                                <p class="text-white">
                                    At Balu Cabs, we are dedicated to providing quality service that exceeds your
                                    expectations.
                                    With a focus on reliability, comfort, and safety, we ensure that every journey with us
                                    is
                                    a pleasant experience. Our professional drivers are trained to provide excellent
                                    customer
                                    service, and our well-maintained vehicles are equipped with modern amenities for your
                                    convenience. Choose Balu Cabs for a superior transportation experience that you can rely
                                    on.
                                </p>
                            </div>
                            <!-- <div class="choose-img wow fadeInUp" data-wow-delay=".25s">
                                              <img src="{{ asset('frontend/assets/img/why/why2.png') }}" alt />
                                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-content-wrapper wow fadeInRight" data-wow-delay=".25s">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 mt-lg-5">
                                    <div class="choose-item">
                                        <span class="choose-count">01</span>
                                        <div class="choose-item-icon">
                                            <i class="flaticon-car"></i>
                                        </div>
                                        <div class="choose-item-info">
                                            <h3>Secured Booking</h3>
                                            <p>
                                                Our booking process is secure and user-friendly, ensuring
                                                your information is safe and your reservation is confirmed promptly.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="choose-item mb-lg-0">
                                        <span class="choose-count">02</span>
                                        <div class="choose-item-icon">
                                            <i class="flaticon-drive-thru"></i>
                                        </div>
                                        <div class="choose-item-info">
                                            <h3>Best Quality Cars</h3>
                                            <p>
                                                Travel in style and comfort with our fleet of well-maintained,
                                                modern vehicles that guarantee a smooth and enjoyable ride.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="choose-item">
                                        <span class="choose-count">03</span>
                                        <div class="choose-item-icon">
                                            <i class="flaticon-chauffeur"></i>
                                        </div>
                                        <div class="choose-item-info">
                                            <h3>Expert Drivers</h3>
                                            <p>
                                                Our drivers are highly trained professionals who prioritize
                                                safety and customer satisfaction, ensuring a pleasant and stress-free
                                                journey.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="choose-item mb-lg-0">
                                        <span class="choose-count">04</span>
                                        <div class="choose-item-icon">
                                            <i class="flaticon-online-payment"></i>
                                        </div>
                                        <div class="choose-item-info">
                                            <h3>Reasonable Price</h3>
                                            <p>
                                                Enjoy affordable rates without compromising on quality,
                                                making your travel experience with us both cost-effective and satisfying.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose us End --->

        <!--- City Title Section Start --->
        <div class="car-category py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title">
                                Best Airport CAB Service in Bangalore
                            </h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">

                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to Majestic</h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5> Airport to Yelhanka</h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to Banneragatta Road </h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to Yeshwanthpur </h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to Marathalli </h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to M G Road </h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to Sarjapur Road </h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to Hebbal </h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to JP Nagar</h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to BTM Layout </h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to HSR Layout </h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to Electronic City </h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <a href="tel:+91 8884400238" class="col-lg-12 city-list">
                                <h5>Airport to Banasakri </h5>
                            </a>
                        </div>

                    </div>

                    <!-- <a href="tel:+91 8884400237" class="col-lg-12 city-list">
                                            <h5>Airport to Yelhanka</h5>
                                          </a> -->

                    <!-- <a href="tel:+91 8884400237" class="col-lg-12 city-list">
                                            <h5>Airport to Banneragatta Road</h5>
                                          </a>
                              
                                          <a href="tel:+91 8884400237" class="col-lg-12 city-list">
                                            <h5>Airport to Yeshwanthpur</h5>
                                          </a>
                                        </div>
                              
                                        <div class="col-6 col-md-4 col-lg-4 category-item2">
                                          <a href="tel:+91 8884400237" class="col-lg-12 city-list">
                                            <h5>Airport to Marathalli</h5>
                                          </a>
                              
                                          <a href="tel:+91 8884400237" class="col-lg-12 city-list">
                                            <h5>Airport to M G Road</h5>
                                          </a>
                              
                                          <a href="tel:+91 8884400237" class="col-lg-12 city-list">
                                            <h5>Airport to Sarjapur Road</h5>
                                          </a>
                              
                                          <a href="tel:+91 8884400237" class="col-lg-12 city-list">
                                            <h5>Airport to Hebbal</h5>
                                          </a>
                                        </div>
                              
                                        <div class="col-6 col-md-4 col-lg-4 category-item2">
                                          <a href="tel:+91 8884400237" class="col-lg-12 city-list">
                                            <h5>Airport to JP Nagar</h5>
                                          </a>
                              
                                          <a href="tel:+91 8884400237" class="col-lg-12 city-list">
                                            <h5>Airport to BTM Layout</h5>
                                          </a>
                              
                                          <a href="tel:+91 8884400237" class="col-lg-12 city-list">
                                            <h5>Airport to Bellandur</h5>
                                          </a>
                              
                                          <a href="tel:+91 8884400237" class="col-lg-12 city-list">
                                            <h5>Airport to Electronic City</h5>
                                          </a> -->
                </div>
            </div>
        </div>
        </div>
        <!-- City Title Section End --->

        <!-- Counter Start -->
        <div class="counter-area pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <i class="flaticon-car-rental"></i>
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="25" data-speed="3000">25</span>
                                <h6 class="title">+ Available Cars</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="2000" data-speed="3000">2000</span>
                                <h6 class="title">+ Happy Customers</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="25" data-speed="3000">25</span>
                                <h6 class="title">+ Team</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <i class="flaticon-review"></i>
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="10" data-speed="3000">10</span>
                                <h6 class="title">+ Years Of Experience</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->

        <!--- Feedback Start --->
        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="flaticon-drive"></i> Testimonials
                            </span>
                            <h2 class="site-title">
                                What Our Customers Say's <span></span>
                            </h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    <!-- List Start -->
                    @foreach($testimonials as $testimonial)
                    <div class="testimonial-single">
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{ asset('storage/testimonial/'.@$testimonial->image) }}" alt />
                            </div>
                            <div class="testimonial-author-info">
                                <h4>{{@$testimonial->name}}</h4>
                                <p>{{@$testimonial->location}}</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="flaticon-quote"></i></span>
                            <p>
                                @php
                                $truncated_content = strlen($testimonial->content) > 70 ? substr($testimonial->content, 0, 70) . '...' : $testimonial->content;
                                 @endphp
                                {!! @$truncated_content !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                 
                    <!-- List End -->
                </div>
            </div>
        </div>
        <!--- Feedback End --->

        <!-- CTA Section Start -->
        <div class="cta-area pt-20 pb-20">
            <div class="container-fluid">
                <div class="cta-wrapper" style="background-image: url({{ asset('frontend/assets/img/cta/0100.jpg') }})">
                    <div class="row align-items-center">
                        <div class="col-lg-7 text-center text-lg-start">
                            <div class="cta-text cta-divider">
                                <h1> We are Ready to Take Your Call 24 Hours, 7 Days!</h1>
                                <p>
                                    Experience the best airport taxi service in Bangalore with Balu
                                    Cabs - reliable, comfortable, and always on time.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-5 text-center text-lg-end">
                            <div class="mb-20">
                                <a href="tel:+91 8884400238" class="cta-number"><i class="far fa-headset"></i>+91
                                    8884400238</a>
                            </div>
                            <div class="cta-btn">
                                <a href="{{ route('contact') }}" class="theme-btn">Contact us<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section End -->
        
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
                  <a href="{{route('blog')}}" class="theme-btn2">
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- List End  --->
        </div>
      </div>
    </div>

    <!-- our blogs -->


    </main>
@endsection
