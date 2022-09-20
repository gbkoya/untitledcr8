@extends('layouts.app')

@section('description', 'Foremost Eye Clinic is a leading provider of optometry services.')
@section('title', 'Foremost - Africa\'s Most Innovative Eye Clinic')
@section('article:section', 'Home')
@section('url', 'https://foremost-website.herokuapp.com')
@section('image'){{ asset('customImages/Logo.png') }}@stop

@section('content')
<body>
    <main>
        <div style=" background-image: url()" class="mt-5">
            <section
                class="container mt-5 d-flex flex-flow flex-wrap justify-content-center align-items-center block-display-tab section-top">
                <div class="archware-content-text archwarejo-width-bottom-head pt-2">
                    <h2 class="big-title text-title-mobile">
                        We offer Premium <span class="orange-color">eye care</span> solutions
                    </h2>
                    <p class="pt-3 text-black-paragraph">
                        Foremost International Eye Clinic is a leading provider of optometry services. With friendly and experienced
                        optometrists,
                        we provide a comprehensive range of eye care services.
                    </p>
                    <a href="/first-service" class="py-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Get Started
                        </button>
                    </a>
                </div>
    
                <div class="archwarejo-width-top-head">
                    <img class="img-fluid image-width-tab image-min-height-mobile" src="/customImages/We offer Premium.png">
                    {{-- <div class="">
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
                    </div> --}}
                    <div class="e-our-offer d-sm-flex flex-row align-items-center justify-content-evenly">
                        <div class="e-our-offer-child d-flex flex-column align-items-center justify-content-center">
                            <img class="img-fluid" src="/customImages/eye-cleaner.png" alt="Eye clinic image">
                            <p>Modern Eye Clinic</p>
                        </div>
                        <div class="e-our-offer-child d-flex flex-column justify-content-center align-items-center">
                            <img class="img-fluid" src="/customImages/personnel.png" alt="Eye clinic image">
                            <p>Expert Personnel</p>
                        </div>
                        <div class="e-our-offer-discount justify-content-center d-flex flex-column align-items-center">
                            <img class="img-fluid" src="/customImages/eye-check.png" alt="Eye check image">
                            <p>Discounted Eye checkups</p>
                        </div>
                        <div class="e-our-offer-child d-flex justify-content-center flex-column align-items-center">
                            <img class="img-fluid" src="/customImages/hotline.png" alt="Eye check image">
                            <p>24 Hour Hotline</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
        {{-- ABOUT US SECTION --}}
       <section class="container-fluid d-flex flex-row flex-wrap justify-content-between align-items-center e-aboutus-home">
        <div class="e-aboutus-img">
            <img class="img-fluid"
            src="/customImages/doctor smiley thumb.png"/>  
        </div>
        <div
    class="e-abouts-home-right">
    <h2 class="text-top-about-us">About Us</h2>
    <p class="text-white-paragraph">
        Foremost International Eye Clinic is one of the most prestigious eye care centers in Africa.
         We offer innovative eye care solutions, and quality services to our clients through cutting-edge 
         technologies and excellent service delivery. thereby enhancing their long-term vision and
        productivity.
    </p>
    <p class="text-white-paragraph">
        We offer a complete range of treatments including vision correction surgeries,
         comprehensive eye examinations, 
        health awareness programs, contact lens services, and many more.
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

    <a href="/about" class="py-3">
        <button class="small-mobile-long-button archware-button-default">
            Read More
        </button>
    </a>
</div> 
       </section>
        {{-- END OF ABOUT US --}}

        <section class="about-us-margin">
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
    
                    <a href="/first-service" class="py-3" style="text-align:center;">
                        <button class="small-mobile-long-button archware-button-default">
                            Read More
                        </button>
                    </a>
                </div>
            </div>
        </section>
    
        {{-- NEED GLASS SECTION --}}
        <section class="container-fluid hero-section glass-margin need-glass-back-img">
            <div class="hero-section-copy text-center">
                <h1>Need glasses fast?</h1>
                <p>
                    Get the Best Single Vision Prescription Glasses in 3-5 Business Days at an Affordable Rate.
                </p>
    
                <a href="/shop">
                <button type="button" class="small-mobile-long-button button-margin-top foremost-button-border">
                    <img src="{{ asset('customImages/buyIcon.png') }}" />
                    Buy Now
                </button>
                </a>
            </div>
        </section>
        {{-- END OF NEED GLASS SECTION --}}
    
        <section class="about-us-margin">
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
                    <div class="e-card-body archware-card-padding-left d-flex flex-wrap">
                        <div class="foremost-blog-title">
                            7 things you should know before picking a new pair of glasses
                        </div>
                        <p class="foremost-card-body">
                            Here are a few tips and tricks to help you find the right pair of glasses
                        </p>
                    </div>
                    <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                        <a href="" class="foremost-blog-read-more">
                            Read more
                    </a>
                    </div> 
    
                </div>
                <div class="card col-lg-3 mx-3 remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                    <img src="/customImages/few tips 2.png" class="card-img-top" alt="...">
                    <div class="e-card-body archware-card-padding-left d-flex flex-wrap">
                        <div class="foremost-blog-title">
                            7 things you should know before picking a new pair of glasses
                        </div>
                        <p class="foremost-card-body">
                            Here are a few tips and tricks to help you find the right pair of glasses
                        </p>
                    </div>
                    <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                        <a href="" class="foremost-blog-read-more">
                            Read more
                    </a>
                    </div> 
                </div>


                <div class="card col-lg-3 mx-3 remove-shadow-mobile" style="box-shadow:13px 13px 13px #e0e0e0;">
                    <img src="/customImages/few tips 2.png" class="card-img-top" alt="...">
                    <div class="e-card-body archware-card-padding-left d-flex flex-wrap">
                        <div class="foremost-blog-title">
                            Colour blindness explained! these facts will shock you
                        </div>
                        <p class="foremost-card-body">
                            Here are a few tips and tricks to help you find the right pair of glasses
                        </p>
                    </div>
                    <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                        <a href="" class="foremost-blog-read-more">
                            Read more
                    </a>
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
  

    {{-- GALLERY SECTION --}}
     <section class="gallery-section">
        <h1 class="text-center">Our Gallery</h1>
        <!-- THE CAROUSEL -->
        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators gallery-indicator">
              <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
   
          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
              <!-- First slide -->
              <div class="carousel-item active">
                  {{-- First galery view --}}
                  <section class="container-fluid d-sm-flex flex-sm-row flex-wrap justify-content-center" style="margin-top: 2rem">
                      <div class="e-gallery-left e-hover-change">
              
                      </div>
                      <div class="e-gallery-middle e-hover-change">
                          
                      </div>
                      <div class="e-gallery-right e-hover-change">
                          
                      </div>
                   </section>
              </div>
   
              <!-- Second slide -->
              <div class="carousel-item">
                  <section class="container-fluid d-sm-flex flex-sm-row flex-wrap justify-content-center" style="margin-top: 2rem">
                      <div class="e-gallery-left e-hover-change">
              
                      </div>
                      <div class="e-gallery-middle e-hover-change">
                          
                      </div>
                      <div class="e-gallery-right e-hover-change">
                          
                      </div>
                   </section>
              </div>
              <!-- Third slide -->
              <div class="carousel-item">
                  <section class="container-fluid d-sm-flex flex-sm-row flex-wrap justify-content-center" style="margin-top: 2rem">
                      <div class="e-gallery-left e-hover-change">
              
                      </div>
                      <div class="e-gallery-middle e-hover-change">
                          
                      </div>
                      <div class="e-gallery-right e-hover-change">
                          
                      </div>
                   </section>
              </div>
   
              <!-- Left and right controls/icons -->
              {{-- <button class="carousel-control-prev" type="button" data-bs-target="#demoTwo" data-bs-slide="prev">
                  <!-- <span class="carousel-control-prev-icon" style="color: blue;"></span> -->
                  <img class="img-fluid" src="{{ asset('customImages/Vector.svg') }}">
              </button> --}}
              <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                  <img class="img-fluid" src="{{ asset('customImages/arrow-carousel-right.png') }}">
                  <!-- <span class="carousel-control-next-icon"></span> -->
              </button>
          </div>
  
     </section>
    {{-- END OF GALLERY SECTION --}}

  {{-- TESTIMONIALS SECTION --}}
  <section class="testimonial glass-margin container-fluid">
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
                            <div class="first-testimonial testimonial-mobile">
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
                          <div class="first-testimonial testimonial-mobile">
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
                        <div class="first-testimonial testimonial-mobile">
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
                          <div class="first-testimonial testimonial-mobile">
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
                        <div class="first-testimonial testimonial-mobile">
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
                            <div class="first-testimonial testimonial-mobile">
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

    <script type="text/javascript">
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
</body>
  


@endsection
