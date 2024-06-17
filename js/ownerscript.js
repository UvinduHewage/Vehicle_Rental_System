
// Edit profile
function editProfile(id) {
    // Retrieve the profile data from the server using AJAX
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var profileData = JSON.parse(this.responseText);
            // Populate the form fields with the retrieved data
            document.getElementById('editForm').setAttribute('data-id', profileData.id);
            document.getElementById('editFirstName').value = profileData.first_name;
            document.getElementById('editLastName').value = profileData.last_name;
            document.getElementById('editEmail').value = profileData.email;
            document.getElementById('editPassword').value = profileData.password;
            // Display the edit form
            document.getElementById('editForm').style.display = 'block';
        }
    };
    xhttp.open('GET', 'getProfile.php?id=' + id, true);
    xhttp.send();
}

// Delete profile
function deleteProfile(id) {
    // Confirmation dialog before deleting the profile
    var confirmation = confirm("Are you sure you want to delete this profile?");
    if (confirmation) {
        // Send the delete request to the server using AJAX
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Refresh the page to update the profile list
                location.reload();
            }
        };
        xhttp.open('POST', 'deleteProfile.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('id=' + id);
    }
}

// Validate the form inputs
function validateForm() {
    // Perform validation logic here
    return true;
}

// Add profile
function addProfile() {
    // Validate the form inputs
    if (!validateForm()) {
        return;
    }
    // Get the form data
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    // Send the add request to the server using AJAX
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Refresh the page to update the profile list
            location.reload();
        }
    };
    xhttp.open('POST', 'addProfile.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('firstName=' + firstName + '&lastName=' + lastName + '&email=' + email + '&password=' + password);
}

// Update profile
function updateProfile() {
    // Validate the form inputs
    if (!validateForm()) {
        return;
    }
    // Get the form data
    var id = document.getElementById('editForm').getAttribute('data-id');
    var firstName = document.getElementById('editFirstName').value;
    var lastName = document.getElementById('editLastName').value;
    var email = document.getElementById('editEmail').value;
    var password = document.getElementById('editPassword').value;
    // Send the update request to the server using AJAX
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Refresh the page to update the profile list
            location.reload();
        }
    };
    xhttp.open('POST', 'updateProfile.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('id=' + id + '&firstName=' + firstName + '&lastName=' + lastName + '&email=' + email + '&password=' + password);
}
