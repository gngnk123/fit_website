<?php
//include auth_session.php file on all user panel pages
include("auth_sesion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fitgng_home.css">
    <title>Matrix Fittness</title>
    <link rel="icon" type="image/x-icon" href="./matrix.png">
</head>

<body>



    <header>
        <div class="topnav" id="myTopnav">
            <a class="active" href="#home">Home</a>
            <a href="news.html">News</a>
            <a href="contact.html">Contact</a>
            <a href="about.html">About</a>
            <a href="logout.php">Logout</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>
    <div class="form">
        <p id="userhey">Hey, <?php echo $_SESSION['username'];?>!</p>
    </div>


    
    <div class="oneday">
        <div class="priceBox1">
            <h1>1 day morning account</h1>
            <h2>price 3 lari</h2>
        </div>


        <div class="priceBox1_u">
            <h1>1 day unlimite account</h1>
            <h2>price 5 lari</h2>
        </div>
    </div>

    <div class="oneday">
        <div class="priceBox1">
            <h1>1 month morning account</h1>
            <h2>price 70 lari</h2>
        </div>


        <div class="priceBox1_u">
            <h1>1 month unlimite account</h1>
            <h2>price 90 lari</h2>
        </div>
    </div>

    <div class="oneday">
        <div class="priceBox1">
            <h1>1 year morning account</h1>
            <h2>price 700 lari</h2>
        </div>


        <div class="priceBox1_u">
            <h1>1 year unlimite account</h1>
            <h2>price 900 lari</h2>
        </div>
    </div>



    <footer>


    </footer>




</body>

</html>