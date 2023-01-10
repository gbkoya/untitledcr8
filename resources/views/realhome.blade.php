@extends('layouts.app')

@section('article:section', 'Home')
@section('url', 'https://foremost-website.herokuapp.com')
@section('image'){{ asset('customImages/Logo.png') }}@stop

@section('content')

<body>
    <div class="d-flex flex-wrap-reverse container mt-5">
        <div class="col-md-6 big-text" style="font-family: 'Helvetica';font-style: normal;font-weight: 700;font-size: 96px;line-height: 110px;">
        <div class="pt-5 mt-3" style="color: #FB8500;">Stand out </div> and reach your Audience</div>
        <div class="col-md-6"><img class="img-fluid" src="{{ asset('customImages/Rectangle.png') }}" alt=""></div>
    </div>
</body>

<script>
 function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");


    }
   </script> 
@endsection