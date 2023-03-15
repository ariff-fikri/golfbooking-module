<!DOCTYPE html>
<html lang="en" style="background: #d2d2d2 !important;">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <title>Cara Golf</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="Cara Golf" />
    <meta name="viewport" content="width=414" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Cara_Golf" />
    <meta property="og:url" content="http://cara.com.my/" />
    <meta property="og:site_name" content="Cara_Golf" />
    <link rel="canonical" href="http://cara.com.my/" />
    <link rel="shortcut icon" href="{{ Module::asset('golfbooking:media/logos/cara_golf_icon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ Module::asset('golfbooking:plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ Module::asset('golfbooking:css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<style>

@media (min-width: 415px) {
    body{
        max-width: 414px !important;
        min-height: 896px !important;
        width: 100% !;
        margin: 0 auto;
        background: #fff;
    }
}


    .img-login {

        background: linear-gradient(0deg, rgb(84 84 84 / 41%), rgb(48 48 48 / 61%)), center / cover no-repeat url({{ Module::asset('golfbooking:media/image/golfcourse-overview.png') }});

    }

    .form-control {
    color: #ffffff !important;
    background-color: var(--kt-input-bg);
    border: 1px solid var(--kt-input-border-color);
    box-shadow: none !important;
}
</style>
<!--begin::Body-->

<body id="kt_body" class="app-blank img-login ">
    {{-- <img src="{{ Module::asset('golfbooking:media/image/golfcourse-overview.png') }}"> --}}
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <!--begin::Form-->

                <div class="d-flex align-self-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-300px py-20  mx-auto">

                        @yield('content')

                    </div>
                    <!--end::Wrapper-->

                </div>
                <!--end::Form-->
            </div>
            <!--end::Body-->

        </div>
        <!--end::Authentication - Sign-in-->
        <!--begin::Sign up-->
        <div class="text-white fw-bold fs-6 align-self-end p-10 text-center"> By clicking <a
                class="text-primary fw-bolder">"Login" </a> above, you agree to Cara Golf's <span
                class="text-primary fw-bolder"> Terms & Condition </span> and <span
                class="text-primary fw-bolder">Privacy Policy </span>
         </div>
        <!--end::Sign up-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ Module::asset('golfbooking:plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ Module::asset('golfbooking:js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    @include('golfbooking::messages.toastr')

    @stack('scripts')
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
