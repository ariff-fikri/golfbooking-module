@extends('golfbooking::layouts.app-landing')

@section('content')
    <style>
        /* .width-golf{
                        width: 47%;
                    } */
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
    <div class="d-flex flex-column flex-center min-h-350px min-h-lg-500px px-9">
        <div class="row mb-10 width-golf">
            <!--begin::Col-->
            <div class="col-12">
                <!--begin::Option-->

                <div id='show_bg_3' class="rounded p-7 py-4 d-flex mb-10 flex-column"
                    style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                    <!--begin::Info-->
                    <div class="py-0">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <!--begin::Label-->
                            <span class="fs-base fw-semibold lh-1 fs-8 mb-2" style="color:#11998E;">From 7AM to 11AM
                                only</span>
                            <!--end::Label-->
                        </div>
                        <h4 class="fw-bold  ">BREAKFAST <br><span class="ms-6"> HOUR 10% OFF </span></h4>
                        <a href="{{ route('dashboard.index') }}" class="btn btn-sm btn-primary py-1 px-3 ms-6">Find out
                            more</a>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Option-->
            </div>
            <!--end::Col-->
            <div class="col-12 d-flex justify-content-between align-items-center mb-3">
                <h4>My Booking</h4>
                <a href="{{ route('booking.index') }}">See all</a>
            </div>
            <div class="col-12">
                <div class="card p-5" style="background: linear-gradient(to left, #51C6BC 0%, #11998E 100%);">
                    <div class="row d-flex align-items-center">
                        <div class="col-6">
                            <img src="{{ Module::asset('golfbooking:media/logos/Golf-rafiki.png') }}" class="w-150px" alt="">
                        </div>
                        <div class="col-6 text-center">
                            <h5 class="fs-base text-white">Your Flight Time Today</h5>
                            <h1 class="text-white fw-bolder text-center">08:30</h1>
                            <h5 class="fs-base text-white lh-4 mb-0">Current Game : 07:30 <br> Waiting : 4 Flights</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-4">
                <a href="{{ route('facility-booking.index') }}" class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                    <i class="fas fa-calendar-check fs-3x text-primary"></i>
                     <span class="mt-3"> Facility Booking </span>
                    </a>
            </div>
            <div class="col-4">
                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                     <i class="fas fa-golf-ball fs-3x text-primary"></i>
                     <span class="mt-3"> Membership Info </span>
                    </a>
            </div>
            <div class="col-4">
                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                     <i class="fas fa-utensils fs-3x text-primary"></i>
                     <span class="mt-3"> Food Ordering </span>
                    </a>
            </div>
            <div class="col-4">
                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                     <i class="fas fa-cloud-sun fs-3x text-primary"></i>
                     <span class="mt-3"> Forecast </span>
                    </a>
            </div>
            <div class="col-4">
                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                     <i class="fas fa-percent fs-3x text-primary"></i>
                     <span class="mt-3"> Coupon &<br> Voucher </span>
                    </a>
            </div>
            <div class="col-4">
                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                     <i class="fas fa-ticket-alt fs-3x text-primary"></i>
                     <span class="mt-3"> Events</span>
                    </a>
            </div>
            <div class="col-4">
                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                     <i class="fas fa-info fs-3x text-primary"></i>
                     <span class="mt-3"> Facility Info</span>
                    </a>
            </div>
            <div class="col-4">
                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                     <i class="fas fa-map-marked-alt fs-3x text-primary"></i>
                     <span class="mt-3">Directory</span>
                    </a>
            </div>
            <div class="col-4">
                <a  class="app-engage-btn hover-dark rounded text-hover-white rounded-2 menu-shadow" >
                     <i class="fas fa-shopping-basket fs-3x text-primary"></i>
                      <span class="mt-3">Pro Shop</span>
                    </a>
            </div>
        </div>
    </div>
    <!--end::Landing hero-->
@endsection
