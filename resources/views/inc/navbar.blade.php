<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom nav_mobile shadow-0" id="navMain"
onload="displayName();">
    <div class="container-fluid">
        <a class="navbar-brand colored-logo" href="/" style="margin-left: 4%;">
            <img class="img-fluid" src="{{ asset('customImages/Logo.png') }}">
        </a>
        {{-- <a class="navbar-brand light-logo" href="/" style="margin-left: 7%;">
            <img src="{{ asset('customImages/Archware-logo-light-variation.svg') }}">
        </a> --}}
        <!-- HAMBURGER -->
        {{-- <button class="navbar-toggler hamburger-icon hamburger-desktop" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button> --}}
       
        <div class="d-flex flex-row align-items-center gap-2">

            <button class="navbar-toggler hamburger-icon hamburger-mobile" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" >
                <i class="fas fa-bars"></i>
            </button>
            <img class="img-fluid search-iconNav" src="{{ asset('customImages/search.svg') }}" alt="search icon">
            <div class="e-cart-wrapper">
                <a href="/cart" class="position-relative">
                    <img src="{{ asset('customImages/Cart.svg') }}"  alt="cart icon">
                    {{-- <p class="total-number-of-items cart-quant"><span>0</span></p> --}}
                    <span class="total-number-of-items position-absolute top-0 start-100 translate-middle badge rounded-pill cart-quant">
                        0
                        <span class="visually-hidden">unread messages</span>
                </a>
            </div>
           
        </div>
        <div class="collapse navbar-collapse right-nav" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto nav-links-a" style="">
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/">Home</a>
                </li>
                {{-- <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" style="scroll-behavior: smooth;" href="/about">About
                        Us</a>
                </li> --}}

                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/first-service">Services</a>
                </li>
                <!-- <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/services">Services</a>
                </li> -->
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/contact">Contact Us</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/blog">Blog</a>
                </li>
                {{-- <li class="nav-item px-3">

                    <a class="nav-link archware-nav-title" href="/login">Login</a>
                </li> --}}
                <div class="dropdown e-drop-nav" style="margin: .4rem 1.3rem; z-index: 1000" title="Account">
                    {{-- <li class="dropdown-toggle nav-item" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer; font-size: .83rem">
                      Hello, <span class="welcome-name"></span><br>
                      Account
                    </li> --}}
                    <li class="dropdown-toggle nav-item" 
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                    ><i class="fa fa-user fa-xl"></i>
                </li>
                  <li class="greetings"><span class="welcome-name"> </span></li>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 1000">
                      <li><a class="dropdown-item archware-nav-title-drop" href="#">Orders</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li id="triggerLogout"
                      style="cursor: pointer">
                    </li> 
                    </ul>
                  </div>

                  <li class="nav-item px-3 mobile_dropdownNav" 
                  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"
                  {{-- id="slidToggle" --}}
                    ><i class="fa fa-user fa-xl"></i>
                  </li>
                  <li>
                    {{-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button> --}}

                    <div class="offcanvas offcanvas-start category-desktop" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        {{-- <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5> --}}
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body drawerContent-wrapper">
                        <h3 class="slideCat-heading">Welcome</h3>
                        <div class="d-flex flex-row gap-2 mobile_loginDraw button-containerMobile">
                           
                        </div>
                        <ul class="" style="list-style-type: none" class="logout-wrapperSlider">
                            {{-- <li><a class="dropdown-item" href="#">Orders</a></li> --}}
                            <li id="triggerLogoutMobile"
                            style="cursor: pointer;" class="logout-slider">
                            {{-- <span class="dropdown-item">Logout</span> --}}
                          </li> 
                            <li><hr class=""></li>
                           
                          </ul>
                    {{-- </a> --}}
{{-- Mobile product filter --}}
<div class="container-fluid" style="position: relative; right: 3%; ">
    <div class="left_product mobile_product sliderDrawer_product">
        {{-- <header class="hide_filter d-flex flex-row justify-content-between align-items-baseline">
            <h2>Filters</h2>
            <div id="hide_close_mobile" class="d-flex flex-row align-items-baseline justify-content-evenly toggleIcon">
                <img class="img-fluid" src="{{asset('customImages/toggle-icon.png')}}" alt="toggle icon">
                <p class="hide_close">Toggle filters</p>
            </div>
            
        </header> --}}
    
        <div class="accordion" id="accordionSlider">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Color
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionSlider">
                <div class="accordion-body container-fluid">
                    <section onclick="redirectToResult()" class="colours_slide_wrapper row justify-content-center" >                   
          
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
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionSlider">
                <div class="accordion-body container-fluid">
                    <section onclick="redirectToResult()" class="colours_slide_wrapper shape_slide_wrapper row justify-content-center">
                       
    
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
                <div id="collapseTwoJ" class="accordion-collapse collapse" aria-labelledby="headingTwoJ" data-bs-parent="#accordionSlider">
                  <div class="accordion-body container-fluid">
                      <section onclick="redirectToResult()" class="colours_slide_wrapper  glass_slide_wrapper  row justify-content-center">
    
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
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionSlider">
                <div class="accordion-body">
                    <section onclick="redirectToResult()" class="colours_slide_wrapper gender_slide_wrapper row align-items-baseline 
                    justify-content-center">
            
                       </section>
                </div>
              </div>
            </div>
          </div>
    </div>

</div>
{{-- End of mobile product filter --}}
                    </div>
                    </div>
                  </li>

                <li class="button-wrapper">
                    <a href="/shop">
                        <button type="button" class="buy-button">
                            <img
                            src="{{ asset('customImages/buyIcon.png') }}"
                            />
                            Buy Now
                        </button>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<div class="container-fluid card mobile_search">
    <div class="row d-sm-flex search-wrapperMobile">
        <input type="search"
        class="mobile_searchBord"
        id="search"
        placeholder="Search for eyewear, lenses and frames"
        />
        <img 
        onclick="searchProduct()"
        class="img-fluid search-shop-image"
        src="{{ asset('customImages/arrow-right.png') }}"/>
            </div>  
    </div>


<!-- THE SCRIPT TO CONTROL THE STATE OF THE NAVBAR -->

<script type="text/javascript">
    const baseURL= '{{ env('APP_URL') }}'
    let tokenDetect = localStorage.getItem('token');
    console.log(tokenDetect);
    let logId = document.getElementById('triggerLogout');

    if(tokenDetect){
        logId.innerHTML += `<span class="dropdown-item">Log Out</span>`
    }

    // For mobile
    let logIdMobile = document.getElementById('triggerLogoutMobile');

    if(tokenDetect){
        logIdMobile.innerHTML += `<span class="dropdown-item">Log Out</span>`
    }

    // Declare and store all variables globally
    const getNav = document.querySelector('#navMain');
    const topOfNav = getNav.offsetTop;
    const triggerNav = (event) => {
        // console.log(event);
        if (window.scrollY >= 10) {
            //    console.log('You have passed the nav bottom!')
            getNav.classList.add('navbar-trigger');
        } else {
            getNav.classList.remove('navbar-trigger');
        }
    }
    window.addEventListener('scroll', triggerNav);


// LOGOUT
 const handleLogout = () =>{
    // alert('working')
        let token = localStorage.getItem('token');
        // alert(token);
        function handleErrors(response) {
      if (!response.ok) {
          throw Error(response.statusText);
      }
      return response;
        }
    fetch(`${baseURL}/api/auth/logout`, {
        method: 'POST',
        headers: {
            'content-type': 'application/json',
            // 'Access-Control-Allow-Origin': 'https://foremosteyeclinic.com'
        },
        referrer: 'no-referrer'
    })
    .then(handleErrors)
    .then(function(response){
        console.log(response);
        Swal.fire({
                icon: 'success',
                title: "User logged out!",
                showConfirmButton: false,
                timer: 2000,
                  })
        localStorage.removeItem('token');
        localStorage.removeItem('email');
        setTimeout(() => {        
            window.location.href = "/login"
        }, 1500);
    }).catch(function(err){
        Swal.fire({
                      icon: 'error',
                      title: "Failed to logout user!",
                      showConfirmButton: false,
                      timer: 2000,
                  })
        console.warn('Something went wrong.', err);
    })
        
    }
    

    document.getElementById('triggerLogout').addEventListener('click', handleLogout);


    

    let userEmail = localStorage.getItem('email');
    console.log(userEmail);

let welcomeName = document.querySelector('.welcome-name');
// alert('working');

 const displayName = () =>{
//    alert('working');
   console.log('working!');
   console.log(userEmail);
   welcomeName.innerHTML = userEmail !== null ? `Hi, ${userEmail}` : '';
 }

displayName();

// SCRIPT TO TOGGLE THE SEACH FIELD
let searchFieldState = false;

let searchIcon = document.querySelector('.search-iconNav');
let searchField = document.querySelector('.mobile_search');

const toggleSearchField = () =>{
    if(searchField.style.display === 'none'){
        searchField.style.display = 'block';
        searchField.classList.add('showSearch')
    }else{
        searchField.style.display = 'none';
        searchField.classList.remove('showSearch')
    }
    // console.log(searchField);
}

searchIcon.addEventListener('click', toggleSearchField)


let tokenStatusMobile = localStorage.getItem('token');
//    console.log(tokenStatusMobile);
    let authButtonsMobile = document.querySelector('.button-containerMobile');
    console.log(authButtonsMobile);
    if(!tokenStatusMobile){
        authButtonsMobile.innerHTML += `
        <a href="/login"> <p>Login</p></a>
            |
        <a href="/signup"> <p>Signup</p></a>
`;
    }else{
        authButtonsMobile.innerHTML = ""
    } 

    // NAV SLIDER CATEGORIES
// LOGOUT
const handleLogoutMobile = () =>{
    // alert('working')
        let token = localStorage.getItem('token');
        // alert(token);
        function handleErrors(response) {
      if (!response.ok) {
          throw Error(response.statusText);
      }
      return response;
        }
    fetch(`${baseURL}/api/auth/logout`, {
        method: 'POST',
        headers: {
            'content-type': 'application/json',
            // 'Access-Control-Allow-Origin': 'https://foremosteyeclinic.com'
        },
        referrer: 'no-referrer'
    })
    .then(handleErrors)
    .then(function(response){
        console.log(response);
        Swal.fire({
                icon: 'success',
                title: "User logged out!",
                showConfirmButton: false,
                timer: 2000,
                  })
        localStorage.removeItem('token');
        localStorage.removeItem('email');
        setTimeout(() => {        
            window.location.href = "/login"
        }, 1500);
    }).catch(function(err){
        Swal.fire({
                      icon: 'error',
                      title: "Failed to logout user!",
                      showConfirmButton: false,
                      timer: 2000,
                  })
        console.warn('Something went wrong.', err);
    })
        
    }
    

    document.getElementById('triggerLogoutMobile').addEventListener('click', handleLogoutMobile);


</script>

