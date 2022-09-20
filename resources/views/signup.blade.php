@extends('layouts.app')

@section('description',
'Archware - Africa\'s Leading Software Development Company
Software development company helping businesses and individuals take advantage of the benefits of the global technology
landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')
  
<body>
  
  <div class="login-ik card justify-content-center mt-5">
    <div class="container my-5 py-5">
      <div class="container col-lg-5 col-md-7 my-5 py-5 i-login-backg">
  
        <h2 class="i-login-head">Create Account</h2>
        <div class="d-flex flex-sm-row flex-sm-wrap justify-content-evenly" style="margin-top: 1rem">
          {{-- <a class="ml-1 btn" href="{{ url('auth/facebook') }}" style="margin-top: 0px !important;background: #F58634; width: 40%; color: #ffffff;padding: .7rem .2rem; border-radius: 25px;" id="btn-fblogin">
            <i class="fab fa-facebook" aria-hidden="true"></i> Login with Facebook
          </a> --}}
          <a class="ml-1 btn" href="{{ url('auth/facebook') }}" style="margin-top: 0px !important;background: #F58634; width: 40%; color: #ffffff; padding: .7rem; .2rem; border-radius: 25px;" id="btn-fblogin">
            <i class="fab fa-google" aria-hidden="true"></i> Login with Google
        </a>
        </div>
        <form>
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
              <input type="text" id="password" class="form-control-ika" placeholder="Enter Password (Min. 8 characters)" id="exampleInputPassword1" required
              pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$"
                   title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number."/>
              <span id="e-hide" class="e-toggle-icon e-toggle-hide mt-4 pt-1 px-4"><img onclick="showPassword()" class="img-fluid" src="{{asset('customImages/Vector.png')}}" alt="hide image"/> </span>
              <span id="e-display" class="e-toggle-icon mt-4 pt-1 px-4"><img onclick="hidePassword()"  class="img-fluid" src="{{asset('customImages/password.png')}}" alt="show image"/></span>

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

  <script src="text/javascript">
  

        // Toggle password display
        let display = document.getElementById('e-display');


        function hidePassword(){
        let hide = document.getElementById('e-hide');
          alert('show!');
          hide.display = 'none'
        }

        function showPassword(){
          alert('hide!');
        }

        // hide.addEventListener('onclick', hidePassword());
        // display.addEventListener('onclick', showPassword());

  //  SIGNUP API INTEGRATION
   document.getElementById('signupData').addEventListener('submit', handleSignup);
  
  function handleSignup(event) {
  event.preventDefault();
  
  // Get all the input field and store them in their unique variable each
  let firstname = document.getElementById('firstname').value;
  let lastname = document.getElementById('lastname').value;
  let email = document.getElementById('email').value;
  let password = document.getElementById('password').value;
  
  let userData = {
      firstname,
      lastname,
      email,
      date,
      password
  }
  // alert(JSON.stringify(contactData));
  // alert(`${firstName} and ${lastName}`);
  console.log(user);
  isLoading = true;
  
  function handleErrors(response) {
      if (!response.ok) {
          throw Error(response.statusText);
      }
      return response;
  }
  fetch("http://127.0.0.1:8000/api/auth/register", {
              method: 'POST',
              headers: {
                  'Accept': 'application/json, text/plain, */*',
                  'content-type': 'application/json'
              },
              body: JSON.stringify(user)
          })
          .then(handleErrors)
          .then(response => {
              console.log("ok")
              Swal.fire({
                  icon: 'success',
                  title: 'Message sent, We will get back shortly!',
                  showConfirmButton: false,
                  timer: 1500,
  
              })
              let res = document.getElementById("sendData");
              res.reset();
          })
          .catch(error => {
              console.log(error, 'wrong')
              Swal.fire({
                  icon: 'error',
                  title: 'Message not sent, something went wrong!',
                  showConfirmButton: false,
                  timer: 1500,
  
              })
  
          });
        }

       
  
  </script>
{{-- END OF API INTEGRATION --}}

@endsection

</body>




