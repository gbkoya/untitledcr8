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
            class="container mt-5 d-flex flex-flow justify-content-center align-items-center">
            <div class="pt-2">
                <h2 class="big-title text-title-mobile">
                    We offer Premium <span class="orange-color">eye care</span> solutions
                </h2>
                <p class="pt-3 text-black-paragraph">
                    Foremost Eye Clinic is a leading provider of optometry services. With friendly and experienced optometrists,
                    we provide a comprehensive range of eye care services.
                </p>
            </div>
            <div class="archwarejo-width-top-head">
                <img class="img-fluid" src="/customImages/We offer Premium.png">
            </div>
        </section>
    </div>

    <section class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center eyecare-image-section"
        style="border-radius: 20px 20px;">
        <div class="archwarejo-width-top">
            <img class="img-fluid" src="/customImages/doctor smiley thumb.png">
        </div>
        <div class="">
            <h2 class="">Our Experience</h2>
            <p class="">
                Our team of e-commerce web design experts will help you
                every step of the way to bring your vision to life with precise
                planning and execution to present an attractive display of
                your products to your customers and improve your sales.
            </p>
            <p class="">
                Our goal is to create an e-commerce website that is fast, and
                functional to keep your customers returning and converting
                from their first visit. All you have to do is let us know your
                goals, and we'll do the research for you.
            </p>
            <p class="">
                Our job isn't finished once your site is launched. We will also
                maintain and optimise your website, keeping it up to date
                and functioning so that you can get the most out of your new
                e-commerce website development.
            </p>
        </div>
    </section>



    <script type="text/javascript"></script>

@endsection
