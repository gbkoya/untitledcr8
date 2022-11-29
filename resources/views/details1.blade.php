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
<nav class="d-flex flex-row align-items-center flex-wrap container-fluid justify-content-evenly det-subNavMobile">
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
            <div class="col-lg-4 ">
                <div class="image_slidedeta">

                </div>
                {{-- <img class="img-fluid image-size-middle-ika" src="{{ asset('customImages/Frame 93.png') }}" alt=""> --}}
   
                <div class="products">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner details-Image">
                            {{-- <div class="carousel-item active det_imageWrapper">
                            <img src="{{ asset('customImages/Frame 106.png') }}" class="img-fluid" alt="shop men">
                            </div>
                            <div class="carousel-item det_imageWrapper">
                            <img src="{{ asset('customImages/Frame 106.png') }}" class="img-fluid" alt="Shop image">
                            </div>
                            <div class="carousel-item det_imageWrapper">
                            <img src="{{ asset('customImages/Frame 106.png') }}" class="img-fluid"  alt="Shop image">
                            </div> --}}
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
               </div>
                <button class="mt-3" style="font-weight: 500;font-size: 16px;line-height: 19px;color: #FFFFFF;
                width: 119px;height: 45px;background: #F58634;border-radius: 5px;
                border: none;" onclick="capturePhoto()"> TRY IT ON</button>
                {{-- <video id="video" width="320" height="240" autoplay></video> --}}
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
                color:#FFFF; border: none;" onclick="addToCart()">
                    <img src="{{ asset('customImages/buyIcon.png') }}" class='pt-1 px-3' style="float: left">
                    ADD TO CART
                </button>

                <div class="mt-4" style="font-weight: 500;font-size: 20px;line-height: 30px;color: rgba(107, 128, 155, 0.8);">
                Details</div>
                <div class="mt-3 dynamic_details" style="font-weight: 500;font-size: 15px;line-height: 34px;letter-spacing: 0.01em;color: rgba(107, 128, 155, 0.8);">
                </div>

            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
let cartItems =  JSON.parse(sessionStorage.getItem('cartItem') || '[]');
// alert(cartItems);
let imageSlide = document.querySelector('.image_slidedeta');
const productId = localStorage.getItem('productId');
const URL= '{{ env('APP_URL') }}';
const loaderContainer = document.querySelector('.loader-container');
const productsName = document.querySelector('.products');
// console.log(productsName);
const priceItem = document.querySelector('.main-price');
// console.log(priceItem);
const actualProductP = document.querySelector('.actual-price');
const quantVal = document.querySelector('.quantity');
// console.log(quantVal);
let totalCartItem = document.querySelector('.total-items-in-cart');
cartTot = sessionStorage.getItem('totalCartItem') || 0
totalCartItem.innerHTML = cartTot;
let dynamDetails = document.querySelector('.dynamic_details');

let allProducts = sessionStorage.getItem('cartItem');
// console.log(allProducts);

let data = sessionStorage.getItem('totalCartItem') || 0;
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

const capturePhoto = () =>{
    // alert('working')
    // let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
}
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
            //   console.log(data);
              let productDetail = data.product
              console.log(productDetail);
              let productName = productDetail.map(product => product.name);
            //   console.log(productName[0]);
              let productPrice = productDetail.map(product => product.productprices);
            //   console.log(productPrice);
            //   console.log(productPrice[0]);

              let priceDetail = productPrice[0].map(productP => productP.product_price);
            //   console.log(priceDetail[0]);

            let imageFile1 = productDetail.map(elem=>{
                return elem.productimages[0].imagedirectory;
            });
            // console.log(imageFile1[0]);

            let imageFile2 = productDetail.map(elem=>{
                return elem.productimages[1].imagedirectory;
            });
            // console.log(imageFile2[0]);

            let imageFile3 = productDetail.map(elem=>{
                return elem.productimages[2].imagedirectory;
            });
            // console.log(imageFile3[3]);
               // Format price
               const formatter = new Intl.NumberFormat('en-NG', {
                    style: 'currency',
                    currency: 'NGN',
                    });

            //Display the product name
            //   console.log(productsName, productName[0]);
              productsName.innerHTML = `
              <div class="pt-4" style="font-weight: 700;font-size: 24px;line-height: 140%;color: #6B809B;">
                ${productName[0]}
                </div>
              `;
              productDetail
            //   imageSlide.innerHTML = `
            //     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            //         <div class="carousel-inner details-Image">
            //             <div class="carousel-item active det_imageWrapper">
            //             <img src="${URL}/storage/product_image/${imageFile1}" class="img-fluid" alt="shop men">
            //             </div>
            //             <div class="carousel-item det_imageWrapper">
            //             <img src="${URL}/storage/product_image/${imageFile2}" class="img-fluid" alt="Shop image">
            //             </div>
            //             <div class="carousel-item det_imageWrapper">
            //             <img src="${URL}/storage/product_image/${imageFile3}" class="img-fluid"  alt="Shop image">
            //             </div>
            //         </div>
            //         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            //             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            //             <span class="visually-hidden">Previous</span>
            //         </button>
            //         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            //             <span class="carousel-control-next-icon" aria-hidden="true"></span>
            //             <span class="visually-hidden">Next</span>
            //         </button>
            //     </div>`;

            //   Display the product price
            // console.log(priceItem, priceDetail[0]);
            priceItem.innerHTML = `
            <div  class="pt-4 " style="font-weight: 600;font-size: 28px;line-height: 180%;letter-spacing: -0.01em;color: #6B809B;">
               ${formatter.format(priceDetail[0]).replace(/(\.|,)00$/g, '')}
                </div>
            `;

            // Display the actual price
            actualProductP.innerHTML = `
            <div style="margin-top:-15px;font-weight: 300;font-size: 15px;line-height: 180%;letter-spacing: -0.01em;color: rgba(0, 0, 0, 0.3);">
                ${formatter.format(priceDetail[0]).replace(/(\.|,)00$/g, '')}
                </div>            
            `;
                let featureArr = productDetail.map((ele, i)=> {
                    return ele.productfeatures[i].features
                })
                console.log(featureArr[0]);
                featureArr[0] === null
                // console.log('no details found');
                ?
                dynamDetails.innerHTML = "No details found"
                :
                dynamDetails.innerHTML = `${featureArr}`

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
        const addToCart = async (id) =>{
            displayLoading()
                // alert(`product added to cart ${data},`)
                const result = await dataPromise;
                console.log(result.product[0]);
                let productPrice = result.product[0].productprices[0].product_price;
                console.log(productPrice);

                let product_id = result.product[0].id
                console.log(product_id);
                let name = result.product[0].name;
                let price = JSON.stringify(productPrice);
                let imageP =  result.product[0].productimages[0].imagedirectory
                console.log(imageP);
                let quantity = JSON.stringify(1);
                let quantN = cartItems.find(elemee => elemee.id === product_id);
                // let quantO = quantN.quantity;
                // console.log(quantO);
                // let quantityP =  ++quantO
                // let quantityTwo = JSON.stringify(quantityP);
                console.log(cartItems);
                console.log(result);
                 // check if prodcut already exist in cart
                if (cartItems.some((item) => item.id === product_id)) {
                    let identifiedItem = cartItems.filter(element=>{
                        return element.id !== product_id
                    });
                    console.log(identifiedItem);
                 
                    
                  let newQuantity = changeNumberOfUnits(++quantN.quantity, product_id);
                  console.log(newQuantity); 
                  let newCartItems = [...identifiedItem, newQuantity]
                  console.log(newCartItems);
                  sessionStorage.setItem('cartItem', JSON.stringify(newCartItems));
                console.log('item already exits');
                } else {
                    const item = {id: product_id, name: name, price: productPrice, imagedirectory: imageP};
                    console.log(item);
                    console.log(quantity);
                    cartItems.push({
                    ...item,
                    quantity: quantity
                    });
                sessionStorage.setItem('cartItem', JSON.stringify(cartItems));

                }
                hideLoading();
                //  GET THE TOTAL QUANTITY OF ITEMS IN THE CART
                let cartQuantity = cartItems.reduce(
                    (sum,eve)=>sum+Number(eve.quantity),0
                );
                console.log(cartQuantity);
                totalCartItem.innerHTML = cartQuantity;
                quantVal.innerHTML = cartQuantity;
                sessionStorage.setItem('totalCartItem', cartQuantity);
                // window.location.href = "/cart"
                        Swal.fire({
                            icon: 'success',
                            title: 'Product added to cart',
                            showConfirmButton: false,
                            timer: 2000,
    
                        })
            
            }

            // CHANGE QUANTITY
            const changeNumberOfUnits = (quantity, id) =>{
                let cartNew = cartItems.find(ele=>ele.id === id);
                        cartNew.quantity = quantity;
                // console.log(cartNew);
                return cartNew;
            }


        // GET CART ITEMS
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
            //   console.log(data);
            //   console.log(data.cartItems);
              let cartItem = JSON.stringify(data);
            //   console.log(cartItem);
              let newCart = JSON.parse(cartItem).cartItems[id=productId];
            //   console.log(newCart);
            // console.log(cartItems);
            // if(newCart){
            //     cartItems.push(newCart)
            //     // console.log(cartItems);

            //     sessionStorage.setItem('cartItem', JSON.stringify(cartItems))
            // }
            
             
              return data;
        } catch(error){
          console.log(error);
                
        }  
      
      }

            getCartProduct();
          
</script>


@endsection
