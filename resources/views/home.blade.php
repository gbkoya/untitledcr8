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
        <section class="container mt-5 d-flex flex-flow justify-content-center align-items-center">
            <div class="pt-2">
                <h2 class="big-title text-title-mobile">
                    We offer Premium <span class="orange-color">eye care</span> solutions
                </h2>
                <p class="pt-3 text-black-paragraph">
                    Foremost Eye Clinic is a leading provider of optometry services. With friendly and experienced
                    optometrists,
                    we provide a comprehensive range of eye care services.
                </p>
                <a href="#" class="py-3">
                    <button class="small-mobile-long-button archware-button-default">
                        Get Started
                    </button>
                </a>
            </div>
            <div class="archwarejo-width-top-head">
                <img class="img-fluid" src="/customImages/We offer Premium.png">

                <div class="pb-3">
                    <a class="m-1 btn btn-outline-light" href="#!" role="button"><img class="img-fluid search-image"
                            src="http://127.0.0.1:8000/customImages/arrow-right.png">Modern Eye Clinic</a>

                    <a class="m-1 btn btn-outline-light" href="#!" role="button"><img class="img-fluid search-image"
                            src="http://127.0.0.1:8000/customImages/arrow-right.png">Expert Personnel</a>

                    <a class="m-1 btn btn-outline-light" href="#!" role="button"><img class="img-fluid search-image"
                            src="http://127.0.0.1:8000/customImages/arrow-right.png">Discounted Eye checkups</a>

                    <a class="m-1 btn btn-outline-light" href="#!" role="button"><img class="img-fluid search-image"
                            src="http://127.0.0.1:8000/customImages/arrow-right.png">24 Hour Hotline</a>
                </div>
            </div>
        </section>
    </div>


    <section
        class="mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center
                block-display-tab experience-body-with-pix-mobile eyecare-image-section">
        <div class="archwarejo-width-top">
            <img class="img-fluid image-width-tab p-5 archwarejo-image-fully-bottom image-padding-buttom"
                src="/customImages/doctor smiley thumb.png">
        </div>
        <div
            class="archware-text-justify archware-content-text archwarejo-width-bottom
                middle-content-padding-right experience-body-mobile">
            <h2 class="text-top-about-us">About Us</h2>
            <p class="text-white-paragraph">
                Foremost Eye Clinic is one of the most prestigious eye care centers in Africa. We offer innovative eye care
                solutions, and quality services to our clients through cutting-edge technologies and excellent service
                delivery. thereby enhancing their long-term vision and productivity.
            </p>
            <p class="text-white-paragraph">
                We offer a complete range of treatments including vision correction surgeries, comprehensive eye
                examinations, health awareness programs, contact lens services, and many more.
            </p>
            <p class="text-white-paragraph">
                Our optometrists and ophthalmic assistants are experts in their fields, possessing many years of experience
                in the field of eye care, thus enabling us to provide patients with the highest quality of care in a
                cost-effective manner.
            </p>
            <p class="text-white-paragraph">
                At Foremost eye clinic, our goal is to provide comprehensive vision care services while ensuring that the
                best possible vision can be achieved by our patients.
            </p>

            <a href="#" class="py-3">
                <button class="small-mobile-long-button archware-button-default">
                    Read More
                </button>
            </a>
        </div>
    </section>

    <section class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row">
                <h2 class="medium-title text-title-mobile">
                    Our Services
                </h2>
                <p class="orange-color medium-subtitle">What We Offer</p>
            </div>
        </div>
    </section>


    <section class="container-fluid mt-2 pt-2">
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div class="card col-lg-3 mx-3 remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="/customImages/screening.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Visual Screening
                    </div>
                    <p class="pt-3 foremost-card-body">
                        We offer vision screening services that are reliable and accurate, using the latest technology.
                        With our visual screening services, you can be sure that you're getting the best care for your
                        eyes.
                    </p>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="/customImages/eye exam.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Comprehensive Eye Examination
                    </div>
                    <p class="pt-3 foremost-card-body">
                        A comprehensive eye examination is a perfect way to ensure that your vision is at its best. Our
                        team of experts will evaluate everything from your prescription to the health of your eyes.
                    </p>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="/customImages/cataract.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Cataract Surgery
                    </div>
                    <p class="pt-3 foremost-card-body">
                        We specialise in Cataract Surgery and our services are second to none. We use the latest
                        technologies and our highly skilled Ophthalmologists will have you see clearly in no time.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row">

                <a href="/contacts" class="py-3" style="text-align:center;">
                    <button class="small-mobile-long-button archware-button-default">
                        Read More
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section class="container-fluid hero-section need-glass-back-img">
        <div class="hero-section-copy">
            <h1>Need glasses fast?</h1>
            <p>
                Get single-vision prescription glasses in 3-5 business days with new Fast Frame
            </p>

            <button type="button" class="small-mobile-long-button foremost-button-border">
                <img src="{{ asset('customImages/buyIcon.png') }}" />
                Buy Now
            </button>
        </div>
    </section>


    <section class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row">
                <h2 class="medium-title text-title-mobile">
                    Our Blog
                </h2>
                <p class="orange-color medium-subtitle">What you should know about your eye health</p>
            </div>
        </div>
    </section>

    <section class="container-fluid mt-2 pt-2">
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div class="card col-lg-3 mx-3 remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="/customImages/few tips.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-blog-title">
                        7 things you should know before picking a new pair of glasses
                    </div>
                    <p class="pt-3 foremost-card-body">
                        Here are a few tips and tricks to help you find the right pair of glasses
                    </p>
                    <div class="pt-3 foremost-blog-read-more">
                        Read more
                    </div>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="/customImages/few tips 2.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-blog-title">
                        7 things you should know before picking a new pair of glasses
                    </div>
                    <p class="pt-3 foremost-card-body">
                        Here are a few tips and tricks to help you find the right pair of glasses
                    </p>
                    <div class="pt-3 foremost-blog-read-more">
                        Read more
                    </div>
                </div>
            </div>
            <div class="card col-lg-3 mx-3 remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="/customImages/color blindness.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-blog-title">
                        Colour blindness explained! these facts will shock you
                    </div>
                    <p class="pt-3 foremost-card-body">
                        Here are a few tips and tricks to help you find the right pair of glasses
                    </p>
                    <div class="pt-3 foremost-blog-read-more">
                        Read more
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="my-3 py-3">
        <div class="container justify-content-center">
            <div class="row">
                <div class="display-beside">
                    <hr class="container orange-rule" />
                    <hr class="container gray-rule" />
                    <hr class="container gray-rule" />
                </div>
                <p class="text-gray-underline">View All</p>
            </div>
        </div>
    </div>

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

                <div class="slider" id="slider">
                    <div class="slide" id="slide-left">
                        <div class="slide-holder">
                            <div class="slide-bg bg-previous"></div>
                            <div class="slide-bg bg-current"></div>
                            <div class="slide-bg bg-next"></div>
                        </div>
                    </div>
                    <div class="slide" id="slide-center">
                        <div class="slide-holder">
                            <div class="slide-bg bg-previous"></div>
                            <div class="slide-bg bg-current"></div>
                            <div class="slide-bg bg-next"></div>
                        </div>
                    </div>
                    <div class="slide" id="slide-right">
                        <div class="slide-holder">
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


    {{-- TESTIMONIALS SECTION --}}
    <section class="testimonial container-fluid">
        <div class="text-center">
            <h1>Testimonials</h1>
            <h6>What Do People Have To Say About Us? </h6>
        </div>
        {{-- First --}}
        <div class="d-sm-flex flex-sm-row flex-sm-wrap justify-content-center testimonial-body">
            <div class="first-testimonial">
                <img src="/customImages/testimonial-contentwrap.png" alt="testimonial wrap">
                <div class="testimonial-content">
                    <p class="body-copy">
                        Excellent service & follow-up on treatment
                        by staff and Doctor
                    </p>
                    <div class="d-flex flex-row justify-content-end">
                        <p class="author">
                            . David Anelm
                        </p>
                    </div>
                </div>

            </div>
            {{-- Second --}}
            <div class="first-testimonial">
                <img src="/customImages/testimonial-contentwrap.png" alt="testimonial wrap">
                <div class="testimonial-content">
                    <p class="body-copy">
                        I love my prescribed contact lens and how they were patient with
                        me choosing my preferred color. My vision is crystal clear and
                        the lens is so fashionable.
                    </p>
                    <div class="d-flex flex-row justify-content-end">
                        <p class="author">
                            . Abraham Oluwatuyi
                        </p>
                    </div>
                </div>

            </div>
            {{-- Third --}}
            {{-- Second --}}
            <div class="first-testimonial">
                <img src="/customImages/testimonial-contentwrap.png" alt="testimonial wrap">
                <div class="testimonial-content">
                    <p class="body-copy">
                        They have a conducive environment and friendly
                        staff. I love their customer service and I highly
                        recommend them.
                    </p>
                    <div class="d-flex flex-row justify-content-end">
                        <p class="author">
                            . Obadiah Anthony
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- END OF TESTIMONIALS SECTION --}}



    <script type="text/javascript"></script>

@endsection
