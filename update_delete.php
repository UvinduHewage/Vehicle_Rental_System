
<!DOCTYPE html>

<html>
    <head>
        <title> Update / detele details </title>
        <link rel = "stylesheet" href = "css/style.css">

       
  

</head>

<body>
  <?php
    include_once 'header.php';
  ?>
 
 <?php 
     require 'config.php' ;
 ?>

<div  style = "position: absolute; left: 10%; border: 2px solid black; padding-bottom: 15px">

      <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">

        <center><br><h2 style = "margin: 0 120px"><u>Delete Saved Card Details</u></h2></center><br>
        <label style = "margin-left: 10%"><b>Please Enter Your NIC Number </b></label>

        <input type = "text" class = "Cnumber" id = "id" name = "NICnumber"  placeholder = "200025221235" style = "margin-left: 10%" required><br><br>
        <input class = "buttonCD" style = "margin-left: 10%" type = "submit" id = "DeleteBtn" name = "DeleteBtn" value = "Delete" > <br><br>
      </form>

        <?php
          if(isset($_POST["DeleteBtn"])){
            $NIC_Number = $_POST["NICnumber"];

            $sql = "DELETE FROM card_details WHERE NICnumber= $NIC_Number";
            if($conn->query($sql)){
              echo "<p style = \"margin-left: 10%\"><b>Successfully Deleted</b>";
            } else {
              echo "<p style = \"margin-left: 10%\"><b>Something Went Wrong</b>";
              echo "Error:".$conn->error;
            }
          }
        ?>
    </div>

    <div style = "position: absolute; right: 10%; border: 2px solid black; padding-bottom: 15px">
      <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">

        <center><br><h2 style = "margin: 0 120px"><u>Update Saved Card Details</u></h2></center><br>
        <label style = "margin-left: 10%"><b>Please Enter Your NIC Number</b></label>

        <input type = "text" class = "Cnumber" id = "NICnumber" name = "NICnumber"  placeholder = "200025221235" style = "margin-left: 10%" required><br><br>
        <label style = "margin-left: 10%"><b>New Card Number</b></label><br>
        <input type = "text" class = "Cnumber" id = "Cnumber" name = "Cnumber"   placeholder = "1111-2222-3333-4444" style = "margin-left: 10%" required><br><br>
        <lable style = "margin-left: 10%"><b>New CVV</b></label><lable style = "margin-left: 17.5%"><b>New Expiration Date</b></lable><br>
        <input type = "text" class = "CVV" id = "cvv" name = "cvv" pattern = "[0-9]{3}" placeholder = "***" style = "margin-left: 10%" required>
        <select name = "Expmonth" style = "margin-left: 8.5%" class = "ExpMonth" required>
          <option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option>
          <option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option>
        </select>
        <select name = "Expyear" style = "margin-left: 2%" class = "ExpYear" required>
          <option>2020</option><option>2021</option><option>2022</option><option>2023</option><option>2024</option><option>2025</option>
        </select><br><br>
        <input class = "buttonCD" style = "margin-left: 10%" type = "submit" id = "UpdateBtn" name = "UpdateBtn" value = "Update" ><br><br>

        <?php
          if(isset($_POST["UpdateBtn"])){

            $NIC_Number  = $_POST["NICnumber"];
            $Card_Number = $_POST["Cnumber"];
            $Card_CVV  = $_POST["cvv"];
            $Card_ExpMonth = $_POST["Expmonth"];
            $Card_ExpYear = $_POST["Expyear"];

            $SQL = "SELECT NICnumber FROM card_details WHERE NICnumber=  $NIC_Number ";
            if($conn->query($SQL)){
              $Update = "UPDATE card_details SET Cnumber =$Card_Number, ExpMonth = $Card_ExpMonth, ExpYear = $Card_ExpYear, cvv = $Card_CVV WHERE NICnumber =  $NIC_Number";
                if($conn->query($Update)){
                  echo "<p style = \"margin-left: 10%\"><b>Successfully Updated</b>";
                }else {
                  echo "<p style = \"margin-left: 10%\"><b>Something Went Wrong</b>";
                  echo "Error:".$conn->error;
                }
            }else{
              echo "<p style = \"margin-left: 10%\"><b>Invalid NIC</b>";
              echo "Error:".$conn->error;
            }
          }
        ?>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
        
    <!--footer-->
    <?php
      include_once 'footer.php';
    ?>
   
  </body>

  
  
	 
</html>