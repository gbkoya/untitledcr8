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
        <div class="hero-section-copy container-xxl">
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
                <img class="img-fluid" src="{{ asset('customImages/Vector (1).svg') }}">
                <!-- <span class="carousel-control-next-icon"></span> -->
            </button>
        </div>

</section>
<!-- End OF CAROUSEL -->
     {{-- </section> --}}

    {{--END OF TESTIMONIALS SECTION --}}

     <!-- CONTACT US SECTION -->
     <section class="container-fluid contact-us-wrapper" style=" margin-bottom: 9%">
        <div class="text-center">
            <h1 class="e-contact-heading">Contact Us</h1>
        </div>
        <div class="row contact-form-section">
            <div class="col-md-7 col-sm-6 pt-5 contact-form-section-child">

                <h3>Book Appointment</h3>
                <h6>We'd like to take care of your
                eye health</h6>


                <form id="sendData">
                    <div class="row pt-2">
                        <div class="input-contact-wrapper">
                            <label class="contact-label">Name</label><br>
                            <input type="text" id="name" class="input-style"  required
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
                    <div class= "input-contact-wrapper mt-4">
                        <label name="helpnote" class="contact-label">What can we help you with?
                        </label><br>
                        <select id="message" required class="input-style e-contact-select"
                        style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="date"
                        placeholder="Enter phone number">
                        <option value="Comprehensive Eye Examination">Comprehensive Eye Examination</option>
                        <option value="Glaucoma Workup And Management">Glaucoma Workup And Management</option>
                        <option value="Pediatrics– Eye Care for Children">Pediatrics– Eye Care for Children</option>
                        <option value="Pre-and-post Operative Eye Care">Pre-and-post Operative Eye Care</option>
                        <option value="Environmental and Occupational Vision">Environmental and Occupational Vision</option>
                        <option value="Geriatrics– Eye Care for the Elderly">Geriatrics– Eye Care for the Elderly</option>
                        <option value="Specialty Contact Lens">Specialty Contact Lens</option>
                        <option value="Dry Eye Treatment">Dry Eye Treatment</option>
                        <option value="Chalazion Excision">Chalazion Excision</option>

                        </select>
                    </div>
                    <div class="pt-3">
                        <button type="submit" class="my-4 contact-button"
                            >Book Appointment</button>
                    </div>
                </form>
            </div>

            <div class="col-md-5 col-sm-6 contact-information-column"
               >
                <div class="sec6itext">
                    <div class="mx-5 mt-5 pt-5">
                        <h1 class="mt-5 pt-4" style="font-weight: 700;font-size: 30px;color: #FFFFFF;">Contact
                            Information<h1>
                            <h6 style="color: #ffff; line-height: 130%"> Fill up the
                                form and our Team will get back to you within 24
                                hours.</h6>
                    </div>
                    <div class=" mx-5" style="margin-top: 2rem">
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
                        <p class="pt-4"><img class="px-2" src="{{ asset('customImages/White.svg') }}">
                            <img class="px-2" src="{{ asset('customImages/White (1).svg') }}">
                            <img class="px-2" src="{{ asset('customImages/White (2).svg') }}">
                            <img class="px-2" src="{{ asset('customImages/White (3).svg') }}">
                        </p>
                    </div>
                </div>

            </div>
        </div>
        </div>
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
