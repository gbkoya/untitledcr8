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