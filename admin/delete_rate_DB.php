<!-- IT22586766
K. S. D. Koralage -->
<?php

    require '../config.php';

    $tableSelect = $_POST['tableSelect'];
    $vID = $_POST['vID'];

    if ($tableSelect === "with_driver_rates") {
        $query = "DELETE FROM withdriverrates WHERE vDTypeID = $vID";
    } elseif ($tableSelect === "without_driver_rates") {
        $query = "DELETE FROM withoutdriverrates WHERE vTypeID = $vID";
    }

    if ($conn->query($query)) {
        echo '<script>
            alert("Vehicle rate deleted successfully.");
            window.location = "deleteRate.php";
        </script>';
    } else {
        echo "Error deleting vehicle rate: " . $conn->error;
    }
    
    $conn->close();

?>
