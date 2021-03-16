
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="ar">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">


  <title>{{ config('app.name') }} || @yield('title')</title>

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/')}}/design/AdminLTE/dist/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="{{url('/')}}/design/AdminLTE/dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="{{url('/')}}/design/AdminLTE/dist/css/custom-style.css">



</head>
<body class="hold-transition sidebar-mini ">
    <div class="wrapper">

      <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
        <!-- Left navbar links -->




</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link" style="background-color: #1a2d4c">
      <span class="brand-text font-weight-light" >EasyTask</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <img src="{{url('/')}}/design/AdminLTE/dist/img/avatar04.png"class="img-circle elevation-2" style="width: 70px;" alt="User Image">

      <div class="info">
          <a href="" target="_blank" class="d-block">



        </a>
    </div>
</div>

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>

          <p>
             الشركات
         </p>
     </a>
 </li>




</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">

    <!-- Content Header (Page header) -->

    @yield('content')

    <!-- /.col-md-6 -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- Main Footer -->
<footer class="main-footer">
    <!-- Default to the left -->

    <h4 class="text-center">easyTask</h4>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script defer src="{{ asset('js/fontawesome.js') }}"></script> <!--load all fontassowme styles -->
<!-- jQuery -->
<script src="{{url('/')}}/design/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/design/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/design/AdminLTE/dist/js/adminlte.js"></script>

<script type="text/javascript">


    //To Ajax Search
    $('#search').on('change',function(){

        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('company.search')}}',
            data:{'search':$value},
            success:function(data){
                $('tbody').html(data);
            }
        });
    })


</script>

<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>

</body>
</html>
