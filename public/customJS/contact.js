// // CONTACT API INTEGRATION HERE
// // window.addEventListener('scroll', alert('working!'))
// document.getElementById('sendData').addEventListener('submit', handleSumbit);

// function handleSumbit(event) {
//     event.preventDefault();
 
//     // Get all the input field and store them in their unique variable each
//     let name = document.getElementById('name').value;
//     let email = document.getElementById('email').value;
//     let phonenumber = document.getElementById('phonenumber').value;
//     let date = document.getElementById('date').value;
//     let message = document.getElementById('message').value;

//     let contactData = {
//         name,
//         email,
//         phonenumber,
//         date,
//         message
//     }
//     // alert(JSON.stringify(contactData));
//     // alert(`${firstName} and ${lastName}`);
//     console.log(contactData);
//     isLoading = true;

//     function handleErrors(response) {
//         if (!response.ok) {
//             throw Error(response.statusText);
//         }
//         return response;
//     }
//     fetch("http://127.0.0.1:8000/api/contactus/message", {
//             method: 'POST',
//             headers: {
//                 'Accept': 'application/json, text/plain, */*',
//                 'content-type': 'application/json'
//             },
//             body: JSON.stringify(contactData)
//         })
//         .then(handleErrors)
//         .then(response => {
//             console.log("ok")
//             Swal.fire({
//                 icon: 'success',
//                 title: 'Message sent, We will get back shortly!',
//                 showConfirmButton: false,
//                 timer: 1500,

//             })
//             let res = document.getElementById("sendData");
//             res.reset();
//         })
//         .catch(error => {
//             console.log(error, 'wrong')
//             Swal.fire({
//                 icon: 'error',
//                 title: 'Message not sent, something went wrong!',
//                 showConfirmButton: false,
//                 timer: 1500,

//             })

//         });

// }
//         // END OF CONTACT API INTEGRATION