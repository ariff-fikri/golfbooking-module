@extends('golfbooking::layouts.app')

@section('content')
    <div data-kt-stepper-element="content">
        <!--begin::Wrapper-->
        <div class="w-100">
            <div class="row p-0">
                <div class="col-12 text-center">
                    <img src="{{ Module::asset('golfbooking:media/image/emptystate.png') }}" alt="">
                    <h2 class="text-golf mb-5" id="booking-name"></h2>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="fs-6 text-golf fw-semibold">Transaction Details</span>
                                <span class="fs-6 text-golf fw-semibold">Successful</span>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fs-6 fw-semibold text-gray-600">Payment Ref</span>
                                <span class="fs-6 text-golf fw-semibold">230128HFYVYM66
                                    <i class="fas fa-copy text-golf"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fs-6 fw-semibold text-gray-600">Payment Time</span>
                                <span class="fs-6 text-golf fw-semibold">{{ now()->toFormattedDayDateString() . ' ' . now('Asia/Kuala_Lumpur')->format('h:i A') }}</span>
                            </div>
                            <div class="border-top mt-3 mb-3">
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="fs-6 fw-semibold text-golf">Total Payment</span>
                                <span class="fs-6 text-golf fw-bold">RM {{ number_format($booking->payment_detail->total_payment, 2) ?? '0.00' }}</span>
                            </div>
                            <!--begin::Alert-->
                            <div
                                class="alert alert-dismissible bg-light-info d-flex p-2 mt-5 align-items-center">
                                <!--begin::Icon-->
                                <i class="fas fa-gift text-info me-2 mt-1"></i>
                                <!--end::Icon-->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                    <!--begin::Content-->
                                    <span class="text-info fw-semibold">You receive {{ round($booking->payment_detail->total_payment, 0); }} points from this booking!</span>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Alert-->
                        </div>
                    </div>
                    <div class="card mt-8">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-12 mb-3">
                                    <span class="fs-6 text-golf fw-semibold">Booking Info</span>
                                </div>
                                <div class="col-8">
                                    <span class="fs-6 fw-semibold text-golf">
                                        <span> <i class="bi bi-geo-alt-fill text-golf fs-6"></i> </span> 
                                        {{ $booking->course->name ?? '-' }}
                                    </span>
                                </div>
                                <div class="col-4">
                                    <span class="fs-6 text-golf fw-semibold">{{ $booking->booking_id ?? '-' }} </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <span class="fs-7 fw-semibold text-gray-600 d-block">Date</span>
                                    <span class="fs-6 fw-semibold ">{{ $booking->date->toFormattedDayDateString() ?? '-' }}</span>
                                </div>
                                <div class="col-4">
                                    <span class="fs-7 fw-semibold text-gray-600 d-block">Time</span>
                                    <span class="fs-6 fw-semibold">{{ $booking->time_slot->time->format('h:i A') ?? '-' }}</span>
                                </div>
                                <div class="col-8 mt-2">
                                    <span class="fs-7 fw-semibold text-gray-600 d-block">No of pax</span>
                                    <span class="fs-6 fw-semibold ">{{ $booking->total_players ?? '-' }} Pax</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <span class="fs-7 fw-semibold text-gray-600 d-block">Game Option</span>
                                    <span class="fs-6 fw-semibold">{{ $booking->hole->name ?? '-' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Wrapper-->
    </div>
@endsection

@push('scripts')
    <script>

        $('#header-page-booking').html('Booking Details');
        
        if (window.location.href.indexOf("info") > -1) {
            $('#back-main-button').prop('href', `{{ route('facility-booking.booking.index') }}`);
            $('#booking-name').html('Booking History');
        } else if (window.location.href.indexOf("dashboard") > -1) {
            $('#back-main-button').prop('href', `{{ route('facility-booking.dashboard.index') }}`);
            $('#booking-name').html('Booking History');
        } else {
            $('#back-main-button').prop('href', `{{ route('facility-booking.landing.index') }}`);
            $('#booking-name').html('Payment Completed');
        }
    </script>
@endpush