@extends('layouts.app')

@section('description', 'Foremost Eye Clinic is a leading provider of optometry services.')
@section('title', 'Foremost - Africa\'s Most Innovative Eye Clinic')
@section('article:section', 'Home')
@section('url', 'https://foremost-website.herokuapp.com')
@section('image'){{ asset('customImages/Logo.png') }}@stop

@section('content')

    <div style=" background-image: url(../customImages/Group68.png)" class="mt-5">
        <section
            class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab section-top">
            <div class="archware-content-text archwarejo-width-bottom-head pt-2">
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
                <img class="img-fluid image-width-tab image-min-height-mobile" src="/customImages/We offer Premium.png">
                <div class="">
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
            </div>
        </section>
    </div>

    {{-- <div style=" background-image: url(../customImages/Group68.png)" class="mt-5">
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
    </div> --}}


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
            <div class="card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
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
            <div class="card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
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
            <div class="card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
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
            <div class="card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
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
            <div class="card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
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
            <div class="card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
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


    {{-- TESTIMONIALS SECTION --}}
    <section class="testimonial container-fluid">
        <div class="text-center">
            <h1>Testimonials</h1>
            <h6>What Do People Have To Say About Us? </h6>
        </div>
        <!-- THE CAROUSEL -->
        <div id="demoTwo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demoTwo" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#demoTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#demoTwo" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <!-- First slide -->
                <div class="carousel-item active">
                    <div class="d-sm-flex flex-sm-row flex-sm-wrap justify-content-center testimonial-body">
                        {{-- First --}}
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
                    <!-- End of review card -->
                </div>

                <!-- Second slide -->
                <div class="carousel-item">
                    <div class="d-sm-flex flex-sm-row flex-sm-wrap justify-content-center testimonial-body">
                        {{-- First --}}
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
                </div>
                <!-- Third slide -->
                <div class="carousel-item">
                    <div class="d-sm-flex flex-sm-row flex-sm-wrap justify-content-center testimonial-body">
                        {{-- First --}}
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
                </div>

                <button class="carousel-control-next" type="button" data-bs-target="#demoTwo" data-bs-slide="next">
                    <img class="img-fluid" src="{{ asset('customImages/Vector (1).svg') }}">
                    <!-- <span class="carousel-control-next-icon"></span> -->
                </button>
            </div>
        </div>
    </section>
    <!-- End OF CAROUSEL -->
    {{-- </section> --}}

    {{-- END OF TESTIMONIALS SECTION --}}

    <!-- CONTACT US SECTION -->
    <section class="container-fluid contact-us-wrapper" style=" margin-bottom: 9%">
        <div class="text-center">
            <h1 class="e-contact-heading">Contact Us</h1>
        </div>
        <div class="row contact-form-section">
            <div class="col-md-7 col-sm-6 pt-5 contact-form-section-child">
                <h3>
                    Book Appointment
                </h3>
                <h6>
                    We'd like to take care of your eye health
                </h6>
                <form id="sendData">
                    <div class="row pt-2">
                        <div class="input-contact-wrapper">
                            <label class="contact-label">Name</label><br>
                            <input type="text" id="name" class="input-style" required
                                style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA;" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="mt-4 input-contact-wrapper">
                        <label class="contact-label">Email</label><br>
                        <input id="email" required class="input-style"
                            style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="email"
                            placeholder="Enter email address">
                    </div>
                    <div class="input-contact-wrapper mt-4">
                        <label class="contact-label">Phone Number</label><br>
                        <input id="phonenumber" required class="input-style"
                            style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="tel"
                            placeholder="Enter phone number">
                    </div>
                    <div class="input-contact-wrapper mt-4">
                        <label name="helpnote" class="contact-label">Date
                        </label><br>
                        <input id="date" required class="input-style"
                            style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="date"
                            placeholder="Enter phone number">
                    </div>
                    <div class="input-contact-wrapper mt-4">
                        <label name="helpnote" class="contact-label">What can we help you with?
                        </label><br>
                        <select id="message" required class="input-style"
                            style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="date"
                            placeholder="Enter phone number">
                            <option value="Comprehensive Eye Examination">Comprehensive Eye Examination</option>
                            <option value="Glaucoma Workup And Management">Glaucoma Workup And Management</option>
                        </select>
                    </div>
                    <div class="pt-3">
                        <button type="submit" class="my-4 contact-button">Book Appointment</button>
                    </div>
                </form>
            </div>

            <div class="col-md-5 col-sm-6 contact-information-column">
                <div class="sec6itext">
                    <div class="mx-5 mt-5 pt-5">
                        <h1 class="mt-5 pt-4" style="font-weight: 700;font-size: 30px;color: #FFFFFF;">
                            Contact Information
                        </h1>
                        <h6 style="color: #ffff; line-height: 130%">
                            Fill up the form and our Team will get back to you within 24 hours.
                        </h6>
                    </div>
                    <div class=" mx-5" style="margin-top: 2rem">
                        <p>
                            <img class=info_arch1 src="{{ asset('customImages/Phone Icon.svg') }}" alt="">
                            <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">
                                +2347031778450, +2348121738381
                            </a>
                        </p>
                        <p class="pt-3">
                            <img id=info_arch2 src="{{ asset('customImages/Envelope Icon.svg') }}" alt="">
                            <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">
                                info@archwaretechgroup.com
                            </a>
                        </p>
                        <p class="pt-3">
                            <img id=info_arch3 src="{{ asset('customImages/Map Marker Icon.svg') }}" alt="">
                            <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">
                                3, Ayanboye Street, Anthony Village, Lagos
                            </a>
                        </p>
                        <p class="pt-4"><img class="px-2" src="{{ asset('customImages/White.svg') }}">
                            <img class="px-2" src="{{ asset('customImages/White (1).svg') }}">
                            <img class="px-2" src="{{ asset('customImages/White (2).svg') }}">
                            <img class="px-2" src="{{ asset('customImages/White (3).svg') }}">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF CONTACT US SECTION -->



    <script src="/customJS/galleryscript.js"></script>
    <script type="text/javascript">
        const counters = document.querySelectorAll('.incrementTimer');
        const speed = 100;

        const triggerCounter = (event) => {
            if (window.scrollY >= 400) {
                counters.forEach(counter => {
                    const animate = () => {
                        const value = +counter.getAttribute('akhi');
                        const data = +counter.innerText;

                        const time = value / speed;
                        if (data < value) {
                            counter.innerText = Math.ceil(data + time);
                            setTimeout(animate, 200);
                        } else {
                            counter.innerText = value + '+';
                        }
                    }
                    animate();
                });

            } else {
                return;
            }
        }

        window.addEventListener('scroll', triggerCounter);


        // CONTACT API INTEGRATION HERE
        document.getElementById('sendData').addEventListener('submit', handleSumbit);

        function handleSumbit(event) {
            event.preventDefault();

            // Get all the input field and store them in their unique variable each
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let phonenumber = document.getElementById('phonenumber').value;
            let date = document.getElementById('date').value;
            let message = document.getElementById('message').value;

            let contactData = {
                name,
                email,
                phonenumber,
                date,
                message
            }
            // alert(JSON.stringify(contactData));
            // alert(`${firstName} and ${lastName}`);
            console.log(contactData);
            isLoading = true;

            function handleErrors(response) {
                if (!response.ok) {
                    throw Error(response.statusText);
                }
                return response;
            }
            fetch("http://127.0.0.1:8000/api/contactus/message", {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json, text/plain, */*',
                        'content-type': 'application/json'
                    },
                    body: JSON.stringify(contactData)
                })
                .then(handleErrors)
                .then(response => {
                    console.log("ok")
                    Swal.fire({
                        icon: 'success',
                        title: 'Message sent, We will get back shortly!',
                        showConfirmButton: false,
                        timer: 1500,

                    })
                    let res = document.getElementById("sendData");
                    res.reset();
                })
                .catch(error => {
                    console.log(error, 'wrong')
                    Swal.fire({
                        icon: 'error',
                        title: 'Message not sent, something went wrong!',
                        showConfirmButton: false,
                        timer: 1500,

                    })

                });

        }
        // END OF CONTACT API INTEGRATION
    </script>

@endsection
