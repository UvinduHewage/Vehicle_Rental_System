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
        $sql = "SELECT * FROM inquiry_form";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc ()){

            echo "<form action='submit_form.php' method='post' id='form'>";
              echo "<fieldset class='f1'>";
                    echo "<legend>QUICK INQUIRY FORM</legend>";
                        echo "<table class='form-table'>";
                            echo "<tr>";
                                echo "<td><label for='title'>Title:</label><br>";
                                    echo "<select class='spaces' id='title' name='title'>";
                                        echo "<option value='MR.'>".$row['title']. "</option>";
                                        
                                    echo "</select>;";
                                echo "</td> ;";
                                echo "<td><label for='name'>Your Name:</label><br>;";
                                    echo "<input class='spaces' type='text' id='name' name='name' >.$row[yName].;";
                                echo "</td>;";
                                echo "<td><label for='email'>Your Email:</label><br>;";
                                    echo "<input class='spaces' type='email' id='email' name='email' >.$row[email].;";
                                echo "</td>            ;";
                            echo "</tr>;";
                            echo "<tr>;";
                                echo "<td><label for='cno'>Your Contact Number:</label><br>;";
                                    echo "<input class='spaces' type='text' id='cno' name='cno' >.$row[conNum].;";
                                echo "</td> ;";
                                echo "<td><label for='plocation'>Pickup Location:</label><br>;";
                                    echo "<input type='text' id='plocation' name='plocation' >.$row[pLocation].;";
                                echo "</td>;";
                            echo "</tr>;";
                            echo "<tr>;";
                                echo "<td><label for='dlocation'>Dropoff Location:</label><br>;";
                                    echo "<input class='spaces' type='text' id='dlocation' name='dlocation'>.$row[dLocation].;";
                                echo "</td> ;";
                                echo "<td><label for='types'>Service Type:</label><br>;";
                                    echo "<select class='spaces' id='types' name='types'>;";
                                        echo "<option value='MR.'>SELF-DRIVE </option>.$row[sType].;";
                                       
                                    echo "</select>;";
                                echo "</td> ;";
                            echo "</tr>;";
                            echo "<tr>;";
                                echo "<td><label for='vtype'>Vehicle Type:</label><br>;";
                                    echo "<select class='spaces' id='vtype' name='vtype'>;";
                                        echo "<option value='Luxury'>Luxury Vehicles</option>.$row[vType].;";
                                    echo "</select>;";
                                echo "</td> ;";
                                echo "<td><label for='passengers'>Passengers:</label><br>;";
                                    echo "<input class='spaces' type='text' id='passengers' name='passengers' >.$row[passengers].;";
                                echo "</td>            ;";
                            echo "</tr>;";
                            echo "<tr>;";
                                echo "<td><label for='pdate'>Pickup Date:</label><br>;";
                                    echo "<input class='spaces' type='date' id='pdate' name='pdate' >.$row[pDate].;";
                                echo "</td> ";
                                echo "<td><label for='ptime'>Pickup Time:</label><br>";
                                    echo "<input class='spaces' type='time' id='ptime' name='ptime' >.$row[pTime].";
                                echo "</td>            ";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td><label for='rdate'>Return Date:</label><br>";
                                    echo "<input class='spaces' type='date' id='rdate' name='rdate' >.$row[rDate].";
                                echo "</td> ";
                                echo "<td><label for='dtime'>Dropoff Time:</label><br>";
                                    echo "<input class='spaces' type='time' id='dtime' name='dtime' >.$row[dTime].";
                                echo "</td>            ";
                            echo "</tr>";
                        echo "</table>";
                        echo "<table class='form-table'>";
                            echo "<tr>";
                                echo "<td><label for='text'>Message</label><br>";
                                    echo "<input class='spaces' type='text' id='msg' name='msg' >.$row[msg].";
                                echo "</td>";
                            echo "</tr>";
                        echo "</table>";
                        echo "<table class='form-table'>";
                            echo "<tr>";
                            echo"<td><button type='submit'><a href='editForm.php'>Edit</a></button></td>";
                            echo"<td><button type='submit'><a href='deleteForm.php'>Delete</a></button></td>";      
                            echo "</tr>";
                        echo "</table>";
                echo "</fieldset>";
            echo "</form>";
            }
        }
        ?>

        <?php include_once 'footer.php'; ?>
    </body>
</html>