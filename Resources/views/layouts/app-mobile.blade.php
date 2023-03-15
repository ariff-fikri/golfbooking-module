<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <title>CARA GOLF</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="Enviro CRM" />
    <meta name="viewport" content="width=414" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Enviro" />
    <meta property="og:url" content="http://cara.com.my/" />
    <meta property="og:site_name" content="Enviro" />
    <link rel="canonical" href="http://cara.com.my/" />
    <link rel="shortcut icon" href="{{ Module::asset('golfbooking:media/logos/cara_golf_icon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ Module::asset('golfbooking:plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ Module::asset('golfbooking:css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ Module::asset('golfbooking:css/custom.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->



<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="position-relative" style="background: #FDFDFD;">

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom">
               @include('golfbooking::layouts.header')
                @yield('content')
            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Header Section-->
    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ Module::asset('golfbooking:plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ Module::asset('golfbooking:js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ Module::asset('golfbooking:plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ Module::asset('golfbooking:plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ Module::asset('golfbooking:js/custom/landing.js') }}"></script>
    {{-- <script src="{{ Module::asset('golfbooking:js/custom/pages/pricing/general.js') }}"></script> --}}
    <!--end::Custom Javascript-->

    @stack('scripts')
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
