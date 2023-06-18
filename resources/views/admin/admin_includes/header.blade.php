<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets_admin/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets_admin/images/favicon.png') }}" />

    <!-- Datatables -->
    <link rel="stylesheet" href="{{asset('assets/css/datatables.css')}}">
    <script src="{{asset('assets/js/datatables.js')}}"></script>

</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #181824">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="{{ url('/admin') }}"><img src="{{asset('assets_admin/images/logo.svg')}}" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="{{ url('/admin') }}"><img src="{{asset('assets_admin/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Soffen
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Çıxış
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-category"></li>
                <li class="nav-item {{ $pgname == 'home' ? 'active' : '' }}"  id="home">
                    <a class="nav-link" href="{{ url('/admin') }}">
                        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                        <span class="menu-title">Əsas səhifə</span>
                    </a>
                </li>
                <li class="nav-item {{ $pgname == 'services' ? 'active' : '' }}" id="services">
                    <a class="nav-link" href="{{ url('/services_index') }}">
                        <span class="icon-bg"><i class="mdi mdi-apps menu-icon"></i></span>
                        <span class="menu-title">Servislər</span>
                    </a>
                </li>
                <li class="nav-item {{ $pgname == 'features' ? 'active' : '' }}" id="features">
                    <a class="nav-link" href="{{ url('/features_index') }}">
                        <span class="icon-bg"><i class="mdi mdi-server-network menu-icon"></i></span>
                        <span class="menu-title">Features</span>
                    </a>
                </li>
                <li class="nav-item {{ $pgname == 'projects' ? 'active' : '' }}" id="projects">
                    <a class="nav-link" href="{{ url('/projects_index') }}">
                        <span class="icon-bg"><i class="mdi mdi-note menu-icon"></i></span>
                        <span class="menu-title">Layihələr</span>
                    </a>
                </li>
                <li class="nav-item {{ $pgname == 'pricing' ? 'active' : '' }}" id="pricing">
                    <a class="nav-link" data-bs-toggle="collapse" id="pricing_plan" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="icon-bg"><i class="mdi mdi-coin menu-icon"></i></span>
                        <span class="menu-title">Aylıq plan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="asd">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ url('/pricing_index') }}" id="pricing_header">Plan başlığı</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('/plan_index') }}" id="pricing_body">Plan tərkibi</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ $pgname == 'about_us' ? 'active' : '' }}" id="about_us">
                    <a class="nav-link" data-bs-toggle="collapse" id="about_us_collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="icon-bg"><i class="mdi mdi-information menu-icon"></i></span>
                        <span class="menu-title">Haqqımızda</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="colllapse_about">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ url('/aboutus_index') }}" id="abouttext">Haqqımızda</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('/whychoose_index') }}" id="whychoose">Niyə bizi seçməlisiniz</a></li>
                        </ul>
                    </div>
                </li>
                <hr>
                <li class="nav-item sidebar-user-actions">
                    <div class="sidebar-user-menu">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout menu-icon"></i> Çıxış
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-panel">
            <div class="content-wrapper">
