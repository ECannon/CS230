<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <link rel="stylesheet" href="style1.css">
  <body>

    <div class="">

      <h2>Enter data to submit:</h2>
      <form class="submit" action="submit.php" method="post">
      Creator:     <input type="text" name="creator" value=""><br>
      Title:       <input type="text" name="title" value=""><br>
      Type:         <input type="text" name="type" value=""><br>
      Identifier:  <input type="text" name="identifier" value=""><br>
      Date:        <input type="date" name="date" value=""><br>
      Language:    <input type="text" name="language" value=""><br>
      Description: <input type="text" name="description" value=""><br>

                   <input type="submit" name="submit" value="submit">
      </form>

    </div>

    <br>

    <div class="">

      <h2>Enter ID to delete:</h2>
      <form class="delete" action="delete.php" method="post">
        <input type="text" name="id" value="">
        <input type="submit" name="" value="Delete">

      </form>
    </div>

    <br>

    <div class="">
      <h2>Enter data to update:</h2>
      <form class="update" action="update.php" method="post">
      ID:          <input type="text" name="id" value=""><br>
      Creator:     <input type="text" name="creator" value=""><br>
      Title:       <input type="text" name="title" value=""><br>
      Type:        <input type="text" name="type" value=""><br>
      Identifier:  <input type="text" name="identifier" value=""><br>
      Date:        <input type="date" name="date" value=""><br>
      Language:    <input type="text" name="language" value=""><br>
      Description: <input type="text" name="description" value=""><br>

                   <input type="submit" name="submit" value="update">
      </form>
    </div>

    <br>
    <br>

    <table>
      <tr>
        <th>ID</th>
        <th>Creator</th>
        <th>Title</th>
        <th>Type</th>
        <th>Identifier</th>
        <th>Date</th>
        <th>Language</th>
        <th>Description</th>
      </tr>

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "mysql";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM eBook_MetaData";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>". $row["ID"]. "</td><td>". $row["Creator"]. "</td><td>". $row["Title"]. "</td><td> "
            . $row["Type"]. "</td><td>". $row["Identifier"]. "</td><td>". $row["Date"]. "</td><td>". $row["Language"]. "</td><td>"
            . $row["Description"]. "</td></tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }

      $conn->close();

      ?>





  </body>
</html>
