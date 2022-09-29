@extends('layouts.app')

@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')

<body>
  {{-- The loading spinner --}}
  <div class="loader-container">
    <div class="spinner"></div>
  </div>

  <div class="login-ik card justify-content-center mt-5">
    <div class="container my-5 py-5">
      <div class="container col-lg-5 col-md-7 my-5 py-5 i-login-backg">
  
        <h2 class="i-login-head">Log In</h2>
        <div class="d-flex flex-sm-row flex-sm-wrap justify-content-evenly" style="margin-top: 1rem">
          {{-- <a class="ml-1 btn" href="{{ url('auth/facebook') }}" style="margin-top: 0px !important;background: #F58634; width: 40%; color: #ffffff;padding: .7rem .2rem; border-radius: 25px;" id="btn-fblogin">
            <i class="fab fa-facebook" aria-hidden="true"></i> Login with Facebook
          </a> --}}
          <a class="ml-1 btn" href="{{ url('auth/facebook') }}" style="margin-top: 0px !important;background: #F58634; width: 40%; color: #ffffff; padding: .7rem; .2rem; border-radius: 25px;" id="btn-fblogin">
            <i class="fab fa-google" aria-hidden="true"></i> Login with Google
        </a>
        </div>
        <form id="loginForm">
          <div class="mb-3 pt-5 px-3">
            <div class="d-flex" style="background-color: #f3efef; padding-left: 1rem;" >
              <span class="mt-4 pt-1 px-2"><img src="{{asset('customImages/Vector (2).png')}}" alt=""> </span>
              <input type="email" class="form-control-ika" id="email" placeholder="Email" aria-describedby="emailHelp"
              required/>
            </div>
          </div>
          <div class="mb-3 pt-3 px-3">
            <div class="d-flex" style="background-color: #f3efef; padding-left: 1rem;" >
              <span class="mt-4 pt-1 px-2"><img src="{{asset('customImages/Vector (1).png')}}" alt=""> </span>
              <input type="text" id="password" class="form-control-ika passwordInput" placeholder="Enter Password" required/>
              <span class="e-toggle-icon e-toggle-hide mt-4 pt-1 px-4"><img onclick="showPassword()" class="img-fluid" src="{{asset('customImages/Vector.png')}}" alt="hide image"/> </span>
              <span class="e-toggle-icon e-toggle-display mt-4 pt-1 px-4"><img onclick="hidePassword()"  class="img-fluid" src="{{asset('customImages/password.png')}}" alt="show image"/></span>            </div>
          </div>
          <div class="mb-3 form-check pt-4">
            <div class="d-flex flex-row justify-content-center">
              <input type="checkbox" class="i-login-check form-check-input" id="exampleCheck1"/>
              <label class="i-login-remember form-check-label pt-2 px-2" for="exampleCheck1">Remember Me</label>
            </div>
          </div>
          <div class="row i-login-button-mobile justify-content-center py-5">
            
            <button type="submit" class="i-login-button ">SIgn In</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
      // Toggle password display
        // Declare the variables globally
        let toggleHide = document.querySelector('.e-toggle-hide');
        let toggleDisplay = document.querySelector('.e-toggle-display ');
        let inputField = document.querySelector('.passwordInput');
        let res = document.getElementById("loginForm"); // Store the form id in a res variable

       

        function hidePassword(){
          toggleHide.style.display = 'block'
          toggleDisplay.style.display = 'none'
          inputField.type = 'password'
        }

        function showPassword(){
          toggleHide.style.display = 'none'
          toggleDisplay.style.display = 'block'
          inputField.type = 'text'
        }


     // Hide and show a loder logic
     const loaderContainer = document.querySelector('.loader-container');

    const displayLoading = () => {
    loaderContainer.style.display = 'block';
    };

    const hideLoading = () => {
        loaderContainer.style.display = 'none';
    };

    //  LOGIN API INTEGRATION
    

     const handleLogin = async (event) => {
          event.preventDefault();
          displayLoading();

        // Get all the input field and store them in their unique variable each
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        
        let loginData = {
            email,
            password,
        }
        // alert(JSON.stringify(contactData));
        // alert(`${firstName} and ${lastName}`);
        console.log(loginData);
        isLoading = true;
        
        function handleErrors(response) {
            if (!response.ok) {
                throw Error(response.statusText);
            }
            return response;
        }
        try{
          const response = await fetch("https://foremosteyeclinic.com/api/auth/login", {
                  method: 'POST',
                  headers: {
                      'Accept': 'application/json, text/plain, */*',
                      'content-type': 'application/json'
                  },
                  body: JSON.stringify(loginData)
              })
              .then(handleErrors)
              const data = await response.json();
              // return data;
              console.log(loginData.email);
              console.log(data);
              console.log(response);
              localStorage.setItem('token', data.token);
              localStorage.setItem('email', loginData.email);

              Swal.fire({
                      icon: 'success',
                      title: data.message,
                      showConfirmButton: false,
                      timer: 2000,
      
                  })
                  res.reset();
                  hideLoading();
                  setTimeout(() => {        
            window.location.href = "/shop"
              }, 1500);
              
        } catch(error){
          // let errorMessage = await error.json()
          console.log(error);
          // console.log(errorMessage);
          res.reset();
                  hideLoading();
                  Swal.fire({
                      icon: 'error',
                      title: "Invalid Email/Password. Try again",
                      showConfirmButton: false,
                      timer: 2000,
                  })
        }
      }
    document.getElementById('loginForm').addEventListener('submit', handleLogin);

      // LOGOUT
      
    </script>
    
    {{-- END OF API INTEGRATION --}}
</body>


@endsection