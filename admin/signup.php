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

    <title>Customer Registration</title>
    <style>
        body {
            background-image: url(../images/backgroundnew.jpg);
            font-family: 'Nunito', sans-serif;
            color: #008080;
            font-weight:bold;
        }
        form {
            width: 50%;
            margin-right:auto;
            margin-left:auto;
            margin-top: 50px;
            background-color: #c4e1f1;
            padding: 30px ;
            border-radius: 20px;
            box-shadow: 0px 0px 10px 2px grey;
            line-height: 100%;
        }
       
    </style>
    <script>
            function registerSuccess() {
                alert("Data added successfully!");
            }
    </script>
  </head>
  <body>
  <div class="container">
                <form action="register.php" method="post" onsubmit="registerSuccess()">
                    <p class="h1 text-center">Register Customer</p><br>

                    <div class="form-group">
                        <label>First Name :</label>
                        <input type="text" id="cusFirstName" class="form-control" name="cusFirstName" placeholder="Enter First Name" required="true" autocomplete="off">
                    </div>
                    
                    <div class="form-group">
                        <label>Last Name :</label>
                        <input type="text" id="cusLastName" class="form-control" name="cusLastName" placeholder="Enter Last Name" required="true" autocomplete="off">
                    </div>
        
                    <div class="form-group">
                        <label>Email Address :</label>
                        <input type="email" id="cusEmail" class="form-control" name="cusEmail" placeholder="Enter Email Address" required="true" autocomplete="off">
                    </div>
        
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" id="cusPassword" class="form-control" name="cusPassword" placeholder="Enter Password" required="true" autocomplete="off">
                    </div>
                    <br>
                    <center><button type="submit" name="submit" class="btn btn-info">REGISTER</button></center><br><br>
                    <center><button type="submit" class="btn btn-info"><a href = "customersDisplay.php" class="text-light">VIEW CUSTOMERS</a></button></center><br><br>
                </form>
            </div>
  </body>
</html>