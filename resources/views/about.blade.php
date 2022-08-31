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
     
   <body>
    <main>
     {{-- HERO SECTION --}}
     <section class="container-fluid hero-section">
        {{-- <img src="customImages/heroImage.png" alt="heroImage"> --}}
        <div class="hero-section-copy">
            <h1>Your Experience is<br> Our Top Priority</h1>
            <p>We are focused on providing cutting-edge eye
                healthcare services to suit the expanding demands
                 of local, international, and cross-border markets.
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
                <p>To become a FOREMOST  eye health services provider in Africa.</p>
            </div>
            <div class="miss-statement">
                <h2>Mission Statement</h2>
                <p>We provide innovative eye health services to Africans through
                     cutting edge technologies and excellent service delivery 
                     thereby enhancing their long-term vision  and productivity.</p>
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
                <p>Intercontinental <br>Clinics</p>
            </div>
            <div class="web">
                <h1 class="incrementTimer" akhi="50">0</h1>
                <p>Experienced<br> Specialists</p>
            </div>
            <div class="customers">
                <h1 class="incrementTimer" akhi="100">0</h1>
                <p>Happy <br>customers</p>
            </div>
            <div class="customers">
                <h1 class="incrementTimer" akhi="24">0</h1>
                <p>Hours <br>Open</p>
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
                <p>At Foremost Eye Clinic, we guarantee maximum satisfaction
                     and an invaluable experience. We recognize that the eyes
                      require specialized care, which is why we offer personalized 
                      and tailored solutions designed to meet our patient’s needs.
                </p>
                <p>We carry out Advanced Diagnostic Tests with modernized
                     technology and laboratory equipment, to ensure our patients
                     get first-hand treatment. 
               </p>
               <p>Schedule an appointment with our doctors today and enjoy
                   our excellent services.
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
                <h6>Our Workforce</h6>
                <h1>Our Highly Qualified Professionals</h1>
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

    {{--END OF TESTIMONIALS SECTION --}}

    {{-- CONTACT US SECTION --}}
    <section class="container-fluid contact-us-wrapper">
        <div class="text-center">
            <h1>Contact Us</h1>
        </div>
        <div class="row contact-form-section">
            <div class="col-md-7 col-sm-6 pt-5 px-3">
                {{-- <h1 class="px-3" style="font-weight: 700;font-size: 35px;letter-spacing: -0.02222em;color: #040856;">
                    Contact Us</h1> --}}
             <h3>Book an appointment</h3>
                <h6 class="h6x-3" style="font-weight: 400;font-size: 16px;color: rgba(4, 8, 86, 0.7);">We'd like to take care of your 
                eye health</p>


                <form id="sendData">
                    <div class="row px-3 pt-2">
                        <div class="first-name">
                            <label style="font-weight: 500;font-size: 14px;color: #040856 ">Name</label>
                            <input type="text" id="Firstname" class="input-style"  required
                                style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA;" placeholder="">
                        </div>
    
                    <div class="px-3 pt-2">
                        <label style="font-weight: 500;font-size: 14px;color: #040856">Email address</label>
                        <input id="Email" required class="section6-form4"
                            style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="email"
                            placeholder="hello@dummie.com">
                    </div>
                    <div class="px-3 pt-2">
                        <label style="font-weight: 500;font-size: 14px;color: #040856">Service you are interested
                            in</label>
                        <input id="Services" required class="section6-form4"
                            style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="text"
                            placeholder="e.g. Web Development">
                    </div>
                    <div class="px-3 pt-2">
                        <label name="helpnote" style="font-weight: 500;font-size: 14px;color: #040856">What can we
                            help you with?
                        </label>
                        <textarea id="Message" required class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message"
                            style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" rows="5"></textarea>

                    </div>
                    <div class="text-end pt-3 px-3">
                        <button type="submit" class="my-4"
                            style=" width: 155px;height: 40px;background: #F58634; border: none;
                        box-shadow: 0px 4px 7px -1px rgba(0, 0, 0, 0.11), 0px 2px 4px -1px rgba(0, 0, 0, 0.07);
                        border-radius: 8px;font-weight: 500;font-size: 12px;line-height: 12px;align-items: right;
                        text-align: center; color: #ffffff;">Submit</button>
                    </div>
                </form>
            </div>

            <div class="col-md-5 col-sm-6 contact-information-colum"
                style=" background-image: url(../customImages/Backgroundcard.svg);  background-repeat: no-repeat; background-size: 160%; height:inherit">
                <div class="sec6itext">
                    <div class="mx-5 mt-5 pt-5">
                        <h1 class="mt-5 pt-4" style="font-weight: 700;font-size: 30px;color: #FFFFFF;">Contact
                            Information<h1>
                                <p class="pt-3" style="font-weight: 400;font-size: 16px;color: #FFFFFF;">Fill up the
                                    form and our Team will get back to you within 24
                                    hours.</p>
                    </div>
                    <div class="pt-3 mx-5">
                        <p><img class=info_arch1 src="{{ asset('customImages/Phone Icon.svg') }}" alt="">
                            <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">+2347031778450, +2348121738381</a>
                        </p>
                        <p class="pt-3"><img id=info_arch2 src="{{ asset('customImages/Envelope Icon.svg') }}"
                                alt="">
                            <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">info@archwaretechgroup.com</a>
                        </p>
                        <p class="pt-3"><img id=info_arch3 src="{{ asset('customImages/Map Marker Icon.svg') }}"
                                alt="">
                            <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">3, Ayanboye Street, Anthony
                                Village, Lagos</a>
                        </p>
                        <p>
                        <p class="pt-4"><img class="px-2" src="/customImages/White.svg')">
                            <img class="px-2" src="{{ asset('customImages/White (1).svg') }}">
                            <img class="px-2" src="{{ asset('customImages/White (2).svg') }}">
                            <img class="px-2" src="{{ asset('customImages/White (3).svg') }}">
                        </p>
                    </div>
                </div>

            </div>
        </div>
        </div>
     </section>
    {{-- END OF CONTACT US SECTION --}}

    </main>
    <body>

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