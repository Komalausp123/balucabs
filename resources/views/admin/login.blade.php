<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content=" " name="description">
    <meta content=" " name="author">
    <meta name="keywords" content="  " />

    <!-- Title -->
    <title> Balu Cabs Admin</title>

    <!--Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon" />

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!--Style css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Icons css-->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- P-Scrollbar css-->
    <link rel="stylesheet" href="assets/plugins/p-scroll/p-scroll.css">

    <!--Sidemenu css-->
    <link rel="stylesheet" href="assets/plugins/sidemenu/sidemenu-1/sidemenu-1.css">

    <!-- Sidemenu-responsive-tabs  css -->
    <link href="assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css" rel="stylesheet">

    <!-- Siderbar css-->
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- Color-skins css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color-skins/color.css" />

</head>

<body class="bg-primary">

    <!--app open-->
    <div id="app" class="page">
        <div class="page-content">
            <div class="container">
                <!--single-page open-->
                <div class="single-page">
                    <div class="wrapper wrapper2">
                        <form id="login" class="card-body" tabindex="500" method="POST"
                            action="{{ route('login_post') }}">
                            @csrf
                            <h3 class="text-dark"> Balu Cabs Admin</h3>

                            @if (Session::has('flash_error'))
                                <span class="text-danger">{{ Session::get('flash_error') }}</span>
                            @endif


                            <div class="mail">
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                    placeholder="Enter email">
                            </div>
                            <div class="passwd">
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <!-- <p class="mb-3 text-right"><a href="forgot.html">Forgot Password</a></p> -->
                            <div class="submit">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>

                            </div>
                            <!-- <div class="signup mb-0" >
         <p class="text-dark mb-0">Don't have account?<a href="#" class="text-primary ml-1">Sign UP</a></p>
        </div> -->
                        </form>
                        <div class="mb-4">
                            <div class="socials text-center">
                                <a href="https://www.facebook.com/people/FJ-Events-Promotions/100089225385347/"
                                    class="btn btn-circle btn-primary "><i class="fa fa-facebook"></i></a>
                                <a href="{{ asset('https://www.instagram.com/fjeventspromotions/') }}"
                                    class="instagram btn btn-circle btn-warning"><i class="fa fa-instagram"
                                        target="_blank"></i></a>
                                <a href="https://twitter.com/FJeventspromot2" class="btn btn-circle btn-info "><i
                                        class="fa fa-twitter"></i></a>
                                <a href="{{ asset('https://www.youtube.com/channel/UCegvS4cMRA_CohRwYWE_89w') }}"
                                    class="btn btn-circle btn-danger" target="_blank"><i class="fa fa-youtube"
                                        target="_blank"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--single-page closed-->
            </div>
        </div>
    </div>
    <!--app closed-->

    <!--Jquery.min js-->
    <script src="assets/js/jquery.min.js"></script>

    <!--popper js-->
    <script src="assets/js/popper.js"></script>

    <!--Bootstrap.min js-->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--Tooltip js-->
    <script src="assets/js/tooltip.js"></script>

    <!-- Jquery star rating-->
    <script src="assets/plugins/rating/jquery.rating-stars.js"></script>

    <!--Moment js-->
    <script src="assets/js/moment.min.js"></script>

    <!--Sidemenu js-->
    <script src="assets/plugins/sidemenu/sidemenu-1/sidemenu-1.js"></script>

    <!-- Sidemenu-responsive-tabs  js -->
    <script src="assets/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js"></script>

    <!-- Sidebar js-->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

    <!--P-Scrollbar js-->
    <script src="assets/plugins/p-scroll/p-scroll.js"></script>
    <script src="assets/js/p-scroll.js"></script>

    <!--Othercharts js-->
    <script src="assets/plugins/othercharts/jquery.knob.js"></script>
    <script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

    <!--OtherCharts js-->
    <script src="assets/js/othercharts.js"></script>

    <!--Showmore js-->
    <script src="assets/js/jquery.showmore.js"></script>

    <!--Scripts js-->
    <script src="assets/js/scripts1.js"></script>
</body>

</html>
