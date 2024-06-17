 <!doctype html>
 
<html lang="en">

    <head>
        
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>

    <link rel = "stylesheet" href = "css/style.css">
    <link rel="stylesheet" href="css/header&footer.css">
    <script src="js/payment.js"> </script>
    </head>

    <body>
        <?php
            include_once'header.php';
        ?>
 
    <center>
      <h1> Make Your Payment </h1> 
    </center>  
<div class="container">
    <form  action= 'form_process.php' target ="_blank" method = "POST">
    <div class="row">

        <div class="col">

            <h3 class="title">Billing Details</h3>

            <div class="inputBox">
                <span>full name :</span>
                <input type="text" name = 'fullname'value='Fullname'placeholder="Amith Perera" >
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" name = "email" pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="example@gmail.com" required>
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" rows="8" cols="50"name = 'address' placeholder="House No - street  ">
            </div>
            <div class="inputBox">
                <span>city :</span>
                <input type="text" name= 'city'placeholder="Colombo">
            </div>

           <div class="flex">
                <div class="inputBox">
                    <span> Amount</span>
                    <input type="text" name = "amount" placeholder="15000.00/=" >
                </div>

            </div> 

        </div>

        <div class="col">

            <h3 class="title">payment</h3>
            <div>
            <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="abcd">
            </div>

        

            <div class="inputBox">
                <span>NIC Number :</span>
                <input type="text" id = "NICnumber" value ='NIC' name = "NICnumber" pattern = "[0-9]{12}" placeholder = "200025221235 " required>
            </div>


            <div class="inputBox">
                <span>Name on card :</span>
                <input type="text" id = "CName"   name = "Cname" pattern = "[a-zA-Z\s.]{5,25}" placeholder = "Type your Name on Card" >
            </div>

            <div class="inputBox">
                <span>credit card number :</span>
                <input type="number" pattern = "[0-9]{13,16}" name="Cnumber" id='Cnumber' maxlength = '19' placeholder="1111-2222-3333-4444"  required>
            </div>

            <div class="inputBox">
                <span>Exp month :</span>
                <input type="number" name ="ExpMonth" placeholder="05" required>
            </div>

            <div class="flex">
                <div class="inputBox">
                    <span>exp year :</span>
                    <input type="number" name = "ExpYear" placeholder="2024"required>
                </div>
                <div class="inputBox">
                    <span>CVV :</span>
                    <input type="text" name= "cvv"pattern = "[0-9]{3}" id = "cvv" placeholder="123" required>
                </div>
            
            </div>

        </div>

    </div>

<input type="submit" name = "submit" value="Pay Now!" class="submit-btn" >
 

</form>
</div>
    <?php
      include_once 'footer.php';
    ?>
</body>
  
  
      

</html>

<!-- //refrence : https://www.codingnepalweb.com/  -->