<?php
/*IT22558114
Piyarathna R.S.*/

    include '../config.php';
    include 'customersDisplay.php';

    if(isset($_GET['deleteID'])){
        $cusID=$_GET['deleteID'];

        //delete customer
        $sql="DELETE FROM customer WHERE cusID=$cusID";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:deleteCustomer.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }
    
    $conn->close();
?>