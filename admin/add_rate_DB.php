<!-- IT22586766
K. S. D. Koralage -->
<?php
    require '../config.php';

    $tableSelect = $_POST['tableSelect'];
    $vehicleType = $_POST['vehicleType'];
    $typeName = $_POST['typeName'];
    $reservationFee = $_POST['reservationFee'];
    $feePerKm = $_POST['feePerKm'];
    $feePerDay = $_POST['feePerDay'];
    $feePerMonth = $_POST['feePerMonth'];

    if ($tableSelect === "with_driver_rates") {
        $query = "INSERT INTO withdriverrates (vDtypeName, vDType, vDReservationFee, vDRPerKM) 
        VALUES ('$typeName', '$vehicleType', '$reservationFee', '$feePerKm')";
    } elseif ($tableSelect === "without_driver_rates") {
        $query = "INSERT INTO withoutdriverrates (vtypeName, vType, reservationFee, rPerKM, rPerDay, rPerMonth) 
        VALUES ('$typeName', '$vehicleType', '$reservationFee', '$feePerKm', '$feePerDay', '$feePerMonth')";
    }

    if ($conn->query($query)) {
        echo '<script>
                alert("Vehicle rate added successfully.");
                window.location = "addNewRate.php";
            </script>';
    } else {
        echo "Error adding vehicle rate: " . $conn->error;
    }


$conn->close();
?>