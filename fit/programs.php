<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fitgng_home.css"></link>
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="./matrix.png">
</head>

<body>


    <header>
        <div class="topnav" id="myTopnav">
            <a href="fitgng_home.php">Home</a>
            <a href="#news">news</a>
            <a href="contact.php">Contact</a>
            <a href="about.php">About</a>
            <a class="active" href="#programs.php">programs</a>
            <a class="pointer" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>

    <div id="id01" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="./images/avatar1.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="crtac"> <a href="register.php">create account</a></span>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>




    <div id="weight">
        <p>insert your weight</p>
        <input type="tel" id="phone" name="phone" placeholder="kg" pattern="[0-9]{3}"><br><br>

        <p>chose your gender</p>
        <select name="cars" id="cars">
            <option value="volvo">male</option>
            <option value="saab">female</option>
        </select>

    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>


</body>

</html>