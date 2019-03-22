<?php
  $serverName = "localhost";
  $username = "root";
  $password = "";
  $dbName = "mysql";

  $conn = mysqli_connect($serverName, $username, $password, $dbName);

  if($conn) {
    echo "Success";
  } else {
    echo "fail";
  }
  $id = $_POST["id"];
  $creator = $_POST["creator"];
  $title = $_POST["title"];
  $type = $_POST["type"];
  $identifier = $_POST["identifier"];
  $date = $_POST["date"];
  $language = $_POST["language"];
  $description = $_POST["description"];


          $sql = "UPDATE eBook_MetaData
                  SET
                  creator = '$creator',
                  title = '$title',
                  type = '$type',
                  identifier = '$identifier',
                  date = '$date',
                  language = '$language',
                  description = '$description'
                  WHERE id = '$id'";

  if (mysqli_query($conn, $sql)) {
    echo "New record updated successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

  header("location: index.php");


 ?>
