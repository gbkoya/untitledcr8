@extends('layouts.app')
@section('description', 'Foremost Eye Clinic is a leading provider of optometry services.')
@section('title', 'Foremost - Africa\'s Most Innovative Eye Clinic')

@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop
@section('content')

<body>
    <main>
        <!-- Sub nav -->
@include('inc.sub-nav')
<!-- CONTACT US SECTION -->
    @include('inc.contactForm')
 
</main>
</body>



@endsection