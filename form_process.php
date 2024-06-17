<?php

 
//linking the configuration file

require 'config.php' ;

if  (isset($_POST ["submit"])) 

  {

    
    $NIC_Number = $_POST["NICnumber"];
    $Card_Number = $_POST["Cnumber"];
    $Card_ExpMonth = $_POST["ExpMonth"];
    $Card_ExpYear = $_POST["ExpYear"];
    $Card_CVV = $_POST["cvv"];

  
 
$sql = "INSERT INTO card_details ( NICnumber, Cnumber, ExpMonth, ExpYear,cvv ) 
VALUES ( '$NIC_Number', '$Card_Number' , $Card_ExpMonth, $Card_ExpYear,$Card_CVV )";


if($con->query($sql))
 {
  
  header ('location:CRUD.php');
  exit ();
} 

else {
   echo  "Error." .$con->error;
}


$con-> close ();

  }

  else {
    header('location:payment.php?error=abcd');
    exit ();
  }

?>
