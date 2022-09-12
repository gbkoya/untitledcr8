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




<!-- search part -->

<!--<div>
    <section class="container-fluid search-background mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="search-box-ika d-flex col-md-4 my-4 mx-5" style="background: #FFFFFF;border-radius: 5px;" ; margin-top="10%">
                    <input type="text" style="height: 62px;font-weight: 600;font-size: 18px;line-height: 147.9%;color: rgba(107, 128, 155, 0.6);width:100%; border:none;outline:none" placeholder="Search for eyewear, lenses and frames" id="exampleInputPassword1">
                    <span class="pt-3  px-4"><img src="{{asset('customImages/arrow-right.png')}}" alt=""> </span>
                </div>

                <div class="col-md-4">
                    <button class="mx-2" style="margin-top:35px; width: 95px;height: 44px;left: 5px;top: 31px;background: #6B809B;border-radius: 5px;
                        justify-content: center;align-items: center;padding: 12px 24px;gap: 10px;font-weight: 500;font-size: 16px;line-height: 19px;
                        text-align: center;color: #FDFDFD;">Login</button>
                    <button class="mx-2" style="justify-content: center;align-items: center;padding: 12px 24px;gap: 10px;width: 120px;
                        height: 44px;background: #FFFFFF;border: 1px solid #1F3F95;border-radius: 5px;font-weight: 500;font-size: 16px;line-height: 19px;
                        text-align: center;color: #6B809B;;">Sign Up </button>
                    <button class="mx-2" style="width: 127px;height: 44px;background: #FFFFFF;border: 1px solid #1F3F95;
                        border-radius: 5px;font-weight: 500;font-size: 16px;line-height: 19px;
                        text-align: center;color: #6B809B;">
                        TRY IT ON</button>
                </div>

                <div class="col-md-2">
                    <button class="pt-1" style="margin-top:35px; width: 123px;height: 51px;background: #F58634;border:none;
                        border-radius: 5px;font-weight: 500;font-size: 16px;line-height: 19px;
                        text-align: center;color: #ffffff;">
                        <img src="{{ asset('customImages/buyIcon.png') }}" class='mx-1'>

                        CART</button>
                </div>
            </div>
        </div>
    </section>

    <!-- end of search part -->

<!--<section class="d-flex flex-row flex-wrap container pt-5">
        <div class=" col-lg-5">
            <div class="col">

                <!-- carousel -->
<!--        <div>
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img class="img-fluid image-size-middle-ika" src="{{ asset('customImages/Frame 93.png') }}" alt="">
                        </div>
                        <div class="mySlides fade">
                            <img class="img-fluid image-size-middle-ika" src="{{ asset('customImages/Frame 93.png') }}" alt="">
                        </div>
                        <div class="mySlides fade">
                            <img class="img-fluid image-size-middle-ika" src="{{ asset('customImages/Frame 93.png') }}" alt="">
                        </div>
                        <div class="mySlides fade">
                            <img class="img-fluid image-size-middle-ika" src="{{ asset('customImages/Frame 93.png') }}" alt="">
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>

                    <script>
                        let slideIndex = 1;
                        showSlides(slideIndex);

                        // Next/previous controls
                        function plusSlides(n) {
                            showSlides(slideIndex += n);
                        }

                        // Thumbnail image controls
                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }

                        function showSlides(n) {
                            let i;
                            let slides = document.getElementsByClassName("mySlides");
                            let dots = document.getElementsByClassName("dot");
                            if (n > slides.length) {
                                slideIndex = 1
                            }
                            if (n < 1) {
                                slideIndex = slides.length
                            }
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " active";
                        }
                    </script>
                </div>
            </div>
            <!-- carousel -->
<!-- <div class="pt-4" style="font-weight: 700;font-size: 24px;line-height: 140%;color: #6B809B;">
                Anti blu ray radiation, computer glasses</div>
            <button class="mt-3" style="font-weight: 500;font-size: 16px;line-height: 19px;color: #FFFFFF;
                width: 119px;height: 45px;background: #F58634;border-radius: 5px;"> TRY IT ON</button>

            <div><button class="mt-5" style="width: 242px;height: 60px;background: rgba(0, 0, 0, 0.2);border-radius: 5px;font-weight: 700;
                font-size: 20px;line-height: 140%;color: #6B809B;">BACK</button></div>
        </div>


        <div class="col-lg-6 mx-5 mt-5 details-sect-right-ika">
            <div class="pt-4" style="font-weight: 600;font-size: 28px;line-height: 180%;letter-spacing: -0.01em;color: #6B809B;">
                ₦4,999
            </div>
            <div style="margin-top:-15px;font-weight: 300;font-size: 15px;line-height: 180%;letter-spacing: -0.01em;color: rgba(0, 0, 0, 0.3);">
                N9,000
            </div>


            <button class="mt-4" type="button" style="width: 100%;height: 56px;border-radius: 5px;
                background: #F58634;font-weight: 600;font-size: 20px;line-height: 24px;
                color:#FFFF">
                <img src="{{ asset('customImages/buyIcon.png') }}" class='pt-1 px-3' style="float: left">
                ADDED!
            </button>

            <div class="mt-4" style="font-weight: 500;font-size: 20px;line-height: 30px;color: rgba(107, 128, 155, 0.8);">
                Details</div>
            <div class="mt-3" style="font-weight: 500;font-size: 15px;line-height: 34px;letter-spacing: 0.01em;color: rgba(107, 128, 155, 0.8);">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                rerum facilis est et expedita
            </div>
            <div class="mt-4"><button class="mt-5" style="width: 318px;height: 60px;background: #f58634;border-radius: 5px;font-weight: 700;
                font-size: 20px;line-height: 140%;color: #ffffff; float:right">VIEW CARTs</button></div>


        </div>
</div>
</section>
</div>-->
@endsection