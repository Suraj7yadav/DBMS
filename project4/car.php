<?php
// Start the session
session_start();
?>
    <!DOCTYPE html>
    <html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /* Style the input field */
  #myInput {
    padding: 20px;
    margin-top: -6px;
    border: 0;
    border-radius: 0;
    background: #f1f1f1;
  }

  </style>
</head>
</html>


            <?php
include "db_connect.php";
$sql="SELECT * FROM car C,car_details CD where C.car_id=CD.car_id";

$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<br>Car details<br><br>";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

        echo"
                   <form action=\"admin.php\" method=\"POST\">
                                   <input type=\"submit\" value=\"Back\">";
?>
</hr>