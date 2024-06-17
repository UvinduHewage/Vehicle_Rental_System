<!-- IT22196460
U.U.M.Hewage -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tinkerbell_vrs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>