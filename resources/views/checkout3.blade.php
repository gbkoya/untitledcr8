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
    {{-- </div>  --}}
</nav>
{{-- </section> --}}
</main>

<section class="container">
    <h2 style="text-align: center;"><b>Payment</b></h2>

    <div class=" container d-flex flex-row justify-content-between  pt-4">
        <img class="m" src="{{ asset('customImages/Group 188.png') }}" />
        <img class="" src="{{ asset('customImages/Group 189.png') }}" />
        <img class="" src="{{ asset('customImages/Group 190.png') }}" />
        <img class="" src="{{ asset('customImages/Group 191.png') }}" />
    </div>

    <div class="container card col-md-8">
        <div class="container col-lg-10 d-flex">
            <img class="" src="{{ asset('customImages/Frame 106.png') }}" />
            <div>Anti blu ray radiation, computer glasses</div>
            <input style="height: 47px;" type="numbers" class="form-control" id="exampleInputPassword1" placeholder="">
            <div>₦4,999</div>
        </div>
        <div style="border: 1px solid rgba(0, 0, 0, 0.5);"></div>
        <div class="container col-lg-10 d-flex">
                <div>Price</div>
                <div style="float: right;">₦4,999</div>            
        </div>
        <div class="container col-lg-10 d-flex">
                <div>Delivery fee</div>
                <div style="float: right;">₦500</div>
        </div>
        <div class="container col-lg-10 d-flex">
                <div>Total Price</div>
                <div style="float: right;">₦5,499</div>
        </div>
    </div>


    <div class="container col-lg-7 d-flex">
        <div class=" py-3 pb-5">
            <button style="background: rgba(0, 0, 0, 0.2);border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #6B809B; padding: 0.8em 3em;">Back

            </button>
        </div>
        <div class=" py-3 pb-5">
            <button style="background: rgba(0, 0, 0, 0.2);border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #6B809B; padding: 0.8em 3em; float:right">Back

            </button>
        </div>
    </div>

</section>
{{-- END OF STORE CARD SECTION --}}

@endsection