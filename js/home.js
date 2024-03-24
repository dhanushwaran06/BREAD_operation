document
  .getElementById("primaryForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    if (1==1) {
      var formData = new FormData(this);
      const defName = document.getElementById("def").value;
      fetch(`server.php?f=${defName}`, {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            alert("Form added successfully!");
            document.getElementById("primaryForm").reset();
          } else {
            alert("Form insertion failed. Please try again.");
          }
        })
        .catch((error) => {
          console.error("Error:", error);
          alert("An error occurred. Please try again later.");
        });
    }
  });

// document.addEventListener("DOMContentLoaded", function () {
//   var today = new Date();
//   var minDate;

//   if (today.getHours() >= 9) {
//     minDate = today;
//   } else {
//     minDate = new Date(today.getTime() + 24 * 60 * 60 * 1000);
//   }

//   var minDateISO = minDate.toISOString().split("T")[0];
//   document.getElementById("booking_date").setAttribute("min", minDateISO);
// }); //time

// document
//   .getElementById("mobile")
//   .addEventListener("keypress", function (event) {
//     var charCode = event.which ? event.which : event.keyCode;
//     if (charCode < 48 || charCode > 57) {
//       event.preventDefault();
//     }
//   });

// document
//   .getElementById("pincode")
//   .addEventListener("keypress", function (event) {
//     var charCode = event.which ? event.which : event.keyCode;
//     if (charCode < 48 || charCode > 57) {
//       event.preventDefault();
//     }
//   });

// function validateForm() {
//   var errorMessages = document.querySelectorAll(".error");
//   errorMessages.forEach(function (errorMessage) {
//     errorMessage.remove();
//   });

//   var user_name = document.getElementById("user_name").value;
//   var age = document.getElementById("age").value;
//   var mobile = document.getElementById("mobile").value;
//   var email = document.getElementById("email").value;
//   var gender = document.getElementById("gender").value;
//   var booking_date = document.getElementById("booking_date").value;
//   var booking_time = document.getElementById("booking_time").value;
//   var city = document.getElementById("city").value;
//   var consultation = document.getElementById("consultation").value;
//   var address = document.getElementById("address").value;
//   var pincode = document.getElementById("pincode").value;

//   var phoneRegex = /^\d{10}$/;
//   var pinRegex = /^\d{6}$/;

//   var isValid = true;

//   if (!phoneRegex.test(mobile)) {
//     document
//       .getElementById("mobile")
//       .insertAdjacentHTML(
//         "afterend",
//         '<span class="error">Phone number must contain exactly 10 digits</span>'
//       );
//     isValid = false;
//   }

//   if (!pinRegex.test(pincode)) {
//     document
//       .getElementById("pincode")
//       .insertAdjacentHTML(
//         "afterend",
//         '<span class="error">Pincode must be exactly 6 digits and contain only numbers.</span>'
//       );
//     isValid = false;
//   }

//   var today = new Date();
//   today.setHours(9, 0, 0, 0); // Set today's date to 9 AM
//   var inputDate = new Date(booking_date);

//   if (inputDate < today && inputDate.toDateString() !== today.toDateString()) {
//     document
//       .getElementById("booking_date")
//       .insertAdjacentHTML(
//         "afterend",
//         '<span class="error">Date must be today(after 9 AM) or future.</span>'
//       );
//     isValid = false;
//   }

//   if (
//     !user_name ||
//     !age ||
//     !mobile ||
//     !email ||
//     !gender ||
//     !booking_date ||
//     !booking_time ||
//     !city ||
//     !consultation ||
//     !address ||
//     !pincode
//   ) {
//     alert("All fields are required.");
//     isValid = false;
//   }

//   return isValid;
// }
