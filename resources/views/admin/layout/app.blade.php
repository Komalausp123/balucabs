<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!--header start-->

        @include('admin.layout.header')


        <!--header end-->
        @include('admin.layout.sidebar')


        <!--hero section start-->

        @yield('content')



        @include('admin.layout.footer')

        @include('admin.layout.script')

        @include('admin.layout.ajax')
    </div>

    <!-- page wrapper end -->




    <!--back-to-top start-->

    <div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-arrow-up"></i></a></div>

    <!--back-to-top end-->


</body>

</html>
