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

    <section class="container-fluid  det mt-5">
        <div class=" container details-search   ">
            <div class="search1 pt-3">
                Search for eyewear, lenses and frames
            </div>
            <img src="{{ asset('customImages/arrow-right.png') }}" alt="" class="arrow">

        </div>
        <div class="buu d-flex flex-row">


            <div class="mx-5">
                <button type="button" class="small-mobile-long-button foremost-button-border"
                    style="color:
                #FFF; background:#6B809B;">
                    Login
                </button>
                <button type="button" class="small-mobile-long-button foremost-button-border"
                    style="color:#6B809B; background: #FFFFFF;">
                    Sign up
                </button>
                <button type="button" class="small-mobile-long-button foremost-button-border"
                    style="color:#6B809B; background: #FFFFFF;">
                    TRY IT ON
                </button>
            </div>
            <div class="mx-5">
                <button type="button" class="small-mobile-long-button foremost-button-border">
                    <img src="{{ asset('customImages/buyIcon.png') }}" />
                    CART
                </button>
            </div>
        </div>
    </section>

    <section class="container pt-5">
        <div class="row">
            <div class="frame93-details col">
                <img src="{{ asset('customImages/Frame 93.png') }}" alt="">

                <div class="Anti-details"> Anti blu ray radiation, computer <br> glasses</div>
                <button type="button" class="small-mobile-long-button foremost-button-border" style="font-color:#6B809B">
                    TRY IT ON
                </button>
            </div>



            <div class="text-details col">
                ₦4,999 <br>
                <div class="price-details pb-6"> N9,000</div>

                <div class="container-fluid col">
                    <button type="button"
                        style="width: 603px;
                background: #F58634;
                color:#FFFF">
                        <img src="{{ asset('customImages/buyIcon.png') }}" class='pt-3 px-3'style="float: left">
                        ADDED!
                    </button>
                </div>
                <div class="details12">
                    <div
                        style="
                font-family: 'Poppins';
                font-style: normal;
                
                font-size: 20px;
                line-height: 30px;
                                
                
                color: rgba(107, 128, 155, 0.8);
                ">
                        Details <br>
                    </div>

                    "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                    provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                    Et harum quidem rerum facilis est et expedita
                </div>


            </div>
        </div>

    </section>
    <section class="container mt-5">
        <div class="d-flex flex-row pt-5">
            <div class="pt-5">
                <button type="button" class="small-mobile-long-button foremost-button-border  "
                    style="color:#6B809B; background: rgba(0, 0, 0, 0.2);font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 140%;">
                    BACK
                </button>
            </div>
            <div>
                <button type="button" class="small-mobile-long-button foremost-button-border  "
                    style="color:#FFFF;font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 140%; background: #F58634;
        border-radius: 5px; position:absolute; top:712px ;left:1000px">
                    VIEW CART
                </button>
            </div>
        </div>
    </section>
@endsection
