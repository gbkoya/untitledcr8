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
<div class="everything-cart">
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
    <h2 style="text-align: center;"><b>Cart</b></h2>

    <div class=" container d-flex flex-row justify-content-between  pt-4 col-lg-10">
      <img class="" src="{{ asset('customImages/Group 188.png') }}" />
      <img class="" src="{{ asset('customImages/Group 189.png') }}" />
      <img class="" src="{{ asset('customImages/Group 190.png') }}" />
      <img class="" src="{{ asset('customImages/Group 191.png') }}" />
    </div>

    <div class="container card my-5 col-md-10">
      <div class="d-flex flex-row justify-content-between">
        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Item(s)</div>
        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Quantity</div>
        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Price </div>
        <div></div>
      </div>

      <div class="" style="border: 1px solid rgba(0, 0, 0, 0.5);"></div>
      <div class=" pt-5 col-lg-10 d-flex flex-wrap justify-content-between">

      <div class="d-flex flex-wrap">
        <img class="img-fluid" src="{{ asset('customImages/Frame 106.png') }}" />

        <div class="px-2 small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color: rgba(107, 128, 155, 0.8);">
          Anti blu ray radiation,<br> computer glasses</div>
      </div>


        <form>

        <input style="height: 47px;" type="number" class="form-control" id="exampleInputPassword1" placeholder="1">

        </form>

        <div class="pt-2 small-screen-font" style="font-weight: 500;font-size: 20px;line-height: 180%;letter-spacing: -0.01em;color: rgba(107, 128, 155, 0.8);">₦4,999</div>

        <div><img class="img-fluid" src="{{ asset('customImages/trash vector.png') }}" alt=""></div>
      </div>
      <div class="d-flex align-items-end container" style="text-align: right;">
      <div>Total Price:</div>
      <div class="pt-2 small-screen-font" style="font-weight: 500;font-size: 20px;line-height: 180%;letter-spacing: -0.01em;color: rgba(107, 128, 155, 0.8);">₦4,999</div>
      </div>




    </div>
   

    <div class="container col-lg-10 d-flex justify-content-between">
      <div class=" py-3 pb-5">
        <button class="small-mobile-long-button small-screen-font" style="background: rgba(0, 0, 0, 0.2);border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #6B809B; padding: 0.8em 3em; border:none">Continue Shopping

        </button>
      </div>
      <div class=" py-3  pb-5">
        <button class="small-mobile-long-button small-screen-font" style="background: #F58634;border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #ffffff; padding: 0.8em 3em; float:right; border:none">Checkout

        </button>
      </div>

    </div>

  </section>
  {{-- END OF STORE CARD SECTION --}}

  @endsection