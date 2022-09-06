@extends('layouts.app')

@section('description', 'Foremost Eye Clinic is a leading provider of optometry services.')
@section('title', 'Foremost - Africa\'s Most Innovative Eye Clinic')
@section('article:section', 'Home')
@section('url', 'https://foremost-website.herokuapp.com')
@section('image'){{ asset('customImages/Logo.png') }}@stop

@section('content')

    <section class="container-fluid hero-section need-glass-back-img">
        <div class="hero-section-copy">
            <h1>
                Delivering Optimal Eye Care Services
            </h1>
            <p>
                With advanced technology and expertise, we offer a
                wide range of services for all your eye-related needs
            </p>
        </div>
    </section>

    <div class="container mx-auto mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://foremost-website.herokuapp.com/customImages/Comprehensive%20Eye%20Examination.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">
                            Measure your visual acuity by undergoing the appropriate eye examination to determine the strength
                            of your sight at a distance. A comprehensive eye examination is a perfect way to ensure that your
                            vision is at its best. Our team of experts will evaluate everything from your prescription to the
                            health of your eyes.
                        </p>
                        <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                        <a href="#" class="btn"><i class="fab fa-github"></i> Github</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://foremost-website.herokuapp.com/customImages/Comprehensive%20Eye%20Examination.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary mr-2"><i class="fas fa-link"></i> Visit Site</a>
                        <a href="#" class="btn btn-primary"><i class="fab fa-github"></i> Github</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://foremost-website.herokuapp.com/customImages/Comprehensive%20Eye%20Examination.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                        <a href="#" class="btn"><i class="fab fa-github"></i> Github</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://foremost-website.herokuapp.com/customImages/Comprehensive%20Eye%20Examination.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                        <a href="#" class="btn"><i class="fab fa-github"></i> Github</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://foremost-website.herokuapp.com/customImages/Comprehensive%20Eye%20Examination.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                        <a href="#" class="btn"><i class="fab fa-github"></i> Github</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <section class="container-fluid mt-2 pt-2">
        <div class="d-flex flex-row flex-wrap justify-content-center">

            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Comprehensive Eye Examination.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Comprehensive Eye Examination
                    </div>
                    <p class="pt-3 foremost-card-body">
                        Measure your visual acuity by undergoing the appropriate eye examination to determine the strength
                        of your sight at a distance. A comprehensive eye examination is a perfect way to ensure that your
                        vision is at its best. Our team of experts will evaluate everything from your prescription to the
                        health of your eyes.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Glaucoma Workup and Management.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Glaucoma Workup and Management
                    </div>
                    <p class="pt-3 foremost-card-body">
                        We offer a full range of Glaucoma Workup and Management services to help you better manage your
                        condition. We work with you to develop a personalized plan that fits your unique needs and
                        requirements.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Comprehensive Eye Examination.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Pediatrics- Eye Care for Children
                    </div>
                    <p class="pt-3 foremost-card-body">
                        Eye Care for Children Pediatric eye care is important to ensure that your child's vision is healthy
                        and developing correctly. Our doctors are experienced in providing pediatric eye care services, and
                        we're committed to helping your child reach his/her fullest potential.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Comprehensive Eye Examination.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Pre-and-post Operative Eye Care
                    </div>
                    <p class="pt-3 foremost-card-body">
                        Whether you're looking for Pre-operative or Post-operative care, our team of experts is here to
                        help. We'll work with you to ensure that you receive the best directives on proper eye maintenance.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Comprehensive Eye Examination.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Environmental and Occupational Vision
                    </div>
                    <p class="pt-3 foremost-card-body">
                        See the world more clearly with our Environmental and Occupational Vision services. We offer
                        comprehensive eye exams to ensure that you're seeing your best. We also offer a wide range of lenses
                        and other vision correction options to suit your needs at work or in your everyday life.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Comprehensive Eye Examination.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Geriatrics- Eye Care for the Elderly
                    </div>
                    <p class="pt-3 foremost-card-body">
                        For the elderly, we offer geriatrics-eye care. Our team of specialists is committed to assisting
                        everyone with age-related vision issues in receiving the appropriate therapy.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Comprehensive Eye Examination.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Specialty Contact Lens
                    </div>
                    <p class="pt-3 foremost-card-body">
                        We design and provide suitable lenses for patients with corneal conditions and other visual
                        impairments.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Comprehensive Eye Examination.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Dry Eye Treatment
                    </div>
                    <p class="pt-3 foremost-card-body">
                        Be guided on the appropriate eye drops, masks, and ointment used to unclog oil glands and restore
                        moisture to your eyes.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Comprehensive Eye Examination.png" class="card-img-top" alt="...">
                <div class="archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Chalazion Excision
                    </div>
                    <p class="pt-3 foremost-card-body">
                        We offer our chalazion excision service to remove the eyelid lesion causing this condition. We also
                        offer the necessary pre-surgical and post-operative care.
                    </p>
                    <a href="#" class="pt-5 pb-3">
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

                <a href="/contacts" class="py-3" style="text-align:center;">
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
