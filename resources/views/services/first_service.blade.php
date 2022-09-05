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



    <script src="/customJS/galleryscript.js"></script>
    <script type="text/javascript"></script>

@endsection
