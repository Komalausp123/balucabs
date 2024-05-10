@extends('frontend.layout.app')
@section('content')
    <main class="main">

        <!-- Breadcum start --->
        <div class="site-breadcrumb" style="background: url({{ asset('frontend/img/breadcrumb/01.jpg') }})">
            <div class="container">
                <h2 class="breadcrumb-title"> Privacy-Policy </h2>

            </div>
        </div>
        <!-- Breadcum End --->
        <!-- About us Start --->
        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <h2 class="site-title"> Privacy-Policy </h2>
                            </div>
                            <p>
                               {{@$privacy->heading}}
                            </p>
                            <br>
                            
                           {!! @$privacy->content !!}
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About us End --->
    </main>
@endsection
