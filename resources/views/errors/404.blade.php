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

    <div class="errorpage-body">
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
    </div>


    <script type="text/javascript"></script>

@endsection
