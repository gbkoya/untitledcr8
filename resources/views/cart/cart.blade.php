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
  </main>

  <section class="container">
    <h2 style="text-align: center;"><b>Cart</b></h2>

    <div class=" container d-flex flex-row justify-content-between  pt-4 col-lg-10">
      <img class="" src="{{ asset('customImages/Group 188.png') }}" />
      <img class="" src="{{ asset('customImages/Group 189.png') }}" />
      <img class="" src="{{ asset('customImages/Group 190.png') }}" />
      <img class="" src="{{ asset('customImages/Group 191.png') }}" />
    </div>

    <div class="container card my-5 col-md-10">
      <div class="d-flex flex-row justify-content-between">
        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Item(s)</div>
        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Quantity</div>
        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Price </div>
        <div></div>
      </div>

      <div class="" style="border: 1px solid rgba(0, 0, 0, 0.5);"></div>
      <div class=" pt-5 col-lg-10 d-flex flex-wrap justify-content-between align-items-center">

      <div class="d-flex flex-wrap">
        <img class="img-fluid" src="{{ asset('customImages/Frame 106.png') }}" />

        <div class="px-2 small-screen-font item-name" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color: rgba(107, 128, 155, 0.8);">
          </div>
      </div>


        <form>

          <div class="d-flex flex-row flex-wrap align-items-center quantity-button">
            <button type="button" onclick="decrement()">-</button>
            <span class="quantity"></span>
            <button type="button" onclick="increment()">+</button>
        </div>

        </form>

        <div class="pt-2 small-screen-font price-val" style="font-weight: 500;font-size: 20px;line-height: 180%;letter-spacing: -0.01em;color: rgba(107, 128, 155, 0.8);"></div>

        <div onclick="handleDelete(id)"><img class="img-fluid" src="{{ asset('customImages/trash vector.png') }}" alt="Delete icon"></div>
      </div>
      <div class="d-flex align-items-end container" style="text-align: right;">
      <div>Total Price:</div>
      <div class="pt-2 total-price " style="font-weight: 500;font-size: 20px;line-height: 180%;letter-spacing: -0.01em;color: rgba(107, 128, 155, 0.8);"></div>
      </div>




    </div>
   

    <div class="container col-lg-10 d-flex justify-content-between">
      <div class=" py-3 pb-5">
        <button class="small-mobile-long-button small-screen-font" style="background: rgba(0, 0, 0, 0.2);border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #6B809B; padding: 0.8em 3em; border:none">Continue Shopping

        </button>
      </div>
      <div class=" py-3  pb-5">
        <button class="small-mobile-long-button small-screen-font" style="background: #F58634;border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #ffffff; padding: 0.8em 3em; float:right; border:none">Checkout

        </button>
      </div>

    </div>

  </section>
  {{-- END OF STORE CARD SECTION --}}
<script type="text/javascript">
let cartProduct = document.querySelector('.cart-data');
 let totalCartItem = document.querySelector('.total-items-in-cart');
  totalCartItem.innerHTML = 0;
const quantVal = document.querySelector('.quantity');
const URL= '{{ env('APP_URL') }}';
const productID = localStorage.getItem('productId');
// console.log(productID);
const loaderContainer = document.querySelector('.loader-container');
const cartItem = localStorage.getItem('cartItem');
const cartItems = JSON.parse(cartItem);
console.log(cartItems.price);
let priceValue = document.querySelector('.price-val');
let itemName = document.querySelector('.item-name');

let data = cartItems.quantity;

let totalPrice = document.querySelector('.total-price');
let price = cartItems.price;
let sumPrice = price;
totalPrice.innerHTML = `
    ${sumPrice}
    `;



// Display product price and name
priceValue.innerHTML = `
₦${cartItems.price}
`;

itemName.innerHTML = `${cartItems.name}`;




quantVal.innerText = data;
const increment = () =>{
    data =+ data + 1;
    quantVal.innerText = data;
    sumPrice = price * data;

    totalPrice.innerHTML = `
    ${sumPrice}
    `;
    totalCartItem.innerHTML = data;
    setTimeout(() => {
      updateCart();
    }, 2000);
    // alert(data + 1)
} 
const decrement = () =>{
    if(data > 0){
        data = data - 1;
        quantVal.innerText = data
        console.log(data);
        sumPrice = price * data;

        totalPrice.innerHTML = `
        ${sumPrice}
        `;
    totalCartItem.innerHTML = data;
        setTimeout(() => {
        updateCart();
      }, 2000);
    }else{
        
    }
}


const displayLoading = () => {
      loaderContainer.style.display = 'block';
      };

const hideLoading = () => {
          loaderContainer.style.display = 'none';
      };
   

 // API INTEGRATION TO GET A SINCLE SHOP PRODUCT
 const getCartProduct = async () => {
  function handleErrors(response) {
              if (!response.ok) {
                  throw Error(response.statusText);
              }
              return response;
          }

          try{
            const response = await fetch(`${URL}/api/cart-items`, {
                  method: 'GET',
                  headers: {
                      'content-type': 'application/json'
                    },
              })
              .then(handleErrors)
              const data = await response.json();
              console.log(data);
          }catch(error){
            console.log(error);

          }
      
      }
      getCartProduct();


      // const updateCart = async () => {
      //   displayLoading();

      //   let price = JSON.stringify(cartItems.price);
      //   let quantity = JSON.stringify(data);

      //   let cartData = {
      //       price,
      //       quantity,
      //   }
      
      //   let cartBody = JSON.stringify(cartData);

      // function handleErrors(response) {
      //         if (!response.ok) {
      //             throw Error(response.statusText);
      //         }
      //         return response;
      //     }

      //     try{
      //       const response = await fetch(`${URL}/update-cart/${productID}`, {
      //             method: 'POST',
      //             headers: {
      //                 'content-type': 'application/json'
      //               },
      //               body: JSON.stringify(cartData)
      //         })
      //         .then(handleErrors)
      //         const data = await response.json();
      //         console.log(data);
      //         hideLoading();
      //               Swal.fire({
      //                   icon: 'success',
      //                   title: 'Cart updated successfully!',
      //                   showConfirmButton: false,
      //                   timer: 2000,

      //               })
      //               setTimeout(() => {
      //               }, 1500);
      //     }catch(error){
      //       console.log(error);
      //       hideLoading();
      //               Swal.fire({
      //                   icon: 'error',
      //                   title: 'Failed to update cart!',
      //                   showConfirmButton: false,
      //                   timer: 1500,

      //               })
      //     }
      
      // }
      // API INTEGRATION TO UPDATE CART
      const updateCart = async () =>{

        // displayLoading();
        // alert(data);
                // alert(`product added to cart ${data},`)
                let price = JSON.stringify(cartItems.price);
                let quantity = JSON.stringify(data);

        let cartData = {
            price,
            quantity,
        }
      
        // let cartBody = JSON.stringify(cartData);

        // console.log(cartBody);

        function handleErrors(response) {
            if (!response.ok) {
                throw Error(response.statusText);
            }
            return response;
        }
        fetch(`${URL}/api/update-cart/${productID}`, {
                    method: 'POST',
                    headers: {
                        'content-type': 'application/json',
                    },
                    body: JSON.stringify(cartData)
                })
                .then(handleErrors)
                .then(response => {
                  console.log(response);
                  getCartProduct();
                    hideLoading();
                    Swal.fire({
                        icon: 'success',
                        title: 'Cart updated successfully!',
                        showConfirmButton: false,
                        timer: 2000,

                    })
                    setTimeout(() => {
                    }, 1500);
                })
                .catch(error => {
                    console.log(error, 'wrong')
                    hideLoading();
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed to update cart!',
                        showConfirmButton: false,
                        timer: 1500,

                    })

                });
      }

      // API INTEGRATION TO DELETE A SINGLE PRODUCT
      const handleDelete = async (id) =>{
        alert('id')
      }
</script>
  @endsection