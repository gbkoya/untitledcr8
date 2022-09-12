<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0" id="navMain">
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
            <ul class="navbar-nav me-auto nav-links-a" style="margin-left: 12%;">
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" style="scroll-behavior: smooth;" href="/about">About
                        Us</a>
                </li>

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
    const logoManipulation = document.querySelector('.light-logo');
    const normalLogo = document.querySelector('.colored-logo');
    const navLinks = document.querySelectorAll('.nav-link');
    const navDrop = document.querySelector('.nav-drop');

    const triggerNav = (event) => {
        // console.log(event);
        if (window.scrollY >= 30) {
            //    console.log('You have passed the nav bottom!')
            // console.log(event);
            getNav.classList.add('navbar-trigger');
            // console.log(navLinks);
            Array.from(navLinks).map((nav) => {
                // console.log(nav);
                nav.classList.add('nav-link-text');
            })
            navDrop.classList.add('nav-link-text');

            logoManipulation.style.display = 'block';
            normalLogo.style.display = 'none'

        } else {
            getNav.classList.remove('navbar-trigger');
        }
    }
    window.addEventListener('scroll', triggerNav);
</script>
