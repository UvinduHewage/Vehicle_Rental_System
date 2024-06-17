<!-- IT22586766
K. S. D. Koralage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TINKERBELL Vehicle Rental</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon1.jpeg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/20733750a5.js" crossorigin="anonymous"></script>

    <style>
        body{
            margin: auto;
            font-family: 'Wix Madefor Display', sans-serif;
            display: grid;
            grid-template-columns: 55% 45%;
            background-image: url(../images/without_driver.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

        #rOption{
            grid-area: 1/1/2/2;
            margin: 20% 150px 0 0;
        }
        #rOption a{
            display: block;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            color: ivory;
            background-color: rgb(30, 90, 90);
            margin:0;
            padding:10px;
        }

        #rOption a:hover{
            background-color: #d3bdb0;
            color: black;
        }

        #rButton{
            grid-area: 1/2/2/3;
            float: right;
            top: 0;
            margin-left: 10px;
        }

        #rButton button{
            font-size:16px;
            padding:7px;
            color: ivory;
            background-color: rgb(30, 90, 90);
            border-color:transparent;
        }

        #rButton button:hover, #rButton button:active{
            background-color: #d3bdb0;
            color: black
        }
        #wdIFRAME, #wodIFRAME{
            display:none;
            width:98%;
            height:100%;
            margin:5px;
            min-height: 480px;
        }
    </style>
</head>

<body>
    <div id="rOption">
        <a href="homeADMIN.html"><i class="fa-solid fa-house"></i></a><br>
        <a href="addNewRate.php">Add new rate</a><br>
        <a href="updateRate.php">Update rate</a><br>
        <a href="deleteRate.php">Delete rate</a><br>
    </div>

    <div id="rButton">
            <?php include_once 'iframeVrate.php' ?>
    </div>
</body>