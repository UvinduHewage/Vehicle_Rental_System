<!-- IT22586766
K. S. D. Koralage -->
<?php include_once '../config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body{
                margin: auto;
                font-family: 'Wix Madefor Display', sans-serif;
            }
            table{
                background-color : rgb(211, 189, 176, 0.9);
                border: none;
                border-collapse: collapse;
            }
            tr:hover{
                background-color: rgba(240, 255, 255, 0.8);
                cursor: pointer;
            }
            td{
                padding: 7px;
            }
        </style>
    </head>


    <body>
        <h1 id="rateTopic">WITHOUT DRIVER RATES</h1>

        <?php

            $sql1="SELECT * FROM withoutdriverrates WHERE vType='car'";
            $result1= $conn->query($sql1);

            echo ("<table id='rateTable' border='1'>");

            if ($result1->num_rows > 0){

                echo ("<tr class='theading'>");
                echo ("<th>WOD ID</th>");
                echo ("<th>CARS</th>");
                echo ("<th>RESERVATION FEE (LKR)</th>");
                echo ("<th>PER KM (LKR)</th>");
                echo ("<th>PER DAY (LKR)</th>");
                echo ("<th>PER MONTH (LKR)</th>");
                echo ("</tr>");

                    while($row = $result1->fetch_assoc()) {

                        echo ("<tr>");
                        echo ("<td>". $row['vTypeID']. "</td>");
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
                echo ("<th>WOD ID</th>");
                echo ("<th>VANS(A/C)</th>");
                echo ("<th>RESERVATION FEE (LKR)</th>");
                echo ("<th>PER KM (LKR)</th>");
                echo ("<th>PER DAY (LKR)</th>");
                echo ("<th>PER MONTH (LKR)</th>");
                echo ("</tr>");

                    while($row = $result2->fetch_assoc()) {

                        echo ("<tr>");
                        echo ("<td>". $row['vTypeID']. "</td>");
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
                echo ("<th>WOD ID</th>");
                echo ("<th>VANS(NON A/C)</th>");
                echo ("<th>RESERVATION FEE (LKR)</th>");
                echo ("<th>PER KM (LKR)</th>");
                echo ("<th>PER DAY (LKR)</th>");
                echo ("<th>PER MONTH (LKR)</th>");
                echo ("</tr>");

                    while($row = $result3->fetch_assoc()) {

                        echo ("<tr>");
                        echo ("<td>". $row['vTypeID']. "</td>");
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
                echo ("<th>WOD ID</th>");
                echo ("<th>MOTORBIKES</th>");
                echo ("<th>RESERVATION FEE (LKR)</th>");
                echo ("<th>PER KM (LKR)</th>");
                echo ("<th>PER DAY (LKR)</th>");
                echo ("<th>PER MONTH (LKR)</th>");
                echo ("</tr>");

                    while($row = $result4->fetch_assoc()) {

                        echo ("<tr>");
                        echo ("<td>". $row['vTypeID']. "</td>");
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
    </body>
</html>