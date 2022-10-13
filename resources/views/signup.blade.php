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

  <div class="login-ik card justify-content-center mt-5">
    <div class="container my-5 py-5">
      <div class="container col-lg-5 col-md-7 my-5 py-5 i-login-backg">

        <h2 class="i-login-head">Create Account</h2>
        <div class="d-flex flex-sm-row flex-sm-wrap justify-content-evenly" style="margin-top: 1rem">
          {{-- <a class="ml-1 btn" href="{{ url('auth/facebook') }}" style="margin-top: 0px !important;background: #F58634; width: 40%; color: #ffffff;padding: .7rem .2rem; border-radius: 25px;" id="btn-fblogin">
            <i class="fab fa-facebook" aria-hidden="true"></i> Login with Facebook
          </a> --}}
          <div class="ml-1 btn" id="social" style="margin-top: 0px !important;background: #F58634; width: 40%; color: #ffffff; padding: .7rem; .2rem; border-radius: 25px;" id="btn-fblogin">
            <i class="fab fa-google" aria-hidden="true"></i> Login with Google
          </div>
        </div>
        <form id="signupForm">
          <div class="mb-3 pt-2 px-3" style="border-radius: 20px;">
            <div class="d-flex" style="background-color: #f3efef; margin-top: 10%; padding-left: 1rem;">
              <span class="mt-4 pt-1 px-2" style="border-radius: 20px"><img src="{{asset('customImages/Vector(5).png')}}" alt=""> </span>
              <input type="text" id="firstname" class="form-control-ika"  placeholder="First Name" aria-describedby="emailHelp"
              required minlength="3" maxlength="20"
              />
            </div>
          </div>
          <div class="mb-3 pt-3 px-3">
            <div class="d-flex" style="background-color: #f3efef; padding-left: 1rem;" >
              <span class="mt-4 pt-1 px-2"><img src="{{asset('customImages/Vector(5).png')}}" alt=""> </span>
              <input type="text" id="lastname" class="form-control-ika"  placeholder="Last Name" aria-describedby="emailHelp"
              required minlength="3" maxlength="20"/>
            </div>
          </div>
          <div class="mb-3 pt-3 px-3">
            <div class="d-flex" style="background-color: #f3efef; padding-left: 1rem;" >
              <span class="mt-4 pt-1 px-2"><img src="{{asset('customImages/Vector (2).png')}}" alt=""> </span>
              <input type="email" id="email" class="form-control-ika"  placeholder="Email" aria-describedby="emailHelp"
              required/>
            </div>
          </div>
          <div class="mb-3 pt-3 px-3">
            <div class="d-flex" style="background-color: #f3efef; padding-left: 1rem;" >
              <span class="mt-4 pt-1 px-2">
                <img src="{{asset('customImages/Vector (1).png')}}" alt="">
              </span>
              <input type="text" id="password" class="form-control-ika passwordInput" placeholder="Enter Password (Min. 8 characters)"  required
              pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$"
                   title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number."/>
              <span class="e-toggle-icon e-toggle-hide mt-4 pt-1 px-4"><img onclick="showPassword()" class="img-fluid" src="{{asset('customImages/Vector.png')}}" alt="hide image"/> </span>
              <span class="e-toggle-icon e-toggle-display mt-4 pt-1 px-4"><img onclick="hidePassword()"  class="img-fluid" src="{{asset('customImages/password.png')}}" alt="show image"/></span>

            </div>
          </div>

          <div class="mb-3 form-check pt-4">
            <div class="d-flex flex-row justify-content-center">
              <input type="checkbox" class="i-login-check form-check-input" id="exampleCheck1"/>
              <label class="i-login-remember form-check-label pt-2 px-2" for="exampleCheck1">Remember Me</label>
            </div>
          </div>
          <div class="row i-login-button-mobile justify-content-center py-5">
            <button type="submit" class="i-login-button ">Create Account</button>
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
        const url= '{{ env('APP_URL') }}'


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

        // Hide and show a loader logic
        const loaderContainer = document.querySelector('.loader-container');

        const displayLoading = () => {
        loaderContainer.style.display = 'block';
        };

        const hideLoading = () => {
            loaderContainer.style.display = 'none';
        };
        // hide.addEventListener('onclick', hidePassword());
        // display.addEventListener('onclick', showPassword());

  //  SIGNUP API INTEGRATION
   document.getElementById('signupForm').addEventListener('submit', handleSignup);
   let res = document.getElementById("signupForm");

  function handleSignup(event) {
  event.preventDefault();
  displayLoading();


  // Get all the input field and store them in their unique variable each
  let firstname = document.getElementById('firstname').value;
  let lastname = document.getElementById('lastname').value;
  let email = document.getElementById('email').value;
  let password = document.getElementById('password').value;


  let userData = {
      firstname,
      lastname,
      email,
      password
  }
  // alert(JSON.stringify(contactData));
  // alert(`${firstName} and ${lastName}`);
  console.log(userData);

  function handleErrors(response) {
      if (!response.ok) {
          throw Error(response.statusText);
      }
      return response;
  }
  fetch(`${url}/api/auth/register`, {
              method: 'POST',
              headers: {
                  // 'Accept': 'application/json, text/plain, */*',
                  'content-type': 'application/json',
                  // 'Access-Control-Allow-Origin': 'https://foremosteyeclinic.com'
              },
              body: JSON.stringify(userData)
          })
          .then(handleErrors)
          .then(response => {
              // console.log("ok")
              hideLoading();
              Swal.fire({
                  icon: 'success',
                  title: 'Account created successfully! Login',
                  showConfirmButton: false,
                  timer: 2000,

              })
              res.reset();
              setTimeout(() => {
                window.location.href = "/login"
              }, 1500);
          })
          .catch(error => {
              console.log(error, 'wrong')
              res.reset();
              hideLoading();
              Swal.fire({
                  icon: 'error',
                  title: 'Failed to create account. Try again!',
                  showConfirmButton: false,
                  timer: 1500,

              })

          });
        }

// END OF SIGNUP API INTEGRATION
const socialLogin = async () =>{
  displayLoading();
  function handleErrors(response) {
      if (!response.ok) {
          throw Error(response.statusText);
      }
      return response;
      }
            fetch(`${url}/api/auth/google`, {
              method: 'GET',
              headers: {
                  // 'Accept': 'application/json, text/plain, */*',
                  'content-type': 'application/json',
                  // 'Access-Control-Allow-Origin': 'https://foremosteyeclinic.com'
              },
          })
          .then(handleErrors)
          .then(response => {
              // console.log("ok")
              hideLoading();
              Swal.fire({
                  icon: 'success',
                  title: 'Social login initiated',
                  showConfirmButton: false,
                  timer: 2000,

              })
              setTimeout(() => {
                // window.location.href = "/login"
              }, 1500);
          })
          .catch(error => {
              console.log(error, 'wrong')
              hideLoading();
              Swal.fire({
                  icon: 'error',
                  title: 'Social login failed',
                  showConfirmButton: false,
                  timer: 1500,

              })

          });

}

document.getElementById('social').addEventListener('click', socialLogin);


// SOCIAL LOGIN
// const socialLogin = async (event) => {
//         event.preventDefault();
//           displayLoading();

//       function handleErrors(response) {
//       if (!response.ok) {
//           throw Error(response.statusText);
//       }
//       return response;
//       }
//       fetch(`${url}/api/auth/google`, {
//               method: 'GET',
//               headers: {
//                   // 'Accept': 'application/json, text/plain, */*',
//                   'content-type': 'application/json',
//                   // 'Access-Control-Allow-Origin': 'https://foremosteyeclinic.com'
//               },
//           })
//           .then(handleErrors)
//           .then(response => {
//               // console.log("ok")
//               hideLoading();
//               Swal.fire({
//                   icon: 'success',
//                   title: 'Success',
//                   showConfirmButton: false,
//                   timer: 2000,
  
//               })
//               .then(handleErrors)
//               const data = await response.json();
//               // return data;
//               console.log(data);
//               console.log(response);


//               Swal.fire({
//                       icon: 'success',
//                       title: data.message,
//                       showConfirmButton: false,
//                       timer: 2000,

//                   })
//                   res.reset();
//                   hideLoading();

//         } catch(error){
//           // let errorMessage = await error.json()
//           // console.log(error);
//           // console.log(errorMessage);
//                   hideLoading();
//                   Swal.fire({
//                       icon: 'error',
//                       title: "Failed to Login with Google!",
//                       showConfirmButton: false,
//                       timer: 2000,
//                   })
//         }
//       }

  </script>

{{-- END OF API INTEGRATION --}}


@endsection

</body>




