/*IT22558114
Piyarathna R.S.*/

function validateEmail() {
    var email = document.getElementById("cusEmail").value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
        alert("Invalid email address");
        return false;
    }
        return true;
    }

function validatePassword() {
    var password = document.getElementById("cusPassword").value;
    if (password.length < 8) {
        alert("Password must be at least 8 characters long");
        return false;
    }
        return true;
    }
function validateLogin() {
    if (validateEmail() && validatePassword()) {
        return true;
    } else {
        return false;
    }
    }