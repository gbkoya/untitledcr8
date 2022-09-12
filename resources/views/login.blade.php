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



<div class="login-ik card justify-content-center mt-5">
  <div class="container my-5 py-5">
    <div class="container col-lg-5 col-md-7 my-5 py-5 i-login-backg">

      <h2 class="i-login-head">Log In</h2>
      <form>
        <div class="mb-3 pt-5 px-3">
          <div class="d-flex" style="background-color: #f3efef" ; margin-top="10%">
            <span class="mt-4 pt-1 px-2"><img src="{{asset('customImages/Vector (2).png')}}" alt=""> </span>
            <input type="email" class="form-control-ika" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp">
          </div>
        </div>
        <div class="mb-3 pt-3 px-3">
          <div class="d-flex" style="background-color: #f3efef" ; margin-top="10%">
            <span class="mt-4 pt-1 px-2"><img src="{{asset('customImages/Vector (1).png')}}" alt=""> </span>
            <input type="password" class="form-control-ika" placeholder="Create Password" id="exampleInputPassword1">
            <span class="mt-4 pt-1 px-4"><img src="{{asset('customImages/Vector.png')}}" alt=""> </span>
          </div>
        </div>

        <div class="mb-3 form-check pt-4">
          <div class="d-flex flex-row justify-content-center">
            <input type="checkbox" class="i-login-check form-check-input" id="exampleCheck1"> </input>
            <label class="i-login-remember form-check-label pt-2 px-2" for="exampleCheck1">Remember Me</label>
          </div>
        </div>
        <div class="row justify-content-center py-5">
          
          <button type="submit" class="i-login-button ">SIgn In</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection