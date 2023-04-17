@extends('golfbooking::layouts.app')
@section('content')
    <style>
        .carousel-dark .carousel-indicators [data-bs-target] {
            background-color: #00a49a;
        }


        .nav.nav-pills.nav-pills-custom .show>.nav-link.active,
        .nav.nav-pills.nav-pills-custom .nav-link.active {
            background-color: transparent;
            border: 1px solid var(--kt-border-dashed-color);
            transition-duration: 1ms;
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px !important;
        }

        .w-155px {
            width: 155px !important;
        }

        .rounded-3 {
            border-radius: 0.625rem !important;
        }

        .no-shadow {
            box-shadow: none;
        }
    </style>

    <div class="current flex-column" data-kt-stepper-element="content">
        <div class="flex-column my-5">
            <h1 class="text-bold"> Make your order now &#127790;</h1>
        </div>
        <div class="w-100">
            <div class="row">
                <div class="col-lg-7">
                    <div class="card card-lg-stretch mb-xl-8">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card-body lh-1 pt-2">
                                        <div class="row p-4 d-flex align-items-center justify-content-evenly">
                                            <div class="col-lg-7">
                                                <h1 class="mb-5"> Enjoy 40% off <br> on your booking!</h1>
                                                <h5 class="fw-semibold lh-lg mb-5">Get a 40% discount on your club facility
                                                    bookings!
                                                    Exclusively on our app, this limited-time offer is too good to miss.
                                                    Book now and
                                                    save on your next booking at our club. </h5>

                                                <div class="d-flex align-items-center ">
                                                    <img src="{{ Module::asset('golfbooking:media/image/apple-store.png') }}"
                                                        class="  text-end me-3 w-125px" alt="" />
                                                    <img src="{{ Module::asset('golfbooking:media/image/play-store.png') }}"
                                                        class="  text-end me-3 w-125px" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <!--begin::Avatar-->

                                                <img src="{{ Module::asset('golfbooking:media/image/burger.png') }}"
                                                    class="  text-end me-3 w-175px" alt="" />

                                                <!--end::Avatar-->

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card-body lh-1 pt-2">
                                        <div class="row p-4 d-flex align-items-center justify-content-evenly">
                                            <div class="col-lg-7">
                                                <h1 class="mb-5"> Enjoy 40% off <br> on your booking!</h1>
                                                <h5 class="fw-semibold lh-lg mb-5">Get a 40% discount on your club facility
                                                    bookings!
                                                    Exclusively on our app, this limited-time offer is too good to miss.
                                                    Book now and
                                                    save on your next booking at our club. </h5>

                                                <div class="d-flex align-items-center ">
                                                    <img src="{{ Module::asset('golfbooking:media/image/apple-store.png') }}"
                                                        class="  text-end me-3 w-125px" alt="" />
                                                    <img src="{{ Module::asset('golfbooking:media/image/play-store.png') }}"
                                                        class="  text-end me-3 w-125px" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <!--begin::Avatar-->

                                                <img src="{{ Module::asset('golfbooking:media/image/burger.png') }}"
                                                    class="  text-end me-3 w-175px" alt="" />

                                                <!--end::Avatar-->

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card-body lh-1 pt-2">
                                        <div class="row p-4 d-flex align-items-center justify-content-evenly">
                                            <div class="col-lg-7">
                                                <h1 class="mb-5"> Enjoy 40% off <br> on your booking!</h1>
                                                <h5 class="fw-semibold lh-lg mb-5">Get a 40% discount on your club facility
                                                    bookings!
                                                    Exclusively on our app, this limited-time offer is too good to miss.
                                                    Book now and
                                                    save on your next booking at our club. </h5>

                                                <div class="d-flex align-items-center ">
                                                    <img src="{{ Module::asset('golfbooking:media/image/apple-store.png') }}"
                                                        class="  text-end me-3 w-125px" alt="" />
                                                    <img src="{{ Module::asset('golfbooking:media/image/play-store.png') }}"
                                                        class="  text-end me-3 w-125px" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <!--begin::Avatar-->

                                                <img src="{{ Module::asset('golfbooking:media/image/burger.png') }}"
                                                    class="  text-end me-3 w-175px" alt="" />

                                                <!--end::Avatar-->

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>


                </div>

                <div class="col-lg-5">
                    <h4 class="text-bold mb-3 ps-3">Claim your coupon</h4>

                    <div style="overflow-y: scroll;  overflow-x: hidden;  max-height :260px;">
                        <div class="row">
                            <div class="col-lg-9 pe-0">
                                <div class="card card-lg-stretch no-shadow mb-xl-3"
                                    style="border-radius: 13.6px 1px 1px 13.6px !important; ">
                                    <div class="card-body px-10 py-4">
                                        <h3> 30% Member Voucher</h3>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="fw-semibold text-gray-600">Valid Till : Lifetime </span>
                                            <a href="#"> T&C </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3 ps-1">
                                <div class="card card-lg-stretch no-shadow mb-xl-3"
                                    style="border-radius: 1px 13.6px 13.6px 1px;">
                                    <div class="card-body text-center no-shadow px-5 py-4">
                                        <a href="#" class="btn btn-lg btn-light-primary"> Claim </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 pe-0">
                                <div class="card card-lg-stretch no-shadow mb-xl-3"
                                    style="border-radius: 13.6px 1px 1px 13.6px !important;">
                                    <div class="card-body px-10 py-4">
                                        <h3> RM20 off from facility booking</h3>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="fw-semibold text-gray-600">Valid Till : 05 May 2023 </span>
                                            <a href="#"> T&C </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3 ps-1">
                                <div class="card card-lg-stretch no-shadow mb-xl-3"
                                    style="border-radius: 1px 13.6px 13.6px 1px;">
                                    <div class="card-body text-center no-shadow px-5 py-4">
                                        <a href="#" class="btn btn-lg btn-light-primary"> Claim </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 pe-0">
                                <div class="card card-lg-stretch no-shadow mb-xl-3"
                                    style="border-radius: 13.6px 1px 1px 13.6px !important;">
                                    <div class="card-body px-10 py-4">
                                        <h3>20% Off min. spend RM60</h3>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="fw-semibold text-gray-600">Valid Till : 02 April 2023 </span>
                                            <a href="#"> T&C </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3 ps-1">
                                <div class="card card-lg-stretch no-shadow mb-xl-3"
                                    style="border-radius: 1px 13.6px 13.6px 1px;">
                                    <div class="card-body text-center no-shadow px-5 py-4">
                                        <a href="#" class="btn btn-lg text-muted btn-light-secondary disabled">
                                            Expired </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 pe-0">
                                <div class="card card-lg-stretch no-shadow mb-xl-3"
                                    style="border-radius: 13.6px 1px 1px 13.6px !important;">
                                    <div class="card-body px-10 py-4">
                                        <h3>20% Off min. spend RM60</h3>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="fw-semibold text-gray-600">Valid Till : 02 April 2023 </span>
                                            <a href="#"> T&C </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3 ps-1">
                                <div class="card card-lg-stretch no-shadow mb-xl-3"
                                    style="border-radius: 1px 13.6px 13.6px 1px;">
                                    <div class="card-body text-center no-shadow px-5 py-4">
                                        <a href="#" class="btn btn-lg text-muted btn-light-secondary disabled">
                                            Expired </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <h4 class="text-bold mb-3 ps-3">Category</h4>
                <!--begin::Col-->
                <div class="col-xl-7 col-lg-7 mb-xl-10">
                    <!--begin::Table widget 2-->
                    <div class=" h-md-100">

                        <!--begin::Body-->
                        <div class="card-body pt-2">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom mb-10">
                                <!--begin::Item-->
                                <li class="nav-item card mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="card-body nav-link d-flex  justify-content-between flex-column flex-center overflow-hidden active w-100px h-10px py-4 "
                                        data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1">
                                        <!--begin::Icon-->
                                        <div class="nav-icon ms-4">
                                            <img src="{{ Module::asset('golfbooking:media/image/all.png') }}"
                                                class="w-70px" alt="" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">All</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        {{-- <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span> --}}
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item card mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="card-body nav-link d-flex  justify-content-between flex-column flex-center overflow-hidden  w-100px h-10px py-4 "
                                        data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon ms-4">
                                            <img src="{{ Module::asset('golfbooking:media/image/entree.png') }}"
                                                class="w-60px" alt="" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Entrees</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        {{-- <span
                                         class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span> --}}
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item card mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="card-body nav-link d-flex  justify-content-between flex-column flex-center overflow-hidden  w-100px h-10px py-4 "
                                        data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3">
                                        <!--begin::Icon-->
                                        <div class="nav-icon ms-4">
                                            <img src="{{ Module::asset('golfbooking:media/image/appetizer.png') }}"
                                                class="w-45px" alt="" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Appetizer</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        {{-- <span
                                             class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span> --}}
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item card mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="card-body nav-link d-flex  justify-content-between flex-column flex-center overflow-hidden  w-100px h-10px py-4 "
                                        data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img src="{{ Module::asset('golfbooking:media/image/dessert.png') }}"
                                                class="w-45px" alt="" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Desserts</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        {{-- <span
                                         class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span> --}}
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item card mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link card-body d-flex justify-content-between flex-column flex-center overflow-hidden w-100px h-85px py-4"
                                        data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <img src="{{ Module::asset('golfbooking:media/image/drink.png') }}"
                                                class="ms-4 nav-icon w-50px" />
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Drinks</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->

                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>


                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
                                    <ul class="nav nav-pills nav-pills-custom mb-3 d-flex justify-content-between mb-3">
                                        <li class="nav-item card mb-5">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/chicken-tenders.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Chicken Tenders </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM18 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card mb-4">
                                            <a
                                                class="card-body d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/pasta.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Creamy Pasta </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM22 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card mb-4">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/fries.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Fries and Dip </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM17 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card mb-4">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/salad.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Salad </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM22 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card mb-4">
                                            <a
                                                class="card-body d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/pasta.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Creamy Pasta </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM22 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card mb-4">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/chicken-tenders.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Chicken Tenders </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM18 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item card mb-4">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/salad.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Salad </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM22 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card mb-4">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/fries.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Fries and Dip </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM17 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>


                                    </ul>

                                </div>

                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_2">
                                    <ul class="nav nav-pills nav-pills-custom mb-3 d-flex justify-content-between mb-3">

                                        <li class="nav-item card">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/fries.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Fries and Dip </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM17 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
                                    <ul class="nav nav-pills nav-pills-custom mb-3 d-flex justify-content-between mb-3">
                                        <li class="nav-item card">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/chicken-tenders.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Chicken Tenders </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM18 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </div>

                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
                                    <ul class="nav nav-pills nav-pills-custom mb-3 d-flex justify-content-between mb-3">
                                        <li class="nav-item card">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/chicken-tenders.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Chicken Tenders </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM18 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card">
                                            <a
                                                class="card-body d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/pasta.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Creamy Pasta </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM22 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/fries.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Fries and Dip </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM17 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/salad.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Salad </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM22 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
                                    <ul class="nav nav-pills nav-pills-custom mb-3 d-flex justify-content-between mb-3">
                                        <li class="nav-item card">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/chicken-tenders.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Chicken Tenders </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM18 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card">
                                            <a
                                                class="card-body d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/pasta.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Creamy Pasta </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM22 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/fries.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Fries and Dip </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM17 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item card">
                                            <a
                                                class="card-body  d-flex justify-content-between flex-column flex-center w-175px h-200px p-5">

                                                <div class="nav-icon">
                                                    <img src="{{ Module::asset('golfbooking:media/image/salad.png') }}"
                                                        class="w-155px rounded-4 px-1" alt="" />
                                                    <h6 class="text-primary fw-bolder mt-5 px-1"> Salad </h6>

                                                    <div class="d-flex align-items-center justify-content-between  px-1">
                                                        <span class="text-primary fw-bolder"> RM22 </span>
                                                        <span href="#" class="btn btn-sm btn-primary py-2 px-4"> Add
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 2-->
                </div>
                <!--end::Col-->

                <div class="col-xl-5 col-lg-5 mb-xl-10">
                    <div class="card h-md-100">
                        <!--begin::Body-->
                        <div class="card-body lh-1 pt-2">
                            <h4 class="text-bold mb-5 mt-10 ps-3">Your Order</h4>

                            <div class=" p-4 d-flex align-items-center mt-5 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ Module::asset('golfbooking:media/image/chicken-tenders.png') }}"
                                        class="w-100px rounded-4  " alt="" />
                                    <div class="d-flex flex-column ms-5">
                                        <h6 class="text-primary fw-bolder "> Chicken Tenders </h6>
                                        <span class="text-primary fw-bolder"> X 1 </span>
                                    </div>
                                </div>
                                <h3 class="text-primary fw-bolder py-2 px-4"> RM18
                                </h3>
                            </div>

                            <div class=" p-4 d-flex align-items-center mt-5 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ Module::asset('golfbooking:media/image/pasta.png') }}"
                                        class="w-100px rounded-4  " alt="" />
                                    <div class="d-flex flex-column ms-5">
                                        <h6 class="text-primary fw-bolder "> Creamy Pasta </h6>
                                        <span class="text-primary fw-bolder"> X 2 </span>
                                    </div>
                                </div>
                                <h3 class="text-primary fw-bolder py-2 px-4"> RM44
                                </h3>
                            </div>
                            <div class="separator border-gray-200 mt-10 mb-7"></div>
                            <div class="d-flex align-items-center justify-content-between px-7  ">
                                <h2 class="text-primary fw-bolder "> Total Payment</h2>
                                <h2 class="text-primary fw-bolder"> RM62 </h2>
                            </div>
                            <input type="text" class="form-control mt-5 px-7"
                                placeholder="Enter your coupon code here" name="tee_name" value="" />
                            <span href="#" class="btn btn-sm btn-primary py-2 px-4 mt-5 fw-bolder float-end">
                                <!--end::Svg Icon-->
                                Payment
                                <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-03-24-172858/core/html/src/media/icons/duotune/arrows/arr062.svg-->
                                <span class="svg-icon svg-icon-muted svg-2hx ms-3"><svg width="20" height="16"
                                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M12.4 9H1.00002C0.400015 9 1.52588e-05 8.6 1.52588e-05 8C1.52588e-05 7.4 0.400015 7 1.00002 7L12.4 7V9Z"
                                            fill="currentColor" />
                                        <path
                                            d="M14.1071 1.7071C13.4771 1.07714 12.4 1.52331 12.4 2.41421V13.5858C12.4 14.4767 13.4771 14.9229 14.1071 14.2929L19.7 8.7C20.1 8.3 20.1 7.7 19.7 7.3L14.1071 1.7071Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>

                            </span>
                        </div>
                    </div>

                </div>
            </div>
            <!--end::Page title=-->
        </div>
    </div>
        @endsection
