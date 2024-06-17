<!-- IT22558114
Piyarathna R.S. -->

<?php
        include '../config.php';

        if(isset($_POST['submit'])){
            $cusFName = $_POST['cusFirstName'];
            $cusLName = $_POST['cusLastName'];
            $cusEmail = $_POST['cusEmail'];
            $cusPassword = $_POST['cusPassword'];
            
            $sql = "INSERT INTO customer (cusFName, cusLName, cusEmail, cusPassword) 
                VALUES ('$cusFName', '$cusLName', '$cusEmail', '$cusPassword')";
                
            $result = mysqli_query($conn, $sql);
            if($result){
                header('location:customersDisplay.php');
            }
            else{
                echo "Please try again";
            }
        }
        
        $conn->close();
?>