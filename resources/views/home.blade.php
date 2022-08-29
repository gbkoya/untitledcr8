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

    <div style=" background-image: url(../customImages/Group68.png)" class="mt-5">
        <section
            class="container mt-5 d-flex flex-flow justify-content-center align-items-center block-display-tab section-top">
            <div class="archware-content-text archwarejo-width-bottom-head pt-2">
                <h2 style="font-weight: 700; font-size: 50px; line-height: 58px; color: #040856;" class="text-title-mobile">
                    We offer Premium eye care solutions
                </h2>
                <p class="pt-3 text-body-mobile archware-text-justify"
                    style="font-style: normal;font-weight: 400;font-size: 18px;line-height: 155%;color: rgba(4, 8, 86, 0.7);">
                    Foremost Eye Clinic is a leading provider of optometry services. With friendly and experienced optometrists, we provide a comprehensive range of eye care services.
                </p>
            </div>
            <div class="archwarejo-width-top-head">
                <img class="img-fluid image-width-tab image-min-height-mobile" src="/customImages/We offer Premium.png">
            </div>
        </section>
    </div>



    <script type="text/javascript"></script>

@endsection
