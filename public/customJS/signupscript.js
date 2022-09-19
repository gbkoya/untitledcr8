// alert('signing up now');
// import { PATH } from '../../../foremost-website/.env_dev';
import { PATH } from '../API'

//  API INTEGRATION
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
fetch(`${PATH}/auth/register`, {
            method: 'POST',
            headers: {
                'Accept': 'application/json, text/plain, */*',
                'content-type': 'application/json'
            },
            body: JSON.stringify(userData)
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