<!-- IT22586766
K. S. D. Koralage -->
<?php include_once '../config.php'; ?>

<!DOCTYPE html>
<html>

    <head>
        <title>TINKERBELL Vehicle Rental</title>
        <link rel="icon" type="image/x-icon" href="../images/favicon1.jpeg">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/rateADMIN.css">
        <script src="https://kit.fontawesome.com/20733750a5.js" crossorigin="anonymous"></script>
        <script>
            function showFields() {
                var tableSelect = document.getElementById("tableSelect");
                var additionalFields = document.getElementById("additionalFields");
                
                if (tableSelect.value === "with_driver_rates")
                {
                    additionalFields.style.display = "none";
                } 
                else if (tableSelect.value === "without_driver_rates") 
                {
                    additionalFields.style.display = "block";
                }
            }
        </script>
    </head>

    <body>
        <div id="rOption">
            <nav>
                <a href="homeADMIN.html"><i class="fa-solid fa-house"></i></a>
                <a href="addNewRate.php">Add New Rate</a>
                <a href="updateRate.php">Update Rate</a>
                <a href="deleteRate.php">Delete Rate</a>
            </nav>

            <h1>Update Vehicle Rate</h1>
    
            <form id="rateForm" action="update_rate_DB.php" method="POST">
                <label for="tableSelect">Select Table:</label>
                <select id="tableSelect" name="tableSelect" onchange="showFields()">
                    <option value="with_driver_rates">With Driver Rates</option>
                    <option value="without_driver_rates">Without Driver Rates</option>
                </select>
                <br><br>
                
                <div id="vehicleTypeFields">
                    <label for="vID">Vehicle ID:</label>
                    <input type="number" id="vID" name="vID" required>
                    <br><br>

                    <label for="reservationFee">New Reservation Fee:</label>
                    <input type="number" id="reservationFee" name="reservationFee" required>
                    <br><br>
                    
                    <label for="feePerKm">New Fee per Kilometer:</label>
                    <input type="number" id="feePerKm" name="feePerKm" step="0.01" required>
                    <br><br>
                </div>
                
                <div id="additionalFields" style="display: none;">
                    <label for="feePerDay">New Fee per Day:</label>
                    <input type="number" id="feePerDay" name="feePerDay" step="0.01">
                    <br><br>
                    
                    <label for="feePerMonth">New Fee per Month:</label>
                    <input type="number" id="feePerMonth" name="feePerMonth" step="0.01">
                    <br><br>
                </div>
                
                <input id="rateSubmit" type="submit" value="Update" name="rateSubmit">
            </form>
        </div>

        <script>
            document.getElementById("rateSubmit").addEventListener("click", myfunction);
            function myfunction() 
            {
                event.preventDefault(); 
                
                var confirmation = confirm("Are you sure you want to update?");
                
                if (confirmation == true) {
                    document.getElementById("rateForm").submit();
                } 
                else {
                    location.reload();
                }
            };
            
        </script>

        <div id="rButton">
            <?php include_once 'iframeVrate.php' ?>
        </div>
    </body>
</html>