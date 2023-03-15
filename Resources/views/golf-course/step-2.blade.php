<div class="flex-column" data-kt-stepper-element="content">
    <div class="flex-column my-5">
        <h4 class="text-white"> Today Available</h4>
        <h1 class="text-white" style="font-size: 30px; " id="today-slot-available"></h1>
    </div>
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="mb-10">
            <!--begin::confirm-->
            <div class="border border-primary p-3 d-flex align-items-center rounded justify-content-between bg-white">

                <div class="text-start d-flex align-items-center">
                    <span class="svg-icon svg-icon-primary svg-icon-3x me-5">
                        <i class="bi bi-geo-alt-fill text-golf fs-3"></i>
                    </span>
                    <!--end::Svg Icon-->
                    <!--begin::Info-->
                    <span class="d-block fw-semibold text-start">
                        <span class="text-primary fw-bold d-block fs-3 mb-2" id="step-2-course-name">1st Nine</span>
                        <span class="text-dark fw-semibold fs-6" id="step-2-date-display">Wed, 22th February
                            2023</span>
                    </span>
                    <!--end::Info-->
                </div>
                {{-- <span class="text-danger fw-bold fs-6 text-end">Time left : 9:31</span> --}}
            </div>
            <!--end::confrim-->
        </div>
        <!--end::Heading-->
        <!--begin::Input group-->
        <div class=" fv-row">
            <!--begin::Title-->
            <h5 class="fw-bold text-gray-500">Select Time</h5>
            <!--end::Title-->
            <!--begin::Label-->
            <label class="d-flex align-items-center form-label mb-3">
            </label>
            <!--end::Label-->
            <!--begin::Row-->
            <div class="row mb-2" data-kt-buttons="true">
                <!--begin::Col-->
                <div class="col-3">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 active">
                        <input type="radio" class="btn-check time_type" id="time_type_am" name="time_type" value="AM" checked/>
                        <span class="fw-bold fs-5">AM</span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-3">
                    <!--begin::Option-->
                    <label
                        class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                        <input type="radio" class="btn-check time_type" id="time_type_pm" name="time_type" value="PM" />
                        <span class="fw-bold fs-5">PM</span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->
            </div>
            <hr class="my-5 border-1">

            <div class="row mb-2" data-kt-buttons="true" id="time-slots-available-step-2">
                <span class="text-dark fw-semibold fs-6 ml-4">Please choose your time slot first</span>
            </div>
        </div>
        <!--end::Input group-->
        <hr class="my-5 border-1">
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Title-->
            <h5 class="fw-bold text-gray-500">Select Holes</h5>
            <!--end::Title-->

            <!--begin::Label-->
            <label class="d-flex align-items-center form-label mb-3">
            </label>
            <!--end::Label-->
            <!--begin::Row-->
            <div class="row mb-2" data-kt-buttons="true" id="holes-div-select">

                @foreach ($holes as $hole)
                    <div class="col-4">
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 ">
                            <input type="radio" class="btn-check" name="hole_id"
                                value="{{ $hole->id }}" />
                            <span class="fw-bold fs-6" id="holes-display-{{ $hole->id }}">{{ $hole->name }}</span>
                        </label>
                    </div>
                @endforeach
            </div>

        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Title-->
            <h5 class="fw-bold text-gray-500">Select Pax</h5>
            <!--end::Title-->

            <!--begin::Label-->
            <label class="d-flex align-items-center form-label mb-3">
            </label>
            <!--end::Label-->
            <!--begin::Row-->
            <div class="row mb-2" data-kt-buttons="true" id="pax-div-select">
                <!--begin::Col-->
                <div class="col-3">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 ">
                        <input type="radio" class="btn-check" name="account_team_size" value="1-1" />
                        <span class="fw-bold fs-4">2 </span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-3">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 ">
                        <input type="radio" class="btn-check" name="account_team_size" value="2-10" />
                        <span class="fw-bold fs-4">3</span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-3">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 ">
                        <input type="radio" class="btn-check" name="account_team_size" value="2-10" />
                        <span class="fw-bold fs-4">4</span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->
            </div>
            <div id="invalid-input-step-2" class="text-danger">Please choose at least one.</div>

        </div>
        <!--end::Input group-->

    </div>
    <!--end::Wrapper-->
</div>

@push('scripts')
    <script>
        var time_type_url = '{{ route('golf-course.time_type') }}';
        var holes_available_url = '{{ route('golf-course.holes_available') }}';
        var time_slots_all = @json($time_slots);
        var unavailable_time_slots = @json($unavailable_time_slots);
        var all_holes = @json($holes);
    </script>
    <script src="{{ Module::asset('golfbooking:js/custom/golf_course/step-2.js') }}"></script>
@endpush