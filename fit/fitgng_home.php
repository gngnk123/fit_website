<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fitgng_home.css">
    <title>Matrix Fittness</title>
    <link rel="icon" type="image/x-icon" href="./images/matrix.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <div class="topnav" id="myTopnav">
            <a class="active" href="#./fitgng_home.php">Home</a>
            <a href="#news">news</a>
            <a href="#contacts">Contact</a>
            <a href="#about">About</a>
            <a href="#programs">programs</a>
            <!-- <input id="search" type="text" placeholder="Search.."> -->
            <a class="pointer" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>


    <div id="id01" class="modal">

        <form class="modal-content animate" action="login.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="./images/avatar1.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button class="loginbutton" type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="crtac"> <a href="register.php">create account</a></span>
                <span class="psw"> <a href="#">Forgot password?</a></span>
            </div>
        </form>
    </div>


    <div id="pricebox">
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
                <h1 class="oneday_t">1 month morning account</h1>
                <h2>price 70 lari</h2>
            </div>


            <div class="priceBox1_u">
                <h1 class="oneday_t">1 month unlimite account</h1>
                <h2>price 90 lari</h2>
            </div>
        </div>

        <div class="oneday">
            <div class="priceBox1">
                <h1 class="oneday_t">1 year morning account</h1>
                <h2>price 700 lari</h2>
            </div>


            <div class="priceBox1_u">
                <h1>1 year unlimite account</h1>
                <h2>price 900 lari</h2>
            </div>
        </div>
    </div>


    <div id="news">
        <link href="admin.html" rel="import" />

        <div class="scrollmenu">
            <?php
            require('database.php');
            session_start();
            $query2 = "SELECT * FROM `newsfeed`";
            $result2   = mysqli_query($con, $query2);
            if (mysqli_num_rows($result2) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result2)) {
                    $id_home = array($row["ID"]);
                    $title_home = array($row["title"]);
                    $uploaddata_home = array($row["UploadDate"]);
                    $image_home = array($row["image"]);
                    //   echo " " . $row["title"]. "  " . $row["UploadDate"].  "<img id='imagenews' src=images/$row[image]  <br>";
                    foreach ($id_home as $value) {
            ?>
                        <div class="newsfeed">
                            <div style="color:white;" class="<?php echo ($value); ?>"  onclick="newsfeedfunction()"> <?php echo "$value <br>"; ?> </div>

                        <?php
                    }
                    foreach ($title_home as $value) {
                        ?>
                            <div style="color:white;" class="title_home1"> <?php echo "$value <br>"; ?> </div>

                        <?php
                    }

                    foreach ($image_home as $value) {

                        ?>
                            <div class="<?php echo ($value); ?>"> <?php echo  "<img class='imagenews' src=images/$value  <br>"; ?></div>

                        <?php
                    }

                    foreach ($uploaddata_home as $value) {
                        ?>
                            <div style="color:white;" class="<?php echo ($value); ?>"> <?php echo "$value <br>"; ?> </div>
                        </div>

            <?php
                    }
                }
            } else {
                echo "0 results";

                foreach ($title_home as $value) {
                    echo "$value <br>";
                }
            }
            ?>


        </div>

    </div>



    <h1 class="phone">Contact info:</h1>
    <p class="phone">phone: +995 5888888</p>
    <p class="phone">mail: matrix@gmail.com</p>

<div id="contacts">
    <div id="isani">
        <address id="isani_a">Address: 71 Ketevan Dedofali Ave, Tbilisi</address>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11918.447298816438!2d44.8486289!3d41.6857261!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x150da5c78c9db82c!2sMatrix%20Fitness!5e0!3m2!1sen!2sge!4v1664197507027!5m2!1sen!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>



    <div id="sarajishvili">
        <address id="sarajishvili_a">63 David Guramishvili Ave, Tbilisi</address>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d743.7451586245611!2d44.801124029235204!3d41.78563099870187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40446db68a176393%3A0xe93897e67b982ef2!2sGldani-Nadzaladevi%2C%20Tbilisi!5e0!3m2!1sen!2sge!4v1664199045745!5m2!1sen!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>


    <footer>


        <a href="https://www.instagram.com/matrixfitness_georgia/?hl=en" class="fa fa-instagram"></a>

        <a href="https://www.facebook.com/matrixtbilisi/" class="fa fa-facebook"></a>


    </footer>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }

        }

        function newsfeedfunction(){
            
        }
    </script>


</body>

</html>