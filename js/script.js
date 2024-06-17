//IT22196460
//U.U.M.Hewage

// Function to handle editing a profile
function editProfile(id) {
    // Redirect to the edit profile page with the profile ID
    window.location.href = 'edit_profile.php?id=' + id;
}

// Function to handle deleting a profile
function deleteProfile(id) {
    // Show a confirmation dialog before deleting the profile
    if (confirm('Are you sure you want to delete this profile?')) {
        // Redirect to the delete profile script with the profile ID
        window.location.href = 'delete_profile.php?delete=' + id;
    }
}
