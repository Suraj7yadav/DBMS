<?php

include "db_connect.php";
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$phno= $_POST["phno"];
$sql = "INSERT INTO Users VALUES('$fname','$lname',$phno)";
$result = $conn->query($sql);

?>