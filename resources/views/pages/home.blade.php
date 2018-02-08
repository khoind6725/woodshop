@extends('partials.layout')
@section('content')
<!--rv-slider-->
@include('components.rev_slider')

<!--experiance-area-->
@include('components.experience_area')

<!--we-do-->
@include('components.we_do')

<!-- Projects -->
@include('components.projects')

<!--work_shop-->
@include('components.work_shop')

<!--testimonial-->
@include('components.testimonial')

<!-- latest_news_area -->
@include('components.latest_news_area')

<!-- clients -->
@include('components.clients')

<!--great_work-->
@include('components.great_work')
@endsection