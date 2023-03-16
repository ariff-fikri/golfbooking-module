@extends('golfbooking::layouts.app')

@section('content')
    <style>
        .golf-image {
            object-fit: cover;

        }
    </style>

    <div class="row gy-5 g-xl-8">
        <div class="col-lg-8 col-sm-8 col-md-8">
            <div class="row gy-5">
                <div class="col-xxl-3">
                    <!--begin::List Widget 9-->
                    <div class="card card-xxl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-3">
                            <i class="fas fa-calendar-alt fs-3x text-primary"></i>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body lh-1 pt-2">
                            <h1 class="fw-bolder">{{ $bookings->count() }}</h1>
                            <span class="fw-semibold fs-3"> Bookings</span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 9-->
                </div>
                <div class="col-xxl-3">
                    <!--begin::List Widget 9-->
                    <div class="card card-xxl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-3">
                            <i class="fas fa-users fs-3x text-primary"></i>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body lh-1 pt-2">
                            <h1 class="fw-bolder">1432</h1>
                            <span class="fw-semibold fs-3"> Golfer</span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 9-->
                </div>
                <div class="col-xxl-3">
                    <!--begin::List Widget 9-->
                    <div class="card card-xxl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-3">
                            <i class="fas fa-wallet fs-3x text-primary"></i>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body lh-1 pt-2">
                            <h1 class="fw-bolder">RM 12,920</h1>
                            <span class="fw-semibold fs-3"> Profit</span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 9-->
                </div>
                <div class="col-xxl-3">
                    <!--begin::List Widget 9-->
                    <div class="card card-xxl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-3">
                            <i class="fas fa-user-plus fs-3x text-primary"></i>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body lh-1 pt-2">
                            <h1 class="fw-bolder">211</h1>
                            <span class="fw-semibold fs-3"> New Members</span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 9-->
                </div>
                <div class="col-xxl-4">
                    <!--begin::List Widget 9-->
                    <div class="card card-xxl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-3">
                            <i class="fas fa-calendar-alt fs-3x text-warning"></i>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body lh-1 pt-2">
                            <h1 class="fw-bolder text-warning">13</h1>
                            <span class="fw-semibold fs-3">Pending Booking</span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 9-->
                </div>
                <div class="col-xxl-4">
                    <!--begin::List Widget 9-->
                    <div class="card card-xxl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-3">
                            <i class="fas fa-calendar-alt fs-3x text-danger"></i>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body lh-1 pt-2">
                            <h1 class="fw-bolder text-danger">2</h1>
                            <span class="fw-semibold fs-3">Canceled Booking</span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 9-->
                </div>
                <div class="col-xxl-4">
                    <!--begin::List Widget 9-->
                    <div class="card card-xxl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-3">
                            <i class="fas fa-users fs-3x text-primary"></i>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body lh-1 pt-2">
                            <h1 class="fw-bolder">1321</h1>
                            <span class="fw-semibold fs-3"> Total Members</span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 9-->
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-md-4 ">
            <!--begin::List Widget 9-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-3">
                    <span class="fw-semibold fs-3"> Booking Payment</span>
                </div>
                <!--end::Header-->
                <div class="card-body d-flex align-items-end pt-6">
                    <!--begin::Row-->
                    <div class="row align-items-center mx-0 w-100">
                        <!--begin::Col-->
                        <div class="col-12 d-flex justify-content-center px-0">
                            <!--begin::Chart-->
                            <div id="kt_card_widget_19_chart" class="min-h-auto h-150px w-150px" data-kt-size="150"
                                data-kt-line="25"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-12 px-0">
                            <!--begin::Labels-->
                            <div class="d-flex flex-column content-justify-center me-3">
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <!--begin::Bullet-->
                                    <div class="bullet bg-success me-3" style="border-radius: 3px;width: 12px;height: 12px">
                                    </div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="fs-5 fw-bold text-gray-600 ">Total Paid:</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="ms-auto fw-bolder text-gray-700 text-start">64%</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center my-4">
                                    <!--begin::Bullet-->
                                    <div class="bullet bg-primary me-3" style="border-radius: 3px;width: 12px;height: 12px">
                                    </div>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="fs-5 fw-bold text-gray-600 ">Total Unpaid:</div>
                                    <!--end::Label-->
                                    <!--begin::Stats-->
                                    <div class="ms-auto fw-bolder text-gray-700 text-start">46%</div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Col-->

                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::List Widget 9-->
        </div>
    </div>

    <div class="row gy-5 g-xl-8">
        <div class="col-xxl-8">
            <!--begin::Card-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h1> Recent Booking </h1>
                    </div>
                    <!--begin::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

                                <th class="max-w-125px">Golfer Name</th>
                                <th class="max-w-125px">Member ID</th>
                                <th class="max-w-125px">Flight Time</th>
                                <th class="max-w-125px">Pax</th>
                                <th class="max-w-125px">Tee</th>
                                <th class="max-w-125px">Paid</th>
                                <th class="max-w-125px">Setting</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-semibold">
                            @foreach ($bookings as $booking)
                                <tr>
                                    <!--begin::User=-->
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-circle symbol-30px overflow-hidden me-3">
                                            <a href="javascript:;">
                                                <div class="symbol-label">
                                                    <img src="{{ $booking->user->photo ?? '' }}" alt="Emma Smith" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <a href="javascript:;"
                                                class="text-gray-800 text-hover-primary mb-1">{{ $booking->user->full_name }}</a>
                                            <span>{{ $booking->user->phone_no ?? '0123456789' }}</span>
                                        </div>
                                        <!--begin::User details-->
                                    </td>
                                    <!--end::User=-->
                                    <!--begin::Role=-->
                                    <td>{{ $booking->user->member_id ?? '-' }}</td>
                                    <!--end::Role=-->
                                    <!--begin::Last login=-->
                                    <td>
                                        <div class="badge badge-light fw-bold">
                                            {{ $booking->time_slot->time->format('H:i') ?? '-' }}
                                            {{ $booking->time_slot->time_type ?? '' }}</div>
                                    </td>
                                    <!--end::Last login=-->
                                    <!--begin::Two step=-->
                                    <td>{{ $booking->total_players }} Pax</td>
                                    <!--end::Two step=-->
                                    <!--begin::Joined-->
                                    <td>{{ $booking->course->name ?? '-' }}</td>
                                    <!--begin::Joined-->

                                    <td>
                                        <div class="badge {{ $booking->payment_status_color }} fw-bold">
                                            {{ $booking->payment_status_name }}</div>
                                    </td>

                                    <!--begin::Action=-->
                                    <td class="text-start">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('facility-booking.dashboard.view', $booking->id) }}" class="menu-link px-3">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                            @endforeach

                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <div class="col-xxl-4">
            <!--begin::List Widget 9-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0">
                    <span class="fw-semibold fs-3">Top Tee this week</span>
                </div>
                <!--end::Header-->
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="{{ Module::asset('golfbooking:media/image/east1.png') }}" class="golf-image" alt="" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <div class="col-10 d-flex align-items-center justify-content-between">

                            <div class="d-block text-start ms-5">
                                <h2 class="text-bold text-primary">#1</h2>
                                <span class="fw-semibold fs-3"> 1st Nine </span>




                            </div>

                            <span class="fw-semibold text-primary"> 226 Booked </span>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="{{ Module::asset('golfbooking:media/image/east3.png') }}" class="golf-image" alt="" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <div class="col-10 d-flex align-items-center justify-content-between">

                            <div class="d-block text-start ms-5">
                                <h2 class="text-bold text-primary">#2</h2>
                                <span class="fw-semibold fs-3"> 3rd Nine </span>
                            </div>

                            <span class="fw-semibold text-primary"> 210 Booked </span>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="{{ Module::asset('golfbooking:media/image/east2.png') }}" class="golf-image" alt="" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <div class="col-10 d-flex align-items-center justify-content-between">

                            <div class="d-block text-start ms-5">
                                <h2 class="text-bold text-primary">#3</h2>
                                <span class="fw-semibold fs-3"> 3nd Nine </span>
                            </div>

                            <span class="fw-semibold text-primary"> 198 Booked </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card body-->
        </div>

    </div>
@endsection
