@extends('golfbooking::layouts.authapp')
@section('content')
    <!--begin::Form-->
    <form class="form w-100 mt-10" id="form-login" action="{{ route('facility-booking.login.post') }}" method="POST">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-8">
            <img class="text-center mx-auto w-200px mb-10 mb-lg-20 "
                        src="{{ Module::asset('golfbooking:media/logos/AllLogoCara-38.png') }}" alt="" />
            <!--begin::Title-->
            <h1 class="text-white fw-bolder">Welcome Back!</h1>
            <!--end::Title-->
            <!--begin::Subtitle-->
            {{-- <div class="text-gray-500 fw-semibold fs-6">Your Golf Booking Account</div> --}}
            <!--end::Subtitle=-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="Email" name="email_username" oninput="this.value = this.value.trim(); " autocomplete="off"
                class="form-control bg-transparent" />
            <!--end::Email-->
        </div>
        <!--end::Input group=-->
        <div class="fv-row mb-3">
            <!--begin::Password-->
            <input type="password" placeholder="Password" name="password" autocomplete="off"
                class="form-control bg-transparent" />
            <!--end::Password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap fs-base fw-semibold my-5">
            <div class="form-check form-check-custom form-check-solid">
                <input class="form-check-input h-20px w-20px" type="checkbox" value="1" id="flexCheckDefault"/>
                <label class="form-check-label text-white" for="flexCheckDefault">
                   Remember Me
                </label>
            </div>            <!--begin::Link-->
            {{-- <a href="{{ route('facility-booking.forgot_password.show') }}" class=" text-white text-end">Forgot Password ?</a> --}}
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Submit button-->
        <div class="d-grid mb-5">
            <button type="submit" id="btn-submit-login" class="btn btn-primary">Login</button>
        </div>
        <!--end::Submit button-->

    </form>

    <!--end::Form-->
@endsection

@push('scripts')
    <script src="{{ Module::asset('golfbooking:js/custom/authentication/sign-in/general.js') }}"></script>
@endpush
