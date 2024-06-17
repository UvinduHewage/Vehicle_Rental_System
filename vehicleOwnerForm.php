<!-- IT22586766
K. S. D. Koralage -->
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINKERBELL Vehicle Rental</title>
    <link rel="icon" type="image/x-icon" href="images/favicon1.jpeg">
    <link rel="stylesheet" href="css/header&footer.css">
    <link rel="stylesheet" href="css/vehicleOwnerForm.css">
    <script src="https://kit.fontawesome.com/20733750a5.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap');
    </style>
    </head>

    <body>
        
    <?php include 'header.php'; ?>

        <div id="vehicleForm">

            <h1>Vehicle Owner Registration Form</h1>

            <form id="vForm" action="VOForm.php" method="POST">

                <fieldset class="vfSet">

                    <legend>Personal Information</legend>

                    <label for="vofName">First Name:</label>
                    <input type="text" id="vofName" name="VOfName" pattern="[A-Za-z]+" required>
                    <br>
                    <label for="volName">Last Name:</label>
                    <input type="text" id="volName" name="VOlName" pattern="[A-Za-z]+" required>
                    <br>
                    <label for="voAddress">Physical Address:</label>
                    <input type="text" id="voAddress" name="VOaddress" required>
                    <br>
                    <label for="voDOB">Date of Birth:</label>
                    <input type="date" id="voDOB" name="VODOB" required>
                    <br>
                    <label for="voNIC">NIC Number:</label>
                    <input type="text" id="voNIC" name="VONIC" required>
                    <br>
                    <label for="voPNumber">Phone Number:</label>
                    <input type="tel" id="voPNumber" name="VOPNumber" required>
                    <br>
                    <label for="voEmail">Email Address:</label>
                    <input type="email" id="voEmail" name="VOEmail" required>

                </fieldset>

                <fieldset class="vfSet">

                    <legend>Identification Details</legend>

                    <label for="voLnum">License Number:</label>
                    <input type="text" id="voLnum" name="voLicenseNum">
                    <br>
                    <label for="voLEDate">Expiration Date:</label>
                    <input type="date" id="voLEDate" name="voLicendeExpireDate">

                </fieldset>

                <fieldset class="vfSet">

                    <legend>Vehicle Information</legend>

                    <label for="vmake">Make:</label>
                    <input type="text" id="vmake" name="vMake" required>
                    <br>
                    <label for="vmodel">Model:</label>
                    <input type="text" id="vmodel" name="vModel" required>
                    <br>
                    <label for="vyear">Year:</label>
                    <input type="text" id="vyear" name="vYear" required>
                    <br>
                    <label for="vin">VIN (Vehicle Identification Number):</label>
                    <input type="text" id="vin" name="VIN" required>
                    <br>
                    <label for="LPNum">License Plate Number:</label>
                    <input type="text" id="LPNum" name="LicensePlateNum" required>

                </fieldset>

                <fieldset class="vfSet">

                    <legend>Vehicle Registration Documents</legend>

                    <label for="registrationDocuments">Upload a scanned copy of the vehicle's registration documents and proof of ownership:</label>
                    <input type="file" id="registrationDocuments" name="registrationDocuments" >

                </fieldset>

                <fieldset class="vfSet">

                    <legend>Insurance Details</legend>
                    
                    <label for="insuranceProvider">Insurance Provider:</label>
                    <input type="text" id="insuranceProvider" name="insuranceProvider" required>
                    <br>
                    <label for="policyNumber">Policy Number:</label>
                    <input type="text" id="policyNumber" name="policyNumber" required>
                    <br>
                    <label for="insuranceCertificate">Upload a scanned copy of the valid insurance certificate:</label>
                    <input type="file" id="insuranceCertificate" name="insuranceCertificate" >

                </fieldset>

                <fieldset class="vfSet">

                    <legend>Vehicle Condition</legend>

                    <label for="vehicleCondition">Describe the vehicle's condition, including any existing damages or special features:</label>
                    <br>
                    <textarea id="vehicleCondition" name="vehicleCondition" rows="4" required></textarea>

                </fieldset>

                <fieldset class="vfSet">

                    <legend>Maintenance and Service History</legend>

                    <label for="maintenanceHistory">Provide details of the vehicle's maintenance and service history, if applicable:</label>
                    <br>
                    <textarea id="maintenanceHistory" name="maintenanceHistory" rows="4"></textarea>

                </fieldset>
                
                <fieldset class="vfSet">

                    <legend>Security and Verification</legend>

                    <label for="driverLicense">Upload a scanned copy of your driver's license or NIC:</label>
                    <input type="file" id="driverLicense" name="driverLicense" >

                </fieldset>

                <button type="submit" >SUBMIT</button>

            </form>
        
        </div>

        <?php include 'footer.php'; ?>

    </body>
</html>