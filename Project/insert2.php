<?php
include "db_connect.php";
$type= $_POST["type"];
$brand= $_POST["brand"];
$model= $_POST["model"];
$ino= $_POST["ino"];
$sql1 = "INSERT INTO sec_details(ino) VALUES('$ino')";
$sql2 = "INSERT INTO car(type,brand,model) VALUES('$type','$brand','$model')";

//$result = $connection->query($sql);
if ($connection->query($sql1) === TRUE && $connection->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1.$sql2 . "<br>" . $connection->error;
}
?>