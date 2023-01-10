<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom nav_mobile shadow-0" id="navMain" onload="displayName();" style="background-color: #fff;">

    <body>


        <div class="container-fluid">

            <a class="navbar-brand " href="/" style="margin-left: 4%;">
                <img class="img-fluid" src="{{ asset('customImages/Logo.png') }}" style="width: 73px;">
            </a>

            <!-- HAMBURGER -->
            {{-- <button class="navbar-toggler hamburger-icon hamburger-desktop" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button> --}}

            <div class="d-flex flex-row align-items-center gap-2">

                <button class="navbar-toggler hamburger-icon hamburger-mobile" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>



            </div>
            <div class="collapse navbar-collapse right-nav" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto nav-links-a" style="">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/ourservices">

                            <body>Services</body>
                        </a>
                    </li>


                    <li class="nav-item mx-2">
                        <a class="nav-link " href="/ourwork">Our Work</a>
                    </li>
                    <!-- <li class="nav-item px-3">
                    <a class="nav-link archware-nav-title" href="/services">Services</a>
                </li> -->
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/">About Us</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="/">Blog</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="/contact">Contact</a>
                    </li>






                </ul>

               

                    <button class="right-btn" onclick="myFunction();replaceDiv()" style="">Toggle dark mode</button>

                

            </div>
        </div>
    </body>
</nav>

<script>
    function myFunction() {
        var element = document.div;
        element.classList.toggle("dark-mode");
    }

    function changeBg() {
        var element1 = document.getElementsById("untitled-lm");
        element1.classList.toggle("untitled-dm")
    }
</script>



<!-- THE SCRIPT TO CONTROL THE STATE OF THE NAVBAR -->