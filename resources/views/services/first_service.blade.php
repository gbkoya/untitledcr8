@extends('layouts.app')

@section('description', 'Foremost Eye Clinic is a leading provider of optometry services.')
@section('title', 'Foremost - Africa\'s Most Innovative Eye Clinic')
@section('article:section', 'Home')
@section('url', 'https://foremost-website.herokuapp.com')
@section('image'){{ asset('customImages/Logo.png') }}@stop

@section('content')

    <section class="container-fluid hero-section e-service-section need-glass-back-img">
        <div class="service-hero-copy">
            <h1>
                Delivering Optimal Eye Care Services
            </h1>
            <p>
                With ultra-modern technology, world class expertise 
                and a suite of innovative eye care services, we are
                 poised to exceed your expectations at Foremost International 
                 Eye Clinic.
            </p>
        </div>
    </section>

    <section class="container-fluid glass-margin">
        <div class="d-flex flex-row flex-wrap justify-content-center">

            <div class="mt-4 card e-service-card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Comprehensive Eye Examination.png" class="card-img-top" alt="...">
                <div class="e-card-body archware-card-padding-left d-flex flex-wrap">
                    <div class=" foremost-card-title">
                        Comprehensive Eye Examination
                    </div>
                    <p class="foremost-card-body">
                        Measure your visual acuity by undergoing the appropriate eye examination to determine the strength
                        of your sight at a distance. A comprehensive eye examination is a perfect way to ensure that your
                        vision is at its best. Our team of experts will evaluate everything from your prescription to the
                        health of your eyes.
                    </p>
                </div>
                <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                    <a href="#" class="">
                    <button class="small-mobile-long-button archware-button-default">
                        Schedule an appointment
                    </button>
                </a>
                </div>
            </div>
            <div class="mt-4 card e-service-card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Comprehensive Eye Examination.png" class="card-img-top" alt="...">
                <div class="e-card-body archware-card-padding-left d-flex  flex-wrap">
                    <div class=" foremost-card-title">
                        Glaucoma Workup and Management
                    </div>
                    <p class="foremost-card-body">
                        We offer a full range of Glaucoma Workup and Management services to help you better manage your
                        condition. We work with you to develop a personalized plan that fits your unique needs and
                        requirements.
                    </p>
                </div>
                <div class="e-shedule-button d-flex flex-row justify-content-start"> 
            
                </div>
                <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                    <a href="#" class="">
                    <button class="small-mobile-long-button archware-button-default">
                        Schedule an appointment
                    </button>
                </a>
                </div>
            </div>
        
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Pediatrics– Eye Care for Children.png" class="card-img-top" alt="...">
                <div class="e-card-body archware-card-padding-left d-flex flex-wrap">
                    <div class="foremost-card-title">
                        Pediatrics- Eye Care for Children
                    </div>
                    <p class="foremost-card-body">
                        Eye Care for Children Pediatric eye care is important to ensure that your child's vision is healthy
                        and developing correctly. Our doctors are experienced in providing pediatric eye care services, and
                        we're committed to helping your child reach his/her fullest potential.
                    </p>
                </div>
                <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                    <a href="#" class="">
                    <button class="small-mobile-long-button archware-button-default">
                        Schedule an appointment
                    </button>
                </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Pre-and-post Operative.png" class="card-img-top" alt="...">
                <div class="e-card-body archware-card-padding-left d-flex flex-wrap">
                    <div class="foremost-card-title">
                        Pre-and-post Operative Eye Care
                    </div>
                    <p class="foremost-card-body">
                        Whether you're looking for Pre-operative or Post-operative care, our team of experts is here to
                        help. We'll work with you to ensure that you receive the best directives on proper eye maintenance.
                    </p>
                </div>
                <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                    <a href="#" class="">
                    <button class="small-mobile-long-button archware-button-default">
                        Schedule an appointment
                    </button>
                </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Environmental and Occupational Vision.png" class="card-img-top" alt="...">
                <div class="e-card-body archware-card-padding-left d-flex flex-wrap">
                    <div class="foremost-card-title">
                        Environmental and Occupational Vision
                    </div>
                    <p class="foremost-card-body">
                        See the world more clearly with our Environmental and Occupational Vision services. We offer
                        comprehensive eye exams to ensure that you're seeing your best. We also offer a wide range of lenses
                        and other vision correction options to suit your needs at work or in your everyday life.
                    </p>
                </div>
                <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                    <a href="#" class="">
                    <button class="small-mobile-long-button archware-button-default">
                        Schedule an appointment
                    </button>
                </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Geriatrics– Eye Care for the Elderly.png" class="card-img-top" alt="...">
                <div class="e-card-body archware-card-padding-left d-flex flex-wrap">
                    <div class="foremost-card-title">
                        Geriatrics- Eye Care for the Elderly
                    </div>
                    <p class="foremost-card-body">
                        For the elderly, we offer geriatrics-eye care. Our team of specialists is committed to assisting
                        everyone with age-related vision issues in receiving the appropriate therapy.
                    </p>
                </div>
                <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                    <a href="#" class="">
                    <button class="small-mobile-long-button archware-button-default">
                        Schedule an appointment
                    </button>
                </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Specialty Contact Lens.png" class="card-img-top" alt="...">
                <div class="e-card-body archware-card-padding-left d-flex flex-wrap">
                    <div class="foremost-card-title">
                        Specialty Contact Lens
                    </div>
                    <p class="foremost-card-body">
                        We design and provide suitable lenses for patients with corneal conditions and other visual
                        impairments.
                    </p>
                </div>
                <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                    <a href="#" class="">
                    <button class="small-mobile-long-button archware-button-default">
                        Schedule an appointment
                    </button>
                </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Dry Eye Treatment.png" class="card-img-top" alt="...">
                <div class="e-card-body archware-card-padding-left d-flex flex-wrap">
                    <div class="foremost-card-title">
                        Dry Eye Treatment
                    </div>
                    <p class="foremost-card-body">
                        Be guided on the appropriate eye drops, masks, and ointment used to unclog oil glands and restore
                        moisture to your eyes.
                    </p>
                </div>
                <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                    <a href="#" class="">
                    <button class="small-mobile-long-button archware-button-default">
                        Schedule an appointment
                    </button>
                </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Chalazion Excision.png" class="card-img-top" alt="...">
                <div class="e-card-body archware-card-padding-left d-flex flex-wrap">
                    <div class="foremost-card-title">
                        Chalazion Excision
                    </div>
                    <p class="foremost-card-body">
                        We offer our chalazion excision service to remove the eyelid lesion causing this condition. We also
                        offer the necessary pre-surgical and post-operative care.
                    </p>
                </div>
                <div class="e-shedule-button d-flex flex-row justify-content-start"> 
                    <a href="#" class="">
                    <button class="small-mobile-long-button archware-button-default">
                        Schedule an appointment
                    </button>
                </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 py-5">
        <div class="container justify-content-center">
            <div class="row">

                <a href="/second-service" class="py-3" style="text-align:center;">
                    <button class="small-mobile-long-button archware-button-default">
                        Show More
                    </button>
                </a>
            </div>
        </div>
    </section>



    <script src="/customJS/galleryscript.js"></script>
    <script type="text/javascript"></script>

@endsection
