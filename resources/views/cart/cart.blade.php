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

    <div class="cart-display">

    </div>
    
   

    <div class="container col-lg-10 d-flex justify-content-between">
      <div class=" py-3 pb-5">
        <button class="small-mobile-long-button small-screen-font" style="background: rgba(0, 0, 0, 0.2);border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
                line-height: 140%;color: #6B809B; padding: 0.8em 3em; border:none">Continue Shopping

        </button>
      </div>
      <div class=" py-3  pb-5">
        <button onclick="saveCartDB()" class="small-mobile-long-button small-screen-font" style="background: #F58634;border-radius: 4.67259px;font-weight: 700;font-size: 18.6904px;
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
// console.log(quantVal);
const URL= '{{ env('APP_URL') }}';
const productID = localStorage.getItem('productId');
// console.log(productID);
const loaderContainer = document.querySelector('.loader-container');
const cartItem = JSON.parse(sessionStorage.getItem('cartItem'));
// console.log(cartItem);
let newCart = cartItem.filter(element =>{
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

totalCartItem.innerHTML = totalCartQuant



// quantVal.innerText = data;
const increment = (price, quantity, id) =>{
  console.log(`yes ${price}, ${quantity}, ${id}`);
    // data =+ data + 1;
    // // quantVal.innerText = data;
    // sumPrice = price * data;

    // totalPrice.innerHTML = `
    // ${sumPrice}
    // `;
    // totalCartItem.innerHTML = data;
    setTimeout(() => {
      updateCart(price, quantity + 1, id);
    }, 2000);
    // alert(data + 1)
} 

const decrement = (price, quantity, id) =>{
  console.log(`yes ${price}, ${quantity}, ${id}`);

    if(quantity > 0){
    totalCartItem.innerHTML = data;
        setTimeout(() => {
        updateCart(price, quantity - 1, id);
      }, 2000);
    }else{
        
    }
}


// const renderCartItem = () => {
  cartDisplay.innerHTML = ""; // clear cart element
  newCart.map(el => {
  let dataCart = el.quantity;


  // incremen();
    return cartDisplay.innerHTML += `
    <div class="container card my-5 col-md-10">
      <div class="d-flex flex-row justify-content-between">
        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Item(s)</div>
        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Quantity</div>
        <div class=" small-screen-font" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color:#000000;">Price </div>
        <div></div>
      </div>

      <div class="" style="border: 1px solid rgba(0, 0, 0, 0.5);">
        </div>
      <div class=" pt-5 col-lg-10 d-flex flex-wrap justify-content-between align-items-center">
       
      <div class="d-flex flex-wrap">
        <img class="img-fluid" src="{{ asset('customImages/Frame 106.png') }}" />

        <div class="px-2 small-screen-font item-name" style="font-weight: 500;font-size: 19.4667px;line-height: 140%;color: rgba(107, 128, 155, 0.8);">
          <h4>${el.name}</h4>
          </div>
      </div>


        <form>

          <div class="d-flex flex-row flex-wrap align-items-center quantity-button">
            <button type="button" onclick="decrement(${el.price}, ${dataCart}, ${el.id})">-</button>
            <span class="quantity">${dataCart}</span>
            <button type="button" onclick="increment(${el.price}, ${dataCart}, ${el.id})">+</button>
        </div>

        </form>

        <div class="pt-2 small-screen-font price-val" style="font-weight: 500;font-size: 20px;line-height: 180%;letter-spacing: -0.01em;color: rgba(107, 128, 155, 0.8);">${el.price}</div>

        <div onclick="deleteProduct(${el.id})"><img class="img-fluid" src="{{ asset('customImages/trash vector.png') }}" alt="Delete icon"></div>
      </div>
      <div class="d-flex align-items-end container" style="text-align: right;">
      <div>Total Price:</div>
      <div class="pt-2 total-price " style="font-weight: 500;font-size: 20px;line-height: 180%;letter-spacing: -0.01em;color: rgba(107, 128, 155, 0.8);">
        ${el.price * dataCart}
        </div>
      </div>

    </div>
    `;
    
  })
// }

// renderCartItem();
// cartDisplay.innerText =+ `
  
// `;

// API INTEGRATION TO DELETE CART
const deleteProduct = (id) => {
  console.log(id);
        // displayLoading();
      

        function handleErrors(response) {
            if (!response.ok) {
                throw Error(response.statusText);
            }
            return response;
        }
        console.log(id);
        fetch(`${URL}/api/remove-item/${id}`, {
                    method: 'POST',
                    headers: {
                        'content-type': 'application/json',
                    },
                })
                .then(handleErrors)
                .then(response => {
                  // console.log(response);

                    Swal.fire({
                        icon: 'success',
                        title: 'Product deleted successfully',
                        showConfirmButton: false,
                        timer: 2000,

                    })
                    let updateFromDelete = newCart.filter(newCa=>{
                  return newCa.id !== id;
                });
                console.log(updateFromDelete);
                sessionStorage.setItem('cartItem', JSON.stringify(updateFromDelete));
                // renderCartItem();
                location.reload();
                // setTimeout(() => {
                    // }, 1500);
                })
                .catch(error => {
                    console.log(error, 'wrong')
                    hideLoading();
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed to delete product!',
                        showConfirmButton: false,
                        timer: 1500,

                    })

                });
           
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


      
      // API INTEGRATION TO UPDATE CART
      const updateCart = async (price, quantity, id) =>{
        console.log(`updating ${price}, ${quantity}, ${id}`);

        // displayLoading();
        // alert(data);
                // alert(`product added to cart ${data},`)
        console.log(newCart);
        sessionStorage.setItem('cartItem', JSON.stringify(newCart));

                 price = JSON.stringify(price);
                 quantity = JSON.stringify(quantity);

        let cartData = {
            price,
            quantity,
        }
        let itemNew = newCart.find(el=> el.id === id)
        itemNew.quantity = quantity
        // console.log(itemNew);

      //   let newUpdateCart = newCart.map(newC=>{
        
      //   // itemNew.quantity = quantity
      //     newC = itemNew 
      //  return newC

      // });
      // console.log(newUpdateCart);
        // let cartBody = JSON.stringify(cartData);

        // console.log(cartData);
        // location.reload();

                    hideLoading();
                    Swal.fire({
                        icon: 'success',
                        title: 'Cart updated successfully!',
                        showConfirmButton: false,
                        timer: 2000,

                    })

      }


      // API integration to save cart data to the database
      const saveCartDB = async () =>{
       if(!localStorage.getItem('token')){
        window.location.href = "/login"
       }else{
        console.log(cartItem);
            displayLoading()
                // alert(`product added to cart ${data},`)
           
        function handleErrors(response) {
            if (!response.ok) {
                throw Error(response.statusText);
            }
            return response;
        }
        try{
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
        }catch(error){
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