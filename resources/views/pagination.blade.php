@extends('layouts.app')
@section('description', 'Foremost Eye Clinic is a leading provider of optometry services.')
@section('title', 'Foremost - Africa\'s Most Innovative Eye Clinic')

@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop
@section('content')

<body>
    {{-- The loading spinner --}}
    <div class="loader-container">
      <div class="spinner"></div>
    </div>

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
           {{-- <a href="/try-it"><button class="try-it" type="button">Try it On</button></a> --}}
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
               CART <span class="total-items-in-cart">0</span>
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
        <div class="tab-pane card-paginat fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="d-flex flex-row flex-wrap justify-content-evenly productsData" id="paginated-list" data-current-page="1" aria-live="polite">
               
            </div>
            {{-- Paginated button --}}
            {{-- <div class="d-flex flex-row flex-wrap justify-content-evenly pagination-button-wrapper">
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
            </div> --}}
        <nav class="pagination-container">
                <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
                  &lt;
                </button>
            
                <div id="pagination-numbers">
            
                </div>
            
                <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
                  &gt;
                </button>
              </nav>
        </div>

        {{-- Women content here --}}
        <div class="tab-pane fade card-paginat" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="d-flex flex-row flex-wrap justify-content-evenly productsDataWomen">
               
            </div> 
                    {{-- Paginated here --}}
                    <nav class="pagination-container">
                        <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
                          &lt;
                        </button>
                    
                        <div id="pagination-numbers">
                    
                        </div>
                    
                        <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
                          &gt;
                        </button>
                      </nav>
        </div>

        {{-- Kids content here --}}
        <div class="tab-pane fade card-paginat" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="d-flex flex-row flex-wrap justify-content-evenly productsDatakids">
               
            </div>
                    {{-- Paginated button --}}
                    <nav class="pagination-container">
                        <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
                          &lt;
                        </button>
                    
                        <div id="pagination-numbers">
                    
                        </div>
                    
                        <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
                          &gt;
                        </button>
                    </nav>
        </div>
      </div>
</div>

</body>

  {{-- <script type="text/javascript">
        // alert(env('APP_URL'));
    // alert('working')
    var name = '{{ env('APP_URL') }}';

    alert(name);

  </script> --}}

    <script type="text/javascript">
    

    // Global variable declaration
      const totalItemsInCartEl = document.querySelector(".total-items-in-cart");
      const menCards = document.querySelectorAll(".cardClick");
      const url= '{{ env('APP_URL') }}'


        // ADD TO CART LOGIC
        let cart = JSON.parse(localStorage.getItem("CART")) || [];
        const addToCart = () =>{
           // check if prodcut already exist in cart
          //  console.log("working");
        // if (cart.some((item) => item.id === id)) {
        //   changeNumberOfUnits("plus", id);
        // } else {
        //   const item = menCards.find((product) => product.id === id);

        //   cart.push({
        //     ...item,
        //     numberOfUnits: 1,
        //   });
        // }

        // updateCart();
        }
        // END OF ADD TO CART LOGIC

    // API integration to get all products from the database
     // Hide and show a loader logic
   

     const loaderContainer = document.querySelector('.loader-container');

      const displayLoading = () => {
      loaderContainer.style.display = 'block';
      };

      const hideLoading = () => {
          loaderContainer.style.display = 'none';
      };
   
    const getAllProducts = async (page = 1, 
   
    previousResponse = []) => {
      displayLoading();
        // alert(JSON.stringify(contactData));
        // alert(`${firstName} and ${lastName}`);
        
        function handleErrors(response) {
            if (!response.ok) {
                throw Error(response.statusText);
            }
            return response;
        }
        try{
          
          let headers = new Headers();

          headers.append('Content-Type', 'application/json');

          // const response = await fetch(`${url}/product-list`, {
          const response = await fetch(`${url}/api/product-list`, {

                  method: 'GET',
                  headers: headers
              })
              .then(handleErrors)
              const data = await response.json();
              // console.log(data);
              hideLoading();
              return data;
            // window.location.href = "https://foremosteyeclinic.com/api/product-list?page=1"
              
        } catch(error){
                  hideLoading();
                  Swal.fire({
                      icon: 'error',
                      title: "Failed to retrieve products!",
                      showConfirmButton: false,
                      timer: 2000,
                  })
        }
      }
      getAllProducts();

      // Data from our fetch request, is retrieved and displayed to the DOM here
      const dataPromise = getAllProducts();

      const displayData = async () => {
        const result = await dataPromise;
        let products = result.products_list.data;
        let pageDetails = result.products_list;
        
        console.log(result.products_list,);
        console.log( pageDetails.current_page);
        let currentPage = pageDetails.current_page;
        // alert(currentPage);

        // console.log(products);

         // The logic to get and display
       const productItems = document.querySelector('.productsData');
       const productItemsWomen = document.querySelector('.productsDataWomen');
       const productItemsKids = document.querySelector('.productsDatakids');
       
          // Get men data
          const menProducts = products.filter(menProduct => menProduct.productcategory_id === 1
            );
            // console.log(menProducts);

            // Get women data
            const womenProducts = products.filter(womenProduct => womenProduct.productcategory_id === 2);
            // console.log(womenProducts);

            // Get Kids data
            const kidsProducts = products.filter(kidProduct => kidProduct.productcategory_id === 3);
            // console.log(kidsProducts);

             // MEN
             menProducts.forEach((product) => {
                // alert(product.id)
                // console.log(product);
                productItems.innerHTML += `
                
                    <div class="shop-card e-card-link cardClick" data-id=${product.id}>
                    <a href="/details">
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    </a>
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
                            <div onclick="addToCart()">
                              
                              <button type="button" class="shop-card-button">
                                  <img
                                  src="{{ asset('customImages/buyIcon.png') }}"
                                  />
                                  Add
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
        });
       

         // WOMEN
         womenProducts.forEach((product) => {
                // console.log(product);
                productItemsWomen.innerHTML += `
                    <div class="shop-card e-card-link cardClick" data-id=${product.id}>
                    <img class="img-fluid
                    data-bs-toggle="tooltip" data-bs-placement="top" title="View details
                    " src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/>
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
                                Add
                            </button>
                        </div>
                    </div>
                </div>
                `;
        });

         // KIDS
         kidsProducts.forEach((product) => {
                // console.log(product);
                productItemsKids.innerHTML += `
                    <div class="shop-card e-card-link cardClick" data-id=${product.id}>
                    <a href="/details">  
                    <img class="img-fluid
                    data-bs-toggle="tooltip" data-bs-placement="top" title="View details
                    " src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/>
                    </a>
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
                                Add
                            </button>
                        </div>
                    </div>
                </div>   
                `;
        });

        // Get the item ID and redirect to the details page
        function getItemID(event){
            menCards.forEach(card =>{
                card.addEventListener('click', ()=>{
                    let cardId = card.getAttribute("data-id");
                    // localSorage.setItem('productId', cardId);
                    localStorage.setItem('product_id', cardId);
                    //  window.location.href = "/details"
                    console.log(cardId);

                })
            })

        }
        getItemID();


    // PAGINATION SCRIPT HERE
    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("paginated-list");
    const listItems = paginatedList.querySelectorAll(".cardClick");
    const nextButton = document.getElementById("next-button");
    const prevButton = document.getElementById("prev-button");

    const paginationLimit = 10;
    const pageCount = Math.ceil(listItems.length / paginationLimit);
    // let products = result.products_list.data;
    // alert(result.products_list);
    // let currentPage = result.products_list.current_page;

    const disableButton = (button) => {
      button.classList.add("disabled");
      button.setAttribute("disabled", true);
    };

    const enableButton = (button) => {
      button.classList.remove("disabled");
      button.removeAttribute("disabled");
    };

    const handlePageButtonsStatus = () => {
      if (currentPage === 1) {
        disableButton(prevButton);
      } else {
        enableButton(prevButton);
      }

      if (pageCount === currentPage) {
        disableButton(nextButton);
      } else {
        enableButton(nextButton);
      }
    };

    const handleActivePageNumber = () => {
      document.querySelectorAll(".pagination-number").forEach((button) => {
        button.classList.remove("active");
        const pageIndex = Number(button.getAttribute("page-index"));
        if (pageIndex == currentPage) {
          button.classList.add("active");
        }
      });
    };
    // alert(currentPage);

    const appendPageNumber = (index) => {
      const pageNumber = document.createElement("button");
      pageNumber.className = "pagination-number";
      pageNumber.innerHTML = index;
      pageNumber.setAttribute("page-index", index);
      pageNumber.setAttribute("aria-label", "Page " + index);

      paginationNumbers.appendChild(pageNumber);
    };

    const getPaginationNumbers = () => {
      for (let i = 1; i <= pageCount; i++) {
        appendPageNumber(i);
      }
    };

    const setCurrentPage = (pageNum) => {
      currentPage = pageNum;

      handleActivePageNumber();
      handlePageButtonsStatus();
      
      const prevRange = (pageNum - 1) * paginationLimit;
      const currRange = pageNum * paginationLimit;

      listItems.forEach((item, index) => {
        item.classList.add("hidden");
        if (index >= prevRange && index < currRange) {
          item.classList.remove("hidden");
        }
      });
    };

    window.addEventListener("load", () => {
      getPaginationNumbers();
      setCurrentPage(1);

      prevButton.addEventListener("click", () => {
        setCurrentPage(currentPage - 1);
      });

      nextButton.addEventListener("click", () => {
        setCurrentPage(currentPage + 1);
      });

      document.querySelectorAll(".pagination-number").forEach((button) => {
        const pageIndex = Number(button.getAttribute("page-index"));

        if (pageIndex) {
          button.addEventListener("click", () => {
            setCurrentPage(pageIndex);
          });
        }
      });
    });
         
      }

      displayData();
      

        // alert(JSON.stringify(products));

          </script>

@endsection