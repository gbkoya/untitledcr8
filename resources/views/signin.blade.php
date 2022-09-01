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




<div style=" background-image: url(../customImages/login.png); background-repeat:no-repeat;background-size:cover ; align-items:center" class="card justify-content-center mt-5">
<div class="container my-5 py-5">
<div class="container col-md-5 my-5 py-5" style="background: #FFFFFF;border-radius: 5.22082px;">
  
  <h2 class="login" style="font-weight: 500;font-size: 28px;line-height: 34px;color: #000000;text-align:center">Create Account</h2>
    <form class=" px-5">
      <div class="form-group d-flex pt-4">
        <span class="mt-4 pt-1"><img src="{{asset('customImages/Vector(4).png')}}" alt="" > </span>
        <input type="email" class="form-control" placeholder="Full Name" style="height: 83px;
        left: 1.34px;top: 0px;background: #FAFAFA;border-radius: 17.7143px; border:none;">
      </div>
      <div class="form-group d-flex pt-4">
        <span class="mt-4 pt-1"><img src="{{asset('customImages/Vector (2).png')}}" alt="" > </span>
        <input type="email" class="form-control" placeholder="Email" style="height: 83px;
        left: 1.34px;top: 0px;background: #FAFAFA;border-radius: 17.7143px; border:none;">
      </div>

      <div class="form-group d-flex pt-4">
      <span class="mt-4 pt-1"><img src="{{asset('customImages/Vector (1).png')}}" alt="" > </span>
        <input type="email" class="form-control" placeholder="Create Password" style="height: 83px;
        left: 1.34px;top: 0px;background: #FAFAFA;border-radius: 17.7143px;border:none">
        <span class="mt-4 pt-1"><img src="{{asset('customImages/Vector.png')}}" alt="" style="margin-left:-50px"> </span>
      </div>
      
      <div class="mb-3 form-check pt-4">
        <div class="d-flex flex-row justify-content-center">
          <input style="border: 3.93287px solid #F58634;border-radius: 9.4389px;width: 31.46px;height: 31.46px;" type="checkbox" class="form-check-input" id="exampleCheck1">
          <label style="font-weight: 600;font-size: 18.7396px;line-height: 20px;text-align: center;letter-spacing: 0.04em;color: #3D3D3D;" class="form-check-label pt-2 px-2" for="exampleCheck1">I agree to the terms and conditions</label>
        </div>
      </div>
      <div class="row justify-content-center py-5">
        <button style="width: 360px;height: 56px;background: #F58634;border-radius: 30px;border:none" type="submit" class="btn btn-primary">Create Account</button>
      </div>
    </form>
</div>
</div>
</div>























@endsection