@extends('golfbooking::layouts.app')

@section('content')
    <style>

                    
        .container {
            overflow: hidden;
        }

        .parallelogram {
            width: 100%;
            height: 200px;
            margin: -50px 0 0 34px;
            -webkit-transform: skew(-20deg);
            -moz-transform: skew(-20deg);
            -o-transform: skew(-20deg);
            background: #fff;
            overflow: hidden;
            position: relative;
        }

        .img-overlay {
            width: 100vw;
            height: 100vh;
            background: white;
            opacity: .3;
            position: absolute;
        }

        .image {
            background: url(http://placekitten.com/301/301);
            position: absolute;
            top: -30px;
            left: -40px;
            right: -30px;
            bottom: -30px;
            -webkit-transform: skew(20deg);
            -moz-transform: skew(20deg);
            -o-transform: skew(20deg);
        }

        .menu-shadow {
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }


        #show_bg_3 {
            background: rgb(255, 255, 255);

            /* background: linear-gradient(107deg, rgba(255, 255, 255, 1) 0%, rgb(255 255 255) 61%, rgba(255, 255, 255, 0) 100%), left 20% / 45% 50%
                        url(assets/media/image/menu-food.png); */

            background: linear-gradient(107deg, rgba(255, 255, 255, 1) 0%, rgb(255 255 255) 61%, rgba(255, 255, 255, 0) 100%), center / cover no-repeat, left 10% / 55% url({{ Module::asset('golfbooking:media/image/menu-food.png') }});


            /* background-size: cover;
                    color: white; */
        }
    </style>
    <!--begin::Landing hero-->
    <div class="row gy-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4 mb-xl-10">
            <!--begin::Engage widget 3-->
            <div class="card h-md-100" data-theme="light">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column flex-center">
                    <!--begin::Heading-->
                    <div class="mb-2">
                        <!--begin::Title-->
                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">Quick form to
                        <br />
                        <span class="fw-bolder elia-test">Create a New Booking</span></h1>
                        <!--end::Title-->
                        <!--begin::Illustration-->
                        <div class="py-10 text-center">
                            <img src="assets/media/svg/illustrations/easy/3.svg" class="theme-light-show w-200px" alt="" />
                            <img src="assets/media/svg/illustrations/easy/3-dark.svg" class="theme-dark-show w-200px" alt="" />
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Links-->
                    <div class="text-center mb-1">
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-primary me-2" href="{{ route('facility-booking.golf-course.index') }}">Book Now</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-light" href="{{ route('facility-booking.booking.index') }}">Booking List</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Body-->
                
            </div>
            <!--end::Engage widget 3-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8 mb-5 mb-xl-10">
            <!--begin::Chart widget 11-->
            <div class="card card-flush h-xl-100">
                <!--begin::Heading-->
                <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px width-golf" style="background-image:url('assets/media/svg/shapes/wave-bg-dark.svg');    background-color: #0e998e;" data-theme="light">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column text-white pt-15">
                        <span class="fw-bold fs-2x mb-3">My Booking</span>
                        <div class="fs-4 text-white">
                            <span class="opacity-75">You have</span>
                            <span class="position-relative d-inline-block">
                                <a href="../../demo7/dist/pages/user-profile/projects.html" class="link-white opacity-75-hover fw-bold d-block mb-1">4 bookings</a>
                                <!--begin::Separator-->
                                <span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                <!--end::Separator-->
                            </span>
                            <span class="opacity-75">in the list</span>
                        </div>
                    </h3>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
                <!--begin::Body-->
                <div class="card-body mt-n20">
                    <!--begin::Stats-->
                    <div class="mt-n20 position-relative">
                        <!--begin::Row-->
                        <div class="row g-3 g-lg-6">
                            <div class="col-xxl-2 col-xl-3 col-sm-4 col-6">
                                <a href="{{ route('facility-booking.facility.index') }}" class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                                    <i class="fas fa-calendar-check fs-3x text-primary"></i>
                                     <span class="mt-3"> Facility Booking </span>
                                    </a>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-sm-4 col-6">
                                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                                     <i class="fas fa-golf-ball fs-3x text-primary"></i>
                                     <span class="mt-3"> Membership Info </span>
                                    </a>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-sm-4 col-6">
                                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                                     <i class="fas fa-utensils fs-3x text-primary"></i>
                                     <span class="mt-3"> Food Ordering </span>
                                    </a>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-sm-4 col-6">
                                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                                     <i class="fas fa-cloud-sun fs-3x text-primary"></i>
                                     <span class="mt-3"> Forecast </span>
                                    </a>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-sm-4 col-6">
                                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                                     <i class="fas fa-percent fs-3x text-primary"></i>
                                     <span class="mt-3"> Coupon &<br> Voucher </span>
                                    </a>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-sm-4 col-6">
                                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                                     <i class="fas fa-ticket-alt fs-3x text-primary"></i>
                                     <span class="mt-3"> Events</span>
                                    </a>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-sm-4 col-6">
                                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                                     <i class="fas fa-info fs-3x text-primary"></i>
                                     <span class="mt-3"> Facility Info</span>
                                    </a>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-sm-4 col-6">
                                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                                     <i class="fas fa-map-marked-alt fs-3x text-primary"></i>
                                     <span class="mt-3">Directory</span>
                                    </a>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-sm-4 col-6">
                                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                                     <i class="fas fa-shopping-basket fs-3x text-primary"></i>
                                      <span class="mt-3">Pro Shop</span>
                                    </a>
                            </div>
                            
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart widget 11-->
        </div>
        <!--end::Col-->
    </div>
   
@endsection
