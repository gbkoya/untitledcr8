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

<body>
<main>
{{-- HERO SECTION --}}
<section class="container-fluid shop-hero">
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
           <a href="/try-it"><button class="try-it" type="button">Try it On</button></a>
        </div>
            {{-- <button type="button" class="">
                <img
                src="{{ asset('customImages/buyIcon.png') }}"
                />
                CART
            </button> --}}
            <li class="right-nav-button-shop-wrapper">
            <button type="button" class="shop-button">
                <img
                src="{{ asset('customImages/buyIcon.png') }}"
                />
               ADD
            </button>
        </li>
{{-- </div>  --}}
</nav>
<div class="service-hero-copy shop-top-hero">
            <h1>
            The Largest Online Store
            for  Glasses and Contact
            Lenses.
            </h1>
            <p>
                We provide thousands of prescription eyeglasses and 
                contact lenses to our customers monthly.
            </p>
            <button type="button" class="buy-button-shop">
                <img
                src="{{ asset('customImages/buyIcon.png') }}"
                />
                Buy Now
            </button>
        </div>
</section>
{{-- END OF HERO SECTION --}}

{{-- GLASS SECTION AFTER HERO --}}
<section class="glass-section container-fluid">
    <div class="glass-wrapper d-flex flex-wrap flex-row justify-content-between">
        <img src="{{asset('customImages/emojione_glasses.png')}}" alt="emoji glass"/>
        <img src="{{asset('customImages/fluent_glasses-20-filled.png')}}" alt="Fluent glass"/>
        <img src="{{asset('customImages/fxemoji_glasses.png')}}" alt="emoji glasses"/>
        <img src="{{asset('customImages/openmoji_glasses.png')}}" alt="open emoji">
        <img src="{{asset('customImages/icon-park_glasses-one.png')}}" alt="icon park glasses">
    </div>
</section>
{{-- END OF THE GLASS SECTION AFTER HERO --}}
</main>

{{-- STORE CARD SECTION --}}
<section class="container-fluid store-wrapper glass-margin">
    <header class="d-flex flex-wrap flex-row justify-content-between align-items-center store-heading">
        <h1>Discover our store</h1>
        <div class="sort-wrapper d-flex flex-row flex-wrap align-items-center justify-content-evenly">
            <label for="">Sort by:</label>
            <select name="sort">
                <option value="popularity">Popularity</option>
                <option value="popularity">eye curvature</option>
            </select>
        </div>
    </header>
</section>

{{-- The tabs pills nav --}}
<div class="eb-tab">
    <ul class="nav nav-pills nav-pill-head-wrapper mb-3 d-md-flex justify-content-center align-items-center" id="pills-tab" role="tablist">
        <li class="nav-item nav-but" role="presentation">
          <button class="nav-link pill-button active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Men</button>
        </li>
        <li class="nav-item nav-but" role="presentation">
          <button class="nav-link pill-button" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Women</button>
        </li>
        <li class="nav-item nav-but" role="presentation">
          <button class="nav-link pill-button" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Kids</button>
        </li>
      </ul>

      {{-- men content here --}}
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="d-flex flex-row flex-wrap justify-content-evenly productsData">
               
            </div>
            {{-- Paginated button --}}
            <div class="d-flex flex-row flex-wrap justify-content-evenly pagination-button-wrapper">
                <button class="paginated-first-button" type="button">
                    1
                </button>
                <button class="paginated-first-button" type="button">
                    2
                </button>
                <button class="paginated-first-button second" type="button">
                    3
                </button>
                <button class="paginated-first-button second" type="button">
                    4
                </button>
                ...
                <button class="paginated-first-button second" type="button">
                    10
                </button>
                <button class="paginated-first-button second" type="button">
                    Next
                </button>
            </div>
        </div>

        {{-- Women content here --}}
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="d-flex flex-row flex-wrap justify-content-evenly productsDataWomen">
               
            </div> 
                    {{-- Paginated button --}}
                    <div class="d-flex flex-row flex-wrap justify-content-evenly pagination-button-wrapper">
                        <button class="paginated-first-button" type="button">
                            1
                        </button>
                        <button class="paginated-first-button" type="button">
                            2
                        </button>
                        <button class="paginated-first-button second" type="button">
                            3
                        </button>
                        <button class="paginated-first-button second" type="button">
                            4
                        </button>
                        ...
                        <button class="paginated-first-button second second-mobile" type="button">
                            10
                        </button>
                        <button class="paginated-first-button second second-mobile" type="button ">
                            Next
                        </button>
                    </div>   
        </div>

        {{-- Kids content here --}}
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="d-flex flex-row flex-wrap justify-content-evenly productsDatakids">
               
            </div>
                    {{-- Paginated button --}}
                    <div class="d-flex flex-row flex-wrap justify-content-evenly pagination-button-wrapper">
                        <button class="paginated-first-button" type="button">
                            1
                        </button>
                        <button class="paginated-first-button" type="button">
                            2
                        </button>
                        <button class="paginated-first-button second" type="button">
                            3
                        </button>
                        <button class="paginated-first-button second" type="button">
                            4
                        </button>
                        ...
                        <button class="paginated-first-button second" type="button">
                            10
                        </button>
                        <button class="paginated-first-button second" type="button">
                            Next
                        </button>
                    </div>
        </div>
      </div>
</div>

</body>

    <script type="text/javascript">
    // API integration to get all products in the database
     const getAllProducts = (event) => {
          event.preventDefault();
      
          // alert(JSON.stringify(contactData));
          // alert(`${firstName} and ${lastName}`);
          isLoading = true;
      
          function handleErrors(response) {
              if (!response.ok) {
                  throw Error(response.statusText);
              }
              return response;
          }
          fetch(`${APP_URL}/contactus/message`, {
                  method: 'GET',
                  headers: {
                      'Accept': 'application/json, text/plain, */*',
                      'content-type': 'application/json'
                  }
              })
              .then(handleErrors)
              .then(response => {
                //   console.log("ok")
                  Swal.fire({
                      icon: 'success',
                      title: 'Products retrieved successfully!',
                      showConfirmButton: false,
                      timer: 1500,
      
                  })
                  let res = document.getElementById("sendData");
                  res.reset();
              })
              .catch(error => {
                  console.log(error, 'wrong')
                  Swal.fire({
                      icon: 'error',
                      title: 'Failed to retrieve products!',
                      showConfirmButton: false,
                      timer: 1500,
      
                  })
      
              });
      
      }
       // The logic to get and display
       const productItems = document.querySelector('.productsData');
       const productItemsWomen = document.querySelector('.productsDataWomen');
       const productItemsKids = document.querySelector('.productsDatakids') 

       const products= [
             {
                id: 0,
                name: "Item-1",
                price: 29,
                instock : 4,
                description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
                imgSrc: "./img/t5.png",
                product_category: "men"
             },
             {
                id: 1,
                name: "Item-2",
                price: 29,
                instock : 4,
                description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
                imgSrc: "./img/t5.png",
                product_category: "Women"
             },
             {
            id: 2,
            name: "item-3",
            price: 19.99,
            instock: 10,
            description:
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
            imgSrc: "./img/t3.png",
            product_category: "women"
        },
        {
            id: 3,
            name: "T-shirt 4",
            price: 25.99,
            instock: 5,
            description:
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
            imgSrc: "./img/t4.png",
            product_category: "kids"
        },
        {
            id: 4,
            name: "T-shirt 5",
            price: 29.99,
            instock: 4,
            description:
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
            imgSrc: "./img/t5.png",
            product_category: "women"
        },
        {
            id: 5,
            name: "T-shirt 6",
            price: 39.99,
            instock: 40,
            description:
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, error.",
            imgSrc: "./img/t6.png",
            product_category: "kids"
        },
       ]; 

        // alert(JSON.stringify(products));
        function renderProducts(){
            // alert(JSON.stringify(products));

            // Get men data
            const menProducts = products.filter(menProduct => menProduct.product_category === "men"
            );
            console.log(menProducts);

            // Get women data
            const womenProducts = products.filter(womenProduct => womenProduct.product_category === "women");
            console.log(womenProducts);

            // Get Kids data
            const kidsProducts = products.filter(kidProduct => kidProduct.product_category === "kids");
            console.log(kidsProducts);


            
            // MEN
            menProducts.forEach((product) => {
                // console.log(product);
                productItems.innerHTML += `
                <a class="e-card-link" href="/details1">
                    <div class="shop-card">
                    <img class="img-fluid" src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/>
                    <div class="shop-card-heading">
                        <div>
                            <h4>${product.name}</h4>
                            <p data="date-updated">Updated July 2022</p>
                        </div>
                        <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{asset('customImages/ratings.png')}}" alt=""><span>(576)</span></li>
                        <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                            <div class="price-child d-flex flex-row">
                                <p>N4,999</p>
                                <p>N9,000</p>
                            </div>
                            <button type="button" class="shop-card-button">
                                <img
                                src="{{ asset('customImages/buyIcon.png') }}"
                                />
                                ADD
                            </button>
                        </div>
                    </div>
                </div>
            </a>
                `;
        });

        // WOMEN
        womenProducts.forEach((product) => {
                // console.log(product);
                productItemsWomen.innerHTML += `
                <a href="/details1" class="e-card-link">
                    <div class="shop-card">
                    <img class="img-fluid" src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/>
                    <div class="shop-card-heading">
                        <div>
                            <h4>${product.name}</h4>
                            <p data="date-updated">Updated July 2022</p>
                        </div>
                        <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{asset('customImages/ratings.png')}}" alt=""><span>(576)</span></li>
                        <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                            <div class="price-child d-flex flex-row">
                                <p>N4,999</p>
                                <p>N9,000</p>
                            </div>
                            <button type="button" class="shop-card-button">
                                <img
                                src="{{ asset('customImages/buyIcon.png') }}"
                                />
                                ADD
                            </button>
                        </div>
                    </div>
                </div>
                    </a>
                `;
        });

        // KIDS
        kidsProducts.forEach((product) => {
                // console.log(product);
                productItemsKids.innerHTML += `
                <a href="/details1" class="e-card-link">
                    <div class="shop-card">
                    <img class="img-fluid" src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/>
                    <div class="shop-card-heading">
                        <div>
                            <h4>${product.name}</h4>
                            <p data="date-updated">Updated July 2022</p>
                        </div>
                        <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{asset('customImages/ratings.png')}}" alt=""><span>(576)</span></li>
                        <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                            <div class="price-child d-flex flex-row">
                                <p>N4,999</p>
                                <p>N9,000</p>
                            </div>
                            <button type="button" class="shop-card-button">
                                <img
                                src="{{ asset('customImages/buyIcon.png') }}"
                                />
                                ADD
                            </button>
                        </div>
                    </div>
                </div>   
                </a>
                `;
        });
        }
        renderProducts();
          </script>

@endsection