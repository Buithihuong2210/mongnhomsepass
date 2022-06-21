<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('css/sb-admin-2.min.css')}}">
  <title>WATCH</title>


</head>
<body>
{{--<header>--}}
{{--  @include('partials.watchNav')--}}
{{--</header>--}}



<div id="wrapper">
  {{--        <div class="container">--}}
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('watchrepos.admins')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3"> WATCH <sup>Smart</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading" style="color: #1e2125" >Admin</div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('watchrepos.admins')}}" >
        <i class="fas fa-fw fa-cog"></i>
        <span>View all</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading" style="color: #1e2125">Brand</div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('brands.brands')}}">
        <i class="fas fa-fw fa-folder"></i>
        <span>View All</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('brands.create')}}">
        <i class="fas fa-fw fa-folder"></i>
        <span>New Brand</span>
      </a>
    </li>

    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading" style="color: #1e2125">Watch</div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('watchs.watchs')}}">
        <i class="fas fa-fw fa-folder"></i>
        <span>View All</span>
      </a>

    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('watchs.create')}}" >
        <i class="fas fa-fw fa-folder"></i>
        <span>Add Watch</span>
      </a>
    </li>
    <!-- Nav Item - Tables -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading" style="color: #1e2125">Customer</div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('customers.customers')}}">
        <i class="fas fa-fw fa-folder"></i><span>View All</span></a>
    </li>
  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>



        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

          <!-- Nav Item - User Information -->
{{--          <li class="nav-item dropdown no-arrow">--}}
{{--            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"--}}
{{--               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>--}}
{{--              <img class="img-profile rounded-circle"--}}
{{--                   src="{{asset('images/undraw_profile.svg')}}">--}}
{{--            </a>--}}
{{--          </li>--}}
            <li class="nav-item mr-3">
              <!-- try without mr-3 -->
              <a class="nav-link" href="#" style="color: #0aa2c0; font-size: larger">
                <i class="bi bi-person"></i>
                {{\Illuminate\Support\Facades\Session::has('username')?
                    \Illuminate\Support\Facades\Session::get('username') : ''}}
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('auth.signout')}}" style="color: #0aa2c0; font-size: larger">
                <i class="bi bi-box-arrow-left"></i>
                Logout
              </a>
            </li>
        </ul>
      </nav>
      <!-- End of NavTopbar -->
      <main role="main">
        @yield('main')
      </main>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
{{--<script src="js/demo/chart-pie-demo.js"></script>--}}
@yield('script')
</body>
</html>

