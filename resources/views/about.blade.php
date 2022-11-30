@extends('layouts.app')
@section('description', 'Foremost Eye Clinic is a leading provider of optometry services.')
@section('title', 'Foremost - Africa\'s Most Innovative Eye Clinic')

@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop
@section('content')

   <body>
    <main>
     {{-- HERO SECTION --}}
     <section class="container-fluid hero-section">
        {{-- <img src="customImages/heroImage.png" alt="heroImage"> --}}
        <div class="hero-section-copy container-xxl col-lg-7" style="">
            <h1>Your Experience is<br> Our Top Priority</h1>
            <p>We are focused on providing world class eye care services through the deployment
                of cutting edge technologies and empathetic but highly professional workforce
                that put your mind to rest.
            </p>
        </div>
     </section>
    {{-- END OF HERO SECTION --}}

    {{-- VISION AND MISSION STATEMENT  --}}
     <section class="container-fluid vision-container">
      <div class="vision-wrapper d-flex flex-row flex-wrap">
        <img class="img-fluid" src="/customImages/doctor-vision.png" alt="doctorVisionImage">
        <div class="vision-right">
            <div class="vis-statement">
                <h2>Vision Statement</h2>
                <p>To become a FOREMOST eye health service provider in Africa.</p>
            </div>
            <div class="miss-statement">
                <h2>Mission Statement</h2>
                <p>We provide innovative eye health services to Africans through
                    cutting edge technologies and excellent service delivery, thereby enhancing
                    their long-term vision and productivity.</p>
            </div>
            <div class="core-val">
                <h2>Our Core Values</h2>
                <ul>
                    <li>Value Creation</li>
                    <li>Empathy</li>
                    <li>Innovation</li>
                    <li>Excellence</li>
                    <li>Resilience</li>
                </ul>
            </div>
        </div>
      </div>
     </section>
    {{-- END OF VISION AND MISSION STATEMENT  --}}

    <!-- PROOF OF WORK -->
    <section class="container-fluid  proof-of-work">
        <div class="d-sm-flex flex-wrap proof-of-work-child justify-content-around">
            <div class="web">
                <h1 class="incrementTimer" akhi="5">0</h1>
                <p>Intercontinental Clinics</p>
            </div>
            <div class="web">
                <h1 class="incrementTimer" akhi="50">0</h1>
                <p>Experienced Specialists</p>
            </div>
            <div class="customers">
                <h1 class="incrementTimer" akhi="100">0</h1>
                <p>Happy customers</p>
            </div>
            <div class="customers">
                <h1 class="incrementTimer" akhi="24">0</h1>
                <p>Hours Open</p>
            </div>
        </div>
    </section>
    <!-- END OF PROOF OF WORK -->

    {{-- WHY CHOOSE US SECTION --}}
    <section class="container-fluid why-choose-parent">
        <img class="img-fluid side-logo" src="/customImages/sidelogo.png" alt="SideLogo">
        <div class=" d-flex flex-ro flex-wrap justify-content-between align-items-center why-wrapper">
            <div class="why-choose-left">
                <h1>Why Choose Us?</h1>
                <p>At Foremost International Eye Clinic, we guarantee maximum satisfaction and an invaluable
                    experience. We recognize that the vision requires specialized and quality care. Therefore we
                    offer personalized and tailored care services to meet our patients’unique needs and expectations.</p>

                <p>We carry out Advanced Diagnostic Tests using the latest technology and ultra-modern laboratory
                    equipment to ensure our patients get first class treatment with maximum comfort and top-level
                    precision.</p>

                <p>We have a team of highly experienced specialists (ophthalmologists and optometrists) who are top
                    rated professionals in quality eye care services delivery.></p>

                <p>We enjoin you to schedule an appointment with our doctors today to have a taste of our
                    unbeatable eye care services.
                </p>
            </div>
        <img class="img-fluid why-choose-right-image" src="/customImages/doctor-background.png" alt="doctor image with yellow background here">
    </div>
    </section>
    {{-- END OF WHY CHOOSE US SECTION --}}

    {{-- WORKFORCE SECTION --}}
     <section class="container-fluid workforce">
        <div>
            <div class="text-center">
                <h1>Our Workforce</h1>
                <h6>Our Highly Qualified Professionals</h6>
            </div>

            {{-- Avatars --}}
        <div class="d-sm-flex flex-sm-wrap flex-sm-row align-items-center justify-content-evenly avatars">
                <div class="avatar-child">
                <img src="/customImages/docAdebayo.png" alt="doctor adebayo"/>
                <h3>Dr. Adebayo</h2>
                <p>Medical Director<br>Foremost Eye Clinic</p>
                </div>
                <div class="avatar-child">
                <img src="/customImages/docoyeniyi.png" alt="Pharm. Oyeniyi"/>
                <h3>Pharm. Oyeniyi</h2>
                <p>Medical Director<br>Foremost Eye Clinic</p>
                </div>
                <div class="avatar-child">
                <img src="/customImages/docAmara.png" alt="Doctor Amara"/>
                <h3>Dr. Amara</h2>
                <p>Medical Director<br>Foremost Eye Clinic</p>
                </div>
                <div class="avatar-child">
                <img src="/customImages/docJohnson.png" alt="doctor Johnson"/>
                <h3>Dr. Johnson</h2>
                <p>Medical Director<br>Foremost Eye Clinic</p>
                </div>
            </div>
        </div>
     </section>
    {{-- END OF WORKFORCE SECTION --}}

    {{-- TESTIMONIALS SECTION --}}
     <section class="testimonial container-fluid">
    <div class="text-center">
        <h1>Testimonials</h1>
        <h6>What Do People Have To Say About Us? </h6>
    </div>
      <!-- THE CAROUSEL -->
      <div id="demoTwo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demoTwo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#demoTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#demoTwo" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <!-- First slide -->
            <div class="carousel-item active">
                <div class="d-sm-flex flex-sm-row flex-sm-wrap justify-content-center align-items-center testimonial-body">
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

            <!-- Left and right controls/icons -->
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#demoTwo" data-bs-slide="prev">
                <!-- <span class="carousel-control-prev-icon" style="color: blue;"></span> -->
                <img class="img-fluid" src="{{ asset('customImages/Vector.svg') }}">
            </button> --}}
            <button class="carousel-control-next" type="button" data-bs-target="#demoTwo" data-bs-slide="next">
                <img class="img-fluid" src="{{ asset('customImages/testimonial-right-arrow.png') }}">
                <!-- <span class="carousel-control-next-icon"></span> -->
            </button>
        </div>

</section>
<!-- End OF CAROUSEL -->
     {{-- </section> --}}

    {{--END OF TESTIMONIALS SECTION --}}

     <!-- CONTACT US SECTION -->
     @include('inc.contactForm')

        <!-- END OF CONTACT US SECTION -->

    </main>
</body>

    <script type="text/javascript">
     const counters = document.querySelectorAll('.incrementTimer');
        const speed = 100;

        const triggerCounter = (event) =>{
            if (window.scrollY >= 400){
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

            }else{
                return;
            }
        }

        window.addEventListener('scroll', triggerCounter);

    </script>
@endsection
