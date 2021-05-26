<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Admin Panel</title>

    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('bower_components/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ url('/admin') }}" class="brand-link">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('AdminClassifications')}}" class="nav-link">
                            <p>Classifications</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('AdminBrands')}}" class="nav-link">
                            <p>Brands</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('AdminCountry')}}" class="nav-link">
                            <p>Country</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="{{route('AdminCars')}}" class="nav-link">
                            <p>Cars</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('AdminOrders')}}" class="nav-link">
                            <p>Orders</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('AdminGetRoles')}}" class="nav-link">
                            <p>Roles</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('AdminGetUsers')}}" class="nav-link">
                            <p>Users</p>
                        </a>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @include('partials.alerts')
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
        </div>
        <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- JavaScripts -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('bower_components/fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>


<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
@yield('extra-script')
</body>
</html>
