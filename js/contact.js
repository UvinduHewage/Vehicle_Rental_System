// This function is called when the form is submitted.
function submitForm() {
    // Validate the form data.
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
  
    if (name == "" || email == "" || message == "") {
      alert("Please enter all of the required information.");
      return;
    }
  
    // Send the form data to the server.
    var formData = new FormData(document.getElementById("contact-form"));
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "contact.php");
    xhr.onload = function() {
      if (xhr.status == 200) {
        alert("Your message has been sent.");
      } else {
        alert("An error occurred. Please try again later.");
      }
    };
    xhr.send(formData);
  }

   