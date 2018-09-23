<?php
include "db_connect.php";
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$phno= $_POST["phno"];
$email= $_POST["email"];
$pass= $_POST["password"];
$sql = "INSERT INTO user_login(fname,lname,phone,email,password) VALUES('$fname','$lname','$phno','$email','$pass')";
$result = $connection->query($sql);
if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>