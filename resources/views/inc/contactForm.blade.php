<main>
    <!-- CONTACT US SECTION -->
     <section class="container-fluid contact-us-wrapper" style=" margin-bottom: 9%">
        <div class="text-center">
            <h1 class="e-contact-heading">Contact Us</h1>
        </div>
        <div class="row contact-form-section">
            <div class="col-md-7 col-sm-6 pt-5 contact-form-section-child">
    
                <h3>Book Appointment</h3>
                <h6>We'd like to take care of your
                eye health</h6>
    
    
                <form id="sendData">
                    <div class="row pt-2">
                        <div class="input-contact-wrapper">
                            <label class="contact-label">Name</label><br>
                            <input type="text" id="name" class="input-style"  required
                                style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA;" placeholder="Full Name">
                        </div>
    
                    </div>
    
                    <div class="mt-4 input-contact-wrapper">
                        <label class="contact-label">Email</label><br>
                        <input id="email" required class="input-style"
                             style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="email"
                            placeholder="Enter email address">
                    </div>
                    <div class="input-contact-wrapper mt-4">
                        <label class="contact-label">Phone Number</label><br>
                        <input id="phonenumber" required class="input-style"
                            style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="tel"
                            placeholder="Enter phone number">
                    </div>
                    <div class="input-contact-wrapper mt-4">
                        <label name="helpnote" class="contact-label">Date
                        </label><br>
                        <input id="date" required class="input-style"
                        style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="date"
                        placeholder="Enter phone number">
                    </div>
                    <div class= "input-contact-wrapper mt-4">
                        <label name="helpnote" class="contact-label">What can we help you with?
                        </label><br>
                        <select id="message" required class="input-style e-contact-select"
                        style="padding: 10px;opacity:70%;border: 1px solid #D2D6DA" type="date"
                        placeholder="Enter phone number">
                        <option value="Comprehensive Eye Examination">Comprehensive Eye Examination</option>
                        <option value="Glaucoma Workup And Management">Glaucoma Workup And Management</option>
                        <option value="Pediatrics– Eye Care for Children">Pediatrics– Eye Care for Children</option>
                        <option value="Pre-and-post Operative Eye Care">Pre-and-post Operative Eye Care</option>
                        <option value="Environmental and Occupational Vision">Environmental and Occupational Vision</option>
                        <option value="Geriatrics– Eye Care for the Elderly">Geriatrics– Eye Care for the Elderly</option>
                        <option value="Specialty Contact Lens">Specialty Contact Lens</option>
                        <option value="Dry Eye Treatment">Dry Eye Treatment</option>
                        <option value="Chalazion Excision">Chalazion Excision</option>
    
                        </select>
                    </div>
                    <div class="pt-3">
                        <button type="submit" class="my-4 contact-button"
                            >Book Appointment</button>
                    </div>
                </form>
            </div>
    
            <div class="col-md-5 col-sm-6 contact-information-column"
               >
                <div class="sec6itext">
                    <div class="mx-5 mt-5 pt-5">
                        <h1 class="mt-5 pt-4" style="font-weight: 700;font-size: 30px;color: #FFFFFF;">Contact
                            Information<h1>
                            <h6 style="color: #ffff; line-height: 130%"> Fill up the
                                form and our Team will get back to you within 24
                                hours.</h6>
                    </div>
                    <div class=" mx-5" style="margin-top: 2rem">
                        <p><img class=info_arch1 src="{{ asset('customImages/Phone Icon.svg') }}" alt="">
                            <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">+2347031778450, +2348121738381</a>
                        </p>
                        <p class="pt-3"><img id=info_arch2 src="{{ asset('customImages/Envelope Icon.svg') }}"
                                alt="">
                            <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">info@archwaretechgroup.com</a>
                        </p>
                        <p class="pt-3"><img id=info_arch3 src="{{ asset('customImages/Map Marker Icon.svg') }}"
                                alt="">
                            <a style="font-weight: 400;font-size: 14px;color: #FFFFFF;">3, Ayanboye Street, Anthony
                                Village, Lagos</a>
                        </p>
                        <p>
                        <p class="pt-4"><img class="px-2" src="{{ asset('customImages/White.svg') }}">
                            <img class="px-2" src="{{ asset('customImages/White (1).svg') }}">
                            <img class="px-2" src="{{ asset('customImages/White (2).svg') }}">
                            <img class="px-2" src="{{ asset('customImages/White (3).svg') }}">
                        </p>
                    </div>
                </div>
    
            </div>
        </div>
        </div>
    </main>

    <script type="text/javascript">
    let previousCounter = sessionStorage.getItem('totalCartItem');
    totalCartItemMobile.innerText = previousCounter || 0
        // CONTACT API INTEGRATION HERE
        document.getElementById('sendData').addEventListener('submit', handleSumbit);
      
      function handleSumbit(event) {
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
          fetch("http://127.0.0.1:8000/api/contactus/message", {
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
              // END OF CONTACT API INTEGRATION
          </script>