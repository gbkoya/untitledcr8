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
    <div class="everything-cart">
        {{-- The loading spinner --}}
        <div class="loader-container">
            <div class="spinner"></div>
        </div>
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
                    <span class="total-items-in-cart"></span>
                </button>
            </li>
            {{-- </div>  --}}
        </nav>
        {{-- </section> --}}
        {{-- </main> --}}

        <section class="container">
            <h2 style="text-align: center;" class="mt-5"><b>Cart</b></h2>

            <div class="cart-stepper container d-flex flex-row justify-content-between  pt-4 col-lg-10">
                <img class="" src="{{ asset('customImages/Group 188.png') }}" />
                <img class="" src="{{ asset('customImages/Group 189.png') }}" />
                <img class="" src="{{ asset('customImages/Group 190.png') }}" />
                <img class="" src="{{ asset('customImages/Group 191.png') }}" />
            </div>

            <div class="cart-display">

            </div>



            <div class="container checkout-buttons col-lg-10 d-flex justify-content-between">
                <div class=" py-3 pb-5">
                    <button onclick="redirectPage()" class="small-mobile-long-button small-screen-font"
                        style="background: rgba(0, 0, 0, 0.2);border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #6B809B; padding: 0.8em 3em; border:none">Continue
                        Shopping

                    </button>
                </div>
                <div class=" py-3  pb-5">
                    <button onclick="saveCartDB()" class="small-mobile-long-button small-screen-font"
                        style="background: #F58634;border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #ffffff; cursor: pointer; padding: 0.8em 3em; float:right; border:none">Checkout

                    </button>
                </div>

            </div>

        </section>
        {{-- END OF STORE CARD SECTION --}}
        <script type="text/javascript">
            let totalCartQuant = sessionStorage.getItem('totalCartItem') || 0;
            // console.log(totalCartQuant);
            let cartProduct = document.querySelector('.cart-data');
            let cartDisplay = document.querySelector('.cart-display');
            let totalCartItem = document.querySelector('.total-items-in-cart');
            // totalCartItem.innerHTML = 0;
            const quantVal = document.querySelector('.quantity');
            let previousCounter = sessionStorage.getItem('totalCartItem');
            totalCartItemMobile.innerText = previousCounter || 0
            // console.log(quantVal);
            const URL = '{{ env('APP_URL') }}';
            // const productID = localStorage.getItem('productId');
            // console.log(productID);
            const loaderContainer = document.querySelector('.loader-container');
            const cartItem = JSON.parse(sessionStorage.getItem('cartItem'));
            console.log(cartItem);
            console.log('yes');

            // console.log(productId);
            let newCart = cartItem.filter(element => {
                return element !== null;
            });


            // console.log(newCart);
            // const cartItems = JSON.parse(cartItem);
            // console.log(cartItems.price);
            let priceValue = document.querySelector('.price-val');
            let itemName = document.querySelector('.item-name');

            let data = newCart.length;
            // console.log(data);
            let totalPrice = document.querySelector('.total-price');

            totalCartItem.innerHTML = sessionStorage.getItem('totalCartItem') || 0;



            // quantVal.innerText = data;
            const increment = (price, quantity, id) => {
                updateCart(price, quantity + 1, id)
            }

            const decrement = (price, quantity, id) => {
                if (quantity > 1) {
                    totalCartItem.innerHTML = data;
                    updateCart(price, quantity - 1, id);
                }
            }


            const renderCartItem = () => {
                cartDisplay.innerHTML = ""; // clear cart element
                newCart.map(el => {
                    let dataCart = el.quantity;
                    // console.log(el);
                    const formatter = new Intl.NumberFormat('en-NG', {
                        style: 'currency',
                        currency: 'NGN',
                    });
                    // incremen();
                    return cartDisplay.innerHTML += `
                        <section class="container-fluid cart_wrapper">

                            <div class="card subtotal-card">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div style="font-weight: 600;">Sub total:</div>
                                    <div class="total-price" style="font-weight: 500;font-size: 20px;line-height: 180%;letter-spacing: -0.01em;color: rgba(107, 128, 155, 0.8);">
                                        ${formatter.format(el.price * dataCart).replace(/(\.|,)00$/g, '')}
                                    </div>
                                </div>

                                <p>Delivery fees not included yet.</p>
                            </div>

                            <!-- Modal -->
                            <div class="card e-card-modal modal fade">
                                <h2>Do you want to delete this product?</h2>
                                <div class="text-center button_wrap">
                                    <button onclick="cancelModal()" type="button">Cancel</button>
                                    <button type="button" onclick="deleteProduct(${el.id})">Delete</button>
                                </div>
                            </div>
                            <div class="container cart-card card my-5 col-md-10" style="padding-top: 1rem; padding-bottom: 1rem;">
                                <div class="item-tab-none-display">
                                    <div class="d-flex flex-row justify-content-between">
                                        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Item(s)</div>
                                        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Quantity</div>
                                        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Price </div>
                                    </div>
                                    <div class="" style="border: 1px solid rgba(0, 0, 0, 0.5);"></div>
                                </div>


                                <div class="col-lg-10 d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="cart_imageWrapper">
                                            <img class="img-fluid" src="${URL}/storage/product_image/${el.imagedirectory}" alt="product image"/>
                                        </div>
                                        <div class="px-2 small-screen-font item-name" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color: rgba(107, 128, 155, 0.8);">
                                            <h4>${el.name}</h4>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-lg-10 d-flex flex-wrap justify-content-between align-items-center">

                                    <form class="counter-icon">
                                        <div class="d-flex flex-row flex-wrap align-items-center quantity-button">
                                            <button type="button" onclick="decrement(${el.price}, ${dataCart}, ${el.id})">-</button>
                                            <span class="quantity">${dataCart}</span>
                                            <button type="button" onclick="increment(${el.price}, ${dataCart}, ${el.id})">+</button>
                                        </div>
                                    </form>

                                    <div class=" small-screen-font price-val" style="font-weight: 500;font-size: 20px;line-height: 180%;letter-spacing: -0.01em;color: rgba(107, 128, 155, 0.8);">${formatter.format(el.price).replace(/(\.|,)00$/g, '')}</div>
                                    <div class="delete-icon" onclick="getProduct()"><img class="img-fluid" src="{{ asset('customImages/trash vector.png') }}" alt="Delete icon"></div>
                                    <div class="d-flex align-items-baseline cart-total-price justify-content-end" style="text-align: right; margin-right: 18%"></div>
                                </div>

                            </div>
                        </section>
                    `;
                })
            }
            renderCartItem();
            // cartDisplay.innerText =+ `

            // `;
            let modalToggle = document.querySelector('.e-card-modal');

            const getProduct = () => {
                modalToggle.style.display = 'block';
                console.log(modalToggle);
                // modal.style.display = 'block'
            }

            const cancelModal = () => {
                modalToggle.style.display = 'none';

            }

            const redirectPage = () => {
                window.location.href = "/shop"
            }

            // API INTEGRATION TO DELETE CART
            const deleteProduct = (id) => {
                console.log(id);
                // displayLoading();

                let updateFromDelete = newCart.filter(newCa => {
                    return newCa.id !== id;
                });
                console.log(updateFromDelete);
                sessionStorage.setItem('cartItem', JSON.stringify(updateFromDelete));

                console.log(cartItem);
                let cartQuantDel = updateFromDelete.length;
                console.log(cartQuantDel);

                sessionStorage.setItem('totalCartItem', cartQuantDel);
                setTimeout(() => {

                    // console.log(cartQuantDel);
                    // console.log(cartQuantDel);
                    alert();


                }, 4000);
                Swal.fire({
                    icon: 'success',
                    title: 'Product deleted successfully',
                    showConfirmButton: false,
                    timer: 2000,

                })
                cancelModal();
                // renderCartItem();

                location.reload();
            }

            // const deleteProduct = (id) =>{
            // console.log(id);
            // }

            const displayLoading = () => {
                loaderContainer.style.display = 'block';
            };

            const hideLoading = () => {
                loaderContainer.style.display = 'none';
            };


            // API INTEGRATION TO GET A SINCLE SHOP PRODUCT
            const getCartProduct = async () => {
                sessionStorage.setItem('cartItem', JSON.stringify(newCart));

                function handleErrors(response) {
                    if (!response.ok) {
                        throw Error(response.statusText);
                    }
                    return response;
                }

                try {
                    const response = await fetch(`${URL}/api/cart-items`, {
                            method: 'GET',
                            headers: {
                                'content-type': 'application/json'
                            },
                        })
                        .then(handleErrors)
                    const data = await response.json();
                    console.log(data);
                } catch (error) {
                    console.log(error);

                }

            }
            getCartProduct();

            // API INTEGRATION TO UPDATE CART
            const updateCart = async (price, quantity, id) => {
                price = JSON.stringify(price);
                quantity = JSON.stringify(quantity);

                let cartData = {
                    price,
                    quantity,
                }
                let itemNew = cartItem.find(el => el.id === id)
                itemNew.quantity = quantity

                sessionStorage.setItem('cartItem', JSON.stringify(newCart))
            }

            // API integration to save cart data to the database
            const saveCartDB = async () => {
                if (!localStorage.getItem('token')) {
                    window.location.href = "/login"
                } else {
                    console.log(cartItem);
                    displayLoading()
                    // alert(`product added to cart ${data},`)

                    function handleErrors(response) {
                        if (!response.ok) {
                            throw Error(response.statusText);
                        }
                        return response;
                    }
                    try {
                        const response = await fetch(`${URL}/api/cart-save`, {
                                method: 'POST',
                                headers: {
                                    'content-type': 'application/json',
                                    'Accept': 'application/json',
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                body: cartItem
                            })
                            .then(handleErrors)
                        const datal = await response
                        // console.log(response);
                        console.log(datal);
                        hideLoading();
                        // window.location.href = "/cart"
                        Swal.fire({
                            icon: 'success',
                            title: 'Cart saved to the database!',
                            showConfirmButton: false,
                            timer: 2000,
                        })
                        setTimeout(() => {
                            window.location.href = "/checkout1"
                        }, 1000);

                    } catch (error) {
                        console.log(error, 'wrong')
                        hideLoading();
                        Swal.fire({
                            icon: 'error',
                            title: 'Failed to save cart!',
                            showConfirmButton: false,
                            timer: 1500,

                        })

                    };
                }
            }
        </script>
@endsection
