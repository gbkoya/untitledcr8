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
        {{-- </div> --}}
    </nav>
    {{-- </section> --}}
    </main>

    <section class="container">
        <h2 style="text-align: center;"><b>Payment</b></h2>

        <div class=" container d-flex flex-row justify-content-between  pt-4 col-lg-10">
            <img class="m" src="{{ asset('customImages/Group 188.png') }}" />
            <img class="" src="{{ asset('customImages/Group 189.png') }}" />
            <img class="" src="{{ asset('customImages/Group 190.png') }}" />
            <img class="" src="{{ asset('customImages/Group 191.png') }}" />
        </div>

        <div class="container card my-5 col-md-10">
            <div class="px-5 justify-content-center">
                <form class="px-5">
                    <div class="form-group col-lg-9 mt-5">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="hello@dummie.org">
                    </div>
                    <div class="form-group col-lg-9 mt-5">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <div class="d-flex">
                            <input
                                style="border: 1.14951px solid #D2D6DA;border-radius: 5.74757px;height: 46px; max-width:9095px"
                                class="" name="phone" type="text" class="form-control" id="phone"
                                placeholder="">



                        </div>
                    </div>
                    <div class="form-group col-lg-11 mt-5">
                        <label for="exampleInputEmail1">What’s your address?</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="">
                    </div>

                </form>
            </div>
        </div>


        <div class="container col-lg-10 d-flex justify-content-between">
            <div class=" py-3 pb-5">
                <button class="small-mobile-long-button small-screen-font"
                    style="background: rgba(0, 0, 0, 0.2);border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #6B809B; padding: 0.8em 3em; border:none">Back

                </button>
            </div>
            <div class=" py-3  pb-5">
                <button class="small-mobile-long-button small-screen-font"
                    style="background: #F58634;border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #ffffff; padding: 0.8em 3em; float:right; border:none">Next

                </button>
            </div>

        </div>

    </section>
    {{-- END OF STORE CARD SECTION --}}

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["ng", ]
        });
    </script>

@endsection
