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
    id="search"
    placeholder="Search for eyewear, lenses and frames"
    />
    <img 
    onclick="searchProduct()"
    class="img-fluid search-shop-image"
    src="{{ asset('customImages/arrow-right.png') }}"/>
        </div>   
        <div class="button-container">
          
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
               CART <span class="total-items-in-cart"></span>
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
                <option value="popularity">Relevance</option>
                <option value="popularity">New Arrivals</option>
                <option value="popularity">Best Sellers</option>
                <option value="popularity">Top Rated</option>
                <option value="popularity">New Arrivals</option>
                <option value="popularity">On Sale</option>
            </select>
        </div>
    </header>
</section>

{{-- The tabs pills nav --}}
<section class="container-fluid d-flex flex-row flex-wrap  shop_display">
    <div class="left_product">
        <header class="hide_filter d-flex flex-row justify-content-between align-items-baseline">
            <h2>Filters</h2>
            <div id="hide_close" class="d-flex flex-row align-items-baseline justify-content-evenly toggleIcon">
                <img class="img-fluid" src="{{asset('customImages/toggle-icon.png')}}" alt="toggle icon">
                <p class="hide_close">Hide filters</p>
            </div>
        </header>
    
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Color
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <section class="colours_wrapper d-flex flex-row flex-wrap justify-content-evenly" >                   
                 
                       </section>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Face Shape
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <section class="colours_wrapper shape_wrapper d-flex flex-row justify-content-evenly">
                        {{-- <div class="colours_wrapper--left">
                            <p>Oval</p>
                            <p>Round</p>
                        </div> --}}

                       </section>
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoJ">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoJ" aria-expanded="false" aria-controls="collapseTwoJ">
                    Glass
                  </button>
                </h2>
                <div id="collapseTwoJ" class="accordion-collapse collapse" aria-labelledby="headingTwoJ" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <section class="colours_wrapper glass_wrapper d-flex flex-row flex-wrap justify-content-evenly" style="max-width: 13rem!important">
 
                         </section>
                  </div>
                </div>
              </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Gender
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <section class="colours_wrapper gender_wrapper d-flex flex-row justify-content-evenly">
            
                       </section>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="eb-tab right_product">
        <div class="d-flex flex-row align-items-center justify-content-center category_heading">
            <p id="show_filter">Show filters</p>
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
            
        </div>
    
    
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane card-paginat fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="d-flex flex-sm-row flex-sm-wrap justify-content-between align-items-center productsData" id="paginated-list" data-current-page="1" aria-live="polite">
                   
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
      
            </div>
    
            {{-- Women content here --}}
            <div class="tab-pane fade card-paginat" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="d-flex flex-row flex-wrap justify-content-evenly productsDataWomen" id="paginated-listWomen">
                   
                </div> 
            </div>
    
            {{-- Kids content here --}}
            <div class="tab-pane fade card-paginat" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="d-flex flex-row flex-wrap justify-content-evenly productsDatakids" id="paginated-listKids">
                </div>
            </div>
    
            {{-- PAGINATION HERE --}}
            {{-- <nav aria-label="Page navigation example">
                
        <div class="nav-btn-container">
            <button class="prev-btn">Prev</button>
            <ul>
    
            </ul>
            <button class="next-btn">Next</button>
        </div>
        </nav> --}}
        <div class="container-fluid d-flex flex-sm-row justify-content-center" style="margin-top: 3rem">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item nav-link-pagina prev-btn" ><a class="page-link">Previous</a></li>
              
                  <li class="page-item  nav-link-pagina next-btn" style="margin-left: .5rem"><a class="page-link">Next</a></li>
                </ul>
              </nav>
            </div>
        </div>
           
    </div>
</section>

</body>

    <script type="text/javascript">
    let toggleClose = document.getElementById('hide_close');
    let leftSide = document.querySelector('.left_product');
    let toggleOpen = document.getElementById('show_filter');
    let totalCartItem = document.querySelector('.total-items-in-cart');
    let totalCartQuant = sessionStorage.getItem('totalCartItem') || 0;
    totalCartItem.innerHTML = totalCartQuant;
   const loaderContainer = document.querySelector('.loader-container');
   let colorItems = document.querySelector('.colours_wrapper');
   let shapeItems = document.querySelector('.shape_wrapper');
   let genderItems = document.querySelector('.gender_wrapper');
   let glassItems = document.querySelector('.glass_wrapper');
   let shopContainer = document.querySelector('.shop_display');
   let rightProduct = document.querySelector('.right_product');
   let testVar = null
    // console.log(testVar);
    let bo = true;
   let formattedDate = new Date('2022-11-09T08:48:15.000000Z').toLocaleDateString('en-us', {  year:"numeric", month:"short", day:"numeric"}) 
    console.log(formattedDate);
   // "Friday, Jul 2, 2021"
   let tokenStatus = localStorage.getItem('token');
//    console.log(tokenStatus);
    let authButtons = document.querySelector('.button-container');
    console.log(authButtons);
    if(!tokenStatus){
        authButtons.innerHTML += `
        <div class="d-sm-flex flex-sm-row align-items-center flex-wrap button-wrapper but-wrapper-mobile">
            <a href="/login"><button class="login" type="button">Log In</button></a>
            <a href="/signup"><button class="signup" type="button">Sign Up</button></a>
        </div>
    `;
    }else{
        authButtons.innerHTML = ""
    } 
    
      
 
   const filterColor = (id) =>{
        if(testVar === null ){
            testVar = `?color_id[0]=${id}`;
        }else{
            testVar += `&color_id[0]=${id}`;
        }
        console.log(testVar);
        doCheck();
      }
      console.log(testVar);

    const filterShape = (id) =>{
        if(testVar === null ){
            testVar = `?shape_id[0]=${id}`;
        }else{
            testVar += `&shape_id[0]=${id}`;
        }
        console.log(testVar);
        showShape();
    }

    const filterGlasses = (id) =>{
        if(testVar === null ){
            testVar = `?glass_id[0]=${id}`;
        }else {
            testVar += `&glass_id[0]=${id}`;
        }
        console.log(testVar);
        showGlass();
    }

    const filterGender = (id) =>{
        if(testVar === null ){
            testVar = `?gender_id[0]=${id}`;
        }else {
            testVar += `&gender_id[0]=${id}`;
        }
        console.log(testVar);
        showGender();
    }

   
    // SEARCH PRODUCT FEATURE
    let inputData = document.getElementById('search');
    inputData.addEventListener('keyup',  function(e){
            if(e.key === 'Enter'){
                searchProduct();
            }
        });

    const searchProduct = () =>{
     

        if(inputData !== ''){
            testVar = `?search_query=${inputData.value}`;
        }
        console.log(testVar);
        displaySearchResult()
    }
    

        // LOGIC TO TOGGLE OPEN AND CLOSE THE LEFT FILTER
        const triggerSide = () => {
            shopContainer.classList.add('justify-content-evenly');
            leftSide.classList.add('closeSideNav');
            toggleOpen.style.display = 'block';
            leftSide.classList.remove('openSideNav');
            rightProduct.style.marginLeft = 'unset'

        }
        toggleClose.addEventListener('click', triggerSide);

        const triggerSideClose = () =>{
            shopContainer.classList.remove('justify-content-evenly');
            leftSide.classList.add('openSideNav');
            toggleOpen.style.display = 'none';
            leftSide.classList.remove('closeSideNav');
            rightProduct.style.marginLeft = '2rem'

        }
        toggleOpen.addEventListener('click', triggerSideClose);

     
    function getId(id){
        localStorage.setItem('productId', id);
        window.location.href = "/details"
        // alert(id);
    }
 

      const displayLoading = () => {
      loaderContainer.style.display = 'block';
      };

      const hideLoading = () => {
          loaderContainer.style.display = 'none';
      };


      const displaySearchResult = () =>{
        if(testVar !== null ){
        // alert(testVar) 
         // USING JQUERY AND AJAX
         $(function(){
    // Declare some global variables
        let page = 1,
		pagelimit = 18,
		totalrecord = 0;
        const baseURL= '{{ env('APP_URL') }}'
      displayLoading();

        fetchSearch();

        // handling the prev-btn
	$(".prev-btn").on("click", function(){
		if (page > 1) {
			page--;
			fetchSearch();
		}
        
		// console.log("Prev Page: " + page);
	});
   
  

    
	// handling the next-btn
	$(".next-btn").on("click", function(){
		if (page * pagelimit < totalrecord) {
			page++;
			fetchSearch();
		}
		// console.log("Next Page: " + page);
	});

 
        // Fetch the product data using Ajax
        function fetchSearch() {
            console.log(testVar);
		// ajax() method to make api calls
		$.ajax({
			url: `${baseURL}/api/product-list${testVar===null ? '' : testVar}`,
			type: "GET",
			data: {
				page: page,
				pagelimit: pagelimit
			},
			success: function(data) {
              hideLoading();
				console.log(data);
                console.log(data.products_list.data);

				if (data) {
					let dataArr =  data.products_list.data;
					totalrecord = data.products_list.total;
                    let currentPage = data.products_list.current_page;
            
                    const productItems = document.querySelector('.productsData');
                    const productItemsWomen = document.querySelector('.productsDataWomen');
                    const productItemsKids = document.querySelector('.productsDatakids');
                   
                    // Format price
                    const formatter = new Intl.NumberFormat('en-NG', {
                    style: 'currency',
                    currency: 'NGN',
                    });


                    // Get data for Men, women and kids
                    // MEN
                    const menProducts = dataArr.filter(menProduct => menProduct.productcategory_id === 1
            );
                    // console.log(menProducts);
                    // WOMEN
                    // Get women data

                    const womenProducts = dataArr.filter(womenProduct => womenProduct.productcategory_id === 2);
                    // console.log(womenProducts);

                    // KIDS
                      // Get Kids data
                    const kidsProducts = dataArr.filter(kidProduct => kidProduct.productcategory_id === 3);
                    // console.log(kidsProducts);

                    // DISPLAY MEN
                    let defaultImg = 'foremost_shopimage_1667983695.png'
                    let htmlMen;

                    dataArr.length <= 0 
                    ?
                    htmlMen = `<h4 class="no_productText text-center">No product found..<h4>`
                    :
				     htmlMen = "";
					for (var i = 0; i < dataArr.length; i++) {
						htmlMen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${dataArr[i].id})" data-id=${dataArr[i].id}>
                     
                       
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner car_image_wrapper">
                        <div class="carousel-item active">
                        <img src="${baseURL}/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[0].imagedirectory : defaultImg}" class="img-fluid" alt="shop men">
                        </div>
                        <div class="carousel-item">
                        <img src="${baseURL}/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[1].imagedirectory : defaultImg}" class="img-fluid" alt="Shop image">
                        </div>
                        <div class="carousel-item">
                        <img src="${baseURL}/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[2].imagedirectory : defaultImg}" class="img-fluid"  alt="Shop image">
                        </div>
                    </div>
                    </div>
                    
                    <div class="shop-card-heading">
                        <div>
                            <h4>${dataArr[i].name}</h4>
                            <p data="date-updated">Updated ${ new Date(dataArr[i].updated_at).toLocaleDateString('en-us', {  year:"numeric", month:"short", day:"numeric"})}</p>
                        </div>
                        <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{asset('customImages/ratings.png')}}" alt=""><span>(576)</span></li>
                        <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                            <div class="price-child d-flex flex-row">
                                <p>${formatter.format(dataArr[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                                <p>₦${formatter.format(dataArr[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                            </div>
                            <div onclick="addToCart()">
                              
                              <button type="button" class="shop-card-button">
                                  <img
                                  src="{{ asset('customImages/buyIcon.png') }}"
                                  />
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-list").html(htmlMen);

                     // DISPLAY WOMEN
                     let htmlWomen;

                    womenProducts.length <= 0 
                    ?
                    htmlWomen =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
					htmlWomen = "";
					for (var i = 0; i < womenProducts.length; i++) {
						htmlWomen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${womenProducts[i].id})" data-id=${womenProducts[i].id}>
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    </a>
                    <div class="shop-card-heading">
                        <div>
                            <h4>${womenProducts[i].name}</h4>
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
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-listWomen").html(htmlWomen);
                    let htmlKids;

                    kidsProducts.length <= 0 
                    ?
                    htmlKids =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
                    htmlKids = "";
					for (var i = 0; i < kidsProducts.length; i++) {
						htmlKids += `
                
                    <div class="shop-card e-card-link" onclick="getId(${kidsProducts[i].id})" data-id=${kidsProducts[i].id}>
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    <div class="shop-card-heading">
                        <div>
                            <h4>${kidsProducts[i].name}</h4>
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
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-listKids").html(htmlKids);

                            }
                        },
			error: function(jqXHR, textStatus, errorThrown) {
              hideLoading();
				console.log(jqXHR);
				console.log(textStatus);
				console.log(errorThrown);
			}
		});
	}
    
        });
    }
      }
      


      function doCheck(){
        if(testVar !== null ){
        // alert(testVar) 
         // USING JQUERY AND AJAX
         $(function(){
    // Declare some global variables
        let page = 1,
		pagelimit = 18,
		totalrecord = 0;
        const baseURL= '{{ env('APP_URL') }}'
      displayLoading();

        fetchColor();

        // handling the prev-btn
	$(".prev-btn").on("click", function(){
		if (page > 1) {
			page--;
			fetchColor();
		}
        
		// console.log("Prev Page: " + page);
	});
   
  

    
	// handling the next-btn
	$(".next-btn").on("click", function(){
		if (page * pagelimit < totalrecord) {
			page++;
			fetchColor();
		}
		// console.log("Next Page: " + page);
	});

 
        // Fetch the product data using Ajax
        function fetchColor() {
            console.log(testVar);
		// ajax() method to make api calls
		$.ajax({
			url: `${baseURL}/api/product-list${testVar===null ? '' : testVar}`,
			type: "GET",
			data: {
				page: page,
				pagelimit: pagelimit
			},
			success: function(data) {
              hideLoading();
				console.log(data);
                console.log(data.products_list.data);

				if (data) {
					let dataArr =  data.products_list.data;
					totalrecord = data.products_list.total;
                    let currentPage = data.products_list.current_page;
            
                    const productItems = document.querySelector('.productsData');
                    const productItemsWomen = document.querySelector('.productsDataWomen');
                    const productItemsKids = document.querySelector('.productsDatakids');
                   
                    // Format price
                    const formatter = new Intl.NumberFormat('en-NG', {
                    style: 'currency',
                    currency: 'NGN',
                    });


                    // Get data for Men, women and kids
                    // MEN
                    const menProducts = dataArr.filter(menProduct => menProduct.productcategory_id === 1
            );
                    // console.log(menProducts);
                    // WOMEN
                    // Get women data

                    const womenProducts = dataArr.filter(womenProduct => womenProduct.productcategory_id === 2);
                    // console.log(womenProducts);

                    // KIDS
                      // Get Kids data
                    const kidsProducts = dataArr.filter(kidProduct => kidProduct.productcategory_id === 3);
                    // console.log(kidsProducts);

                    // DISPLAY MEN
                    let defaultImg = 'foremost_shopimage_1667983695.png'
                    let htmlMen;

                    dataArr.length <= 0 
                    ?
                    htmlMen = `<h4 class="no_productText text-center">No product found..<h4>`
                    :
				     htmlMen = "";
					for (var i = 0; i < dataArr.length; i++) {
						htmlMen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${dataArr[i].id})" data-id=${dataArr[i].id}>
                     
                       
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner car_image_wrapper">
                        <div class="carousel-item active">
                        <img src="${baseURL}/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[0].imagedirectory : defaultImg}" class="img-fluid" alt="shop men">
                        </div>
                        <div class="carousel-item">
                        <img src="${baseURL}/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[1].imagedirectory : defaultImg}" class="img-fluid" alt="Shop image">
                        </div>
                        <div class="carousel-item">
                        <img src="${baseURL}/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[2].imagedirectory : defaultImg}" class="img-fluid"  alt="Shop image">
                        </div>
                    </div>
                    </div>
                    
                    <div class="shop-card-heading">
                        <div>
                            <h4>${dataArr[i].name}</h4>
                            <p data="date-updated">Updated ${ new Date(dataArr[i].updated_at).toLocaleDateString('en-us', {  year:"numeric", month:"short", day:"numeric"})}</p>
                        </div>
                        <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{asset('customImages/ratings.png')}}" alt=""><span>(576)</span></li>
                        <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                            <div class="price-child d-flex flex-row">
                                <p>${formatter.format(dataArr[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                                <p>₦${formatter.format(dataArr[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                            </div>
                            <div onclick="addToCart()">
                              
                              <button type="button" class="shop-card-button">
                                  <img
                                  src="{{ asset('customImages/buyIcon.png') }}"
                                  />
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-list").html(htmlMen);

                     // DISPLAY WOMEN
                     let htmlWomen;

                    womenProducts.length <= 0 
                    ?
                    htmlWomen =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
					htmlWomen = "";
					for (var i = 0; i < womenProducts.length; i++) {
						htmlWomen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${womenProducts[i].id})" data-id=${womenProducts[i].id}>
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    </a>
                    <div class="shop-card-heading">
                        <div>
                            <h4>${womenProducts[i].name}</h4>
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
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-listWomen").html(htmlWomen);
                    let htmlKids;

                    kidsProducts.length <= 0 
                    ?
                    htmlKids =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
                    htmlKids = "";
					for (var i = 0; i < kidsProducts.length; i++) {
						htmlKids += `
                
                    <div class="shop-card e-card-link" onclick="getId(${kidsProducts[i].id})" data-id=${kidsProducts[i].id}>
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    <div class="shop-card-heading">
                        <div>
                            <h4>${kidsProducts[i].name}</h4>
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
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-listKids").html(htmlKids);

                            }
                        },
			error: function(jqXHR, textStatus, errorThrown) {
              hideLoading();
				console.log(jqXHR);
				console.log(textStatus);
				console.log(errorThrown);
			}
		});
	}


    
        });
    }
    }


   const showShape = () =>{
    if(testVar !== null ){
        // alert(testVar) 
         // USING JQUERY AND AJAX
         $(function(){
    // Declare some global variables
        let page = 1,
		pagelimit = 18,
		totalrecord = 0;
        const baseURL= '{{ env('APP_URL') }}'
      displayLoading();

        fetchShape();

        // handling the prev-btn
	$(".prev-btn").on("click", function(){
		if (page > 1) {
			page--;
			fetchShape();
		}
        
		// console.log("Prev Page: " + page);
	});
   
  

    
	// handling the next-btn
	$(".next-btn").on("click", function(){
		if (page * pagelimit < totalrecord) {
			page++;
			fetchColour();
		}
		// console.log("Next Page: " + page);
	});

 
        // Fetch the product data using Ajax
        function fetchShape() {
            console.log(testVar);
		// ajax() method to make api calls
		$.ajax({
			url: `${baseURL}/api/product-list${testVar===null ? '' : testVar}`,
			type: "GET",
			data: {
				page: page,
				pagelimit: pagelimit
			},
			success: function(data) {
              hideLoading();
				console.log(data);
                console.log(data.products_list.data);

				if (data) {
					let dataArr =  data.products_list.data;
					totalrecord = data.products_list.total;
                    let currentPage = data.products_list.current_page;
        
            
                    const productItems = document.querySelector('.productsData');
                    const productItemsWomen = document.querySelector('.productsDataWomen');
                    const productItemsKids = document.querySelector('.productsDatakids');
                   
                    // Format price
                    const formatter = new Intl.NumberFormat('en-NG', {
                    style: 'currency',
                    currency: 'NGN',
                    });


                    // Get data for Men, women and kids
                    // MEN
                    const menProducts = dataArr.filter(menProduct => menProduct.productcategory_id === 1
            );
                    // console.log(menProducts);
                    // WOMEN
                    // Get women data

                    const womenProducts = dataArr.filter(womenProduct => womenProduct.productcategory_id === 2);
                    // console.log(womenProducts);

                    // KIDS
                      // Get Kids data
                    const kidsProducts = dataArr.filter(kidProduct => kidProduct.productcategory_id === 3);
                    // console.log(kidsProducts);

                    // DISPLAY MEN
                    let defaultImg = 'foremost_shopimage_1667983695.png'
                    let htmlMen;

                    dataArr.length <= 0 
                    ?
                    htmlMen =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
				     htmlMen = "";
					for (var i = 0; i < dataArr.length; i++) {
						htmlMen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${dataArr[i].id})" data-id=${dataArr[i].id}>
                     
                       
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner car_image_wrapper">
                        <div class="carousel-item active">
                        <img src="baseURL/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[0].imagedirectory : defaultImg}" class="img-fluid" alt="shop men">
                        </div>
                        <div class="carousel-item">
                        <img src="baseURL/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[1].imagedirectory : defaultImg}" class="img-fluid" alt="Shop image">
                        </div>
                        <div class="carousel-item">
                        <img src="baseURL/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[2].imagedirectory : defaultImg}" class="img-fluid"  alt="Shop image">
                        </div>
                    </div>
                    </div>
                    
                    <div class="shop-card-heading">
                        <div>
                            <h4>${dataArr[i].name}</h4>
                            <p data="date-updated">Updated ${ new Date(dataArr[i].updated_at).toLocaleDateString('en-us', {  year:"numeric", month:"short", day:"numeric"})}</p>
                        </div>
                        <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{asset('customImages/ratings.png')}}" alt=""><span>(576)</span></li>
                        <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                            <div class="price-child d-flex flex-row">
                                <p>${formatter.format(dataArr[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                                <p>₦${formatter.format(dataArr[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                            </div>
                            <div onclick="addToCart()">
                              
                              <button type="button" class="shop-card-button">
                                  <img
                                  src="{{ asset('customImages/buyIcon.png') }}"
                                  />
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-list").html(htmlMen);

                     // DISPLAY WOMEN
                     let htmlWomen;

                    womenProducts.length <= 0 
                    ?
                    htmlWomen =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
					htmlWomen = "";
					for (var i = 0; i < womenProducts.length; i++) {
						htmlWomen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${womenProducts[i].id})" data-id=${womenProducts[i].id}>
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    </a>
                    <div class="shop-card-heading">
                        <div>
                            <h4>${womenProducts[i].name}</h4>
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
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-listWomen").html(htmlWomen);
                    let htmlKids;

                    kidsProducts.length <= 0 
                    ?
                    htmlKids =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
                    htmlKids = "";
					for (var i = 0; i < kidsProducts.length; i++) {
						htmlKids += `
                
                    <div class="shop-card e-card-link" onclick="getId(${kidsProducts[i].id})" data-id=${kidsProducts[i].id}>
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    <div class="shop-card-heading">
                        <div>
                            <h4>${kidsProducts[i].name}</h4>
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
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-listKids").html(htmlKids);

                            }
                        },
			error: function(jqXHR, textStatus, errorThrown) {
              hideLoading();
				console.log(jqXHR);
				console.log(textStatus);
				console.log(errorThrown);
			}
		});
	}


    
        });
    }
   }

   const showGender = () =>{
    if(testVar !== null ){
        // alert(testVar) 
         // USING JQUERY AND AJAX
         $(function(){
    // Declare some global variables
        let page = 1,
		pagelimit = 18,
		totalrecord = 0;
        const baseURL= '{{ env('APP_URL') }}'
      displayLoading();

        fetchGender();

        // handling the prev-btn
	$(".prev-btn").on("click", function(){
		if (page > 1) {
			page--;
			fetchGender();
		}
        
		// console.log("Prev Page: " + page);
	});

	// handling the next-btn
	$(".next-btn").on("click", function(){
		if (page * pagelimit < totalrecord) {
			page++;
			fetchGender();
		}
		// console.log("Next Page: " + page);
	});

 
        // Fetch the product data using Ajax
        function fetchGender() {
            console.log(testVar);
		// ajax() method to make api calls
		$.ajax({
			url: `${baseURL}/api/product-list${testVar===null ? '' : testVar}`,
			type: "GET",
			data: {
				page: page,
				pagelimit: pagelimit
			},
			success: function(data) {
              hideLoading();
				console.log(data);
                console.log(data.products_list.data);

				if (data) {
					let dataArr =  data.products_list.data;
					totalrecord = data.products_list.total;
                    let currentPage = data.products_list.current_page;
        
                    
                    const productItems = document.querySelector('.productsData');
                    const productItemsWomen = document.querySelector('.productsDataWomen');
                    const productItemsKids = document.querySelector('.productsDatakids');
                   
                    // Format price
                    const formatter = new Intl.NumberFormat('en-NG', {
                    style: 'currency',
                    currency: 'NGN',
                    });


                    // Get data for Men, women and kids
                    // MEN
                    const menProducts = dataArr.filter(menProduct => menProduct.productcategory_id === 1
            );
                    // console.log(menProducts);
                    // WOMEN
                    // Get women data

                    const womenProducts = dataArr.filter(womenProduct => womenProduct.productcategory_id === 2);
                    // console.log(womenProducts);

                    // KIDS
                      // Get Kids data
                    const kidsProducts = dataArr.filter(kidProduct => kidProduct.productcategory_id === 3);
                    // console.log(kidsProducts);

                    // DISPLAY MEN
                    let defaultImg = 'foremost_shopimage_1667983695.png'
                    let htmlMen;

                    dataArr.length <= 0 
                    ?
                    htmlMen =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
				     htmlMen = "";
					for (var i = 0; i < dataArr.length; i++) {
						htmlMen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${dataArr[i].id})" data-id=${dataArr[i].id}>
                     
                       
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner car_image_wrapper">
                        <div class="carousel-item active">
                        <img src="baseURL/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[0].imagedirectory : defaultImg}" class="img-fluid" alt="shop men">
                        </div>
                        <div class="carousel-item">
                        <img src="baseURL/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[1].imagedirectory : defaultImg}" class="img-fluid" alt="Shop image">
                        </div>
                        <div class="carousel-item">
                        <img src="baseURL/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[2].imagedirectory : defaultImg}" class="img-fluid"  alt="Shop image">
                        </div>
                    </div>
                    </div>
                    
                    <div class="shop-card-heading">
                        <div>
                            <h4>${dataArr[i].name}</h4>
                            <p data="date-updated">Updated ${ new Date(dataArr[i].updated_at).toLocaleDateString('en-us', {  year:"numeric", month:"short", day:"numeric"})}</p>
                        </div>
                        <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{asset('customImages/ratings.png')}}" alt=""><span>(576)</span></li>
                        <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                            <div class="price-child d-flex flex-row">
                                <p>${formatter.format(dataArr[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                                <p>₦${formatter.format(dataArr[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                            </div>
                            <div onclick="addToCart()">
                              
                              <button type="button" class="shop-card-button">
                                  <img
                                  src="{{ asset('customImages/buyIcon.png') }}"
                                  />
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-list").html(htmlMen);

                     // DISPLAY WOMEN
                     let htmlWomen;

                    womenProducts.length <= 0 
                    ?
                    htmlWomen =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
					htmlWomen = "";
					for (var i = 0; i < womenProducts.length; i++) {
						htmlWomen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${womenProducts[i].id})" data-id=${womenProducts[i].id}>
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    </a>
                    <div class="shop-card-heading">
                        <div>
                            <h4>${womenProducts[i].name}</h4>
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
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-listWomen").html(htmlWomen);
                    let htmlKids;

                    kidsProducts.length <= 0 
                    ?
                    htmlKids =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
                    htmlKids = "";
					for (var i = 0; i < kidsProducts.length; i++) {
						htmlKids += `
                
                    <div class="shop-card e-card-link" onclick="getId(${kidsProducts[i].id})" data-id=${kidsProducts[i].id}>
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    <div class="shop-card-heading">
                        <div>
                            <h4>${kidsProducts[i].name}</h4>
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
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-listKids").html(htmlKids);

                            }
                        },
			error: function(jqXHR, textStatus, errorThrown) {
              hideLoading();
				console.log(jqXHR);
				console.log(textStatus);
				console.log(errorThrown);
			}
		});
	}


    
        });
    }
   }



   const showGlass = () =>{
    if(testVar !== null ){
        // alert(testVar) 
         // USING JQUERY AND AJAX
         $(function(){
    // Declare some global variables
        let page = 1,
		pagelimit = 18,
		totalrecord = 0;
        const baseURL= '{{ env('APP_URL') }}'
      displayLoading();

        fetchGlass();

        // handling the prev-btn
	$(".prev-btn").on("click", function(){
		if (page > 1) {
			page--;
			fetchGlass();
		}
        
		// console.log("Prev Page: " + page);
	});

	// handling the next-btn
	$(".next-btn").on("click", function(){
		if (page * pagelimit < totalrecord) {
			page++;
			fetchGlass();
		}
		// console.log("Next Page: " + page);
	});

 
        // Fetch the product data using Ajax
        function fetchGlass() {
            console.log(testVar);
		// ajax() method to make api calls
		$.ajax({
			url: `${baseURL}/api/product-list${testVar===null ? '' : testVar}`,
			type: "GET",
			data: {
				page: page,
				pagelimit: pagelimit
			},
			success: function(data) {
              hideLoading();
				console.log(data);
                console.log(data.products_list.data);

				if (data) {
					let dataArr =  data.products_list.data;
					totalrecord = data.products_list.total;
                    let currentPage = data.products_list.current_page;
        
                    
                    const productItems = document.querySelector('.productsData');
                    const productItemsWomen = document.querySelector('.productsDataWomen');
                    const productItemsKids = document.querySelector('.productsDatakids');
                   
                    // Format price
                    const formatter = new Intl.NumberFormat('en-NG', {
                    style: 'currency',
                    currency: 'NGN',
                    });


                    // Get data for Men, women and kids
                    // MEN
                    const menProducts = dataArr.filter(menProduct => menProduct.productcategory_id === 1
            );
                    // console.log(menProducts);
                    // WOMEN
                    // Get women data

                    const womenProducts = dataArr.filter(womenProduct => womenProduct.productcategory_id === 2);
                    // console.log(womenProducts);

                    // KIDS
                      // Get Kids data
                    const kidsProducts = dataArr.filter(kidProduct => kidProduct.productcategory_id === 3);
                    // console.log(kidsProducts);

                    // DISPLAY MEN
                    let defaultImg = 'foremost_shopimage_1667983695.png'
                    let htmlMen;

                    dataArr.length <= 0 
                    ?
                    htmlMen =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
				     htmlMen = "";
					for (var i = 0; i < dataArr.length; i++) {
						htmlMen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${dataArr[i].id})" data-id=${dataArr[i].id}>
                     
                       
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner car_image_wrapper">
                        <div class="carousel-item active">
                        <img src="http://127.0.0.1:8000/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[0].imagedirectory : defaultImg}" class="img-fluid" alt="shop men">
                        </div>
                        <div class="carousel-item">
                        <img src="http://127.0.0.1:8000/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[1].imagedirectory : defaultImg}" class="img-fluid" alt="Shop image">
                        </div>
                        <div class="carousel-item">
                        <img src="http://127.0.0.1:8000/storage/product_image/${dataArr[i].productimages !== '' ? dataArr[i].productimages[2].imagedirectory : defaultImg}" class="img-fluid"  alt="Shop image">
                        </div>
                    </div>
                    </div>
                    
                    <div class="shop-card-heading">
                        <div>
                            <h4>${dataArr[i].name}</h4>
                            <p data="date-updated">Updated ${ new Date(dataArr[i].updated_at).toLocaleDateString('en-us', {  year:"numeric", month:"short", day:"numeric"})}</p>
                        </div>
                        <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{asset('customImages/ratings.png')}}" alt=""><span>(576)</span></li>
                        <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                            <div class="price-child d-flex flex-row">
                                <p>${formatter.format(dataArr[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                                <p>₦${formatter.format(dataArr[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                            </div>
                            <div onclick="addToCart()">
                              
                              <button type="button" class="shop-card-button">
                                  <img
                                  src="{{ asset('customImages/buyIcon.png') }}"
                                  />
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-list").html(htmlMen);

                     // DISPLAY WOMEN
                     let htmlWomen;

                    womenProducts.length <= 0 
                    ?
                    htmlWomen =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
					htmlWomen = "";
					for (var i = 0; i < womenProducts.length; i++) {
						htmlWomen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${womenProducts[i].id})" data-id=${womenProducts[i].id}>
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    </a>
                    <div class="shop-card-heading">
                        <div>
                            <h4>${womenProducts[i].name}</h4>
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
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-listWomen").html(htmlWomen);
                    let htmlKids;

                    kidsProducts.length <= 0 
                    ?
                    htmlKids =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
                    htmlKids = "";
					for (var i = 0; i < kidsProducts.length; i++) {
						htmlKids += `
                
                    <div class="shop-card e-card-link" onclick="getId(${kidsProducts[i].id})" data-id=${kidsProducts[i].id}>
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    <div class="shop-card-heading">
                        <div>
                            <h4>${kidsProducts[i].name}</h4>
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
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-listKids").html(htmlKids);

                            }
                        },
			error: function(jqXHR, textStatus, errorThrown) {
              hideLoading();
				console.log(jqXHR);
				console.log(textStatus);
				console.log(errorThrown);
			}
		});
	}


    
        });
    }
   }

        // USING JQUERY AND AJAX
        $(function(){
    // Declare some global variables
        let page = 1,
		pagelimit = 18,
		totalrecord = 0;
        const baseURL= '{{ env('APP_URL') }}'
      displayLoading();

          fetchProduct();

        // handling the prev-btn
	$(".prev-btn").on("click", function(){
		if (page > 1 && testVar === null) {
			page--;
			fetchProduct();
		}
        
		// console.log("Prev Page: " + page);
	});
   
  

    
	// handling the next-btn
	$(".next-btn").on("click", function(){
		if (page * pagelimit < totalrecord) {
			page++;
			fetchProduct();
		}
		// console.log("Next Page: " + page);
	});

 
        // Fetch the product data using Ajax
        function fetchProduct() {
            console.log(testVar);
		// ajax() method to make api calls
		$.ajax({
			url: `${baseURL}/api/product-list${testVar===null ? '' : testVar}`,
			type: "GET",
			data: {
				page: page,
				pagelimit: pagelimit
			},
			success: function(data) {
              hideLoading();
				console.log(data);
                console.log(data.products_list.data);

				if (data) {
					let dataArr = data.products_list.data;
					totalrecord = data.products_list.total;
                    let currentPage = data.products_list.current_page;

                   
                    let colorArr = dataArr.map(colorA=>{
                        return colorA.colorcategory
                    })
                    console.log(colorArr);
                    let color_category = colorArr.filter(elem=>{
                        // console.log(elem);
                       return elem !== null;
                    })
                    console.log(color_category);

                    let colorId = []
                    console.log(colorId);

                    color_category.map(el=>{
                       if(colorId.find(object=>{
                        if(object.id === el.id && object.color === el.color){
                            object++
                            return true;
                        }else{
                            return false;
                        }
                       })){

                       }else{
                        colorId.push(el);
                       }

                    })
                    colorItems < 1
                    ?
                    colorItems.innerHTML = "No color category found"
                    :
                    colorId.map(element =>{
                        return colorItems.innerHTML += `
                        <div class="colours_wrapper--left">
                            <div onclick="filterColor( ${element.id})" class="color_container d-flex flex-row align-items-baseline justify-content-evenly">
                            <i class="fa fa-square fa-lg" style="color: ${element.color}; "></i>
                                <p>${element.color}</p>
                            </div>
                            </div>
                        `;
                    })


                    // GET AND DISPLAY SHAPE CATEGORIES
                    let shapeArr = dataArr.map(shapeA=>{
                        return shapeA.shapecategory
                    })
                    // console.log(shapeArr);
                    let shape_category = shapeArr.filter(elem=>{
                        // console.log(elem);
                       return elem !== null;
                    })
                    console.log(shape_category);

                    let shapeId = []
                    console.log(shapeId);

                    shape_category.map(el=>{
                       if(shapeId.find(object=>{
                        if(object.id === el.id && object.shape === el.shape){
                            object++
                            return true;
                        }else{
                            return false;
                        }
                       })){

                       }else{
                        shapeId.push(el);
                       }

                    })
                    // console.log(uniqueShape);

                    shapeItems < 1
                    ?
                    shapeItems.innerHTML = "No face shape category found"
                    :
                    shapeId.map(elem =>{
                        return shapeItems.innerHTML += `
                        <div class="colours_wrapper--left">
                            <div onclick="filterShape(${elem.id})" class="color_container d-flex flex-row align-items-baseline justify-content-evenly">
                                <p>${elem.shape}</p>
                            </div>
                            </div>
                        `;
                    })

                    // GET AN DISPLAY GENDER FROM THE DATABASE
                    let genderArr = dataArr.map(genderA=>{
                        return genderA.gendercategory
                    })
                    console.log(genderArr);
                    let gender_category = genderArr.filter(elem=>{
                        // console.log(elem);
                       return elem !== null;
                    })
                    // console.log(gender_category);

                    let genderId = []
                    console.log(genderId);

                    gender_category.map(el=>{
                       if(genderId.find(object=>{
                        if(object.id === el.id && object.gender === el.gender){
                            object++
                            return true;
                        }else{
                            return false;
                        }
                       })){

                       }else{
                        genderId.push(el);
                       }

                    })

                    genderItems < 1
                    ?
                    genderItems.innerHTML = "No gender category found"
                    :
                    genderId.map(elem =>{
                        return genderItems.innerHTML += `
                        <div class="colours_wrapper--left">
                            <div onclick="filterGender(${elem.id})" class="color_container d-flex flex-row align-items-baseline justify-content-evenly">
                                <p>${elem.gender}</p>
                            </div>
                            </div>
                        `;
                    })

                    // GET AND DISPLAY GLASS CATEGORIES FROM THE DATABASE
                    let glassArr = dataArr.map(glassA=>{
                        return glassA.glasscategory
                    })
                    console.log(glassArr);
                    let glass_category = glassArr.filter(elem=>{
                        // console.log(elem);
                       return elem !== null;
                    })
                    console.log(glass_category);

                    let glassId = []
                    console.log(glassId);

                    glass_category.map(el=>{
                       if(glassId.find(object=>{
                        if(object.id === el.id && object.glass === el.glass){
                            object++
                            return true;
                        }else{
                            return false;
                        }
                       })){

                       }else{
                        glassId.push(el);
                       }

                    })
                    glassItems < 1
                    ?
                    glassItems.innerHTML = "No glass category found"
                    :
                    glassId.map(elem =>{
                        return glassItems.innerHTML += `
                        <div class="colours_wrapper--left">
                                <div onclick="filterGlasses(${elem.id})" class="color_container">
                                    <p>${elem.glass}</p>
                                </div>
                                
                            </div>
                        `;
                    })
            
                    const productItems = document.querySelector('.productsData');
                    const productItemsWomen = document.querySelector('.productsDataWomen');
                    const productItemsKids = document.querySelector('.productsDatakids');
                   
                    // Format price
                    const formatter = new Intl.NumberFormat('en-NG', {
                    style: 'currency',
                    currency: 'NGN',
                    });


                    // Get data for Men, women and kids
                    // MEN
                    const menProducts = dataArr.filter(menProduct => menProduct.gender_categories_id === 1
            );
                    // console.log(menProducts);

                    // WOMEN
                    // Get women data
                    const womenProducts = dataArr.filter(womenProduct => womenProduct.gender_categories_id === 2);
                    console.log(womenProducts);

                    // KIDS
                      // Get Kids data
                    const kidsProducts = dataArr.filter(kidProduct => kidProduct.gender_categories_id === 3);
                    console.log(kidsProducts);

                    // DISPLAY MEN
                    let defaultImg = 'foremost_shopimage_1667983695.png'
                    let htmlMen;

                    dataArr.length <= 0 
                    ?
                    htmlMen =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
				     htmlMen = "";
					for (var i = 0; i < menProducts.length; i++) {
						htmlMen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${menProducts[i].id})" data-id=${menProducts[i].id}>
                     
                       
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner car_image_wrapper">
                        <div class="carousel-item active">
                        <img src="${baseURL}/storage/product_image/${menProducts[i].productimages !== '' ? menProducts[i].productimages[0].imagedirectory : defaultImg}" class="img-fluid" alt="shop men">
                        </div>
                        <div class="carousel-item">
                        <img src="${baseURL}/storage/product_image/${menProducts[i].productimages !== '' ? menProducts[i].productimages[1].imagedirectory : defaultImg}" class="img-fluid" alt="Shop image">
                        </div>
                        <div class="carousel-item">
                        <img src="${baseURL}/storage/product_image/${menProducts[i].productimages !== '' ? menProducts[i].productimages[2].imagedirectory : defaultImg}" class="img-fluid"  alt="Shop image">
                        </div>
                    </div>
                    </div>
                    
                    <div class="shop-card-heading">
                        <div>
                            <h4>${menProducts[i].name}</h4>
                            <p data="date-updated">Updated ${ new Date(menProducts[i].updated_at).toLocaleDateString('en-us', {  year:"numeric", month:"short", day:"numeric"})}</p>
                        </div>
                        <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{asset('customImages/ratings.png')}}" alt=""><span>(576)</span></li>
                        <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                            <div class="price-child d-flex flex-row">
                                <p>${formatter.format(menProducts[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                                <p>${formatter.format(menProducts[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                            </div>
                            <div onclick="addToCart()">
                              
                              <button type="button" class="shop-card-button">
                                  <img
                                  src="{{ asset('customImages/buyIcon.png') }}"
                                  />
                                  View
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-list").html(htmlMen);

                     // DISPLAY WOMEN
                     let htmlWomen;

                    womenProducts.length <= 0 
                    ?
                    htmlWomen =  `<h4 class="no_productText text-center">No product found..<h4>`
                    :
					htmlWomen = "";
					for (var i = 0; i < womenProducts.length; i++) {
						htmlWomen += `
                
                        <div class="shop-card e-card-link" onclick="getId(${womenProducts[i].id})" data-id=${womenProducts[i].id}>
                     
                       
                     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-inner car_image_wrapper">
                         <div class="carousel-item active">
                         <img src="${baseURL}/storage/product_image/${womenProducts[i].productimages !== '' ? womenProducts[i].productimages[0].imagedirectory : defaultImg}" class="img-fluid" alt="shop men">
                         </div>
                         <div class="carousel-item">
                         <img src="${baseURL}/storage/product_image/${womenProducts[i].productimages !== '' ? womenProducts[i].productimages[1].imagedirectory : defaultImg}" class="img-fluid" alt="Shop image">
                         </div>
                         <div class="carousel-item">
                         <img src="${baseURL}/storage/product_image/${womenProducts[i].productimages !== '' ? womenProducts[i].productimages[2].imagedirectory : defaultImg}" class="img-fluid"  alt="Shop image">
                         </div>
                     </div>
                     </div>
                     
                     <div class="shop-card-heading">
                         <div>
                             <h4>${womenProducts[i].name}</h4>
                             <p data="date-updated">Updated ${ new Date(womenProducts[i].updated_at).toLocaleDateString('en-us', {  year:"numeric", month:"short", day:"numeric"})}</p>
                         </div>
                         <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{asset('customImages/ratings.png')}}" alt=""><span>(576)</span></li>
                         <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                             <div class="price-child d-flex flex-row">
                                 <p>${formatter.format(womenProducts[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                                 <p>${formatter.format(womenProducts[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                             </div>
                             <div onclick="addToCart()">
                               
                               <button type="button" class="shop-card-button">
                                   <img
                                   src="{{ asset('customImages/buyIcon.png') }}"
                                   />
                                   View
                               </button>
                               </div>
                         </div>
                     </div>
                 </div>
                `;
					}
					$("#paginated-listWomen").html(htmlWomen);
                    let htmlKids;

                    kidsProducts.length <= 0 
                    ?
                    htmlKids = `<h4 class="no_productText text-center">No product found..<h4>`
                    :
                    htmlKids = "";
					for (var i = 0; i < kidsProducts.length; i++) {
						htmlKids += `
                
                        <div class="shop-card e-card-link" onclick="getId(${kidsProducts[i].id})" data-id=${kidsProducts[i].id}>
                     
                       
                     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-inner car_image_wrapper">
                         <div class="carousel-item active">
                         <img src="${baseURL}/storage/product_image/${kidsProducts[i].productimages !== '' ? kidsProducts[i].productimages[0].imagedirectory : defaultImg}" class="img-fluid" alt="shop men">
                         </div>
                         <div class="carousel-item">
                         <img src="${baseURL}/storage/product_image/${kidsProducts[i].productimages !== '' ? kidsProducts[i].productimages[1].imagedirectory : defaultImg}" class="img-fluid" alt="Shop image">
                         </div>
                         <div class="carousel-item">
                         <img src="${baseURL}/storage/product_image/${kidsProducts[i].productimages !== '' ? kidsProducts[i].productimages[2].imagedirectory : defaultImg}" class="img-fluid"  alt="Shop image">
                         </div>
                     </div>
                     </div>
                     
                     <div class="shop-card-heading">
                         <div>
                             <h4>${kidsProducts[i].name}</h4>
                             <p data="date-updated">Updated ${ new Date(kidsProducts[i].updated_at).toLocaleDateString('en-us', {  year:"numeric", month:"short", day:"numeric"})}</p>
                         </div>
                         <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{asset('customImages/ratings.png')}}" alt=""><span>(576)</span></li>
                         <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                             <div class="price-child d-flex flex-row">
                                 <p>${formatter.format(kidsProducts[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                                 <p>${formatter.format(kidsProducts[i].productprices[0].product_price).replace(/(\.|,)00$/g, '')}</p>
                             </div>
                             <div onclick="addToCart()">
                               
                               <button type="button" class="shop-card-button">
                                   <img
                                   src="{{ asset('customImages/buyIcon.png') }}"
                                   />
                                   View
                               </button>
                               </div>
                         </div>
                     </div>
                 </div>
                `;
					}
					$("#paginated-listKids").html(htmlKids);

                            }
                    //                      // GET AND DISPLAY PAGE NUMBERS
                    // function pagination(current, total) {
                    // const center = [current - 2, current - 1, current, current + 1, current + 2],
                    //     filteredCenter = center.filter((p) => p > 1 && p < total),
                    //     includeThreeLeft = current === 5,
                    //     includeThreeRight = current === total - 4,
                    //     includeLeftDots = current > 5,
                    //     includeRightDots = current < total - 4;

                    // if (includeThreeLeft) filteredCenter.unshift(2)
                    // if (includeThreeRight) filteredCenter.push(total - 1)

                    // if (includeLeftDots) filteredCenter.unshift('...');
                    // if (includeRightDots) filteredCenter.push('...');

                    // return [1, ...filteredCenter, total]
                    // }


        // let page_numbers = pagination(currentPage, totalrecord);
        //             console.log(page_numbers);
        //             page_numbers.map(page=>{
        //                 console.log(page);
        //             let paginationLinks = document.querySelector('.pagination');
        //             paginationLinks.innerHTML +=`
        //   <li class="page-item"><a class="page-link" id="actualLink" href="http://127.0.0.1:8000/api/product-list?page=${page}">${page}</a></li>
        //     `;
        //             })
                        },
			error: function(jqXHR, textStatus, errorThrown) {
              hideLoading();
				console.log(jqXHR);
				console.log(textStatus);
				console.log(errorThrown);
			}
		});
	}


    
        });
           
          </script>

@endsection