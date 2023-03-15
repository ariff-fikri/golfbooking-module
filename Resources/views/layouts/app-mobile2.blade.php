<!DOCTYPE html>
<html lang="en" style="background: #d2d2d2;">
<!--begin::Head-->

<head>
    <base href="" />
    <title>Cara Golf </title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ Module::asset('golfbooking:media/logos/cara_golf_icon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ Module::asset('golfbooking:plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ Module::asset('golfbooking:plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ Module::asset('golfbooking:plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ Module::asset('golfbooking:css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ Module::asset('golfbooking:css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ Module::asset('golfbooking:css/custom.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->



<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="position-relative"
    style="background: #FDFDFD;">

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            @include('golfbooking::layouts.header-bg')
            <!--begin::Page-->
            <!--begin::Content-->
            <div  style="background-image: linear-gradient(to top, #51C6BC 0%, #11998E 100%); height:150px;border-radius: 0 0 10em 10em;">

                @yield('content')

            </div>
            <!--end::Content-->
            <!--end::Page-->
        </div>
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
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ Module::asset('golfbooking:plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ Module::asset('golfbooking:plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ Module::asset('golfbooking:js/widgets.bundle.js') }}"></script>
    <script src="{{ Module::asset('golfbooking:js/custom/widgets.js') }}"></script>
    <script src="{{ Module::asset('golfbooking:js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ Module::asset('golfbooking:js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ Module::asset('golfbooking:js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ Module::asset('golfbooking:js/custom/utilities/modals/users-search.js') }}"></script>
    <script src="{{ Module::asset('golfbooking:js/custom/utilities/modals/create-account.js') }}"></script>

    @stack('scripts')

    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
