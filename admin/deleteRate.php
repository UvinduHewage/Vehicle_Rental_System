<!-- IT22586766
K. S. D. Koralage -->
<?php include_once '../config.php'; ?>

<!DOCTYPE html>
<html>

    <head>
        <title>TINKERBELL Vehicle Rental</title>
        <link rel="icon" type="image/x-icon" href="images/favicon1.jpeg">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/rateADMIN.css">
        <script src="https://kit.fontawesome.com/20733750a5.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div id="rOption">
            <nav>
                <a href="homeADMIN.html"><i class="fa-solid fa-house"></i></a>
                <a href="addNewRate.php">Add New Rate</a>
                <a href="updateRate.php">Update Rate</a>
                <a href="deleteRate.php">Delete Rate</a>
            </nav>

            <h1>Delete Vehicle Rate</h1>

            <form id="rateForm" action="delete_rate_DB.php" method="post">
                <label for="tableSelect">Select Table:</label>
                <select id="tableSelect" name="tableSelect">
                    <option value="with_driver_rates">With Driver Rates</option>
                    <option value="without_driver_rates">Without Driver Rates</option>
                </select>
                <br><br>
                <label for="vID">Vehicle ID:</label>
                <input type="number" id="vID" name="vID" required>
                <br><br>
                <input id="rateSubmit" type="submit" value="Delete Rate" name="rateSubmit">
            </form>
        </div>

        <div id="rButton">
            <?php include_once 'iframeVrate.php' ?>
        </div>

        <script>
            document.getElementById("rateSubmit").addEventListener("click", myfunction);
            function myfunction() 
            {
                event.preventDefault(); 
                
                var confirmation = confirm("Are you sure you want to delete?");
                
                if (confirmation == true) {
                    document.getElementById("rateForm").submit();
                } 
                else {
                    location.reload();
                }
            };
            
        </script>

    </body>
</html>