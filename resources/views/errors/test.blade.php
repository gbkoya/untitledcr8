@extends('layouts.app')

@section('description',
    'Archware - Africa\'s Leading Software Development Company
    Software development company helping businesses and individuals take advantage of the benefits of the global technology
    landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

    <style type="text/css">
        .bgd-danger {
            background: linear-gradient(30deg, red, yellow);
        }

        .btn-n {
            color: white;
            background: gray;
            transition: .2s ease;
            transform: skew(0deg);
        }

        .btn-n:hover {
            background: red;
            color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, .8);
            transition: .2s ease;
            transform: scale(1.08) translateY(-3px);
        }

        .btn-y {
            background: gray;
            color: white;
            transition: .2s ease;
        }

        .btn-y:hover {
            background: green;
            color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, .8);
            transition: .2s ease;
            transform: scale(1.08) translateY(-3px);
        }

        .card-bg {
            transition: 1s ease;
        }

        .card-bg:hover {
            transform: skew(-10deg) scale(1.05);
            transition: 1s ease;
        }

        .icons {
            transition: .8s ease;
            cursor: pointer;
        }

        .icons:hover {
            color: #007BFF;
            transform: scale(1.05) translateY(-5px);
            transition: .8s ease;
        }

        .iconck {
            color: #007BFF;
            transform: scale(1.05) translateY(-5px);
        }

        .icon {
            transition: 1s ease;
        }

        .icon:hover {
            transform: scale(1.2);
            transition: 1s ease;
        }

        .text-trans {
            transition: .5s ease;
        }

        .text-trans:hover {
            transform: skew(-15deg);
            transition: .5s ease;
        }

        .btns {
            background: #007BFF;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 1s ease;
        }

        .btns:hover {
            text-decoration: none;
            color: white;
            box-shadow: 5px 5px 7px rgba(0, 0, 0, .8);
            transform: scale(1.05) translateY(-8px) skew(-10deg);
            transition: 1s ease;
        }

        .bg-alert {
            box-shadow: 0 0 3px rgba(0, 0, 0, .8);
        }

        .bg-alert-bg {
            box-shadow: 0 0 10px rgba(0, 0, 0, .8);
            transform: scale(1.05);
        }

        .w-35 {
            width: 36% !important;
        }

        .mrg-ct {
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .int-chagne {
            transition: 1s ease;
        }

        .int-chagne:hover {
            transform: skew(-15deg);
            transition: 1s ease;
        }

        .turn {
            display: block;
            transform: none;
            transition: .5s ease;
        }

        .turnb {
            display: block;
            transform: rotate(-180deg);
            transition: .5s ease;
        }

        .clps {
            color: #007BFF;
            text-decoration: none !important;
        }

        .clps:hover {
            color: #007BFF;
        }

        .clps-btn-style {
            transition: .5s ease;
        }

        .clps-btn-style:hover {
            color: #007BFF;
            transform: skew(-15deg);
            transition: .5s ease;
        }

        p {
            margin-bottom: .5px !important;
        }
    </style>


@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-5">
        <a class="navbar-brand" href="#">
            Foremost test cart
        </a>
    </nav>

    <div class="container">
        <div class="tab-content">
            <section class="my-3 py-3">
                <div class="container justify-content-center">
                    <div class="row">
                        <p class="medium-subtitle"><strong>Cart</strong></p>
                    </div>
                </div>
            </section>

            <div class="tab-pane active" id="step1">
                <div class="row text-center">
                    <div class="col-sm col-12">
                        <img src="customImages/Group 188.png" class="firsticon-cart">
                    </div>
                    <div class="col-sm col-12">
                        <img src="customImages/Group 191.png" class="firsticon-cart">
                    </div>
                    <div class="col-sm col-12">
                        <img src="customImages/Group 189.png" class="firsticon-cart">
                    </div>
                    <div class="col-sm col-12">
                        <img src="customImages/Group 190.png" class="firsticon-cart">
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card border-0">
                                            <div class="card-header d-flex justify-content-between" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button id="turnbf" class="btn btn-link d-flex turnaf clps"
                                                        type="button" data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <p class="clps-btn-style">Show the cart detail</p>
                                                        <span class="mx-1"><i
                                                                class="far fa-chevron-double-down"></i></span>
                                                    </button>
                                                </h2>
                                                <span class="my-2 text-danger h4">US $ 3600</span>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body p-0">
                                                    <div>
                                                        <table class="table table-sm">
                                                            <thead>
                                                                <tr class="ml-3">
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th class="text-left" width="50%">Product</th>
                                                                    <th class="text-center" width="45%">Pieces</th>
                                                                    <th>Subtotal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <a href="#delete" data-toggle="modal"
                                                                            data-title="Delete your product ?">
                                                                            <i class="fal fa-trash-alt"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="rounded"
                                                                            style="background-image: url(https://unsplash.com/photos/ZBwQ2bCbJjw/download?force=true&w=640); width: 60px; height: 60px; background-size: cover;">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle text-left">Spy Suit</td>
                                                                    <td class="align-middle text-center">1 pieces</td>
                                                                    <td class="align-middle text-right">$698</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <a href="#delete" data-toggle="modal"
                                                                            data-title="Delete your product ?">
                                                                            <i class="fal fa-trash-alt"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="rounded"
                                                                            style="background-image: url(https://unsplash.com/photos/vOwj38HFrJ0/download?force=true&w=640); width: 60px; height: 60px; background-size: cover;">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle text-left">Hyper Hero Suit
                                                                    </td>
                                                                    <td class="align-middle text-center">2 pieces</td>
                                                                    <td class="align-middle text-right">$1998</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <a href="#delete" data-toggle="modal"
                                                                            data-title="Delete your product ?">
                                                                            <i class="fal fa-trash-alt"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="rounded"
                                                                            style="background-image: url(https://unsplash.com/photos/FxraOMAkLOs/download?force=true&w=640); width: 60px; height: 60px; background-size: cover;background-position: center center;">
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle text-left">Stash Boots</td>
                                                                    <td class="align-middle text-center">1 pieces</td>
                                                                    <td class="align-middle text-right">$849</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="4" class="align-middle text-right">
                                                                        Freight</td>
                                                                    <td class="align-middle text-right">55</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="4" class="align-middle text-right">
                                                                        Total</td>
                                                                    <td class="align-middle text-right">3600</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <script type="text/javascript"></script>


@endsection
