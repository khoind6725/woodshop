<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wood workshop</title>
    
    <!--css-->
    @include('partials.css')
</head>
<body>
<!--header-->
@include('partials.header')

@yield('content')

<!--footer-->
@include('partials.footer')

<!--js-->
@include('partials.js')
</body>
</html>