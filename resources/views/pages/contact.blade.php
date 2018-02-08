@extends('partials.layout')
@section('content')
<!--breadcrumb-->
@include('components.breadcrumb')

<!--contact_detail-->
@include('components.contact_detail')

<!--MapBox-->
@include('components.mapbox')

<!--great_work-->
@include('components.great_work')
<!--js-->
<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyC0AmZkdmUf4xmXWH-PyCe-yWnVmOcGogk&libraries=geometry"></script>
<script src="js/gmaps.min.js"></script>
@endsection