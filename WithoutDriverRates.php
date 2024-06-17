<!-- IT22586766
K. S. D. Koralage -->
<?php include 'config.php';?>

<!DOCTYPE html>
<html>

    <head>
        <title>TINKERBELL Vehicle Rental</title>
        <link rel="icon" type="image/x-icon" href="images/favicon1.jpeg">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/header&footer.css">
        <link rel="stylesheet" href="css/rates.css">
        <script src="https://kit.fontawesome.com/20733750a5.js" crossorigin="anonymous"></script>

    </head>


    <body>

    <?php include 'header.php'; ?>

        <div id="rateButton">
            <a href="WithDriverRates.php" >WITH DRIVER RATES</a>
        </div>

        <h1 id="rateTopic">WITHOUT DRIVER RATES</h1>

        <?php

            $sql1="SELECT * FROM withoutdriverrates WHERE vType='car'";
            $result1= $conn->query($sql1);

            echo ("<table id='rateTable'>");

            if ($result1->num_rows > 0){

                echo ("<tr class='theading'>");
                echo ("<th>CARS</th>");
                echo ("<th>RESERVATION FEE (LKR)</th>");
                echo ("<th>PER KM (LKR)</th>");
                echo ("<th>PER DAY (LKR)</th>");
                echo ("<th>PER MONTH (LKR)</th>");
                echo ("</tr>");

                    while($row = $result1->fetch_assoc()) {

                        echo ("<tr>");
                        echo ("<td>". $row['vname']. "</td>");
                        echo ("<td>" . $row['reservationFee'] . ".00 </td>");
                        echo ("<td>" . $row['rPerKM'] . ".00 </td>");
                        echo ("<td>" . $row['rPerDay'] . ".00 </td>");
                        echo ("<td>" . $row['rPerMonth'] . ".00 </td>");
                        echo ("</tr>");
                    }
                
                }
            else {
                echo "No results <BR />"; 
            }
            
            $sql2="SELECT * FROM withoutdriverrates WHERE vType='van(A/C)'";
            $result2= $conn->query($sql2);

            if ($result2->num_rows > 0){

                echo ("<tr class='theading'>");
                echo ("<th>VANS(A/C)</th>");
                echo ("<th>RESERVATION FEE (LKR)</th>");
                echo ("<th>PER KM (LKR)</th>");
                echo ("<th>PER DAY (LKR)</th>");
                echo ("<th>PER MONTH (LKR)</th>");
                echo ("</tr>");

                    while($row = $result2->fetch_assoc()) {

                        echo ("<tr>");
                        echo ("<td>". $row['vname']. "</td>");
                        echo ("<td>" . $row['reservationFee'] . ".00 </td>");
                        echo ("<td>" . $row['rPerKM'] . ".00 </td>");
                        echo ("<td>" . $row['rPerDay'] . ".00 </td>");
                        echo ("<td>" . $row['rPerMonth'] . ".00 </td>");
                        echo ("</tr>");
                    }
                
                }
            else {
                echo "No results <BR />"; 
            }

            $sql3="SELECT * FROM withoutdriverrates WHERE vType='van(non A/C)'";
            $result3= $conn->query($sql3);

            if ($result3->num_rows > 0){

                echo ("<tr class='theading'>");
                echo ("<th>VANS(NON A/C)</th>");
                echo ("<th>RESERVATION FEE (LKR)</th>");
                echo ("<th>PER KM (LKR)</th>");
                echo ("<th>PER DAY (LKR)</th>");
                echo ("<th>PER MONTH (LKR)</th>");
                echo ("</tr>");

                    while($row = $result3->fetch_assoc()) {

                        echo ("<tr>");
                        echo ("<td>". $row['vname']. "</td>");
                        echo ("<td>" . $row['reservationFee'] . ".00 </td>");
                        echo ("<td>" . $row['rPerKM'] . ".00 </td>");
                        echo ("<td>" . $row['rPerDay'] . ".00 </td>");
                        echo ("<td>" . $row['rPerMonth'] . ".00 </td>");
                        echo ("</tr>");
                    }
                
                }
            else {
                echo "No results <BR />"; 
            }

            $sql4="SELECT * FROM withoutdriverrates WHERE vType='motorbike'";
            $result4= $conn->query($sql4);

            if ($result4->num_rows > 0){

                echo ("<tr class='theading'>");
                echo ("<th>MOTORBIKES</th>");
                echo ("<th>RESERVATION FEE (LKR)</th>");
                echo ("<th>PER KM (LKR)</th>");
                echo ("<th>PER DAY (LKR)</th>");
                echo ("<th>PER MONTH (LKR)</th>");
                echo ("</tr>");

                    while($row = $result4->fetch_assoc()) {

                        echo ("<tr>");
                        echo ("<td>". $row['vname']. "</td>");
                        echo ("<td>" . $row['reservationFee'] . ".00 </td>");
                        echo ("<td>" . $row['rPerKM'] . ".00 </td>");
                        echo ("<td>" . $row['rPerDay'] . ".00 </td>");
                        echo ("<td>" . $row['rPerMonth'] . ".00 </td>");
                        echo ("</tr>");
                    }
                
                }
            else {
                echo "No results <BR />"; 
            }

            echo ("</table>");
            
        ?>


        <a href="#inquiryForm" id="submitInquiry">SUBMIT INQUIRY</a>


        <div id="tearms">

            <h4>TERMS AND CONDITIONS</h4>
            
            <ul>
                <li>Billing Cycle: Charges are calculated on a daily basis, following the calendar day system, rather than 24-hour cycles.</li>
                <li>Mileage Charges: Please refer to the tariff provided for specific details on mileage charges.</li>
                <li>Driver Services:</li>
                <ul>
                    <li>Colombo pick up: Rs. 1250/-</li>
                    <li>Airport pick up: Rs. 1950/-</li>
                    <li>Daily service: Rs. 2500/- per day.</li>
                </ul>
                <li>Driver Extras:</li>
                <ul>
                    <li>Night out of Colombo: Rs. 300/- per day + cost of meals and accommodation.</li>
                    <li>Detention after 8 hours: Rs. 300/- per hour.</li>
                </ul>
                <li>Cancellation Policy: In case of cancellation, you will be charged either a day's rental or 25% of the total cost, whichever amount is greater. This charge can be carried forward as a credit for our services and utilized at a later date.</li>
                <li>Government Tax/ Tolls: The rates mentioned above are subject to a 15% VAT. Road tolls and parking charges are the responsibility of the client.</li>
                <li>Collection and Return:</li>
                <ul>
                    <li>Colombo Office: Collection and return timings are from 8:00 a.m. to 6:30 p.m., unless special arrangements have been made.</li>
                    <li>Airport Pickup/Drop off Point: Available 24 hours a day, but prior reservation is required.</li>
                </ul>
                <li>Long-Term Rates: Long-term rates can be discussed separately.</li>
                <li>Changes and Seasonal Surcharge: Rates and terms are subject to change without prior notice. Additionally, during busy months, a seasonal surcharge may be applied.</li>
                <li>Please note that driver services are only provided for single-day rental periods. For rentals exceeding one day, customers are responsible for arranging their own driver.</li>
            </ul>
        </div>

        <?php include 'footer.php'; ?>


    </body>
</html>