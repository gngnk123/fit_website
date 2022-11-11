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
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="./images/matrix.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div id="header_admin">
    <h1 id="admin_t">admin</h1>
    <a id="logout" href="logout.php">Logout</a>
</div>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <form class="insertbox" action="insert.php" method="post">
        <input type="text" name="titlename">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="uploadimage">
    </form>



    <div id="news">

        <div class="scrollmenu">
            <?php
            require('database.php');
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
                            <div style="color:white;" class="<?php echo ($value); ?>"> <?php echo "$value <br>"; ?> <i class="fa fa-trash" ></i></div>

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


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        function deletefunction(value){    
            "<?php $sqldlt = "DELETE FROM `newsfeed` WHERE ID = value  ";
             $result3   = mysqli_query($con, $sqldlt); ?>";
             console.log("yochag nika")
        }
    </script>



</body>

</html>