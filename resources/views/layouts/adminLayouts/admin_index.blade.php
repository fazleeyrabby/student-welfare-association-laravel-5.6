<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('assets/backend_asset/production/images/swa.ico') }}" type="image/ico" />

    <title>Dashboard </title>

    <!-- Bootst
    <link href="{{ asset('public/assets/backend_asset/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/backend_asset/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/backend_asset/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    
    <!-- iCheck -->
    <link href="{{ asset('assets/backend_asset/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets/backend_asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets/backend_asset/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets/backend_asset/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/backend_asset/build/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend_asset/build/css/font-awesome.min.css') }}" rel="stylesheet">

    
    <!-- summernote for text editor -->
    <link href="{{ asset('assets/backend_asset/summernote/dist/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend_asset/summernote/dist/font-awesome.min.css') }}" rel="stylesheet">
  
   
    <script>
        function check_delete_info(){
           var check=confirm('Are you sure to delete this');
           if(check){
            return true;
           }else{
            return false;
           }
        }
        
    </script>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- side bar -->
        
        @include('layouts.adminLayouts.admin_sidebar')
        <!-- top navigation -->
        @include('layouts.adminLayouts.admin_header')
        <!-- /top navigation -->
        <!-- page content -->
        @yield('content')
        <!-- /page content -->
        <!-- footer content -->
        @include('layouts.adminLayouts.admin_footer')
        <!-- /footer content -->
        
      </div>
    </div>
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/build/js/jquery-1.12.4.js') }}"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
     <!-- <script type="text/javascript" src="{{ asset('assets/backend_asset/build/js/jquery.dataTables.min.js') }}"></script> -->
    
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script type="text/javascript" src="{{ asset(assets/backend_asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- summernote for text editor -->
    

    <!-- iCheck -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/Flot/jquery.flot.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('public/assets/backend_asset/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/moment/min/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script type="text/javascript" src="{{ asset('assets/backend_asset/build/js/custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/summernote/dist/summernote.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/summernote/dist/summernote.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend_asset/build/js/functions.js') }}"></script>
    <script type="text/javascript">
        setTimeout(function() {
            $('.alert').fadeOut('fast');
        }, 3000);
    </script>
    
  </body>
</html>
