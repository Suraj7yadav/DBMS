<?php
session_start(); 
?>
<?php

include "db_connect.php";
$key= $_POST["Keyword"];

$sql = "SELECT * FROM car where model='$key'";  //search by model
$result = $connection->query($sql);

$sql1 = "SELECT * FROM car where brand='$key'";  //search by brand ok?
$result1 = $connection->query($sql1);



if ($result) {
    while($row = $result->fetch_assoc()) {
        echo "Type: ". $row["type"]."<br>"."Brand: ".$row["brand"]."<br>"."Model: ".$row["model"]."<br><br>";
    }
}
if ($result1) {
    while($row = $result1->fetch_assoc()) {
        echo "Type: ". $row["type"]."<br>"."Brand: ".$row["brand"]."<br>"."Model: ".$row["model"]."<br><br>";
    }
 } else {
    echo "No results found";
}
?>