<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div>
            <!--begin::booking details-->
            <div class="border p-5 mb-6 rounded bg-white" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                <div class="row">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-7 d-flex align-items-center">
                            <span class="svg-icon svg-icon-primary svg-icon-3x me-5">
                                <i class="bi bi-geo-alt-fill text-golf fs-3"></i>
                            </span>
                            <span class="text-primary fw-bold fs-3" id="step-3-course-display">1st Nine</span>
                        </div>
                        <div class="col-5">
                            {{-- <span class=" text-danger fw-bold fs-6 ">Time left : 9:31</span> --}}
                        </div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-between mt-3">
                        <div class="col-7 d-flex flex-column">
                            <span class="text-muted"> Date </span>
                            <span class="text-dark fw-bold fs-6" id="step-3-date-display"></span>
                        </div>
                        <div class=" col-5 d-flex flex-column">
                            <span class="text-muted"> Time </span>
                            <span class="text-dark fw-bold fs-6" id="step-3-time-slot-display">7:13 AM</span>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-between mt-3">
                        <div class="col-7 d-flex flex-column">
                            <span class="text-muted"> No of Pax </span>
                            <span class="text-dark fw-bold fs-6" id="step-3-no-of-pax-display">4 Pax</span>
                        </div>
                        <div class="col-5 d-flex flex-column">
                            <span class="text-muted"> Game Option </span>
                            <span class="text-dark fw-bold fs-6" id="step-3-holes-display">45 Holes</span>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-between mt-3">
                        <div class="col-12 d-flex flex-column">
                            <span class="text-muted"> Booking ID </span>
                            <span class="text-dark fw-bold fs-6" id="step-3-book-id-display">#CG12346253</span>
                            <input type="hidden" name="booking_id" id="booking_id_input">
                        </div>
                    </div>
                </div>
            </div>
            <!--end::booking details-->
            <!--begin::player details-->
            <div class="border p-5 mb-6 rounded bg-white" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;" id="player-1">
                <div class="d-flex align-items-center justify-content-between collapsible toggle mb-0"
                    data-bs-toggle="collapse" data-bs-target="#player-1-collapse">
                    <!--begin::Title-->
                    <h4 class="text-darker fw-bold cursor-pointer mb-0" id="display-player-1">Player 1</h4>
                    <!--end::Title-->
                    <!--begin::Icon-->
                    <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                        <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                            <i class="fas fa-angle-down fs-2x"></i>
                        </span>
                        <!--end::Svg Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                        <span class="svg-icon toggle-off svg-icon-1">
                            <i class="fas fa-angle-up fs-2x"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                </div>
                <div id="player-1-collapse" class="collapse show fs-6 ms-1">
                    <div class="row mt-3">
                        <div class="col-12 d-flex align-items-center fv-row">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input member_type" type="radio" name="players[0][type]" value="member" id="player-type-0-member">
                                <label class="form-check-label" for="player-type-0-member">
                                    Member
                                </label>
                            </div>

                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input member_type" type="radio" value="guest" name="players[0][type]" id="player-type-0-guest">
                                <label class="form-check-label" for="player-type-0-guest">
                                    Guest
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6 fv-row">
                            <!--begin::Label-->
                            <label class="form-label required"> Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input name="players[0][name]" class="form-control form-control-lg form-control-solid"
                                value="" />
                            <!--end::Input-->
                        </div>
                        <div class="col-6 fv-row">
                            <!--begin::Label-->
                            <label class="form-label required"> Member ID</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input name="players[0][id]" class="form-control form-control-lg form-control-solid"
                                value="" />
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="row mt-3 fv-row">
                        <div class="col-12">
                            <!--begin::Label-->
                            <label class="form-label required"> Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input name="players[0][email]" class="form-control form-control-lg form-control-solid"
                                value="" />
                            <!--end::Input-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::player details-->
        </div>
        <!--end::Heading-->
    </div>
    <!--end::Wrapper-->
</div>

@push('scripts')
    <script src="{{ Module::asset('golfbooking:js/custom/golf_course/step-3.js') }}"></script>
@endpush
