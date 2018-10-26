<?php
include "db_connect.php";
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$phno= $_POST["phno"];
$email= $_POST["email"];
$add= $_POST["add"];
$user_id= $_POST["user_id"];
$pass= $_POST["password"];
$sql1 = "INSERT INTO `owner`(fname,lname,phone,email,address) VALUES('$fname','$lname','$phno','$email','$add')";

//$result = $connection->query($sql);
if ($connection->query($sql1) === TRUE) {

    $name = $connection->query("SELECT owner_id FROM `owner` WHERE phone='$phno'")->fetch_object()->owner_id;
    $sql2 = "INSERT INTO `login_info`(owner_id,username,password) VALUES('$name','$user_id','$pass')";
    if($connection->query($sql2) === TRUE)
    {
    echo "New record created successfully";
    include 'login2.html';
    }
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
?>