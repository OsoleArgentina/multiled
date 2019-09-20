<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <style>
        .font-weight-bold{
            font-weight: 700 !important;
            /*color: #535353 !important;  */
        }
        strong{
            font-weight: 700 !important;
        }
        .multiled-color{
            color: #173E8D !important;
        }
        .multiled-fondo{
            background-color: #173E8D !important;
        }

    </style>

</head>
<body id="page-top">
<main id="app">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" style="background-color: #008C95" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            {{--<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">--}}
                {{--<div class="sidebar-brand-icon rotate-n-15">--}}
                    {{--<i class="fas fa-laugh-wink"></i>--}}
                {{--</div>--}}
                {{--<div class="sidebar-brand-text mx-3"> Administrador <sup></sup></div>--}}
            {{--</a>--}}

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            {{--<!-- Nav Item - Dashboard -->--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="index.html">--}}
                    {{--<i class="fas fa-fw fa-tachometer-alt"></i>--}}
                    {{--<span>Panel</span></a>--}}
            {{--</li>--}}

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Secciones
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Jolden" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    Jolden
                </a>
                <div id="Jolden" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <div class="text-dark sidebar-heading">
                            Secciones
                        </div>
                        {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'home','site' => 'jolden']) }}">Inicio</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'empresa','site' => 'jolden']) }}">Empresa</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'productos','site' => 'jolden']) }}">Productos</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'novedades','site' => 'jolden']) }}">Novedades</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'contacto','site' => 'jolden']) }}">Contacto</a>
                        <div class="text-dark sidebar-heading">
                            Zona Privada
                        </div>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'listaprecio','site' => 'jolden']) }}">Lista de Precio</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'descuento','site' => 'jolden']) }}">Descuento</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'bonificacion','site' => 'jolden']) }}">Bonificación</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'descargas','site' => 'jolden']) }}">Descargas</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'clientes','site' => 'jolden']) }}">Clientes</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'vendedor','site' => 'jolden']) }}">Vendedor</a>
                        <a class="collapse-item" href="{{ route('ventas') }}">Ventas</a>

                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'carrito','site' => 'jolden']) }}">Carrito</a>--}}
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'excel','site' => 'jolden']) }}">Carga General</a>
                        <div class="text-dark sidebar-heading">
                            Configuración
                        </div>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'datos','site' => 'jolden']) }}">Datos</a>
                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'metadatos','site' => 'jolden']) }}">Metadatos</a>--}}
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'terminos','site' => 'jolden']) }}">Terminos y Condiciones</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'metadatos','site' => 'jolden']) }}">Metadatos</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'usuarios','site' => 'jolden']) }}">Usuarios</a>
                        {{--<router-link to="/" class="collapse-item">Inicio</router-link>--}}
                        {{--<router-link to="/productos" class="collapse-item">productos</router-link>--}}
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Airon" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    Airon
                </a>
                <div id="Airon" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <div class="text-dark sidebar-heading">
                            Secciones
                        </div>
                        {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'home','site' => 'airon']) }}">Inicio</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'empresa','site' => 'airon']) }}">Empresa</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'productos','site' => 'airon']) }}">Productos</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'novedades','site' => 'airon']) }}">Novedades</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'contacto','site' => 'airon']) }}">Contacto</a>
                        {{--<router-link to="/" class="collapse-item">Inicio</router-link>--}}
                        {{--<router-link to="/productos" class="collapse-item">productos</router-link>--}}
                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'excel','site' => 'jolden']) }}">Carga General</a>--}}
                        <div class="text-dark sidebar-heading">
                            Configuración
                        </div>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'datos','site' => 'airon']) }}">Datos</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'terminos','site' => 'airon']) }}">Terminos y Condiciones</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'metadatos','site' => 'airon']) }}">Metadatos</a>
                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'metadatos','site' => 'jolden']) }}">Metadatos</a>--}}
                        {{--<router-link to="/" class="collapse-item">Inicio</router-link>--}}
                        {{--<router-link to="/productos" class="collapse-item">productos</router-link>--}}
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Lacatus" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    Lacatus
                </a>
                <div id="Lacatus" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <div class="text-dark sidebar-heading">
                            Secciones
                        </div>
                        {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'home','site' => 'lacatus']) }}">Inicio</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'empresa','site' => 'lacatus']) }}">Empresa</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'productos','site' => 'lacatus']) }}">Productos</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'novedades','site' => 'lacatus']) }}">Novedades</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'contacto','site' => 'lacatus']) }}">Contacto</a>

                        <div class="text-dark sidebar-heading">
                            Configuración
                        </div>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'datos','site' => 'lacatus']) }}">Datos</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'terminos','site' => 'lacatus']) }}">Terminos y Condiciones</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'metadatos','site' => 'lacatus']) }}">Metadatos</a>
                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'metadatos','site' => 'jolden']) }}">Metadatos</a>--}}

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Ekron" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    Ekron
                </a>
                <div id="Ekron" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <div class="text-dark sidebar-heading">
                            Secciones
                        </div>
                        {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'home','site' => 'ekron']) }}">Inicio</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'empresa','site' => 'ekron']) }}">Empresa</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'productos','site' => 'ekron']) }}">Productos</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'novedades','site' => 'ekron']) }}">Novedades</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'contacto','site' => 'ekron']) }}">Contacto</a>

                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'excel','site' => 'jolden']) }}">Carga General</a>--}}
                        <div class="text-dark sidebar-heading">
                            Configuración
                        </div>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'datos','site' => 'ekron']) }}">Datos</a>
                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'terminos','site' => 'ekron']) }}">Terminos y Condiciones</a>
                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'terminos','site' => 'ekron']) }}">Terminos y Condiciones</a>--}}

                        <a class="collapse-item" href="{{ route('contenido.index',['section' => 'metadatos','site' => 'ekron']) }}">Metadatos</a>
                        {{--<router-link to="/" class="collapse-item">Inicio</router-link>--}}
                        {{--<router-link to="/productos" class="collapse-item">productos</router-link>--}}
                    </div>
                </div>
            </li>
            <!-- Heading -->
            {{--<div class="sidebar-heading">--}}
                {{--Secciones--}}
            {{--</div>--}}

            {{--<li class="nav-item">--}}
                {{--<a href="{{ route('contenido.index',['section' => 'empresa']) }}" class="nav-link">--}}
                    {{--<i class="fas fa-fw fa-chart-area"></i>--}}
                    {{--Empresa--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a href="{{ route('contenido.index',['section' => 'productos']) }}" class="nav-link">--}}
                    {{--<i class="fas fa-fw fa-chart-area"></i>--}}
                    {{--Productos--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a href="{{ route('contenido.index',['section' => 'novedades']) }}" class="nav-link">--}}
                    {{--<i class="fas fa-fw fa-chart-area"></i>--}}
                    {{--Novedades--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a href="{{ route('contenido.index',['section' => 'novedades']) }}" class="nav-link">--}}
                    {{--<i class="fas fa-fw fa-chart-area"></i>--}}
                    {{--Contacto--}}
                {{--</a>--}}
            {{--</li>--}}
            <!-- Nav Item - Pages Collapse Menu -->
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Inicio" aria-expanded="true" aria-controls="collapseTwo">--}}
                    {{--<i class="fas fa-fw fa-cog"></i>--}}
                     {{--Inicio--}}
                {{--</a>--}}
                {{--<div id="Inicio" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
                    {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                        {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'home']) }}">Informacion</a>--}}
                        {{--<router-link to="/" class="collapse-item">Inicio</router-link>--}}
                        {{--<router-link to="/productos" class="collapse-item">productos</router-link>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Empresa" aria-expanded="true" aria-controls="collapseTwo">--}}
                    {{--<i class="fas fa-fw fa-cog"></i>--}}
                    {{--Empresa--}}
                {{--</a>--}}
                {{--<div id="Empresa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
                    {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                        {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'empresa']) }}">Informacion</a>--}}
                        {{--<router-link to="/" class="collapse-item">Inicio</router-link>--}}
                        {{--<router-link to="/productos" class="collapse-item">productos</router-link>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Productos" aria-expanded="true" aria-controls="collapseTwo">--}}
                    {{--<i class="fas fa-fw fa-cog"></i>--}}
                    {{--Productos--}}
                {{--</a>--}}
                {{--<div id="Productos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
                    {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                        {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'home']) }}">Informacion</a>--}}
                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'home']) }}">Informacion</a>--}}
                        {{--<router-link to="/" class="collapse-item">Inicio</router-link>--}}
                        {{--<router-link to="/productos" class="collapse-item">productos</router-link>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Novedades" aria-expanded="true" aria-controls="collapseTwo">--}}
                    {{--<i class="fas fa-fw fa-cog"></i>--}}
                    {{--Novedades--}}
                {{--</a>--}}
                {{--<div id="Novedades" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
                    {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                        {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'home']) }}">Categoria</a>--}}
                        {{--<a class="collapse-item" href="{{ route('contenido.index',['section' => 'home']) }}">Novedades</a>--}}
                        {{--<router-link to="/" class="collapse-item">Inicio</router-link>--}}
                        {{--<router-link to="/productos" class="collapse-item">productos</router-link>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a href="{{ route('contenido.index',['section' => 'contacto']) }}" class="nav-link">--}}
                    {{--<i class="fas fa-fw fa-chart-area"></i>--}}
                    {{--Contacto--}}
                {{--</a>--}}
            {{--</li>--}}

            <!-- Divider -->
            {{--<hr class="sidebar-divider">--}}

            <!-- Heading -->
            {{--<div class="sidebar-heading">--}}
                {{--Configuración--}}
            {{--</div>--}}

            {{--<!-- Nav Item - Pages Collapse Menu -->--}}
            {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">--}}
                    {{--<i class="fas fa-fw fa-folder"></i>--}}
                    {{--<span>Pages</span>--}}
                {{--</a>--}}
                {{--<div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">--}}
                    {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                        {{--<h6 class="collapse-header">Login Screens:</h6>--}}
                        {{--<a class="collapse-item" href="login.html">Login</a>--}}
                        {{--<a class="collapse-item" href="register.html">Register</a>--}}
                        {{--<a class="collapse-item" href="forgot-password.html">Forgot Password</a>--}}
                        {{--<div class="collapse-divider"></div>--}}
                        {{--<h6 class="collapse-header">Other Pages:</h6>--}}
                        {{--<a class="collapse-item" href="404.html">404 Page</a>--}}
                        {{--<a class="collapse-item active" href="blank.html">Blank Page</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}

            {{--<!-- Nav Item - Charts -->--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="charts.html">--}}
                    {{--<i class="fas fa-fw fa-chart-area"></i>--}}
                    {{--<span>Charts</span></a>--}}
            {{--</li>--}}
 {{----}}
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            {{--<div class="text-center d-none d-md-inline">--}}
                {{--<button class="rounded-circle border-0" id="sidebarToggle"></button>--}}
            {{--</div>--}}

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    {{--<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">--}}
                        {{--<i class="fa fa-bars"></i>--}}
                    {{--</button>--}}

                    {{--<!-- Topbar Search -->--}}
                    {{--<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">--}}
                        {{--<div class="input-group">--}}
                            {{--<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">--}}
                            {{--<div class="input-group-append">--}}
                                {{--<button class="btn btn-primary" type="button">--}}
                                    {{--<i class="fas fa-search fa-sm"></i>--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        {{--<li class="nav-item dropdown no-arrow d-sm-none">--}}
                            {{--<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<i class="fas fa-search fa-fw"></i>--}}
                            {{--</a>--}}
                            {{--<!-- Dropdown - Messages -->--}}
                            {{--<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">--}}
                                {{--<form class="form-inline mr-auto w-100 navbar-search">--}}
                                    {{--<div class="input-group">--}}
                                        {{--<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">--}}
                                        {{--<div class="input-group-append">--}}
                                            {{--<button class="btn btn-primary" type="button">--}}
                                                {{--<i class="fas fa-search fa-sm"></i>--}}
                                            {{--</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        {{--<!-- Nav Item - Alerts -->--}}
                        {{--<li class="nav-item dropdown no-arrow mx-1">--}}
                            {{--<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<i class="fas fa-bell fa-fw"></i>--}}
                                {{--<!-- Counter - Alerts -->--}}
                                {{--<span class="badge badge-danger badge-counter">3+</span>--}}
                            {{--</a>--}}
                            {{--<!-- Dropdown - Alerts -->--}}
                            {{--<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">--}}
                                {{--<h6 class="dropdown-header">--}}
                                    {{--Alerts Center--}}
                                {{--</h6>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#">--}}
                                    {{--<div class="mr-3">--}}
                                        {{--<div class="icon-circle bg-primary">--}}
                                            {{--<i class="fas fa-file-alt text-white"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<div class="small text-gray-500">December 12, 2019</div>--}}
                                        {{--<span class="font-weight-bold">A new monthly report is ready to download!</span>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#">--}}
                                    {{--<div class="mr-3">--}}
                                        {{--<div class="icon-circle bg-success">--}}
                                            {{--<i class="fas fa-donate text-white"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<div class="small text-gray-500">December 7, 2019</div>--}}
                                        {{--$290.29 has been deposited into your account!--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#">--}}
                                    {{--<div class="mr-3">--}}
                                        {{--<div class="icon-circle bg-warning">--}}
                                            {{--<i class="fas fa-exclamation-triangle text-white"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<div class="small text-gray-500">December 2, 2019</div>--}}
                                        {{--Spending Alert: We've noticed unusually high spending for your account.--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        {{--<!-- Nav Item - Messages -->--}}
                        {{--<li class="nav-item dropdown no-arrow mx-1">--}}
                            {{--<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<i class="fas fa-envelope fa-fw"></i>--}}
                                {{--<!-- Counter - Messages -->--}}
                                {{--<span class="badge badge-danger badge-counter">7</span>--}}
                            {{--</a>--}}
                            {{--<!-- Dropdown - Messages -->--}}
                            {{--<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">--}}
                                {{--<h6 class="dropdown-header">--}}
                                    {{--Message Center--}}
                                {{--</h6>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#">--}}
                                    {{--<div class="dropdown-list-image mr-3">--}}
                                        {{--<img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">--}}
                                        {{--<div class="status-indicator bg-success"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="font-weight-bold">--}}
                                        {{--<div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>--}}
                                        {{--<div class="small text-gray-500">Emily Fowler · 58m</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#">--}}
                                    {{--<div class="dropdown-list-image mr-3">--}}
                                        {{--<img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">--}}
                                        {{--<div class="status-indicator"></div>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>--}}
                                        {{--<div class="small text-gray-500">Jae Chun · 1d</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#">--}}
                                    {{--<div class="dropdown-list-image mr-3">--}}
                                        {{--<img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">--}}
                                        {{--<div class="status-indicator bg-warning"></div>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>--}}
                                        {{--<div class="small text-gray-500">Morgan Alvarez · 2d</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item d-flex align-items-center" href="#">--}}
                                    {{--<div class="dropdown-list-image mr-3">--}}
                                        {{--<img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">--}}
                                        {{--<div class="status-indicator bg-success"></div>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>--}}
                                        {{--<div class="small text-gray-500">Chicken the Dog · 2w</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth()->user()->username ?? '' }}</span>
                                {{--<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">--}}
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ url('logout') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                                {{--<a class="dropdown-item" href="#">--}}
                                    {{--<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                    {{--Settings--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item" href="#">--}}
                                    {{--<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                    {{--Activity Log--}}
                                {{--</a>--}}
                                {{--<div class="dropdown-divider"></div>--}}
                                {{--<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">--}}
                                    {{--<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                    {{--Logout--}}
                                {{--</a>--}}
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    @yield('content')
                    {{--<router-view></router-view>--}}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</main>

{{--<!-- Bootstrap core JavaScript-->--}}
{{--<script src="vendor/jquery/jquery.min.js"></script>--}}
{{--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}

{{--<!-- Core plugin JavaScript-->--}}
{{--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>--}}

<!-- Custom scripts for all pages-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>

</html>