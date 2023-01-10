@extends('layouts.app')
@section('description', 'Foremost Eye Clinic is a leading provider of optometry services.')
@section('title', 'Foremost - Africa\'s Most Innovative Eye Clinic')

@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop
@section('content')

<body class="mt-5">
    <div class="row mt-5 ">
        <div class="col-md-3" id="hide" style="display:block; background: #000; font-weight: 700;font-size: 64px;line-height: 74px;color: #fff; height:fit-content">
            We are Untitled
        </div>
        <div class="col-md-9">
            <div class=" grad-bg-gb">
                <div class=" remove-margin-gb">
                  
                    <div class="wrapper d-flex remove-margin-gb">
                        <button class="prev arrow-img" type="button" onclick="prevSlide(this)">></button>
                        <div class="slider d-flex overflow-shit ">
                            <div class=" margin-card-gb">
                                <div class=" shop-card sizing-gb mx-2">
                                    <img class="img-fluid" src="{{ asset('customImages/Rectangle 19.png') }}" alt="Shop image" />
                        
                                </div>
                            </div>

                            <div class=" margin-card-gb">
                                <div class=" shop-card sizing-gb  mx-2">
                                    <img class="img-fluid" src="{{ asset('customImages/Rectangle 20.png') }}" alt="Shop image" />
                                    
                                </div>
                            </div>

                            <div class="margin-card-gb">
                                <div class=" shop-card sizing-gb  mx-2">
                                    <img class="img-fluid" src="{{ asset('customImages/Rectangle 19.png') }}" alt="Shop image" />
                                    
                                </div>
                            </div>

                            <div class="margin-card-gb">
                                <div class=" shop-card sizing-gb  mx-2">
                                    <img class="img-fluid" src="{{ asset('customImages/Rectangle 20.png') }}" alt="Shop image" />
                                   
                                </div>
                            </div>

                           
                        </div>
                        <button class="next arrow-img-2" type="button" onclick="nextSlide(this)"><img class="img-fluid" src="{{ asset('customImages/icon.png') }}" alt=""></button>
                    </div>
                </div>
            </div>

        </div>

        <div class="container d-flex flex-wrap col-md-9 justify-content-center mt-5 pt-1">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
            <img class="col-lg-3 col-6 px-4 py-4" src="{{ asset('customImages/Rectangle 21.png') }}" alt="">
        </div>

        <center><div class="mt-5" style="border: 1px solid rgba(255, 255, 255, 0.5); width:80%"></div></center>
</body>
<script>
 function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");


    }


    const nextSlide = (event) => {
        const slider = event.parentNode.children[1]
        slider.append(slider.children[0])
    }
    const prevSlide = (event) => {
        const slider = event.parentNode.children[1]
        slider.prepend(slider.children[slider.children.length - 1])
    }
</script>
@endsection