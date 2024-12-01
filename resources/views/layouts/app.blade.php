<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    @include('layouts.head-link')

<body>




<body id="kt_app_body app-default" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="safari-mode app-default">

    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
            <div id="kt_app_header" class="app-header ">


                @include('layouts.main-header')


                {{-- @include('layouts.admin-nav') --}}
                @include('layouts.admin-nav')

            </div>
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper" style="    background: #f7efec;">
                <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                    <div class="d-flex flex-column flex-column-fluid">

                        @yield('content')

                    </div>


                    <div id="kt_app_footer" class="app-footer ">
                        <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                            <div class="text-gray-900 order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2024©</span>
                                <a href="https://dheeshanshomoeodemo.com" target="_blank" class="text-gray-800 text-hover-primary">Dheeshan's Homoeo Clinic</a>
                            </div>
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="https://dheeshanshomoeodemo.com/about" target="_blank" class="menu-link px-2">About</a></li>
                                <li class="menu-item"><a href="https://dheeshanshomoeodemo.com/services" target="_blank" class="menu-link px-2">Services</a></li>
                                <li class="menu-item"><a href="https://dheeshanshomoeodemo.com/contact" target="_blank" class="menu-link px-2">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end:::Main-->


            </div>
        </div>

    </div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->



    @include('layouts.foot-link')


        <!--begin::Page loading(append to body)-->
        <div class="page-loader">
            <span class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </span>
        </div>
        <!--end::Page loading-->



</body>










</body>
@stack('js')

</html>


