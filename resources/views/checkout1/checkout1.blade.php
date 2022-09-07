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
    <div class="formost-cart-first-div">
        <input placeholder="Search for eyewear, lenses and frames" class="formost-cart-first-div-input" ><img src="/customImages/Vector-arrow.png" class="arrow-icon-cart">
            <button class="formost-cart-first-div-input-button">Log In Test</button>
            <button class="formost-cart-first-div-input-button2">Sign Up</button>
            <button class="formost-cart-first-div-input-button3">TRY IT ON</button>
            <button class="formost-cart-first-div-input-button4"><img src="customImages/Vector.png" class="cart-icon-cart">  Cart</button>
    </div>

    <div>
        <!--  -->
        <p class="formost-cart-second-div-heading">Cart</p>
      <div class="all-icons-cart">
        <img src="customImages/Group 188.png" class="firsticon-cart">
        <img src="customImages/Group 191.png" class="secondicon-cart">
        <img src="customImages/Group 189.png" class="thirdicon-cart">
        <img src="customImages/Group 190.png" class="fourthicon-cart">
      </div>
      <div class="itemquantity-cart">
        <div class="itemquantityheader-cart">
            <p class="itemquantityheader1-cart">Item(s)</p>
            <p class="itemquantityheader2-cart">Quantity</p>
            <p class="itemquantityheader3-cart">Price</p>
        </div>

      </div>
<!--  -->
<button class="continue-cart">Continue Shopping</button>
<button class="checkoutbutton-cart">Checkout</button>
    </div>
    </div>

@endsection
