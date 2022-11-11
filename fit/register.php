<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./register.css" >
  <title>Registration</title>
  <link rel="icon" type="image/x-icon" href="./matrix.png">
</head>

<body>

  <header>
    <div class="topnav" id="myTopnav">
      <a href="fitgng_home.php">Home</a>
      <a href="./programs.php">programs</a>
      <a href="./contact.php">Contact</a>
      <a href="./about.php">About</a>
      <a class="pointer" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </header>

  <?php
  require('database.php');
  // When form submitted, insert values into the database.
  
  if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $create_datetime = date("Y-m-d H:i:s");
    $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
    $result   = mysqli_query($con, $query);
    if ($result) {
      echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='fitgng_home.php'>Login</a></p>
                  </div>";
    } else {
      echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
    }
  } else {
  ?>






    <form class="form" action="" method="post">
      <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input id="emailaddres" type="text" placeholder="Enter Email" name="email" id="email" required>


        <input type="text" class="login-input" name="username" placeholder="Username" required />

        <label for="psw"><b>Password</b></label>
        <input type="text" placeholder="Enter Password" name="password" id="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="text" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" onclick="if(document.getElementById('psw').placeholder!=document.getElementById('psw-repeat').placeholder) {return false;} else {continue;}" class="registerbtn">Register</button>
      </div>

      <div class="container signin">
        <p>Already have an account? <a href="fitgng_home.php" >Sign in</a>.</p>
      </div>
    </form>


  <?php
  }
  ?>


  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }


    let pass=document.getElementById("psw")
    let pass_rep=document.getElementById("psw-repeat")
    if(pass!=pass_rep)
    {document.getElementById("psw").innerHTML = "Wrong keyword entry."}
    
    </script>
</body>

</html>