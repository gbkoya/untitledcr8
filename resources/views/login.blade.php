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




<div class="log card justify-content-center mt-5">
<div class=" my-5 py-5">
<div class="container col-md my-5 py-5 king">
  
  <h2 class="login" >Log In</h2>
    <form class=" px-5">
      <div class="form-group d-flex pt-4">
        <span class="mt-4 pt-1"><img src="{{asset('customImages/Vector (2).png')}}" alt="" > </span>
        <input type="email" class="form-control" placeholder="Email" >
      </div>

      <div class="form-group d-flex pt-4">
      <span class="mt-4 pt-1"><img src="{{asset('customImages/Vector (1).png')}}" alt="" > </span>
        <input type="email" class=" gin form-control" placeholder="Password" >
        <span class="mt-4 pt-1"><img src="{{asset('customImages/Vector.png')}}" alt="" > </span>
      </div>
      
      <div class="mb-3 form-check pt-4">
        <div class="d-flex flex-row justify-content-center">
          <input type="checkbox" class=" check form-check-input" id="exampleCheck1">
          <label  class=" Remember form-check-label pt-2 px-2" for="exampleCheck1">Remember Me</label>
        </div>
      </div>
      <div class="row justify-content-center py-5">
        <button  type="submit" class=" button btn btn-primary">Sign In</button>
      </div>
    </form>
</div>
</div>
</div>























@endsection