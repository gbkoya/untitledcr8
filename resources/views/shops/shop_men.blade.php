@extends('layouts.app')
@section('description',
    'Archware - Africa\'s Leading Software Development Company
    Software development company helping businesses and individuals take advantage of the benefits of the global technology
    landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop
@section('content')

<body>
{{-- <main> --}}
{{-- HERO SECTION --}}
<section class="container-fluid shop-hero">
{{-- Sub nav --}}
<nav class="d-flex flex-row flex-wrap container-fluid justify-content-evenly">
{{-- <div class="d-flex flex-row"> --}}
<div class="row d-flex search-wrapper ">
    <input type="search"
    placeholder="Search for eyewear, lenses and frames"
    />
    <img 
    class="img-fluid search-shop-image"
    src="{{ asset('customImages/arrow-right.png') }}"/>
        </div>   
        <div class="d-flex flex-row flex-wrap button-wrapper">
            <a href=""><button class="login" type="button">Log In</button></a>
            <a href=""><button class="signup" type="button">Sign Up</button></a>
           <a href=""><button class="try-it" type="button">Try it On</button></a>
        </div>
            <button type="button" class="shop-button">
                <img
                src="{{ asset('customImages/buyIcon.png') }}"
                />
                CART
            </button>
{{-- </div>  --}}
</nav>

<h1>The Largest Online Store
    for  Glasses and Contact
    Lenses.</h1>
</section>

{{-- END OF HERO SECTION --}}
{{-- </main> --}}

<script type="text/javascript">
    </script>
</body>



@endsection