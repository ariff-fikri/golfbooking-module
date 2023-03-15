@extends('golfbooking::layouts.app-mobile')
@section('content')

<div class="text-center">
    <img src="{{ Module::asset('golfbooking:media/image/emptystate.png') }}" class="w-200px"  alt="">
    <h2 class="text-golf mb-5">Booking History</h2>
</div>
<div class="row">
    <div class="col-12">
        <div class="card mx-5">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <span class="fs-6 text-golf fw-semibold">Transaction Details</span>
                    <span class="fs-6 text-golf fw-semibold">Successful</span>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <span class="fs-6 fw-semibold text-gray-600">Payment Ref</span>
                    <span class="fs-6 text-golf fw-semibold">230128HFYVYM66 <span><i class="fas fa-copy text-golf"></i></span> </span>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <span class="fs-6 fw-semibold text-gray-600">Payment Time</span>
                    <span class="fs-6 text-golf fw-semibold">17th February 2023, 11:35 AM</span>
                </div>
                <div class="border-top mt-3 mb-3"></div>
                <div class="d-flex justify-content-between">
                    <span class="fs-6 fw-semibold text-golf">Total Payment</span>
                    <span class="fs-6 text-golf fw-bold">RM 877.70</span>
                </div>
                <!--begin::Alert-->
                <div class="alert alert-dismissible bg-light-info d-flex  p-2 mt-5">
                    <!--begin::Icon-->
                    <i class="fas fa-gift text-info me-2 mt-1"></i>
                    <!--end::Icon-->

                    <!--begin::Content-->
                    <span class="text-info fw-semibold">You receive 2400 points from this booking!</span>
                    <!--end::Content-->
                </div>
                <!--end::Alert-->
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card mx-5 mt-8">
            <div class="card-body">
                <span class="fs-6 text-golf fw-semibold">Booking Info</span>
                <div class="d-flex justify-content-between mb-3 mt-2">
                    <span class="fs-6 fw-semibold text-golf"><span><i class="bi bi-geo-alt-fill text-golf fs-6"></i></span> 1st Nine</span>
                    <span class="fs-6 text-golf fw-semibold">#CG12346253 </span>
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                        <span class="fs-7 fw-semibold text-gray-600 d-block">Date</span>
                        <span class="fs-6 fw-semibold ">Sunday, 19th Feb 2023</span>
                    </div>
                    <div>
                        <span class="fs-7 fw-semibold text-gray-600 text-end d-block">Time</span>
                        <span class="fs-6 fw-semibold text-end">7:13 AM</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <span class="fs-7 fw-semibold text-gray-600 d-block">No of pax</span>
                        <span class="fs-6 fw-semibold ">4 Pax</span>
                    </div>
                    <div>
                        <span class="fs-7 fw-semibold text-end text-gray-600 d-block">Game Option</span>
                        <span class="fs-6 fw-semibold text-end d-block">18 Holes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
