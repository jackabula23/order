<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>來點餐</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('resources/assets/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('resources/assets/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('resources/assets/css/icheck-bootstrap.min.css')}} ">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('resources/assets/css/jqvmap.min.css')}} ">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('resources/assets/css/adminlte.min.css')}} ">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('resources/assets/css/OverlayScrollbars.min.css')}} ">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('resources/assets/css/daterangepicker.css')}} ">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('resources/assets/css/dataTables.bootstrap4.css')}} ">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('resources/assets/css/summernote-bs4.css')}} ">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  {{-- 標題列旁邊的小圖示 --}}
  <link rel="icon" href="{{asset('resources/assets/images/fork.png')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>  
    {{-- <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          <span>HI admin</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{url('admin\pass')}}" class="dropdown-item">
            <i class="fas fa-cog mr-2"></i> 修改密碼
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{url('admin\quit')}}" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> 登出
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/index')}}" class="brand-link">
		<img src="{{asset('resources/assets/images/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">來點餐系統</span>
    </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="{{url('admin/index')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>首頁</p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                後台管理
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/categories')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>類別管理</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@yield('content')
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=" {{asset('resources/assets/js/jquery.min.js')}} "></script>
<!-- jQuery UI 1.11.4 -->
<script src=" {{asset('resources/assets/js/jquery-ui.min.js')}} "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=" {{asset('resources/assets/js/bootstrap.bundle.js')}} "></script>
<!-- DataTables -->
<script src=" {{asset('resources/assets/js/jquery.dataTables.js')}} "></script>
<script src=" {{asset('resources/assets/js/dataTables.bootstrap4.js')}} "></script>
<!-- bs-custom-file-input -->
<script src=" {{asset('resources/assets/js/bs-custom-file-input.min.js')}} "></script>
<!-- AdminLTE App -->
<script src=" {{asset('resources/assets/js/adminlte.js')}} "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src=" {{asset('resources/assets/js/dashboard.js')}} "></script> --}}
<!-- AdminLTE for demo purposes -->
<script src=" {{asset('resources/assets/js/demo.js')}} "></script>
<!-- page script -->
<script src=" {{asset('resources/assets/js/table.js')}} "></script>
<!-- 彈視窗 -->
<script src=" {{asset('resources/org/layer/layer.js')}} "></script>
<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
  </script>
</body>
</html>