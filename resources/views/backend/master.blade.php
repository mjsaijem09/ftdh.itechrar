  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('public/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('public/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public/backend/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('public/backend/css/_all-skins.min.css')}}">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- jQuery 3 -->
  <script src="{{url('public/js/bootstrap.min.js')}}"></script>
  <script src="{{url('public/js/jquery-1.11.0.min.js')}}"></script>
  <script src="{{url('public/backend/js/adminlte.min.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    </a>
    <a href="{{url('admin')}}" class="logo">
      <span class="logo-lg"><b>FTDH</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     <!--  <div class="user-panel">
          <b>Admin Controll Panel</b>
      </div> -->

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Admin Controll Panel</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> 
            <span>Posts</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> All Posts</a></li>
            <li><a href="{{url('new-post')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        
        <li><a href="{{url('categories')}}"><i class="fa fa-book"></i> <span>Navigation Category</span></a></li>
        <li><a href="{{url('setups')}}"><i class="fa fa-book"></i> <span>Website Settings</span></a></li>
        
        <li class="header">Log out</li>
        <li><a href="#"><i class="fa fa-sign-out text-red"></i> <span>Sign out</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>&copy; 2019 <a href="https://http://www.itechrar.com">ITECH-RAR Solutions Inc.</a> </strong>FTDH Admin Panel
  </footer>


</body>
</html>
