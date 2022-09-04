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

    {{-- Custom Gallery for Foremost start --}}
    <section class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row">
                <h2 class="medium-title text-title-mobile">
                    Our Gallery
                </h2>
            </div>
        </div>
    </section>

    <section class="container-fluid mt-2 pt-2">
        {{-- <div class="d-flex flex-row flex-wrap justify-content-center"> --}}
        <div class="slider-body">

            <div class="j-gallery-slider" id="slider">
                <div class="j-gallery-slide" id="j-gallery-slide-left">
                    <div class="j-gallery-slide-holder">
                        <div class="j-gallery-slide-bg j-gallery-bg-previous"></div>
                        <div class="j-gallery-slide-bg j-gallery-bg-current"></div>
                        <div class="j-gallery-slide-bg j-gallery-bg-next"></div>
                    </div>
                </div>
                <div class="j-gallery-slide" id="j-gallery-slide-center">
                    <div class="j-gallery-slide-holder">
                        <div class="j-gallery-slide-bg j-gallery-bg-previous"></div>
                        <div class="j-gallery-slide-bg j-gallery-bg-current"></div>
                        <div class="j-gallery-slide-bg j-gallery-bg-next"></div>
                    </div>
                </div>
                <div class="j-gallery-slide" id="j-gallery-slide-right">
                    <div class="j-gallery-slide-holder">
                        <div class="j-gallery-slide-bg j-gallery-bg-previous"></div>
                        <div class="j-gallery-slide-bg j-gallery-bg-current"></div>
                        <div class="j-gallery-slide-bg j-gallery-bg-next"></div>
                    </div>
                </div>
            </div>
            <a class="j-gallery-arrow" href="#" id="j-gallery-left-arrow">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <a class="j-gallery-arrow" href="#" id="j-gallery-right-arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        {{-- </div> --}}
    </section>

    <div class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row">
                <div class="gallery-rule">
                    <hr class="container gray-rule" />
                    <hr class="container orange-rule" />
                    <hr class="container gray-rule" />
                    <hr class="container gray-rule" />
                    <hr class="container gray-rule" />
                    <hr class="container gray-rule" />
                </div>
            </div>
        </div>
    </div>
    {{-- Custom Gallery for Foremost end --}}


    <script src="/customJS/galleryscript.js"></script>
    <script type="text/javascript"></script>

@endsection
