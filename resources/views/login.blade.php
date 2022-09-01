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




<div style=" background-image: url(../customImages/login.png); background-repeat:no-repeat;background-size:cover ; ba align-items:center" class="card justify-content-center mt-5">
<div class="my-5 py-5">
<div class="container col-md-4 my-5 py-5" style="background: #FFFFFF;border-radius: 5.22082px;">
  
  <h2 style="font-weight: 500;font-size: 28px;line-height: 34px;color: #000000;text-align:center">Log In</h2>
    <form>
      <div class="mb-3" style="">
      <span style="position:absolute; margin-left:15px; margin-top:25px">
       <button><img src="{{ asset('customImages/Vector (2).png')}}"></button>
      </span> 
    
       <input class="px-4" style="width: 400px; height: 83px;left: 1.34px;top: 0px;background: #FAFAFA;border-radius: 17.7143px;font-weight: 500;font-size: 16.0625px;
        line-height: 83px;letter-spacing: 0.04em;color: #C5C5C5;border:none;" 
        type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
      </div>

      <div class="mb-3"> 
      <span style="position:absolute; margin-left:15px; margin-top:25px">
       <button><img src="{{ asset('customImages/Vector (1).png')}}"></button>
      </span>  
        <input class="px-4" style="width: 400px;height: 83px;left: 1.34px;top: 0px;background: #FAFAFA;border-radius: 17.7143px;font-weight: 500;font-size: 16.0625px;
        line-height: 83px;letter-spacing: 0.04em;color: #C5C5C5;border:none;border-left:20px" type="password" placeholder="..    Password" class="form-control" id="exampleInputPassword1">
      <span style="position:absolute; margin-left:-60px; margin-top:25px">
       <button><img src="{{ asset('customImages/Vector.png')}}"></button>
      </span>  
    </div>
      
      <div class="mb-3 form-check">
        <div class="d-flex flex-row justify-content-center">
          <input style="border: 3.93287px solid #F58634;border-radius: 9.4389px;width: 31.46px;height: 31.46px;" type="checkbox" class="form-check-input" id="exampleCheck1">
          <label style="font-weight: 600;font-size: 18.7396px;line-height: 20px;text-align: center;letter-spacing: 0.04em;color: #3D3D3D;" class="form-check-label pt-2 px-2" for="exampleCheck1">Remember Me</label>
        </div>
      </div>
      <div class="row justify-content-center py-5">
        <button style="width: 360px;height: 56px;background: #F58634;border-radius: 30px;border:none" type="submit" class="btn btn-primary">Sign In</button>
      </div>
    </form>
</div>
</div>
</div>























@endsection