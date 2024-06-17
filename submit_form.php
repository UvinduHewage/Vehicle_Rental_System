<!--H.M.L.S.R. Rajapakse
    IT22602664-->

<?php 
require 'config.php';

$title_=$_POST["title"];
$name_=$_POST["name"];
$mail=$_POST["email"];
$contact=$_POST["cno"];
$pLocation=$_POST["plocation"];
$dLocation=$_POST["dlocation"];
$service=$_POST["types"];
$vehicle=$_POST["vtype"];
$Passengers=$_POST["passengers"];
$pickDate=$_POST["pdate"];
$pickTime=$_POST["ptime"];
$returnDate=$_POST["rdate"];
$dropTime=$_POST["dtime"];
$MSG=$_POST["msg"];

$sql="INSERT INTO inquiry_form (title, yName, email, conNum, pLocation, dLocation, sType, vType, passengers, pDate, pTime, rDate, dTime, msg) 
VALUES('$title_','$name_','$mail', $contact,'$pLocation','$dLocation', '$service', '$vehicle', '$Passengers', '$pickDate', '$pickTime', '$returnDate', '$dropTime', '$MSG') ";

if ($conn->query($sql))
{
   
    header('location:Inquiry_form.php');
}
else{
    echo "<script> alert('ERROR:Could not able to execute the query.')</script>";

   // echo $sql;
}

?>