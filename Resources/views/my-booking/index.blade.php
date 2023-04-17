@extends('golfbooking::layouts.app')
@section('content')
<style>
    .bg-light {
        --kt-bg-rgb-color: var(--kt-light-rgb);
        background-color: transparent !important;
    }
	.symbol>img {
		border-radius: 50%;
	}

    .app-engage-btn {

        color: #078E83;
         background-color: #fff;
		 border-color: #fff;
		 box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;

    }

    .svg-icon {
        line-height: 1;
        color: #078E83;
    }

    .app-engage-btn.hover-dark:hover i, .app-engage-btn.hover-dark:hover .svg-icon {
        color: #fff;
    }

    .app-engage-btn.hover-dark:hover {
        color: #fff;
        border-color: #078E83;
        background-color: #078E83;
    }

    btn-check:active + .btn.btn-active-light, .btn-check:checked + .btn.btn-active-light, .btn.btn-active-light.active, .btn.btn-active-light.show, .btn.btn-active-light:active:not(.btn-active), .btn.btn-active-light:focus:not(.btn-active), .btn.btn-active-light:hover:not(.btn-active), .show > .btn.btn-active-light {
		color: #000000;
		border-color: var(--kt-light);
		background-color: #f5f8fa47 !important;
	}

</style>


<div class="row">
    <div class="col-xxl-10 col-12">
        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6 nav-fill">
            <li class="nav-item">
                <a class="nav-link active fw-bold" data-bs-toggle="tab" href="#kt_tab_pane_4">Upcoming</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold ms-0" data-bs-toggle="tab" href="#kt_tab_pane_5">Past</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel">
                <div class="row">
                    <div class="col-xxl-8 col-12">
                        <p class="fw-semibold mx-5" style="color: #868383;">You have {{ $upcoming_bookings->count() }} upcoming bookings.</p>
                        @foreach ($upcoming_bookings as $key => $upcoming_booking)
                            <div class="card {{ $key != 0 ? 'mt-4' : '' }} mx-5">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-4 col-xxl-2">
                                            <img src="{{ Module::asset('golfbooking:media/image/pic.png') }}" alt="">
                                        </div>
                                        <div class="col-8 col-xxl-10 ps-5">
                                            <div class="d-flex justify-content-between">
                                                <span class="fs-8 fw-semibold text-primary">{{ $upcoming_booking->booking_id ?? '-' }}</span>
                                                <span class="fs-8 fw-semibold {{ $upcoming_booking->payment_status != 1 ? 'text-muted' : 'text-primary' }}">
                                                    <i class="bi bi-check-circle-fill {{ $upcoming_booking->payment_status != 1 ? 'text-muted' : 'text-primary' }}"></i>
                                                    {{ strtoupper($upcoming_booking->payment_status_name) ?? '-' }}
                                                </span>
                                            </div>
                                            <h2>Golf Course</h2>
                                            <span class="fs-8 d-block mb-1 fw-bold">{{ $upcoming_booking->total_players ?? '-' }} Pax | {{ $upcoming_booking->hole->name ?? '-' }}</span>
                                            <span class="fs-8 d-block mb-1 fw-bold">
                                            <i class="fas fa-calendar-alt text-primary fs-8"></i>
                                                {{ $upcoming_booking->date->toFormattedDayDateString() ?? '-' }}, {{ $upcoming_booking->time_slot->time->format('h:i A') ?? '-' }}</span>
                                            <div class="d-flex justify-content-between">
                                                <span class="fs-8 d-block fw-bold">
                                                    <i class="bi bi-geo-alt-fill text-primary fs-9" ></i>
                                                    {{ $upcoming_booking->course->name ?? '-' }}</span>
                                                <span class="fs-8 text-primary"><a href="{{ route('facility-booking.booking.info', $upcoming_booking->id) }}"><i class="fa-solid fa-circle-chevron-right text-primary fs-2x"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel">
                <div class="row">
                    <div class="col-12">
                        <p class="fw-semibold mx-5" style="color: #868383;">You have {{ $past_bookings->count() }} past bookings.</p>
                        @foreach ($past_bookings as $key => $past_booking)
                            <div class="card {{ $key != 0 ? 'mt-4' : '' }} mx-5">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="{{ Module::asset('golfbooking:media/image/pic.png') }}" alt="">
                                        </div>
                                        <div class="col-8 ps-5">
                                            <div class="d-flex justify-content-between">
                                                <span class="fs-8 fw-semibold text-primary">{{ $past_booking->booking_id ?? '-' }}</span>
                                                <span class="fs-8 fw-semibold {{ $past_booking->payment_status != 1 ? 'text-muted' : 'text-primary' }}">
                                                    <i class="bi bi-check-circle-fill {{ $past_booking->payment_status != 1 ? 'text-muted' : 'text-primary' }}"></i>
                                                    {{ strtoupper($past_booking->payment_status_name) ?? '-' }}
                                                </span>
                                            </div>
                                            <h2>Golf Course</h2>
                                            <span class="fs-8 d-block mb-1 fw-bold">{{ $past_booking->total_players ?? '-' }} Pax | {{ $past_booking->hole->name ?? '-' }}</span>
                                            <span class="fs-8 d-block mb-1 fw-bold">
                                            <i class="fas fa-calendar-alt text-primary fs-8"></i>
                                                {{ $past_booking->date->toFormattedDayDateString() ?? '-' }}, {{ $past_booking->time_slot->time->format('h:i A') ?? '-' }}</span>
                                            <div class="d-flex justify-content-between">
                                                <span class="fs-8 d-block fw-bold">
                                                    <i class="bi bi-geo-alt-fill text-primary fs-9" ></i>
                                                    {{ $past_booking->course->name ?? '-' }}</span>
                                                <span class="fs-8 text-primary"><a href="{{ route('facility-booking.booking.info', $past_booking->id) }}"><i class="fa-solid fa-circle-chevron-right text-primary fs-2x"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
