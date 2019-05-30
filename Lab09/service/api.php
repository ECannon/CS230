<?php

$method = $_SERVER['REQUEST_METHOD'];
$table = 'assign5';
$conn = mysqli_connect('localhost', 'root', '', 'mysql');
mysqli_set_charset($conn,'utf8');

$data = file_get_contents('php://input'); // this is the data sent from AJAX.
$data = json_decode($data);



if($method == 'POST') {

  $name = $data->name;
  $desc = $data->desc;
  $url = $data->url;


  $sql = "INSERT INTO $table (name, Description, URL) VALUES ('$name', '$desc', '$url')";



}

if ($method == 'GET') {

    $sel = $_GET['choice'];
    $spec = $_GET['match'];

    // $sel = $data->option;
    // $spec = $data->inp;

    if($sel == "All") {
      $sql = "SELECT * FROM assign5";
    } else {
      $sql = "SELECT * FROM assign5 WHERE $sel = '$spec'";
    }

}



if($method == 'PUT') {




  $identifier = $data->identifier;
  $match = $data->match;
  $change = $data->change;
  $inputToChange = $data->inputToChange;


  $sql = "UPDATE $table SET $change = '$inputToChange' WHERE $identifier = '$match'";

}

if($method == 'DELETE') {
  $inputID = $data->ID;

  $sql = "DELETE FROM assign5 WHERE ID = $inputID";
}




$result = mysqli_query($conn,$sql);
if (!$result) {
  http_response_code(404);
  die(mysqli_error($conn));
}

 if ($method == 'POST') {
   echo "<br>Successful entry with ID:";
   echo mysqli_insert_id($conn);
 }


 if ($method == 'GET') {
   if (mysqli_num_rows($result) == 0) {
     echo "Table is empty.";
   } else {
     for ($i=0;$i<mysqli_num_rows($result);$i++) {
       echo ($i>0?',<br>':'').json_encode(mysqli_fetch_object($result));
     }
   }
 }



mysqli_close($conn);
?>
