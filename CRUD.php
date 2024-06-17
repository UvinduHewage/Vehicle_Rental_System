  
<!DOCTYPE html>

 
<html lang="en" dir="ltr">

  <head> 

 
  <meta charset="UTF-8">
  <title> Customer view</title>
  
  <link rel="stylesheet" href="css/style.css">
  <script src = "js/payment.js"></script>
     

   </head>
   <body>
      <?php
         include_once 'header.html';
      ?> 

   <div class="container">
          
      <div class = "abc">

      <h2 > You are almost done with your reservation !</h2> <br><br>
     


      <button id= "btn" class="submit-btn"> Click here to confirm the payment</button> </br> </br>

      <a href = "Save_CardDetails.php">
          <input type = "submit" name = "submit" value = "Save Card Details" class="submit-btn" >
       </a> </br> </br>

       <a href = "CardDetails.php">
          <input type = "submit" name = "submit" value = "View Card Details" class="submit-btn" >
       </a> </br> </br>
      
       <a href = "update_delete.php">
          <input type = "submit" name = "submit" value = " Update/Delete Details" class="submit-btn" >
       </a>
        </div>
        
  </div>
      
  <script>
          
          var btn = document.getElementById ("btn");
          btn.addEventListener ("click", function( ){
             alert ("Payment Succesful!")        
              }
          );

      </script>

      <?php
            include_once 'footer.html';
      ?>
</body>

</html>