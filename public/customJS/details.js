// alert('working')
let cartItems =  JSON.parse(sessionStorage.getItem('cartItem') || '[]');
// alert(cartItems);
let imageSlide = document.querySelector('.image_slidedeta');
const productId = localStorage.getItem('productId');
const URL= APP_URL;
alert(APP_URL);
const loaderContainer = document.querySelector('.loader-container');
const productsName = document.queryselector('.product-name');
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
            //   console.log(productDetail);
              let productName = productDetail.map(product => product.name);
            //   console.log(productName[0]);
              let productPrice = productDetail.map(product => product.productprices);
            //   console.log(productPrice);
            //   console.log(productPrice[0]);

              let priceDetail = productPrice[0].map(productP => productP.product_price);
            //   console.log(priceDetail[0]);

            let imageParent = productDetail.map(el=>{
                return el.productimages
            });

            console.log(imageParent[0]);
            
            console.log('show forloop working');
            // let imageChild = imageParent[0].length;
            // console.log(imageChild[0]);

            let formattedImages;

            imageParent[0].forEach(( element) => {
                formattedImages += element.imagedirectory;
            });

            console.log(formattedImages);


            let imageFile1 = productDetail.map(elem=>{
                return elem.productimages[0].imagedirectory;
            });
            // // console.log(imageFile1);

            // let imageFile2 = productDetail.map(elem=>{
            //     return elem.productimages[1].imagedirectory;
            // });
            // // console.log(imageFile2[0]);

            // let imageFile3 = productDetail.map(elem=>{
            //     return elem.productimages[2].imagedirectory;
            // });
            // console.log(imageFile3[3]);
               // Format price
               const formatter = new Intl.NumberFormat('en-NG', {
                    style: 'currency',
                    currency: 'NGN',
                    });

            //Display the product name
            //   console.log(productsName, productName[0]);
              productsName.innerHTML = `
                ${productName[0]}
              `;
              productDetail
              imageSlide.innerHTML = `
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner details-Image">
                        <div class="carousel-item active det_imageWrapper">
                        <img src="${URL}/storage/product_image/${imageFile1}" class="img-fluid" alt="shop men">
                        </div>
                      
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>`;


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