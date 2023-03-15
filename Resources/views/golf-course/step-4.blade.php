<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::booking details-->
        <div class="border p-5 mb-6 rounded bg-white" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
            <div class="row">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-7 d-flex align-items-center">
                        <span class="svg-icon svg-icon-primary svg-icon-3x me-5">
                            <i class="bi bi-geo-alt-fill text-golf fs-3"></i>
                        </span>
                        <span class="text-primary fw-bold fs-3" id="step-4-course-display">1st Nine</span>
                    </div>
                    <div class="col-5">
                        {{-- <span class=" text-danger fw-bold fs-6 ">Time left : 9:31</span> --}}
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-between mt-3">
                    <div class="col-7 d-flex flex-column">
                        <span class="text-muted"> Date </span>
                        <span class="text-dark fw-bold fs-6" id="step-4-date-display"></span>
                    </div>
                    <div class=" col-5 d-flex flex-column">
                        <span class="text-muted"> Time </span>
                        <span class="text-dark fw-bold fs-6" id="step-4-time-slot-display">7:13 AM</span>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-between mt-3">
                    <div class="col-7 d-flex flex-column">
                        <span class="text-muted"> No of Pax </span>
                        <span class="text-dark fw-bold fs-6" id="step-4-no-of-pax-display">4 Pax</span>
                    </div>
                    <div class="col-5 d-flex flex-column">
                        <span class="text-muted"> Game Option </span>
                        <span class="text-dark fw-bold fs-6" id="step-4-holes-display">45 Holes</span>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-between mt-3">
                    <div class="col-12 d-flex flex-column">
                        <span class="text-muted"> Booking ID </span>
                        <span class="text-dark fw-bold fs-6" id="step-4-book-id-display">#CG12346253</span>
                    </div>
                </div>
            </div>
        </div>
        <!--end::booking details-->
        <!--begin::player details-->
        <div class="border p-5 mb-6 rounded bg-white"
            style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
            <div class="d-flex  flex-column collapsible toggle mb-0" data-bs-toggle="collapse" data-bs-target="#show_more">
                <!--begin::Title-->
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="text-primary w-bold cursor-pointer mb-0">Player Details</h4>
                    <h4 class="text-primary w-bold cursor-pointer mb-0"><span id="step-4-pax">x4 Pax</span>
                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary">
                            <span class="svg-icon toggle-off svg-icon-1">
                                <i class="fas fa-angle-up fs-2x"></i>
                            </span>
                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                <i class="fas fa-angle-down fs-2x"></i>
                            </span>
                        </div>
                    </h4>
                </div>
                <!--end::Title-->

                <div id="player-1-step-4"></div>

            </div>

            <div id="show_more" class="collapse">
                <div id="player-2-step-4"></div>
            </div>
        </div>
        <!--end::player details-->

        <!--begin::player details-->
        <div class="border p-5 mb-6 rounded" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
            <div class="d-flex  flex-column collapsible toggle mb-0">
                <!--begin::Title-->
                <div class="d-flex align-items-center justify-content-between mb-5">
                    <h4 class="text-primary w-bold cursor-pointer mb-0">Payment Details</h4>
                </div>
                <!--end::Title-->
                <div class="d-flex align-items-center justify-content-between">
                    <span class="text-gray-500 fw-semibold fs-6" id="holes-div-step-4">18 Holes</span>
                </div>

                <div class="d-flex align-items-center justify-content-between">
                    <span class="text-gray-500 fw-semibold fs-6" id="member-price-label-step-4">Member x2</span>
                    <span class="text-dark fw-bold fs-6" id="member-price-div-step-4">RM 381</span>
                    <input type="hidden" name="total_member_amount" id="total_member_amount_input">
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="text-gray-500 fw-semibold fs-6" id="guest-price-label-step-4">Guest x2</span>
                    <span class="text-dark fw-bold fs-6" id="guest-price-div-step-4">RM 449</span>
                    <input type="hidden" name="total_guest_amount" id="total_guest_amount_input">
                </div>
                {{-- <div class="d-flex align-items-center justify-content-between">
                    <span class="text-gray-500 fw-semibold fs-6">Caddy</span>
                    <span class="text-dark fw-bold fs-6">RM 47</span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="text-gray-500 fw-semibold fs-6">Buggy</span>
                    <span class="text-dark fw-bold fs-6">RM 80</span>
                </div> --}}
                <hr>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="text-primary fw-bold fs-4">Grand Total</span>
                    <span class="text-primary fw-bold fs-4" id="grand_total">RM 957</span>
                    <input type="hidden" name="total_payment" id="total_payment_input">
                </div>
            </div>

        </div>
        <!--end::player details-->
        <!--begin::Alert-->
        <div class="alert bg-light-info d-flex align-items-center p-5">
            <!--begin::Icon-->
            <span class="svg-icon  me-3">
                <i class="fas fa-info-circle fs-2x text-info"></i>
            </span>
            <!--end::Icon-->

            <!--begin::Wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Title-->
                <!--end::Title-->
                <!--begin::Content-->
                <h6 class="text-info fw-semibold fs-7">Please be advised that a payment is required in
                    order
                    to confirm your booking.</h6>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Alert-->

    </div>
    <!--end::Wrapper-->
</div>

@push('scripts')
    <script src="{{ Module::asset('golfbooking:js/custom/golf_course/step-4.js') }}"></script>
@endpush