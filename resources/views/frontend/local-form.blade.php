@extends('frontend.layout.app')
@section('content')
    <main class="main">

        <!-- Breadcum start --->
        <div class="site-breadcrumb" style="background: url({{ asset('frontend/assets/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title"> Contact Us </h2>

            </div>
        </div>
        <!-- Breadcum End --->

        <!-- Section Start -->
        <div class="user-profile py-120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="user-profile-sidebar">
                            <div class="user-profile-sidebar-top">

                                <h5 style="margin-left: -127px;"> Any Queries on Booking </h5>

                            </div>
                            <ul class="user-profile-sidebar-list">

                                <!-- <li>
                                    <h5> Email us : </h5>
                                    <a href="mailto:balucabs9@gmail.com">
                                      <i class="far fa-envelope"></i>
                                      balucabs9@gmail.com
                                    </a>
                                  </li>
                                  <hr> -->

                                <li>
                                    <h5> Call us : </h5>
                                    <a href="tel:+91 +91 8884400238">
                                        <i class="far fa-phone"></i>
                                        +91 +91 8884400238
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="user-profile-wrapper">
                            <div class="user-profile-card">
                                <h4 class="user-profile-card-title"> Get in Touch </h4>
                                <!-- <P>300 Kms minimum/day </P> -->
                                <div class="col-lg-12">
                                    <div class="add-listing-form">

                                        <form class="mt-3 bg-grey1 section-padding" action="contact_form1.php"
                                            method="post">
                                            <!-- <form action="#" class="mt-3 bg-grey1 section-padding"> -->
                                            <div class="row align-items-center">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <!-- <label class="form-label"> Name </label> -->
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Enter Name" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <!-- <label class="form-label"> Email Address </label> -->
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="Enter Email Address" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <!-- <label class="form-label"> Phone Number </label> -->
                                                        <input type="text" class="form-control" name="phone"
                                                            maxlength="10"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                            id placeholder="Enter Phone Number" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <!-- <label class="form-label"> Address </label> -->
                                                        <input type="text" class="form-control" name="picup_address"
                                                            placeholder="PickUp Address" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <!-- <label class="form-label"> Address </label> -->
                                                        <!--<input type="date" class="form-control date-class3" placeholder="">-->

                                                        <input type="text" name="date" class="form-control date-class"
                                                            placeholder="Date" data-bs-toggle="modal"
                                                            data-bs-target="#Datebtn" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <!-- <label class="form-label"> Address </label> -->
                                                        <!--<input type="time" class="form-control time-class3" placeholder="">-->

                                                        <input type="text" id="timeInput" class="form-control time-class"
                                                            data-bs-toggle="modal" name="time" data-bs-target="#timebtn"
                                                            placeholder="Time" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <!-- <label class="form-label"> Address </label> -->
                                                        <input type="text" name="travel_destination" class="form-control"
                                                            placeholder="Traveling to Destination" required>
                                                    </div>
                                                </div>

                                                <!-- <div class="col-lg-6">
                                            <div class="form-group">
                                              <input type="text" class="form-control" placeholder="vahical service">
                                            </div>
                                          </div> -->

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <!-- Dropdown for Vehicle Service Selection -->
                                                        <select class="form-control" name="services" id="vehicleService"
                                                            required>
                                                            <option value> Select Vehicle Service</option>
                                                            <!-- Placeholder option -->
                                                            <option value="Sedan"> Sedan </option>
                                                            <option value="Prime Sedan"> Prime Sedan
                                                            </option>
                                                            <option value="Ertiga"> Ertiga</option>
                                                            <option value="SUV Ertiga">SUV Ertiga
                                                            </option>
                                                            <option value="Innova"> Innova </option>
                                                            <option value="Crysta"> Crysta </option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <!-- <label class="form-label"> Address </label> -->
                                                        <input type="text" name="hmhours" class="form-control"
                                                            placeholder="How Many hours" required>
                                                    </div>
                                                </div>

                                                <div class="text-center mt-4">
                                                    <button type="submit" class="btn btn-primary submit-btn1"
                                                        style="background: var(--theme-color)">
                                                        Book Now
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
            </div>
        </div>

        <!-- Section End -->

    </main>
@endsection
