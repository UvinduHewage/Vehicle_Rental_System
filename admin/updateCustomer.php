<?php
/* IT22558114
Piyarathna R.S. */

include '../config.php';

$cusID = isset($_GET['updateID']) ? $_GET['updateID'] : null;

if (isset($_POST['submit'])) {
    $cusID = $_POST['cusID'];
    $cusFName = $_POST['cusFirstName'];
    $cusLName = $_POST['cusLastName'];
    $cusEmail = $_POST['cusEmail'];
    $cusPassword = $_POST['cusPassword'];

    $cusFName = mysqli_real_escape_string($conn, $cusFName);
    $cusLName = mysqli_real_escape_string($conn, $cusLName);
    $cusEmail = mysqli_real_escape_string($conn, $cusEmail);
    $cusPassword = mysqli_real_escape_string($conn, $cusPassword);

    $sql = "UPDATE customer SET cusFName=?, cusLName=?, cusEmail=?, cusPassword=? WHERE cusID=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $cusFName, $cusLName, $cusEmail, $cusPassword, $cusID);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($result) {
        header('Location: customersDisplay.php');
        exit;
    } else {
        die(mysqli_error($conn));
    }
}

$sql = "SELECT * FROM customer WHERE cusID='$cusID'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cusFName = $row['cusFName'];
$cusLName = $row['cusLName'];
$cusEmail = $row['cusEmail'];
$cusPassword = $row['cusPassword'];

$conn->close();

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Customer Update</title>
    <style>
        body {
            background-image: url("../images/backgroundnew.jpg");
            font-family: 'Nunito', sans-serif;
            color: #008080;
            font-weight: bold;
        }

        form {
            width: 50%;
            margin-right: auto;
            margin-left: auto;
            margin-top: 50px;
            background-color: #c4e1f1;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px 2px grey;
            line-height: 100%;
        }
    </style>
    <script>
            function dataUpdated() {
                alert("Updated successfully!");
            }
    </script>
</head>

<body>
    <div class="container">
        <form action="" method="post" onsubmit="dataUpdated()">
            <p class="h1 text-center">Update Customer</p><br>

            <input type="hidden" name="cusID" value="<?php echo $cusID; ?>">

            <div class="form-group">
                <label>First Name:</label>
                <input type="text" id="cusFirstName" class="form-control" name="cusFirstName" placeholder="Enter First Name" required="true" autocomplete="off"
                    value="<?php echo $cusFName; ?>">
            </div>

            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" id="cusLastName" class="form-control" name="cusLastName" placeholder="Enter Last Name" required="true" autocomplete="off"
                    value="<?php echo $cusLName; ?>">
            </div>

            <div class="form-group">
                <label>Email Address:</label>
                <input type="email" id="cusEmail" class="form-control" name="cusEmail" placeholder="Enter Email Address" required="true" autocomplete="off"
                    value="<?php echo $cusEmail; ?>">
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" id="cusPassword" class="form-control" name="cusPassword" placeholder="Enter Password" required="true" autocomplete="off"
                    value="<?php echo $cusPassword; ?>">
            </div>
            <br>
            <center><button type="submit" name="submit" class="btn btn-info">Update</button></center><br><br>

        </form>
    </div>
</body>

</html>