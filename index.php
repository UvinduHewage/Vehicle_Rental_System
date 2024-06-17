<!-- IT22586766
K. S. D. Koralage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINKERBELL Vehicle Rental</title>
    <link rel="icon" type="image/x-icon" href="images/favicon1.jpeg">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header&footer.css">
    <script src="https://kit.fontawesome.com/20733750a5.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap');
    </style>
</head>

<body>

<?php include_once 'header.php'; ?>
    
    <div id="searchingPart">

        <div id="heading">Find your ride. Start searching now!</div>

        <div id="searchForm">

            <form action="InquiryForm.php" method="post">

                <table>
                    
                    <tr>
                        <td>
                            <div id="searchIcon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div id="location">
                                <label for="pickUpLocation">Pick-up Location</label>
                                <br>
                                <input type="search" id="pickUpLocation" name="pickUpLocation">
                            </div>
                        </td>

                        <td id="pUpDate">
                            <label for="pickUpDate">Pick-up Date</label>
                            <br>
                            <input type="date" id="pickUpDate" name="pickUpDate">
                        </td>

                        <td id="pUpTime">
                            <label for="pickUpTime">Pick-up Time</label>
                            <br>
                            <input type="time" id="pickUpTime" name="pickUpTime">
                        </td>

                        <td id="dOffDate">
                            <label for="dropOffDate">Drop-off Date</label>
                            <br>
                            <input type="date" id="dropOffDate" name="dropOffDate">
                        </td>

                        <td id="dOffTime">
                            <label for="dropOffTime">Drop-off Time</label>
                            <br>
                            <input type="time" id="dropOffTime" name="dropOffTime">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" id="vtype">
                            <label for="vehicleType">Vehicle Type:</label>
                            <select name="vehicleType" id="vehicleType">
                                <option value="Car">Car</option>
                                <option value="VanWithAC">Van With A/C</option>
                                <option value="VanWithoutAC">Van Without A/C</option>
                                <option value="MotorBike">Motorbike</option>
                                <option value="weddingCar">Wedding Car</option>
                            </select>
                        </td>

                        <td colspan="3" id="dtype">
                            <input type="radio" id="withDriver" name="driverType">
                            <label for="withDriver">With driver</label>
                            <input type="radio" id="withoutDriver" name="driverType">
                            <label for="withoutDriver">Without driver</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="5" id="searchsubmit" style="background-color: green;">
                            <input type="submit" value="SEARCH" style="background-color: green; color: white;">
                        </td>
                    </tr>
                </table>
            </form>

            <br><br>

        </div>

    </div>

    <div id="vehicleRegisterLink">
        <a href="vehicleOwnerForm.php" title="Click here">
            Make your car work for you! <br>
            Register it on our platform and start earning.
        </a>
    </div>

    <div id="slideshow">

        <div class="SHimage">
            <img src="images/luxury.jpg" alt="luxury car">
            <div class="slideCaption">Luxury knows no boundaries. Rent a vehicle that embodies style and refinement.</div>
        </div>

        <div class="SHimage">
            <img src="images/adventure.jpg" alt="adventure vehicle">
            <div class="slideCaption">Conquer the great outdoors with our off-road-ready rentals.</div>
        </div>

        <div class="SHimage">
            <img src="images/family_car.jpg" alt="family vehicle">
            <div class="slideCaption">Create precious memories with your loved ones in our spacious and comfortable family rentals.</div>
        </div>

        <div class="SHimage">
            <img src="images/motorbike.jpg" alt="motorbike">
            <div class="slideCaption">Escape the ordinary and embark on a two-wheeled adventure with our powerful and stylish motorcycles.</div>
        </div>

        <div class="SHimage">
            <img src="images/wedding_car.jpg" alt="Wedding car">
            <div class="slideCaption">Arrive in style on your special day with our elegant and luxurious wedding car rentals.</div>
        </div>

        <div class="SHimage">
            <img src="images/without_driver.jpg" alt="without Driver">
            <div class="slideCaption">Take control of your journey and experience the freedom of the road with our self-drive rentals.</div>
        </div>

        <a id="prev" onclick="move(-1)"><i class="fa-solid fa-chevron-left"></i></a>
        <a id="next" onclick="move(1)"><i class="fa-solid fa-chevron-right"></i></a>

    </div>

    <script>
        let slideIndex = 0;
        showSlides(slideIndex);

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("SHimage");
        
        if (n >= slides.length) {slideIndex = 0;}    
        else if (n < 0) {slideIndex = slides.length - 1;}
        else{slideIndex=n;}
        
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        
        slides[slideIndex].style.display = "block";
        }

        function move(n) {
        slideIndex += n;
        showSlides(slideIndex);
        }
    </script>

    <div id="aboutBottom">

        <div id="img1">
            <img src="images/letter.png" alt="Flexible Rental">
        </div>

        <div id="quote1">
            <span>Flexible rentals</span>
            <br>
            Cancel or change most bookings for free up to 48 hours before pick-up
        </div>

        <div id="img2">
            <img src="images/search.png" alt="No hidden fees">
        </div>

        <div id="quote2">
            <span>No hidden fees</span>
            <br>
            Know exactly what you're paying
        </div>

        <div id="img3">
            <img src="images/lowest-price.png" alt="Price Match Guarantee">
        </div>

        <div id="quote3">
            <span>Price Match Guarantee</span>
            <br>
            Found the same deal for less? We'll match the price
        </div>

        <div id="img4">
            <img src="images/bucket.png" alt="Clean cars">
        </div>

        <div id="quote4">
            <span>Clean cars. Flexible bookings. Socially distant rental counters.</span>
            <br>
            We're working with our partners to keep you safe and in the driving seat
        </div>
    </div>

    <a href="About_Us.php" id="learnmore">Learn more</a>

    <?php include_once 'footer.php'; ?>
    
</body>
</html>