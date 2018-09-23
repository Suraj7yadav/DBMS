<?php

include "db_connect.php";
$key= $_POST["Keyword"];
$sql = "SELECT * FROM Owner where Owner_id=$key ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Owner_id: ". $row["Owner_id"]."<br>"."Car_id: ".$row["Car_id"]."<br>"."Name: ".$row["Name"]."<br><br>";
    }
} else {
    echo "No results found";
}
?>