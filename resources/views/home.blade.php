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
                <p class="text-label-mobile"
                    style="font-weight: 600;font-size: 30px;line-height: 72px;color: #0D2158; text-align:center">
                    Ready To Deploy Our Account & Expenses Management System?
                </p>
                <a href="/contacts" class="py-3" style="text-align:center;">
                    <button class="small-mobile-long-button archware-button-default">
                        Let's Discuss
                    </button>
                </a>
            </div>
        </div>
    </section>


    <section class="container-fluid mt-3 pt-5">
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div class="card col-lg-3 mx-3 remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                <img src="/customImages/testimg.png" class="card-img-top" alt="...">
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
                <img src="/customImages/testimg.png" class="card-img-top" alt="...">
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
                <img src="/customImages/testimg.png" class="card-img-top" alt="...">
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



    <script type="text/javascript"></script>

@endsection
