<!-- IT22586766
K. S. D. Koralage -->
<?php
    require '../config.php';

    $tableSelect = $_POST['tableSelect'];
    $vID = $_POST['vID'];
    $reservationFee = $_POST['reservationFee'];
    $feePerKm = $_POST['feePerKm'];
    $feePerDay = $_POST['feePerDay'];
    $feePerMonth = $_POST['feePerMonth'];

    if ($tableSelect === "with_driver_rates") {
        $query = "UPDATE withdriverrates SET vDReservationFee = $reservationFee, vDRPerKM = $feePerKm WHERE vDTypeID = $vID";
    } elseif ($tableSelect === "without_driver_rates") {
        $query = "UPDATE withoutdriverrates SET reservationFee = $reservationFee, rPerKM = $feePerKm, rPerDay = $feePerDay, rPerMonth = $feePerMonth WHERE vTypeID = $vID";
    }

    if ($conn->query($query)) {
        echo '<script>
            alert("Vehicle rate updated successfully.");
            window.location = "updateRate.php";
        </script>';
    } else {
        echo "Error updating vehicle rate: " . $conn->error;
    }
    
    $conn->close();

?>