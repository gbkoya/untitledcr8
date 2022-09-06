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
<main>
{{-- HERO SECTION --}}
<section class="container-fluid shop-hero">
{{-- Sub nav --}}
<nav class="d-flex flex-row flex-wrap container-fluid justify-content-evenly">
{{-- <div class="d-flex flex-row"> --}}
<div class="row d-flex search-wrapper">
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

<div class="e-shop-copy">
    <h1>The Largest Online Store
        for  Glasses and Contact
        Lenses.</h1>
    <p>
        We provide thousands of prescription eyeglasses and 
        contact lenses to our customers monthly.
    </p>
    <button type="button" class="buy-button-shop">
        <img
        src="{{ asset('customImages/buyIcon.png') }}"
        />
        Buy Now
    </button>
</div>
</section>
{{-- END OF HERO SECTION --}}

{{-- GLASS SECTION AFTER HERO --}}
<section class="glass-section container-fluid">
    <div class="glass-wrapper d-flex flex-wrap flex-row justify-content-between">
        <img src="{{asset('customImages/emojione_glasses.png')}}" alt="emoji glass"/>
        <img src="{{asset('customImages/fluent_glasses-20-filled.png')}}" alt="Fluent glass"/>
        <img src="{{asset('customImages/fxemoji_glasses.png')}}" alt="emoji glasses"/>
        <img src="{{asset('customImages/openmoji_glasses.png')}}" alt="open emoji">
        <img src="{{asset('customImages/icon-park_glasses-one.png')}}" alt="icon park glasses">
    </div>
</section>
{{-- END OF THE GLASS SECTION AFTER HERO --}}
</main>

<script type="text/javascript">
    </script>
</body>



@endsection