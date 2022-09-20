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
    <h2 class="font-bg-gb" style="text-align: center;"><b>Payment</b></h2>

    <div class=" container d-flex flex-row justify-content-between  pt-4">
        <img class="m" src="{{ asset('customImages/Group 188.png') }}" />
        <img class="" src="{{ asset('customImages/Group 189b.png') }}" />
        <img class="" src="{{ asset('customImages/Group 190b.png') }}" />
        <img class="" src="{{ asset('customImages/Group 191b.png') }}" />
    </div>

    <div class="container card mt-5 col-lg-9">
        <form class="container col-lg-8 pt-5">
            <div class="form-group ">
                <label for="exampleInputEmail1">Name on Card</label>
                <input style="height: 47px;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name">

            </div>
            <div class="form-group pt-4">
                <label for="exampleInputPassword1">Card Number</label>
                <input style="height: 47px;" type="numbers" class="form-control" id="exampleInputPassword1" placeholder="4747 4747 4747 4747">
            </div>
            <div class="d-flex col-md-6">
                <div class="form-group pt-4">
                    <label for="exampleInputPassword1">Expiry Date</label>
                    <input type="numbers" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <div class="form-group pt-4 px-4">
                    <label for="exampleInputPassword1">CVC</label>
                    <input type="numbers" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
            </div>

            <button class="my-5 font-sm-gb btn-sm-gb" style="background: #F58634;border-radius: 5.80596px;padding: 13px 38px;font-weight: 600;
                        font-size: 18.4594px;line-height: 28px;color: #FFFFFF; float: right; border:none; padding: 0.8rem 3rem">
                        VERIFY
            </button>

    </div>

    </form>
    </div>

    <div class="container col-lg-7 py-3 pb-5">
        <button class="font-sm-gb btn-sm-gb" style="background: rgba(0, 0, 0, 0.2);border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #6B809B; padding: 0.8em 3em; border:none">Back

        </button>
    </div>

</section>
{{-- END OF STORE CARD SECTION --}}

@endsection