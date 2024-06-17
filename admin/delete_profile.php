<!-- IT22196460
U.U.M.Hewage -->


<?php
// Include the database connection
include '../config.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Delete the profile from the database
    $sql = "DELETE FROM mynewtable WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Profile deleted successfully.";
        // Redirect back to the main page
        header("Location: Display_vehicleowner.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid profile ID.";
    exit;
}
?>
