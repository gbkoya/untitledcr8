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

    <section class="container-fluid mt-2 pt-2">
        <div class="d-flex flex-row flex-wrap justify-content-center">

            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Comprehensive Eye Examination.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
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
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
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
                <img src="/customImages/Pediatrics– Eye Care for Children.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
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
                <img src="/customImages/Pre-and-post Operative.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
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
                <img src="/customImages/Environmental and Occupational Vision.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
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
                <img src="/customImages/Geriatrics– Eye Care for the Elderly.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
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
                <img src="/customImages/Specialty Contact Lens.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
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
                <img src="/customImages/Dry Eye Treatment.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
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
                <img src="/customImages/Chalazion Excision.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
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



            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Glaucoma Surgery.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Glaucoma Surgery
                    </div>
                    <p class="pt-3 foremost-card-body">
                        Reduce intraocular pressure by scrutinizing your eyes using laser treatment or other surgical
                        methods to detect and remove clogs that damage the optic nerve. Our surgeons are experienced in
                        performing Glaucoma Surgery and will work with you to develop a treatment plan that is right for
                        you.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Pterygium Surgery.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Pterygium Surgery
                    </div>
                    <p class="pt-3 foremost-card-body">
                        Pterygium surgery can correct severe conjunctival overgrowth that covers the cornea and impairs
                        vision. We perform pterygium surgery using the latest techniques and technology. Our experienced
                        surgeons will work with you to ensure you get the best results.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Low Vision.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Low Vision
                    </div>
                    <p class="pt-3 foremost-card-body">
                        If you're struggling to see clearly, our low vision services can help. We offer a variety of
                        services that helps improve your vision, including vision therapy, low vision rehabilitation, and
                        more. With our help, you can regain your independence and live your life to the fullest.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Dry Eye Examination.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Dry Eye Examination
                    </div>
                    <p class="pt-3 foremost-card-body">
                        At Foremost Eye Clinic, we carry out Dry Eye Examination services to help you see better and achieve
                        optimal eye health. Our examination helps to identify dry eye disease and its severity, allowing us
                        to provide the best possible treatment for you.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Spectacle Dispensing.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Spectacle Dispensing
                    </div>
                    <p class="pt-3 foremost-card-body">
                        With our Spectacle Dispensing service, you can be sure to get the perfect fit for your prescription.
                        We also offer a wide range of lens options to choose from, so you can find the perfect match for
                        your vision needs.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Laser Surgery.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Laser Surgery
                    </div>
                    <p class="pt-3 foremost-card-body">
                        At Foremost Eye clinic, we use the latest and most advanced technology to correct your vision. If
                        you're looking for a safe and effective way to improve your vision, our laser surgery services can
                        help restore and protect your vision.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Digital Eye Health.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Digital Eye Health
                    </div>
                    <p class="pt-3 foremost-card-body">
                        With so much time spent in front of screens, it's more important than ever to take care of your
                        vision. We'll help you keep your eyes healthy and get the most out of your screen time.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Glaucoma Surgery.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Cataract Surgery
                    </div>
                    <p class="pt-3 foremost-card-body">
                        We specialise in Cataract Surgery and our services are second to none. We use the latest
                        technologies and our highly skilled Ophthalmologists will have you seeing clearly in no time.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Eye Disease Education.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Eye Disease Education
                    </div>
                    <p class="pt-3 foremost-card-body">
                        We provide detailed information about specific eye diseases, their symptoms, and treatment options.
                        We also offer support and resources for patients dealing with eye disease.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Health Awareness Programs.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Health Awareness Programs
                    </div>
                    <p class="pt-3 foremost-card-body">
                        Our specialists are ready to put you through detailed and well-enlightened programs on the need for
                        consciousness in your daily health activities.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Visual Screening.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Visual Screening
                    </div>
                    <p class="pt-3 foremost-card-body">
                        We offer vision screening services that are reliable and accurate, using the latest technology. With
                        our visual screening services, you can be sure that you're getting the best care for your eyes.
                    </p>
                    <a href="#" class="pt-5 pb-3">
                        <button class="small-mobile-long-button archware-button-default">
                            Schedule an appointment
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4 card col-lg-3 mx-3 remove-shadow-mobile box-shadow">
                <img src="/customImages/Contact Lens Services.png" class="card-img-top" alt="...">
                <div class="card-body archware-card-padding-left d-flex align-items-center flex-wrap p-4">
                    <div class="pt-1 foremost-card-title">
                        Contact Lens Services
                    </div>
                    <p class="pt-3 foremost-card-body">
                        Do you need to order contact lenses? We offer a variety of contact lens services, including
                        ordering, fitting and more. Our experienced doctors are here to help you find the perfect lens for
                        your needs.
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