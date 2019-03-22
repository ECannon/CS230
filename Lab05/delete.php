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

$sql = "DELETE FROM eBook_MetaData WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "New record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);

header("location: index.php");

 ?>
