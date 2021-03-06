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

{{-- @foreach (Config::get('customs.info.mang') as $element)
	<p>{{ 'Thứ tự ' . $element }}</p>
@endforeach --}}

<!--header-->
@include('partials.header')

<!--contents-->
@include('partials.contents')

<!--footer-->
@include('partials.footer')

<!--js-->
@include('partials.js')

</body>
</html>