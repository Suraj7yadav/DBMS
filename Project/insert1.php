<?php
include "db_connect.php";
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$phno= $_POST["phno"];
$email= $_POST["email"];
$add= $_POST["add"];
$user_id= $_POST["user_id"];
$pass= $_POST["password"];
$sql = "INSERT INTO `owner`(fname,lname,phone,email,username,password,address) VALUES('$fname','$lname','$phno','$email','$user_id','$pass','$add')";
//$result = $connection->query($sql);
if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
    include 'login2.html';
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
?>