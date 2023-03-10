<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>adminlte 3 | dashboard</title>

  <!-- google font: source sans pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=source+sans+pro:300,400,400i,700&display=fallback">
  <!-- font awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}} ">
  <!-- ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}} ">
  <!-- overlayscrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayscrollbars/css/overlayscrollbars.css') }} ">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}} ">
 </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/adminltelogo.png')}}" alt="adminltelogo" height="60" width="60">
  </div>

  <!-- navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  @include('admin.includes.sidebar')
  @yield('content')

  <footer class="main-footer">
    <strong>Blog</strong>
       <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside   class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayscrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}} "></script>
</body>
</html>
