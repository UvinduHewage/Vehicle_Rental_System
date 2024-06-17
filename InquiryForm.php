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
        <link rel="stylesheet" href="css/header&footer.css">
        <link rel="stylesheet" href="css/Inquiry_form.css">
        <script src="https://kit.fontawesome.com/20733750a5.js" crossorigin="anonymous"></script>
        <script src="js/myScript.js"></script>
    </head>


    <body>

    <?php include_once 'header.php'; ?> 

    <?php 
        $location = isset($_POST['pickUpLocation']) ? $_POST['pickUpLocation'] : '';
        $pdate = isset($_POST['pickUpDate']) ? $_POST['pickUpDate'] : '';
        $ptime = isset($_POST['pickUpTime']) ? $_POST['pickUpTime'] : '';
        $ddate = isset($_POST['dropOffDate']) ? $_POST['dropOffDate'] : '';
        $dtime = isset($_POST['dropOffTime']) ? $_POST['dropOffTime'] : '';
        $vtype = isset($_POST['vehicleType']) ? $_POST['vehicleType'] : '';
        
    ?>

        <form action="submit_form.php" method="post" id="form">
            <fieldset class="f1">
                <legend>QUICK INQUIRY FORM</legend>
                    <table class="form-table">
                        <tr>
                            <td><label for="title">Title:</label><br>
                                <select class="spaces" id="title" name="title">
                                    <option value="MR.">MR.</option>
                                    <option value="MRS.">MRS.</option>
                                    <option value="MISS.">MISS.</option>
                                    <option value="REV.">REV.</option>
                                </select>
                            </td> 
                            <td><label for="name">Your Name:</label><br>
                                <input class="spaces" type="text" id="name" name="name" placeholder="Enter your name.." required>
                            </td>
                            <td><label for="email">Your Email:</label><br>
                                <input class="spaces" type="email" id="email" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required>
                            </td>            
                        </tr>
                        <tr>
                            <td><label for="cno">Your Contact Number:</label><br>
                                <input class="spaces" type="phone" id="cno" name="cno" placeholder="Contact number.." pattern="[0-9]{10}" required>
                            </td> 
                            <td><label for="plocation">Pickup Location:</label><br>
                                <input type="text" id="plocation" name="plocation" placeholder="Enter a location.." value=<?php echo $location ?> required>
                            </td>            
                        </tr>
                        <tr>
                            <td><label for="dlocation">Dropoff Location:</label><br>
                                <input class="spaces" type="text" id="dlocation" name="dlocation" placeholder="Enter a location.." required>
                            </td> 
                            <td><label for="types">Service Type:</label><br>
                                <select class="spaces" id="types" name="types">
                                    <option value="MR.">SELF-DRIVE </option>
                                    <option value="MRS.">TOURS WITH DRIVER</option>
                                    <option value="MISS.">CITY TRANSFERS</option>
                                    <option value="REV.">WEDDINGS</option>
                                </select>
                            </td>   
                            <td>
                                <label for="types">Driver Type:</label><br>
                                <input type="radio" id="withDriver" name="driverType">
                                <label for="withDriver">With driver</label>
                                <input type="radio" id="withoutDriver" name="driverType">
                                <label for="withoutDriver">Without driver</label>
                            </td>         
                        </tr>
                        <tr>
                            <td><label for="vtype">Vehicle Type:</label><br>
                                <select class="spaces" id="vtype" name="vtype" value=<?php echo $vtype ?> required>
                                    <option value="Luxury">Luxury Vehicles</option>
                                    <option value="General">General Vehicles</option>
                                    <option value="Van">A/C,Non A/C Vans</option>
                                    <option value="Motorbike">Motorbike</option>
                                </select>
                            </td> 
                            <td><label for="passengers">Passengers:</label><br>
                                <input class="spaces" type="text" id="passengers" name="passengers" placeholder="Please Select" required>
                            </td>            
                        </tr>
                        <tr>
                            <td><label for="pdate">Pickup Date:</label><br>
                                <input class="spaces" type="date" id="pdate" name="pdate" value=<?php echo $pdate ?> required>
                            </td> 
                            <td><label for="ptime">Pickup Time:</label><br>
                                <input class="spaces" type="time" id="ptime" name="ptime" value=<?php echo $ptime ?> required>
                            </td>            
                        </tr>
                        <tr>
                            <td><label for="rdate">Return Date:</label><br>
                                <input class="spaces" type="date" id="rdate" name="rdate" value=<?php echo $ddate ?>required>
                            </td> 
                            <td><label for="dtime">Dropoff Time:</label><br>
                                <input class="spaces" type="time" id="dtime" name="dtime" value=<?php echo $dtime ?>required>
                            </td>            
                        </tr>
                    </table>
                    <table class="form-table">
                        <tr>
                            <td><label for="text">Message</label><br>
                                <input class="spaces" type="text" id="msg" name="msg" placeholder="Type...">
                            </td>
                        </tr>
                    </table>
                    <table class="form-table">
                        <tr>
                            <td><input type="checkbox" class="inputStyle" id="checkbox" onclick="enableButton()">Accept Terms and Conditions </td>
                        </tr>
                        <tr>
                            <td class="Ibutton"><button type="submit"  onclick="location.href='Inquiry_form.php'" >SUBMIT</button></td>
                            <td class="Ibutton"><input  type="reset" value="RESET" ></td>
                        </tr>
                        <tr>
                            <td class="Ibutton"><input type="Button" value="Payment" onclick="location.href='payment.php'"></td>
                        </tr>
                    </table>
            </fieldset>
        </form>
        
        <?php include_once 'footer.php'; ?>
    </body>
</html>