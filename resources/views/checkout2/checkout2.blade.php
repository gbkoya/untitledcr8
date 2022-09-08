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
        <input placeholder="Search for eyewear, lenses and frames" class="formost-cart-first-div-input" ><img src="customImages/Vector-arrow.png" class="arrow-icon-cart">
            <button class="formost-cart-first-div-input-button">Log In</button>
            <button class="formost-cart-first-div-input-button2">Sign Up</button>
            <button class="formost-cart-first-div-input-button3">TRY IT ON</button>   
            <button class="formost-cart-first-div-input-button4"><img src="customImages/Vector.png" class="cart-icon-cart">  Cart</button>     
    </div>

    <div>
        <!--  -->
        <p class="formost-cart-second-div-heading">Delivery Method</p>
      <div class="all-icons-cart">
        <img src="customImages/Group 188.png" class="firsticon-cart">
        <img src="customImages/Group 191.png" class="secondicon-cart">
        <img src="customImages/Group 189.png" class="thirdicon-cart">
        <img src="customImages/Group 190.png" class="fourthicon-cart">
      </div>
      <div class="checkout1-second-div">
        <!-- start here -->
        <div class="row">
<div class="column">
<input type="radio" name="groupA" id="T35"  class="pickup-checkout1" />
<label class="k-label" for="T35" @onclick="() => UpdateTheChart(11)" class="pickuplabel-checkout1">Pick Up</label>
<input type="radio" name="groupA" id="T36"  class="delivery-checkout1" />
<label class="k-label" for="T36" @onclick="() => UpdateTheChart(12)"  class="deliverylabel-checkout1">Delivery</label>
</div>
</div>
<!--  -->

      </div>
      <button class="continue-cart">Back</button>
<button class="checkoutbutton-cart">Next</button>
    </div>
    </div>
    <script >
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