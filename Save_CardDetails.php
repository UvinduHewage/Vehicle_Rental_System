
<!DOCTYPE html>

<html>
    <head>
        <title> CRUD Operations </title>
        <link rel = "stylesheet" href = "css/style.css">
        <script src = "js/payment.js"></script>
       
  </head>

<body>
	<?php
	include_once 'header.php';
	?>

		<br><br>
		<center>
			<img src = "images/secure-payment.jpg" height = "10%" width = "10%">

			 
			<h2><b>CARD DETAILS FORM</b></h2>
      <h3>Please fill out this form again so we could save your details</h3>
	</center>

    <?php
      require 'config.php';
    ?>
	
	<div class ='container'>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" target = "_self" method = "POST">
			<div class = "CDBox">

				<div class = "CDetails">
					<div class ='col'>

					<br><label style = "margin-left: 10%">NIC Number</label><br>
					<input type = "text" class = "Cnumber" id = "NICnumber" name = "NICnumber" pattern = "[0-9]{12}"placeholder = "200025221235" style = "margin-left: 10%" required><br><br>
					
					<label style = "margin-left: 10%">Name on Card</label> <br>
					<input type = "text" class = "Cname" id = "CName" name = "Cname" pattern = "[a-zA-Z\s.]{5,25}"placeholder = "Type your Name on Card" style = "margin-left: 10%" required> <br><br>
					
					<lable style = "margin-left: 10%">CVV</label><br>
					<input type = "text" class = "CVV" id = "cvv" name = "cvv"   pattern = "[0-9]{3}" placeholder = "***" style = "margin-left: 10%" required><br><br>
					
					<label style = "margin-left: 10%">Card Number</label><br>
					<input type = "text" class = "Cnumber" pattern = "[0-9]{13,16}" id = "Cnumber" name = "Cnumber" pattern = "[0-9]{13,16}" placeholder = "1111-2222-3333-4444" style = "margin-left: 10%" required><br><br>
					
					<lable style = "margin-left: 10%">Expiration Date</lable><br>
					
					<select name = "ExpMonth" style = "margin-left: 10%" class = "ExpMonth" required>
						<option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option>
						<option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option>
					</select>
					<select name = "ExpYear" style = "margin-left: 2%" class = "ExpYear" required>
						<option>2020</option><option>2021</option><option>2022</option><option>2023</option><option>2024</option><option>2025</option> 
					</select> <br>
						<img src = "images/card_img.png" style = "margin-left: 4%" height = "40px" width = "200px"> <br><br>
					 
						 
					<lable style = "font-size: 12px; margin-left: 10%">Accept Privacy Policy Terms</label>

					<input type = "checkbox" id = "policy" name = "policy" required onclick = "enableButton()"> <br><br>

					<input class = "buttonCD" style = "margin-left: 10%" type = "submit" id = "btn1" name = "btn1" value = "Confirm" ><br><br>
				</div>
				</div>
			</div>
			</div>
		</form>
		<br><br>

    <?php
      if(isset($_POST["btn1"])){
		$NIC_Number = $_POST["NICnumber"];
		$Card_Number = $_POST["Cnumber"];
		$Card_ExpMonth = $_POST["ExpMonth"];
		$Card_ExpYear = $_POST["ExpYear"];
		$Card_CVV = $_POST["cvv"];

		$sql = "INSERT INTO card_details (  NICnumber, Cnumber, ExpMonth, ExpYear,cvv ) 
		VALUES ( $NIC_Number, $Card_Number , $Card_ExpMonth, $Card_ExpYear,$Card_CVV )";

        if($con->query($sql)){

          echo "<center> <h2> Data Saved Successfully </h2> </center> <br>";
        }
		
		else{
          echo "<center><h2>Error, Data was not Saved</h2></center><br><br>";
          echo "Error:".$conn->error;
        }
      }
    ?>

	<?php
		include_once 'footer.php';
	?>

</body>
 
</html>
