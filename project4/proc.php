<?php
session_start(); // Right at the top of your script
?>
<?php

include "db_connect.php";
$key1 = $_POST["Keyword"];
//echo $key;
$query="CALL proc1('$key1')";
//$sql = "SELECT * FROM car where model='$key'";
$result = $connection->query($query);
$count = mysqli_num_rows($result);
if ($count) {
    // output data of each row
    echo "$key1 cars<br><br>";
    while($row = $result->fetch_assoc()) {
        echo "Owner Id: ". $row["owner_id"]."<br>"."Car Id: ".$row["car_id"]."<br>"."Status: ".$row["status"]."<br><br>";
    }
} else {
    echo "No results found";
}
?>