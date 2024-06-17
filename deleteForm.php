<!--H.M.L.S.R. Rajapakse
    IT22602664-->
    <?php 
    include_once 'config.php'; 
?>

<!DOCTYPE html>
<html>

    <head>
        <title>TINKERBELL Vehicle Rental | Inquiry form</title>
        <link rel="icon" type="image/x-icon" href="images/favicon1.jpeg">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/Inquiry_form.css">
        <link rel="stylesheet" href="css/header&footer.css">
        <script src="https://kit.fontawesome.com/20733750a5.js" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap');
        </style>
       

        <script>
            alert("Submission Successful");
        </script>
    </head>


    <body id="home">

        <?php include_once 'header.php'; ?>


        <?php
        $id =$_GET['id'];
        $sql = "SELECT * FROM inquiry_form where iID = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc ()){
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
            }
        }
        ?>   
    <form action='submitUpdate.php' method='post' id='form'>
    <fieldset class="f1">
                <legend>QUICK INQUIRY FORM</legend>
                    <table class="form-table">
                        <tr>
                            <td><label for="title">Title:</label><br>
                            <select class="spaces" id="title" name="title" value="<?php echo $title_;?>">

    </form>
            
    <?php include_once 'footer.php'; ?>
   
    </body>
</html>