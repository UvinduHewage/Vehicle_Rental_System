<?php
/*IT22558114
Piyarathna R.S.*/

    include '../config.php';
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../images/favicon1.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Customers</title>
    <style>
        body {
            background-color: #c4e1f1;
            font-family: 'Nunito', sans-serif;
            color: #008080;
        }
    </style>
  </head>
  <body>
    <br>
    <p class="h1 text-center">Customers</p><br>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php
                //customer display
                $sql = "SELECT * FROM customer";
                $result = mysqli_query($conn,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $cusID = $row['cusID'];
                        $cusFName = $row['cusFName'];
                        $cusLName = $row['cusLName'];
                        $cusEmail = $row['cusEmail'];
                        $cusPassword = $row['cusPassword'];
                        echo ("<tr>
                            <th scope='" . $row['cusID'] . "'>" . $row['cusID'] . "</th>
                            <td>" . $row['cusFName'] . "</td>
                            <td>" . $row['cusLName'] . "</td>
                            <td>" . $row['cusEmail'] . "</td>
                            <td>" . $row['cusPassword'] . "</td>
                            <td>
                                <a href='updateCustomer.php?updateID=" . $row['cusID'] . "' class='text-light'>
                                    <button class='btn btn-info'>UPDATE</button>
                                </a>
                                <a href='deleteCustomer.php?deleteID=" . $row['cusID'] . "' class='text-light'>
                                    <button class='btn btn-dark'>DELETE</button>
                                </a>
                            </td>
                        </tr>");
                    }
                }
                $conn->close();
            ?>
            </tbody>
        </table>
    </div>
    <div class="container">
    <a href="signup.php" class="text-light">
        <button class="btn btn-info my-5">
            ADD CUSTOMER
        </button>
    </a>
    </div>
  </body>
</html>