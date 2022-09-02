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

            <div class="slider">
                <div class="slide" id="gallery-slide-left">
                    <div class="gallery-slide-holder">
                        <div class="slide-bg bg-previous"></div>
                        <div class="slide-bg bg-current"></div>
                        <div class="slide-bg bg-next"></div>
                    </div>
                </div>
                <div class="slide" id="gallery-slide-center">
                    <div class="gallery-slide-holder">
                        <div class="slide-bg bg-previous"></div>
                        <div class="slide-bg bg-current"></div>
                        <div class="slide-bg bg-next"></div>
                    </div>
                </div>
                <div class="slide" id="gallery-slide-right">
                    <div class="gallery-slide-holder">
                        <div class="slide-bg bg-previous"></div>
                        <div class="slide-bg bg-current"></div>
                        <div class="slide-bg bg-next"></div>
                    </div>
                </div>
            </div>
            <a class="arrow" href="" id="left-arrow">
                <i class="fab fa-arrow-circle-o-left"></i>
            </a>
            <a class="arrow" href="" id="right-arrow">
                <i class="fab fa-arrow-circle-o-right"></i>
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


    <script type="text/javascript"></script>

@endsection
