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

  $creator = $_POST["creator"];
  $title = $_POST["title"];
  $type = $_POST["type"];
  $identifier = $_POST["identifier"];
  $date = $_POST["date"];
  $language = $_POST["language"];
  $description = $_POST["description"];



  $sql = "INSERT INTO eBook_MetaData (creator, title, type, identifier, date, language, description)
          VALUES ('$creator', '$title', '$type', '$identifier', '$date', '$language', '$description')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


  mysqli_close($conn);

  header("location: index.php");



 ?>
