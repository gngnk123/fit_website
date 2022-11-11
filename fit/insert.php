<?php
require('database.php');
session_start();

if (isset($_POST['titlename'])) {

    $title = $_POST['titlename'];
    $image = $_POST['fileToUpload'];
    $create_datetime = date("Y-m-d H:i:s");


    $query    = "INSERT into `newsfeed` (title, UploadDate, image)
    VALUES ('$title', '$create_datetime', '$image')";

    $result   = mysqli_query($con, $query);



if ($result) {
    $query2 = "SELECT * FROM `newsfeed` ";
    $result2   = mysqli_query($con, $query2);
    if (mysqli_num_rows($result2) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result2)) {
          echo "id: " . $row["title"]. " - Name: " . $row["UploadDate"].  "<img src=images/$row[image]  <br>";

        }
      } else {
        echo "0 results";
      }
  } else {
    echo "<h3>Required fields are missing.</h3><br/>";
  }
} else {
?>


<?php
  }
  ?>