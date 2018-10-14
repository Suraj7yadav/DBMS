<?php

include "db_connect.php";
$key= $_POST["Keyword"];
$sql = "SELECT * FROM car where model=$key ";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Type: ". $row["type"]."<br>"."Brand: ".$row["brand"]."<br>"."Model: ".$row["model"]."<br><br>";
    }
} else {
    echo "No results found";
}
?>