<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wood workshop</title>
    
    <!--css-->
    @include('adm.partials.css')
    
    <!--seo tag header-->
    {!! SEO::generate() !!}
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('adm.partials.header')
        <!-- =============================================== -->
        <!-- Left side column. contains the sidebar -->
        @include('adm.partials.sidebar')
        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            @include('adm.partials.content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('adm.partials.footer')
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="{{ asset('js/jquery-1.12.2.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('js/demo.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('.sidebar-menu').tree()
    })
    </script>
</body>
</html>