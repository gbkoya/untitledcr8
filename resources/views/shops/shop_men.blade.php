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
    <div class="container-fluid d-flex flex-sm-row justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item nav-link-pagina prev-btn" ><a class="page-link">Previous</a></li>
          
              <li class="page-item  nav-link-pagina next-btn" style="margin-left: .5rem"><a class="page-link">Next</a></li>
            </ul>
          </nav>
        </div>
    </div>
       
</div>

</body>

    <script type="text/javascript">
   
   const loaderContainer = document.querySelector('.loader-container');

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
   
        // USING JQUERY AND AJAX
        $(function(){
    // Declare some global variables
        let page = 1,
		pagelimit = 12,
		totalrecord = 0;
        const baseURL= '{{ env('APP_URL') }}'
      displayLoading();

        fetchProduct();

        // handling the prev-btn
	$(".prev-btn").on("click", function(){
		if (page > 1) {
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
		// ajax() method to make api calls
		$.ajax({
			url: `${baseURL}/api/product-list`,
			type: "GET",
			data: {
				page: page,
				pagelimit: pagelimit
			},
			success: function(data) {
              hideLoading();
				console.log(data);

				if (data) {
					let dataArr = data.products_list.data;
					totalrecord = data.products_list.total;
                    let currentPage = data.products_list.current_page;
                    const productItems = document.querySelector('.productsData');
                    const productItemsWomen = document.querySelector('.productsDataWomen');
                    const productItemsKids = document.querySelector('.productsDatakids');

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
					var htmlMen = "";
					for (var i = 0; i < menProducts.length; i++) {
						htmlMen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${menProducts[i].id})" data-id=${menProducts[i].id}>
                      <img class="img-fluid
                      data-bs-toggle="tooltip" data-bs-placement="top" title="View details"
                      "
                       src="{{asset('customImages/shopimage.png')}}" alt="Shop image"/> 
                    
                    <div class="shop-card-heading">
                        <div>
                            <h4>${menProducts[i].name}</h4>
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
					}
					$("#paginated-list").html(htmlMen);

                     // DISPLAY WOMEN
					var htmlWomen = "";
					for (var i = 0; i < womenProducts.length; i++) {
						htmlWomen += `
                
                    <div class="shop-card e-card-link" onclick="getId(${menProducts[i].id})" data-id=${womenProducts[i].id}>
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
                                  Add
                              </button>
                              </div>
                        </div>
                    </div>
                </div>
                `;
					}
					$("#paginated-listWomen").html(htmlWomen);

                    var htmlKids = "";
					for (var i = 0; i < kidsProducts.length; i++) {
						htmlKids += `
                
                    <div class="shop-card e-card-link" onclick="getId(${menProducts[i].id})" data-id=${kidsProducts[i].id}>
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
                                  Add
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
    
            
        //     menCards.forEach(card =>{
        //         card.addEventListener('click', ()=>{
        //             //  window.location.href = "/details"

        //         console.log('yea');

        //             // let cardId = card.getAttribute("data-id");
        //             // // localSorage.setItem('productId', cardId);
        //             // localStorage.setItem('product_id', cardId);
        //             // //  window.location.href = "/details"
        //             // console.log(cardId);

        //         })
        //     })
        //     function getItemID(){
        //         // alert(menCards);
       

        // }
        // getItemID();

        
          </script>

@endsection