@extends('golfbooking::layouts.app-mobile2')
@section('content')
    <style>
        .btn-check:checked+.btn.btn-active-light-primary,
        .btn-check:active+.btn.btn-active-light-primary,
        .btn.btn-active-light-primary:focus:not(.btn-active),
        .btn.btn-active-light-primary:hover:not(.btn-active),
        .btn.btn-active-light-primary:active:not(.btn-active),
        .btn.btn-active-light-primary.active,
        .btn.btn-active-light-primary.show,
        .show>.btn.btn-active-light-primary {
            border: 1px solid #11998e !important;

            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }



        .btn.btn-outline.btn-outline-primary,
            {
            color: #aaaaaa;
            border-color: #eeeeee;
            background-color: transparent;
        }

       .btn-disabled,
            {
            color: #aaaaaa;
            border-color: var(--kt-secondary) !important;
            background-color: #eeeeee;
        }

        .btn-check:checked+.btn.btn-outline.btn-outline-primary,
        .btn-check:active+.btn.btn-outline.btn-outline-primary,
        .btn.btn-outline.btn-outline-primary:focus:not(.btn-active),
        .btn.btn-outline.btn-outline-primary:hover:not(.btn-active),
        .btn.btn-outline.btn-outline-primary:active:not(.btn-active),
        .btn.btn-outline.btn-outline-primary.active,
        .btn.btn-outline.btn-outline-primary.show,
        .show>.btn.btn-outline.btn-outline-primary {
            color: #ffffff;
            border-color: #11998e;
            background-color: #11998e !important;
        }

        #week-container {
            display: flex;
            overflow-x: auto;
            white-space: nowrap;
        }

        .week {
            flex: 0 0 auto;
            width: 100px;
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }


        .symbol.symbol-25px .symbol-label {
            width: 25px;
            height: 25px;
            border-radius: 20px;
        }


        .btn-check:checked+.btn.btn-active-light-primary,
        .btn-check:active+.btn.btn-active-light-primary,
        .btn.btn-active-light-primary:focus:not(.btn-active),
        .btn.btn-active-light-primary:hover:not(.btn-active),
        .btn.btn-active-light-primary:active:not(.btn-active),
        .btn.btn-active-light-primary.active,
        .btn.btn-active-light-primary.show,
        .show>.btn.btn-active-light-primary {
            color: #ffffff;

            border-color: #11998e;
            background-color: #11998e !important;
        }

        #show_bg_2 {
            background: rgb(255, 255, 255);
            background: linear-gradient(106DEG, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.9528186274509804) 60%, rgba(255, 255, 255, 0) 70%, rgba(255, 255, 255, 0) 100%),
                url(assets/media/image/east1.png);
            height: auto;
            background-size: cover;
            color: white;
        }

        #show_bg_3 {
            background: rgb(255, 255, 255);
            background: linear-gradient(107deg, rgba(255, 255, 255, 1) 0%, rgb(255 255 255) 61%, rgba(255, 255, 255, 0) 100%),
                url(assets/media/image/east2.png);
            height: auto;
            background-size: cover;
            color: white;
        }

        #show_bg_4 {
            background: rgb(255, 255, 255);
            background: linear-gradient(107deg, rgba(255, 255, 255, 1) 0%, rgb(255 255 255) 61%, rgba(255, 255, 255, 0) 100%),
                url(assets/media/image/east3.png);
            height: auto;
            background-size: cover;
            color: white;
        }
    </style>

    <div class="container-xxl" id="kt_content_container">
        <div class="stepper stepper-links d-flex flex-column hover-scroll-y" id="kt_create_booking_stepper"
            data-kt-scroll="true" data-kt-scroll-height="{default: '896px', lg: '896px'}" style="overflow-x: hidden;">
            <div class="stepper-nav mb-5 d-none">
                <!--begin::Step 1-->
                <div class="stepper-item current" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Choose Course</h3>
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Choose Time</h3>
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Player Details</h3>
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Confirm Details</h3>
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Payment</h3>
                </div>
                <!--end::Step 5-->
            </div>
            <form class="mx-auto mw-600px w-100 pb-10" action="{{ route('golf-course.store') }}" method="POST" enctype="multipart/form-data" novalidate="novalidate" id="form-golf-course">
                <!--begin::Step 1-->
                @include('golfbooking::golf-course.step-1')
                <!--end::Step 1-->

                <!--begin::Step 2-->
                @include('golfbooking::golf-course.step-2')
                <!--end::Step 2-->

                <!--begin::Step 3-->
                @include('golfbooking::golf-course.step-3')
                <!--end::Step 3-->

                <!--begin::Step 4-->
                @include('golfbooking::golf-course.step-4')
                <!--end::Step 4-->
                
                <!--begin::Actions-->
                <div class="d-flex flex-stack pt-8">
                    <div class="mr-2">
                        <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                            <span class="svg-icon svg-icon-4 me-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                                    <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
                                </svg>
                            </span>
                            Back
                        </button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit" id="form-submit-button">
                            <span class="indicator-label">Submit
                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next" id="form-continue-button">Continue
                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
            var token = `{{ csrf_token() }}`;
    </script>
    <script src="{{ Module::asset('golfbooking:js/custom/golf_course/index.js') }}"></script>
@endpush