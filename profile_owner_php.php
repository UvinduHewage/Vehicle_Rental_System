<!-- IT22196460
U.U.M.Hewage -->

<!DOCTYPE html>
<html>
<head>
    <title>Submit Data</title>
    <link rel="stylesheet" type="text/css" href="../index01_styles.css">
</head>
<body>
<div class="form-container">
    <form method="GET" action="">
    <div class="form-row">
        <label for="id">Enter ID : </label>
    </div>
    <div class="input-box">
        <input type="text" name="id" id="id">
    </div>
      
    <div class="form-row">
        <label for="firstname">Enter First Name : </label>
    </div>
    <div class="input-box">
        <input type="text" name="firstname" id="firstname">
    </div>
    <div class="form-row">
        <center><button type="submit" class="animated-button">Submit</button></center>
    </div>
    </form>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tinkerbell_vrs";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the query
    $sql = "SELECT id, firstname, lastname FROM mynewtable WHERE id = ? LIMIT 1";

    // Create a prepared statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); // Assuming the ID is an integer
 
    // Execute the statement
    $stmt->execute();

    // Bind the result variables
    $stmt->bind_result($result_id, $result_firstname, $result_lastname);

    // Fetch the result
    $stmt->fetch();

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect to a new page with the result
    header("Location: result.php?id=" . $result_id . "&firstname=" . $result_firstname . "&lastname=" . $result_lastname);
    exit();
}
?>
