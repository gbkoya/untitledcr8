<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0" id="navMain"
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
        <button class="navbar-toggler hamburger-icon hamburger-mobile" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation" >
            <i class="fas fa-bars"></i>
        </button>

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
                      style="cursor: pointer"><span class="dropdown-item">Logout</span></li> 
                    </ul>
                  </div>

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


<!-- THE SCRIPT TO CONTROL THE STATE OF THE NAVBAR -->
<script type="text/javascript">


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

    
</script>

<script type="text/javascript">
    const baseURL= '{{ env('APP_URL') }}'

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

</script>

<script type="text/javascript">
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
</script>