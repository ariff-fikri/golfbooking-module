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
                <!--begin::Header-->
                <div class="landing-header bg-light" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container px-9">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal ">
								<!--begin::User info-->
                                <div class="btn btn-active-light d-flex align-items-center bg-hover-light py-2 px-1"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
									<!--begin::Symbol-->
                                    <div class="symbol symbol-30px symbol-md-40px">
                                        <img src="{{ Module::asset('golfbooking:media/avatars/300-14.jpg') }}" alt="image">
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Name-->
                                    <div class="d-md-flex text-start flex-column align-items-start justify-content-start ms-3 me-2 ">
                                        <span class="fs-5 fw-bold lh-1">Hello, {{ auth()->user()->nickname ?? 'Guest' }}</span>
                                        <span class="fs-6 " style="color:#11998E;">Member ID: {{ auth()->user()->member_id ?? '8368' }}</span>
                                    </div>
                                    <!--end::Name-->

                                </div>
                                <!--end::User info-->
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true" >
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        {{-- <form action="{{ route('logout') }}" id="form-logout" method="POST">
                                            @csrf
                                            <a onclick="$('#form-logout').submit();" class="menu-link px-5">Sign Out</a>
                                        </form> --}}
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                    data-kt-drawer-name="landing-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">

                                </div>
                            </div>
                            <!--end::Menu wrapper-->
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center ms-lg-5" id="kt_header_user_menu_toggle">
								<i class="bi bi-bell text-black fs-1"></i>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                @yield('content')
            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Header Section-->

    </div>
    <!--end::Root-->
    <div class="d-flex justify-content-around align-items-center py-8 border-top ">
        <span class="d-flex flex-column text-center text-primary ">
            <i class="fas fa-home fs-2x pb-2 text-primary"></i>
            Home
        </span>
        <span class="d-flex flex-column text-center text-hover-primary  text-gray-400">
        <i class="fas fa-star fs-2x pb-2"></i>
        Highlights
        </span>

        <span class="d-flex flex-column text-center text-hover-primary  text-gray-400">
        <i class="fas fa-address-card fs-2x  pb-2"></i>
        T.privilege
        </span>

        <span class="d-flex flex-column text-center text-hover-primary  text-gray-400">
        <i class="fas fa-cog fs-2x pb-2"></i>
        Setting
        </span>
    </div>
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
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
