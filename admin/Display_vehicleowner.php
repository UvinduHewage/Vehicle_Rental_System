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

// CREATE operation
if (isset($_POST['create'])) {
    $firstName = sanitize($_POST['firstName']);
    $lastName = sanitize($_POST['lastName']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);

    // Insert the data into the database
    $sql = "INSERT INTO mynewtable (firstname, lastname, email, password) VALUES('$firstName', '$lastName', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "Profile created successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// READ operation
$sql = "SELECT * FROM mynewtable";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Vehicle Owner</title>
    <link rel="stylesheet" type="text/css" href="../css/vehicle_owner.css">
</head>
<body>
    <div class="container">
        <h1>Update Vehicle Owner Profiles</h1>

        <!-- Display profiles -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                            <button  onclick="editProfile(<?php echo $row['id']; ?>)">Edit</button>
                            <button class=button-danger onclick="deleteProfile(<?php echo $row['id']; ?>)">Delete</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Add profile form -->
        <h2>Add Profile</h2>
        <form id="addForm" method="POST">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="create">Add Profile</button>
        </form>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>
