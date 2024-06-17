<!--H.M.L.S.R. Rajapakse
    IT22602664-->

<?php 

    include_once 'config.php';

    include 'submit_form.php';
    
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

    $sql = "UPDATE inquiry_form SET title = '$title_',  yName = '$name_', email = '$mail', conNum = $contact, pLocation = '$pLocation', dLocation = '$dLocation', sType = '$service', vType = '$vehicle', passengers = '$Passengers', pDate = '$pickDate', pTime = '$pickTime', rDate = '$returnDate', dTime = '$dropTime', msg = '$MSG'  WHERE iID = $id ";

    if ($conn->query($sql)){
        echo ;
    }


?>