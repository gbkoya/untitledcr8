{{-- Sub nav --}}
<nav class="d-flex sub-nav-style flex-row align-items-center flex-wrap container-fluid justify-content-evenly">
    {{-- <div class="d-flex flex-row"> --}}
    <div class="row d-sm-flex search-wrapper-sub">
        <input type="search"
        placeholder="Search for eyewear, lenses and frames"
        />
        <img 
        class="img-fluid search-shop-image"
        src="{{ asset('customImages/arrow-right.png') }}"/>
            </div>   
            <div class="d-sm-flex flex-sm-row align-items-center flex-wrap button-wrapper but-wrapper-mobile">
                <a href="/login"><button class="login-sub" type="button">Log In</button></a>
                <a href="/signup"><button class="signup-sub" type="button">Sign Up</button></a>
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