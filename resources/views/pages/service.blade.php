@extends('partials.layout')
@section('content')
<!--breadcrumb-->
@include('components.breadcrumb')

<!--services_certified-->
@include('components.services_certified')

<!--our_services-->
@include('components.our_services')

<!--featured_services-->
@include('components.featured_services')

<!--great_work-->
@include('components.great_work')
@endsection