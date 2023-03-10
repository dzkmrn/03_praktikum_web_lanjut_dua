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


    @extends('layouts.app')

    @section('content')
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="datang">
            <h1>Selamat Datang Sir!</h1>
          </div>
        </div><!-- /.container-fluid -->
        <div class="card-deck">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="dzaka.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Muhammad Dzaka Murran Rusid</h5>
                <p class="card-text">2141720076 | TI 2F | 16</p>
                <p class="card-text"><small class="text-muted">Pecinta New Jeans</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="fikri.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Mohammad Izamul Fikri Fahmi</h5>
                <p class="card-text">2141720171 | TI 2F | 15</p>
                <p class="card-text"><small class="text-muted">Ikut ikut dzaka</small></p>
              </div>
            </div>
          </div>
        </div>
        </div>


      </section>
      <!-- /.content -->
      @endsection
    </div>


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