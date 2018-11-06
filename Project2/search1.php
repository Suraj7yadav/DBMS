<?php
session_start(); // Right at the top of your script
?>
<?php

include "db_connect.php";
$key= $_POST["Keyword"];
//echo $key;
$sql = "SELECT * FROM car where model='$key'";
$result = $connection->query($sql);
//echo $result;
if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Type: ". $row["type"]."<br>"."Brand: ".$row["brand"]."<br>"."Model: ".$row["model"]."<br><br>";
    }
} else {
    echo "No results found";
}
?>