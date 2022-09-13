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


<div class="container-fluid  pt-5 pb-5" style="background: rgba(107, 128, 155, 0.25);">
<div class="container d-flex">
    <div class="col-lg-6 pt-4">
        <div class="pt-5" style="font-weight: 600;font-size: 200px;line-height: 109.3%;color: #6B809B;"> 404 </div>
        <div class="pt-5" style="font-weight: 700;font-size: 32px;line-height: 48px;color: #000000;">Ooops!</div>
        <div class="pt-5" style="font-weight: 300;font-size: 21.5644px;line-height: 136.8%;color: #000000;">The page you are looking for doesn’t exist or another<br> error occurred, go back to home page. </div>
        <div class="pt-5">
           <a href="/">
             <button style="background: #F58634;border-radius: 40px;font-weight: 600;font-size: 20px;line-height: 23px;color: #FFFFFF; padding:1rem 1.5rem">Go Back To Home</button>
            </a>
        </div>
    </div>
    <div class="col-lg-6">
        <img class="errorpage-img img-fluid" src="/customImages/ufo.png">
    </div>
</div>
</div>

   <!-- <div class="errorpage-body">
        <div class="errorpage-container">
            <div class="text">
                <div>
                    <h1 class="errorpage-h1">404 Something</h1>
                </div>
                <div class="ptags">
                    <b>
                        <p class="firstp">Ooopps!</p>
                    </b>
                    <p class="secondp">The page you are looking for does not exist or another error occurred,go back to home
                        page</p>
                    <button class="errorpage-home">Go Back To Home</button>
                </div>
            </div>
            <div>
                <img class="errorpage-img" src="/customImages/ufo.png">
            </div>
        </div>
    </div>-->


    <script type="text/javascript"></script>

@endsection
