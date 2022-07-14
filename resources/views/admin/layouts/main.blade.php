<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" container="width=device-width, initial-scale=1">
    <title>Sistem Pakar HIV AIDS</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('Template') }}/dist/css/adminlte.min.css">
    <!-- include trix css -->
    <link rel="stylesheet" type="text/css" href="/css/trix.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <!-- jQuery -->
    <script src="{{ asset('Template') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('Template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('Template') }}/dist/js/adminlte.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Halaman Utama</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/diagnosis" class="nav-link">Cek Diagnosa</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/laporan" class="nav-link">Hasil Laporan</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto mr-4">
                @auth
                <li>
                    <a class="nav-link">Selamat Datang Admin</a>
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link border-0 bg-transparent"><i class="fas fa-sign-out"></i></button>
                    </form>
                </li>
            @endauth
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            {{-- <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('Template') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HIV/AIDS</span>
    </a> --}}

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
                    <div class="image">
                        <a href="/admin">
                            <img src="/img/hiv.png" class="img-circle elevation-5">
                        </a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                @include('admin.layouts.sidebar')
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('admin.layouts.header')

            <!-- Main content -->
            <section class="container">

                @yield('container')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Falah Insan Pratama &copy; 2022 </b>
            </div>
            <strong>Sistem Pakar HIV/AIDS</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    {{-- Icon --}}
    <script src="https://kit.fontawesome.com/f259651f11.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>
    {{-- Trix Editor --}}
    <script type="text/javascript" src="/js/trix.js"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('Template') }}/dist/js/demo.js"></script> --}}
</body>

</html>
