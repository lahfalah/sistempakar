<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar HIV/AIDS</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('Template') }}/dist/css/adminlte.min.css">
    <!-- include trix css -->
    <link rel="stylesheet" type="text/css" href="/css/trix.css">

    <!-- jQuery -->
    <script src="{{ asset('Template') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('Template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('Template') }}/dist/js/adminlte.min.js"></script>
    {{-- sweetalert --}}
    <script src="{{ asset('Template') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>
</head>

<style>

    .kartu {
        background-color: #ffb3c1;
        border-radius: 10px;
    }
</style>

<body class="hold-transition layout-top-nav" style="background-image: linear-gradient(to top, #03071e, #9d0208)">
    <div class="wrapper">

        <!-- Navbar -->
        @include('user.layouts.navbar')
        <!-- /.navbar -->

        <!-- Main content -->
        <div class="content pt-4 pb-4">
            <div class="container">
                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-lg-12">
                        @yield('container')
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    <script src="https://kit.fontawesome.com/f259651f11.js" crossorigin="anonymous"></script>
</body>

</html>
