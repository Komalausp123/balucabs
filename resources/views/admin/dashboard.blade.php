@extends('admin.layout.app')
@section('content')
    <!--app-content open-->
    <div class="app-content">
        <section class="section">

            <!--page-header open-->
            <div class="page-header">

                <ol class="breadcrumb">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> Dashboard </li>
                </ol><!-- End breadcrumb -->

                <div class="ml-auto">
                    <div class="input-group">
                        <a href="#" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip"
                            title="" data-placement="top" data-original-title="Add New Account">
                            <span>
                                <i class="fe fe-plus"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!--page-header closed-->

            <!--row open-->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-body pb-0">
                            <div class="text-center mb-3">
                                <h6 class="mb-1"> About Us </h6>
                                <h3 class="mb-0"><i class="fe fe-eye text-primary  mr-2"></i>9,567</h3>
                            </div>
                        </div>

                        <div>
                            <canvas id="widege1" class="chart-dropshadow"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-body pb-0">
                            <div class="text-center mb-3">
                                <h6 class="mb-1"> Services </h6>
                                <h3 class="mb-0"><i class="fe fe-thumbs-up text-secondary mr-2"></i>5,389
                                </h3>
                            </div>
                        </div>

                        <div>
                            <canvas id="widege2" class="chart-dropshadow"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="card overflow-hidden bg-pink">
                        <div class="card-body pb-0">
                            <div class="text-center mb-3">
                                <h6 class="mb-1"> Blogs </h6>
                                <h3 class="mb-0"><i class="fe fe-thumbs-up  mr-2"></i>35,896</h3>
                            </div>
                        </div>

                        <div>
                            <canvas id="widege3" class="chart-dropshadow"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="card overflow-hidden bg-info">

                        <div class="card-body pb-0">
                            <div class="text-center mb-3">
                                <h6 class="mb-1"> Gallery </h6>
                                <h3 class="mb-0"><i class="fe fe-message-square  mr-2"></i>983</h3>
                            </div>
                        </div>

                        <div>
                            <canvas id="widege4" class="chart-dropshadow"></canvas>
                        </div>
                    </div>
                </div>

            </div>
            <!--row closed-->
        </section>
    </div>
@endsection
<!--app-content closed-->
