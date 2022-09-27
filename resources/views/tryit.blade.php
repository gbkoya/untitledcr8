@extends('layouts.app')
@section('description', 'Foremost Eye Clinic is a leading provider of optometry services.')
@section('title', 'Foremost - Africa\'s Most Innovative Eye Clinic')

@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop
@section('content')

    <body>
        <main>
            {{-- Sub nav --}}
            {{-- <section class="e-try-hero container-fluid"> --}}
            <nav class="d-flex flex-row align-items-center flex-wrap container-fluid justify-content-evenly e-try-nav">
                {{-- <div class="d-flex flex-row"> --}}
                <div class="row d-sm-flex search-wrapper">
                    <input type="search" placeholder="Search for eyewear, lenses and frames" />
                    <img class="img-fluid search-shop-image" src="{{ asset('customImages/arrow-right.png') }}" />
                </div>
                <div class="d-sm-flex flex-sm-row align-items-center flex-wrap button-wrapper but-wrapper-mobile">
                    <a href=""><button class="login" type="button">Log In</button></a>
                    <a href=""><button class="signup" type="button">Sign Up</button></a>
                    <a href=""><button class="try-it" type="button">Try it On</button></a>
                </div>
                {{-- <button type="button" class="">
                           <img
                           src="{{ asset('customImages/buyIcon.png') }}"
                           />
                           CART
                       </button> --}}
                <li class="right-nav-button-shop-wrapper">
                    <button type="button" class="shop-button">
                        <img src="{{ asset('customImages/buyIcon.png') }}" />
                        CART
                    </button>
                </li>
                {{-- </div> --}}
            </nav>
            {{-- </section> --}}
        </main>
        {{-- END OF STORE CARD SECTION --}}
        <script type="text/javascript"></script>
        <div class="i-try-head pt-4">
            <h2>Try It On</h2>

        </div>
        <div class="container-fluid i-try-img">
            <div class="py-5">
                <div class="py-5">
                    <div class="py-5">
                
            <div class="container justify-content-center d-flex flex-row">
                <div><img class="i-try-img1" src="customImages/img(12).png" alt=""></div>
            </div>
        
        
            <div class=" i-try-see container justify-content-center d-flex flex-row">
                <p>See what you look like in our product!</p>
            </div>
       
        
            <div class="container justify-content-center d-flex flex-row">
                <button class="i-try-button"> Turn On Camera</button>
            </div>
            </div>
        
        </div>
        



    </body>



@endsection
