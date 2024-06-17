<!-- IT22196460
U.U.M.Hewage -->


<?php
// Include the database connection
include '../config.php';

// Function to sanitize user inputs
function sanitize($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the profile data from the database
    $sql = "SELECT * FROM mynewtable WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Check if the profile exists
    if (!$row) {
        echo "Profile not found.";
        exit;
    }

    // Update profile
    if (isset($_POST['update'])) {
        $firstName = sanitize($_POST['firstName']);
        $lastName = sanitize($_POST['lastName']);
        $email = sanitize($_POST['email']);
        $password = sanitize($_POST['password']);

        // Update the profile data in the database
        $updateSql = "UPDATE mynewtable SET firstname = '$firstName', lastname = '$lastName', email = '$email', password = '$password' WHERE id = '$id'";
        if (mysqli_query($conn, $updateSql)) {
            echo "Profile updated successfully.";
            // Redirect back to the main page
            header("Location: Display_vehicleowner.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "Invalid profile ID.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/vehicle_owner.css">
</head>
<body>
    <div class="container">
        <h2>Edit Profile</h2>
        <form method="POST">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" value="<?php echo $row['firstname']; ?>" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" value="<?php echo $row['lastname']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>" required>

            <button type="submit" name="update">Update Profile</button>
        </form>
    </div>
</body>
</html>
