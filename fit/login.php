<?php
    require('database.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows > 1) {
            
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            if($_POST['username'] =='gng123' and $_POST['password']=='gonga2000')
            {header("Location: admin.php");}
            else{
            header("Location: dashboard.php");}
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='fitgng_home.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

<?php
    }
?>