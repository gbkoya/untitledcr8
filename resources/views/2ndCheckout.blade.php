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

    {{-- Sub nav --}}
    {{-- <section class="e-try-hero container-fluid"> --}}
    <nav class="d-flex flex-row align-items-center flex-wrap container-fluid justify-content-evenly e-try-nav">
        {{-- <div class="d-flex flex-row"> --}}
        <div class="row d-sm-flex search-wrapper">
            <input type="search" placeholder="Search for eyewear, lenses and frames" />
            <img class="img-fluid search-shop-image" src="{{ asset('customImages/arrow-right.png') }}" />
        </div>
        <div class="d-sm-flex flex-sm-row align-items-center flex-wrap button-wrapper but-wrapper-mobile">
            <a href=""><button class="login" type="button">Log In</button></a>
            <a href=""><button class="signup" type="button">Sign Up</button></a>
            <a href=""><button class="try-it" type="button">Try it On</button></a>
        </div>
        {{-- <button type="button" class="">
                           <img
                           src="{{ asset('customImages/buyIcon.png') }}"
    />
    CART
    </button> --}}
        <li class="right-nav-button-shop-wrapper">
            <button type="button" class="shop-button">
                <img src="{{ asset('customImages/buyIcon.png') }}" />
                CART
            </button>
        </li>
        {{-- </div> --}}
    </nav>
    {{-- </section> --}}
    </main>

    <section class="container checkout2_form">
                {{-- The loading spinner --}}
        <div class="loader-container">
            <div class="spinner"></div>
        </div>

        <h2 style="text-align: center;"><b>Delivery Location</b></h2>

        <div class=" container d-flex flex-row justify-content-between  pt-4 col-lg-10">
            <img class="m" src="{{ asset('customImages/Group 188.png') }}" />
            <img class="" src="{{ asset('customImages/Group 189.png') }}" />
            <img class="" src="{{ asset('customImages/Group 190.png') }}" />
            <img class="" src="{{ asset('customImages/Group 191.png') }}" />
        </div>

        <div class="container card my-5 col-md-10">
            <div class="d-flex flex justify-content-center col-lg">
                <form class="" id="checkoutForm">
                    <div class="form-group col-lg- mt-5">
                        <div>
                        <label for="exampleInputEmail1">Email address</label>
                        </div>
                        <input class="payment-forms"
                        style="border: 1.14951px solid #D2D6DA;border-radius: 5.74757px;height: 46px; width:597px; padding-left: 1rem; margin-top: .5rem;"
                         type="email" class="form-control" id="email" aria-describedby="emailHelp"
                            placeholder="hello@dummie.org"
                            required>
                    </div>
                    <div class="form-group col-lg- mt-5">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <div class="d-flex" style="margin-top: .5rem;">
                            <input class="payment-forms"
                            required
                                style="border: 1.14951px solid #D2D6DA;border-radius: 5.74757px;height: 46px; width: 597px; padding-left: 1rem; "
                                class="" type="text" class="" id="phone_number" placeholder="01234567">

                        </div>
                    </div>
                    <div class="form-group col-lg-11 mt-5">
                        <label for="exampleInputEmail1">What’s your address?</label>
                        <input class="payment-forms"
                        required
                        style="border: 1.14951px solid #D2D6DA;border-radius: 5.74757px;height: 46px; width:597px; padding-left: 1rem; margin-top: .5rem;"
                        type="text" class="form-control" id="address" aria-describedby=""
                            placeholder="">
                    </div>
                    <div class="pt-5"></div>

                    <div class="checkout2_but mt-3 pb-5">
                        <button type="submit" class=" small-screen-font"
                            style="background: #F58634;border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                        line-height: 140%;color: #ffffff; padding: 0.6em 5em; border:none;
                        ">Next
        
                        </button>
                    </div>
                </form>
            </div>
        </div>


        {{-- <div class="container col-lg-10"> --}}
            <div class="back_but pb-5">
                <a href="/checkout1">
                    <button class=""
                        style="background: rgba(0, 0, 0, 0.2);border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                    line-height: 140%;color: #6B809B; padding: 0.6em 5em; border:none">Back
    
                    </button>
                </a>
            </div>
           

        {{-- </div> --}}

    </section>
    {{-- END OF STORE CARD SECTION --}}

    <script type="text/javascript">
        var input = document.querySelector("#phone_number");
        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["ng", ]
        });
        const url= '{{ env('APP_URL') }}'


            // Hide and show a loader logic
            const loaderContainer = document.querySelector('.loader-container');

            const displayLoading = () => {
            loaderContainer.style.display = 'block';
            };

            const hideLoading = () => {
                loaderContainer.style.display = 'none';
            };

        // API INTEGRATION TO CHECKOUT
        document.getElementById('checkoutForm').addEventListener('submit', checkoutDelivery);
        let res = document.getElementById("checkoutForm");

        function checkoutDelivery(event){
        event.preventDefault();
        displayLoading();


        // Get all the input field and store them in their unique variable each
        let address = document.getElementById('address').value;
        let email = document.getElementById('email').value;
        let phone_number = document.getElementById('phone_number').value;


        let checkoutData = {
            address,
            email,
            phone_number        }
       
        console.log(checkoutData);

        function handleErrors(response) {
            if (!response.ok) {
                throw Error(response.statusText);
            }
            return response;
        }
        fetch(`${url}/api/checkout2`, {
                    method: 'POST',
                    headers: {
                        // 'Accept': 'application/json, text/plain, */*',
                        'content-type': 'application/json',
                        // 'Access-Control-Allow-Origin': 'https://foremosteyeclinic.com'
                    },
                    body: JSON.stringify(checkoutData)
                })
                .then(handleErrors)
                .then(response => {
                    console.log("ok", response)
                    hideLoading();
                    Swal.fire({
                        icon: 'success',
                        title: 'Delivery location saved, and user added to the system!',
                        showConfirmButton: false,
                        timer: 2000,

                    })
                    res.reset();
                    setTimeout(() => {
                        window.location.href = "/pay-with-card"
                    }, 1500);
                })
                .catch(error => {
                    console.log(error, 'wrong')
                    res.reset();
                    hideLoading();
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed to save delivery location',
                        showConfirmButton: false,
                        timer: 1500,

                    })

                });
                }

    </script>

@endsection
