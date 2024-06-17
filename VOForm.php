<!-- IT22586766
K. S. D. Koralage -->
<?php 
include 'config.php';

$firstName = $_POST["VOfName"];
$lastName = $_POST["VOlName"];
$address = $_POST["VOaddress"];
$DOB = $_POST["VODOB"];
$NIC = $_POST["VONIC"];
$phoneNumber = $_POST["VOPNumber"];
$email = $_POST["VOEmail"];
$licenseNumber = $_POST["voLicenseNum"];
$expirationDate = $_POST["voLicendeExpireDate"];
$make = $_POST["vMake"];
$model = $_POST["vModel"];
$year = $_POST["vYear"];
$vin = $_POST["VIN"];
$licensePlateNumber = $_POST["LicensePlateNum"];
$insuranceProvider = $_POST["insuranceProvider"];
$policyNumber = $_POST["policyNumber"];
$vehicleCondition = $_POST["vehicleCondition"];
$maintenanceHistory = $_POST["maintenanceHistory"];

$sql = "INSERT INTO vehicle_owners (first_name, last_name, address, dob, nic, phone_number, email, license_number, expiration_date, make, model, year, vin, license_plate_number, insurance_provider, policy_number, vehicle_condition, maintenance_history)
            VALUES ('$firstName', '$lastName', '$address', '$DOB', '$NIC', '$phoneNumber', '$email', '$licenseNumber', '$expirationDate', '$make', '$model', '$year', '$vin', '$licensePlateNumber', '$insuranceProvider', '$policyNumber', '$vehicleCondition', '$maintenanceHistory')";

    if ($conn->query($sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>