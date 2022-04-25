<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl" dir="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    <meta name="theme-color" content="#5A8DEE">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/vendors/css/vendors.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/vendors/css/charts/apexcharts.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/vendors/css/extensions/dragula.min.css") }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/bootstrap-extended.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/colors.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/components.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/themes/dark-layout.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/themes/semi-dark-layout.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/vendors/css/extensions/toastr.css") }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/core/menu/menu-types/vertical-menu.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/pages/dashboard-analytics.css") }}">
    <!-- END: Page CSS-->

    @yield('css')


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body
    class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">

                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span
                                    class="user-name">{{ \Illuminate\Support\Facades\Auth::user()->full_name  }}</span>
                            </div>
                            <span>
                                <img class="round" src="../../assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                                     height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu pb-0"><a class="dropdown-item" href="page-user-profile.html"><i
                                    class="bx bx-user mr-50"></i> ویرایش پروفایل</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i>
                                خروج</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"
                                            href="../../html/vertical-menu-boxicons-template/index.html">
                    <div class="brand-logo"><img class="logo" src="../../assets/images/logo/logo.png"></div>
                    <h2 class="brand-text mb-0">Frest</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">

            <li class=" nav-item">
                <a href="{{ route("admin.dashboard") }}">
                    <i class="bx bx-home-alt"></i>
                    <span class="menu-title">داشبورد</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{ route("admin.customers") }}">
                    <i class="bx bx-user"></i>
                    <span class="menu-title">مدیریت مشتریان</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{ route("admin.sms") }}">
                    <i class="bx bx-envelope"></i>
                    <span class="menu-title">مدیریت پیام ها</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{ route("admin.job") }}">
                    <i class="bx bx-briefcase"></i>
                    <span class="menu-title">مدیریت شغل</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{ route("admin.howknow") }}">
                    <i class="bx bx-help-circle"></i>
                    <span class="menu-title">مدیریت نحوه آشنایی</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{ route("admin.ostan") }}">
                    <i class="bx bx-globe"></i>
                    <span class="menu-title">مدیریت استان</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{ route("admin.city") }}">
                    <i class="bx bx-globe"></i>
                    <span class="menu-title">مدیریت شهر</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{ route("admin.position") }}">
                    <i class="bx bx-globe"></i>
                    <span class="menu-title">مدیریت موقعیت</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{ url("logout") }}">
                    <i class="bx bx-exit"></i>
                    <span class="menu-title">خروج از داشبورد</span>
                </a>
            </li>


        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    @yield('main')
</div>
<!-- END: Content-->


</div>
<!-- demo chat-->
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset("assets/vendors/js/vendors.min.js") }}"></script>
<script src="{{ asset("assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js") }}"></script>
<script src="{{ asset("assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js") }}"></script>
<script src="{{ asset("assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js") }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset("assets/vendors/js/charts/apexcharts.min.js") }}"></script>
<script src="{{ asset("assets/vendors/js/extensions/dragula.min.js") }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset("assets/vendors/js/extensions/toastr.min.js") }}"></script>
<!-- END: Page Vendor JS-->


<!-- BEGIN: Theme JS-->
<script src="{{ asset("assets/js/core/app-menu.js") }}"></script>
<script src="{{ asset("assets/js/core/app.js") }}"></script>
<script src="{{ asset("assets/js/scripts/components.js") }}"></script>
<script src="{{ asset("assets/js/scripts/footer.js") }}"></script>
<script src="{{ asset("assets/js/scripts/customizer.js") }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset("assets/js/scripts/pages/dashboard-analytics.js") }}"></script>
<!-- END: Page JS-->


<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset("assets/vendors/js/extensions/toastr.min.js") }}"></script>
<!-- END: Page Vendor JS-->

@yield('script')

<script>


    @if(Session::has('Error'))

    toastr.error("{{ Session::get('Error') }}", 'خطا', {
        rtl: true,
        positionClass: 'toast-bottom-right'
    });

    @endif

    @if(Session::has('Success'))

    toastr.success("{{ Session::get('Error') }}", 'موفقیت', {
        rtl: true,
        positionClass: 'toast-bottom-right'
    });

    @endif

</script>

</body>
<!-- END: Body-->
</html>

