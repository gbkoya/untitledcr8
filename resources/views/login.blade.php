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
  
        <h2 class="i-login-head">Log In</h2>
        <form>
          <div class="mb-3 pt-5 px-3">
            <div class="d-flex" style="background-color: #f3efef; padding-left: 1rem;" >
              <span class="mt-4 pt-1 px-2"><img src="{{asset('customImages/Vector (2).png')}}" alt=""> </span>
              <input type="email" class="form-control-ika" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp"/>
            </div>
          </div>
          <div class="mb-3 pt-3 px-3">
            <div class="d-flex" style="background-color: #f3efef; padding-left: 1rem;" >
              <span class="mt-4 pt-1 px-2"><img src="{{asset('customImages/Vector (1).png')}}" alt=""> </span>
              <input type="password" id="password" class="form-control-ika" placeholder="Enter Password" id="exampleInputPassword1"/>
              <span class="mt-4 pt-1 px-4"><img src="{{asset('customImages/Vector.png')}}" alt=""> </span>
            </div>
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

  <script src="text/javascript">

    //  LOGIN API INTEGRATION
     document.getElementById('signupData').addEventListener('submit', handleSignup);
    
    function handleSignup(event) {
    event.preventDefault();
    
    // Get all the input field and store them in their unique variable each
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let phonenumber = document.getElementById('phonenumber').value;
    let date = document.getElementById('date').value;
    let message = document.getElementById('message').value;
    
    let contactData = {
        name,
        email,
        phonenumber,
        date,
        message
    }
    // alert(JSON.stringify(contactData));
    // alert(`${firstName} and ${lastName}`);
    console.log(contactData);
    isLoading = true;
    
    function handleErrors(response) {
        if (!response.ok) {
            throw Error(response.statusText);
        }
        return response;
    }
    fetch("http://127.0.0.1:8000/api/auth/login", {
            method: 'POST',
            headers: {
                'Accept': 'application/json, text/plain, */*',
                'content-type': 'application/json'
            },
            body: JSON.stringify(contactData)
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
</body>


@endsection