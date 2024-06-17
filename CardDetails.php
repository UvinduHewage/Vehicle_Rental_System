
<!DOCTYPE html>
<head>
	<title> View Details</title>
</head>
<html>
	 
 

	<body>
		<?php
			include_once'header.php';
		?>
		<br><br>
		<center>
              <h2> Your payment Details </h2> 

			<?php
            //connect the database
			include_once 'config.php';
 
			 
			/*function readData() {
				global $con;
				$sql = "SELECT * FROM card_details ORDER BY PaymentID DESC LIMIT 1";
*/


			//write query
           $sql = "SELECT * FROM card_details";
            $result =mysqli_query ($conn,$sql);


			//retrieve data from the table
            if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result))
				{
					echo "<b style = \"margin-left: -2%\"> "."NIC         : </b>  <b style = \"color: red\"><i>".$row["NICnumber"]."</i></b><br>";
					echo "<b style = \"margin-left: 5.2%\">"."Card Number : </b>  <b style = \"color: red\"><i>".$row["Cnumber"]."</i></b><br>";
					echo "<b style = \"margin-left: -5%\">"."Exp Month   : </b>   <b style = \"color: red\"><i>".$row["ExpMonth"]."</i></b><br>";
					echo "<b style = \"margin-left: -4.2%\">"."Exp Year    :</b> <b style = \"color: red\"><i>".$row["ExpYear"]."</i></b><br>";
					echo "<b style = \"margin-left: -6.8%\">"."CVV        : </b>  <b style = \"color: red\"><i>".$row["cvv"]."</i></b><br>";
		
				}
                
				 
			}
else {
	echo "error ";
}
            mysqli_close($conn);

		
			?>

			</center> <br></a>
			<?php
      			include_once 'footer.php';
  			?>
  </body>
 
 
   
</html>
