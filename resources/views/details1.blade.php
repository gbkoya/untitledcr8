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
    <div class="container">
        <div class=" det card justify-content-center mt-5">
            <div class=" my-5 py-5">


                <form>
                    <div class="row d-flex input-wrapper justify-content-center">
                        <input type="search" placeholder="Subscribe Now" />
                        <img class="img-fluid search-image" src="{{ asset('customImages/arrow-right.png') }}" />
                    </div>

            </div>

            </form>



            <div class="d-flex flex-row">
                {{-- <div class="form-group d-flex mx-4">
                        <input type="email" class="search-form" placeholder="Search for eyewear, lenses and frames">
                        <span class="mt-3" style="margin-left: -10%;">
                            <a><img src="{{ asset('customImages/arrow-right.png') }}" alt=""></a>
                        </span>
                    </div> --}}

                <div class="px-5">
                    <button type="button" class="small-mobile-long-button foremost-button-border">
                        Login
                    </button>
                    <button type="button" class="small-mobile-long-button foremost-button-border">
                        Sign up
                    </button>
                    <button type="button" class="small-mobile-long-button foremost-button-border">
                        TRY IT ON
                    </button>
                </div>
                <div class="mx-5">
                    <button type="button" class="small-mobile-long-button foremost-button-border">
                        <img src="{{ asset('customImages/buyIcon.png') }}" />
                        CART
                    </button>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div><img src="{{ asset('customImages/Frame 93.png') }}" alt=""></div>
    </section>
    </div>

























@endsection
