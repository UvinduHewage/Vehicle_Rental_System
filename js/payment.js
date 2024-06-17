 // Get a reference to the form element
var form = document.querySelector('form');

 
  
  // Prevent the form from submitting

  // Get the values from the form inputs
  var fullname = form.elements.fullname.value;
  var email = form.elements.email.value;
  var address = form.elements.address.value;
  var city = form.elements.city.value;
  var amount = form.elements.amount.value;
  var NICnumber = form.elements.NICnumber.value;
  var CName = form.elements.Cname.value;
  var Cnumber = form.elements.Cnumber.value;
  var expMonth = form.elements.ExpMonth.value;
  var expYear = form.elements.ExpYear.value;
  var cvv = form.elements.cvv.value;

  // Perform any additional validation or processing here

  // Create an object to hold the form data
  var formData = {
    fullname: fullname,
    email: email,
    address: address,
    city: city,
    amount: amount,
    NICnumber: NICnumber,
    CName: CName,
    Cnumber: Cnumber,
    expMonth: expMonth,
    expYear: expYear,
    cvv: cvv
  };

   

// alert payment successful
var btn = document.getElementById ("btn1");
btn.addEventListener ("click", function( ){
   alert ("Payment Succesful!")        
    }
);

//check the checkbox has enabled
function enableButton(){
	if (document.getElementById("policy").checked){
		document.getElementById("btn1").disabled = false;
	}
	else {
		document.getElementById("btn1").disabled = true;
	}
}
