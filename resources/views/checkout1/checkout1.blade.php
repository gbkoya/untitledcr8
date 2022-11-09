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
  <h2 style="text-align: center;"><b>Delivery Method</b></h2>

  <div class=" container d-flex flex-row justify-content-between  pt-4 col-lg-10">
    <img class="m" src="{{ asset('customImages/Group 188.png') }}" />
    <img class="" src="{{ asset('customImages/Group 189.png') }}" />
    <img class="" src="{{ asset('customImages/Group 190.png') }}" />
    <img class="" src="{{ asset('customImages/Group 191.png') }}" />
  </div>

  <div class="container card my-5 col-md-10">

    <div class="row justify-content-center my-5 ">
      <button style="background: #FAFAFA;border: 1px solid #F58634;" class="col-lg-7 py-5 mx-4"> Pickup </button>
     <a class="text-center" href="/checkout2"><button style="background: #F58634; color:#FAFAFA; border:none" class="col-lg-7 mt-4 py-5 mx-4"> Delivery</button></a>
    </div>

  </div>
  <div class="container col-lg-10 d-flex justify-content-between">
    <div class=" py-3 pb-5">
      <button class="small-mobile-long-button small-screen-font" style="background: rgba(0, 0, 0, 0.2);border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #6B809B; padding: 0.8em 3em; border:none">Back

      </button>
    </div>
    <div class=" py-3  pb-5">
      <button class="small-mobile-long-button small-screen-font" style="background: #F58634;border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #ffffff; padding: 0.8em 3em; float:right; border:none">Pay with Card

      </button>
    </div>

  </div>

</section>



<script>
  let buttons = document.querySelectorAll(".btn-group .btn");
  buttons.forEach(button => {
    button.addEventListener("click", () => {
      // do the UpdateChart stuff using some id property instead of inline onclick attribute
      UpdateTheChart(this.dataset.id);

      // find the button that has focus in the this button's group and remove the class
      this.parentElement.querySelector(".btn-focus").removeClass("btn-focus");

      // add the focus class to this button
      this.addClass("btn-focus");
    });
  });
</script>
@endsection