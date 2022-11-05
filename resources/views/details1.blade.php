@extends('layouts.app')

@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')
<!-- search part -->
<div>
    <section class="container-fluid search-background mt-5">
        <main>
                {{-- The loading spinner --}}
    <div class="loader-container">
        <div class="spinner"></div>
      </div>
  
            {{-- Sub nav --}}
<nav class="d-flex flex-row align-items-center flex-wrap container-fluid justify-content-evenly">
    {{-- <div class="d-flex flex-row"> --}}
    <div class="row d-sm-flex search-wrapper">
        <input type="search"
        placeholder="Search for eyewear, lenses and frames"
        />
        <img 
        class="img-fluid search-shop-image"
        src="{{ asset('customImages/arrow-right.png') }}"/>
            </div>   
            <div class="d-sm-flex flex-sm-row align-items-center flex-wrap button-wrapper but-wrapper-mobile">
                <a href="/login"><button class="login" type="button">Log In</button></a>
                <a href="/signup"><button class="signup" type="button">Sign Up</button></a>
               {{-- <a href="/try-it"><button class="try-it" type="button">Try it On</button></a> --}}
            </div>
                {{-- <button type="button" class="">
                    <img
                    src="{{ asset('customImages/buyIcon.png') }}"
                    />
                    CART
                </button> --}}
                <li class="right-nav-button-shop-wrapper">
                    <a href="/cart">
                        <button type="button" class="shop-button">
                            <img
                            src="{{ asset('customImages/buyIcon.png') }}"
                            />
                           CART <span class="total-items-in-cart"></span>
                        </button>
                    </a>
            </li>
    {{-- </div>  --}}
    </nav>
        </main>
    </section>
<!-- end of search part -->

    <section class="container pt-5">
        <div class="row col-lg-11">
            <div class="col-lg-4">
                <img class="img-fluid image-size-middle-ika" src="{{ asset('customImages/Frame 93.png') }}" alt="">
               <div class="products">

               </div>
                <button class="mt-3" style="font-weight: 500;font-size: 16px;line-height: 19px;color: #FFFFFF;
                width: 119px;height: 45px;background: #F58634;border-radius: 5px;"> TRY IT ON</button>
            </div>
            <div class="col-lg-6 mx-5 mt-5 details-sect-right-ika">
                <div class="main-price">
                </div>
                <div class="actual-price">

                </div>
                <div class="d-flex flex-row flex-wrap align-items-center quantity-button">
                    {{-- <button type="button" onclick="decrement()">-</button> --}}
                    <span class="quantity"></span>
                    {{-- <button type="button" onclick="increment()">+</button> --}}
                </div>
                <button class="mt-4" type="button" style="width: 100%;height: 56px;border-radius: 5px;
                background: #F58634;font-weight: 600;font-size: 20px;line-height: 24px;
                color:#FFFF" onclick="addToCart()">
                    <img src="{{ asset('customImages/buyIcon.png') }}" class='pt-1 px-3' style="float: left">
                    ADD TO CART
                </button>

                <div class="mt-4" style="font-weight: 500;font-size: 20px;line-height: 30px;color: rgba(107, 128, 155, 0.8);">
                Details</div>
                <div class="mt-3" style="font-weight: 500;font-size: 15px;line-height: 34px;letter-spacing: 0.01em;color: rgba(107, 128, 155, 0.8);">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum 
                    deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, 
                    similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem 
                    rerum facilis est et expedita 
                </div>

            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
let cartItems =  JSON.parse(sessionStorage.getItem('cartItem') || '[]');
// alert(cartItems);
const productId = localStorage.getItem('productId');
const URL= '{{ env('APP_URL') }}';
const loaderContainer = document.querySelector('.loader-container');
const productsName = document.querySelector('.products');
// console.log(productsName);
const priceItem = document.querySelector('.main-price');
// console.log(priceItem);
const actualProductP = document.querySelector('.actual-price');
const quantVal = document.querySelector('.quantity');
console.log(quantVal);
let totalCartItem = document.querySelector('.total-items-in-cart');
totalCartItem.innerHTML = 0;

let allProducts = sessionStorage.getItem('cartItem');
console.log(allProducts);

let data = 0;
quantVal.innerText = data;
// const increment = () =>{
//     data = data + 1;
//     quantVal.innerText = data;
//     // alert(data + 1)
// } 
// const decrement = () =>{
//     if(data > 0){
//         data = data - 1;
//         quantVal.innerText = data
//         console.log(data);
//     }else{
        
//     }
// }


const displayLoading = () => {
      loaderContainer.style.display = 'block';
      };

const hideLoading = () => {
          loaderContainer.style.display = 'none';
      };
   

// console.log(productId);

// API INTEGRATION TO GET A SINCLE SHOP PRODUCT
 const getProduct = async (id) => {
    // alert(productId);
    //   displayLoading();
    
          function handleErrors(response) {
              if (!response.ok) {
                  throw Error(response.statusText);
              }
              return response;
          }

          try{
          const response = await fetch(`${URL}/api/product-details-show/${productId}`, {
                  method: 'GET',
                  headers: {
                      'content-type': 'application/json'
                    },
              })
              .then(handleErrors)
              const data = await response.json();
              console.log(data);
              let productDetail = data.product
              let productName = productDetail.map(product => product.name);
            //   console.log(productName[0]);
              let productPrice = productDetail.map(product => product.productprices);
            //   console.log(productPrice);
            //   console.log(productPrice[0]);

              let priceDetail = productPrice[0].map(productP => productP.product_price);
            //   console.log(priceDetail[0]);

            //Display the product name
            //   console.log(productsName, productName[0]);
              productsName.innerHTML = `
              <div class="pt-4" style="font-weight: 700;font-size: 24px;line-height: 140%;color: #6B809B;">
                ${productName[0]}
                </div>
              `;

            //   Display the product price
            // console.log(priceItem, priceDetail[0]);
            priceItem.innerHTML = `
            <div  class="pt-4 " style="font-weight: 600;font-size: 28px;line-height: 180%;letter-spacing: -0.01em;color: #6B809B;">
               ₦${priceDetail[0]}
                </div>
            `;

            // Display the actual price
            actualProductP.innerHTML = `
            <div style="margin-top:-15px;font-weight: 300;font-size: 15px;line-height: 180%;letter-spacing: -0.01em;color: rgba(0, 0, 0, 0.3);">
                ₦${priceDetail[0]}
                </div>            
            `;
                //   hideLoading();
              return data;
        } catch(error){
          console.log(error);
          // console.log(errorMessage);
                //   hideLoading();
                
        }  
      
      }
      getProduct();
      const dataPromise = getProduct();
  

     
    // API integration to add to cart
        const addToCart = async () =>{
            displayLoading()
                // alert(`product added to cart ${data},`)
                const result = await dataPromise;
                console.log(result.product[0]);
                let productPrice = result.product[0].productprices[0].product_price;
                console.log(productPrice);

                let product_id = result.product[0].id
                let name = result.product[0].name;
                let price = JSON.stringify(productPrice);
                let quantity = JSON.stringify(1);

        let cartData = {
            product_id,
            name,
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
        fetch(`${URL}/api/add-to-cart`, {
                    method: 'POST',
                    headers: {
                        'content-type': 'application/json',
                    },
                    body: JSON.stringify(cartData)
                })
                .then(handleErrors)
                .then(response => {
                    console.log(response);
                    hideLoading();
            // window.location.href = "/cart"
                    Swal.fire({
                        icon: 'success',
                        title: 'Product added to cart',
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
                        title: 'Failed to add product!',
                        showConfirmButton: false,
                        timer: 1500,

                    })

                });
            getCartProduct();

            
            }


        // GET CART ITEMS
        // API INTEGRATION TO GET A SINCLE SHOP PRODUCT
 const getCartProduct = async () => {
    // alert(productId);
    //   displayLoading();
    
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
              console.log(data.cartItems);
              let cartItem = JSON.stringify(data);
              console.log(cartItem);
              let newCart = JSON.parse(cartItem).cartItems[id=productId];
              console.log(newCart);
            //   cartItems.filter(element => {
            //     return element !== null;
            //     });
            console.log(cartItems);
              cartItems.push(newCart)
              console.log(cartItems);
              let cartQuantity = cartItems.length - 2
              console.log(cartQuantity);
             
                localStorage.setItem('cartItem', JSON.stringify(cartItems))
              sessionStorage.setItem('cartItem', JSON.stringify(cartItems))
              
              
            // alert('working');
            //   console.log(whatwewant);
             
              totalCartItem.innerHTML = cartQuantity;
              quantVal.innerHTML = newCart.quantity

             
              return data;
        } catch(error){
          console.log(error);
                
        }  
      
      }

            getCartProduct();
            // window.addEventListener('load', (event) => {
            //     if(sessionStorage.getItem("cartItem")){
            //         let cart = sessionStorage.getItem('cartItem');
            //         alert(cart);
            //         sessionStorage.setItem(cart);
            //     }

            //     // alert('finish loading', JSON.stringify(cart));
            // });
</script>


@endsection
