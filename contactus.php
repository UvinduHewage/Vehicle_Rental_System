<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <title>Contact Us Form </title>
    <link rel="stylesheet" href="css/header&footer.css">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://kit.fontawesome.com/20733750a5.js" crossorigin="anonymous"></script>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


   </head>

<body>
  <?php
  include "header.php";
 ?>
  
<div id="bodycontact">
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">No 77</div>
          <div class="text-two"> PELIYAGODA</div>
          <div class="text-two"> COLOMBO 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+94 11 29322932</div>
          <div class="text-two">+94 11 29322282</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">tinkerbel@gmail.com</div>
        
        </div>
      </div>
       

      
  <!--MAp-->
  <div class="map"> <center> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.63025030823!2d79.85620549999999!3d6.921838650000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1685432230222!5m2!1sen!2slk" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div> </center> <br> <br><hr> <br> 

  
  <div class="right-side">
    <div class="topic-text">Send us a message</div>
    <p>If you have any concerns regarding our services please send us a message.</p>
  
    <form action="contact.php" method ="post">

    <div class="input-box">
      <input type="text" placeholder="Enter your name" name = "name">
    </div>

    <div class="input-box">
      <input type="text" placeholder="Enter your email" name = "email">
    </div>

    <div class="input-box message-box">
        <textarea type = "text" placeholder="Enter your message here" name = "message"> </textarea>  
    </div>

    <div class="button">
      <input type="button" value="Send Now" >
    </div>

    </form> 
  
  </div>
</div>
  </div>
<footer>
<?php
 include "footer.php";
 ?>
</footer>
</body>

</html>

