<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mitikal Glory</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/588/588308.png">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Logo_Politeknik_Negeri_Malang.png/800px-Logo_Politeknik_Negeri_Malang.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        {{-- Navbar Start --}}
        @include('layouts.navbar')
        {{-- Navbar End--}}

        {{-- Sidebar Start --}}
        @include('layouts.sidebar')
        {{-- Sidebar End--}}

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        {{-- Header Start --}}
        @include('layouts.header')
        {{-- Header End--}}

        {{-- Content Start--}}
        @yield('content')
        {{-- Content End--}}

        </div>
        <!-- /.content-wrapper -->

        {{-- Footer Start --}}
        @include('layouts.footer')
        {{-- Footer End--}}
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- AdminLTE App -->
        <script src="js/adminlte.js"></script>
        <script src="js/selamatDatang.js"></script>
</body>

</html>