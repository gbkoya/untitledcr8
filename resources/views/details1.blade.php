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
    </section>
<!-- end of search part -->

    <section class="container pt-5">
        <div class="row col-lg-11">
            <div class="col-lg-4">
                <img class="img-fluid image-size-middle-ika" src="{{ asset('customImages/Frame 93.png') }}" alt="">
                <div class="pt-4" style="font-weight: 700;font-size: 24px;line-height: 140%;color: #6B809B;">
                Anti blu ray radiation, computer glasses</div>
                <button class="mt-3" style="font-weight: 500;font-size: 16px;line-height: 19px;color: #FFFFFF;
                width: 119px;height: 45px;background: #F58634;border-radius: 5px;"> TRY IT ON</button>
            </div>
            <div class="col-lg-6 mx-5 mt-5 details-sect-right-ika">
                <div  class="pt-4" style="font-weight: 600;font-size: 28px;line-height: 180%;letter-spacing: -0.01em;color: #6B809B;">
                    ₦4,999
                </div>
                <div style="margin-top:-15px;font-weight: 300;font-size: 15px;line-height: 180%;letter-spacing: -0.01em;color: rgba(0, 0, 0, 0.3);">
                    N9,000
                </div>
                

                <button class="mt-4" type="button" style="width: 100%;height: 56px;border-radius: 5px;
                background: #F58634;font-weight: 600;font-size: 20px;line-height: 24px;
                color:#FFFF">
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
@endsection

<script type="text/javascript">
const productId = localStorage.getItem('productId');
const URL= '{{ env('APP_URL') }}';
const loaderContainer = document.querySelector('.loader-container');


// const displayLoading = () => {
//       loaderContainer.style.display = 'block';
//       };

// const hideLoading = () => {
//           loaderContainer.style.display = 'none';
//       };
   

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
              // return data;
              // console.log(loginData.email);
              console.log(data);
              Swal.fire({
                      icon: 'success',
                      title: "Products retrieved successfully!",
                      showConfirmButton: false,
                      timer: 2000,

                  })
                //   hideLoading();
        } catch(error){
          console.log(error);
          // console.log(errorMessage);
                //   hideLoading();
                  Swal.fire({
                      icon: 'error',
                      title: "Invalid Email/Password. Try again",
                      showConfirmButton: false,
                      timer: 2000,
                  })
        }  
      
      }
      getProduct();
</script>