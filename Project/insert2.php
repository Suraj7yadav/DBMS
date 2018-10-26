<?php
session_start(); // Right at the top of your script
?>
<?php  
include "db_connect.php";
include "authen_login.php";
$type= $_POST["type"];
$brand= $_POST["brand"];
$model= $_POST["model"];
$ft= $_POST["ft"];
$tt= $_POST["tt"];
$username = $_SESSION['username'];

$name = $connection->query("SELECT owner_id FROM `owner` WHERE username='$username'")->fetch_object()->owner_id;
echo $name;

$car_cond= $_POST["car_cond"];
$color= $_POST["color"];
$reg= $_POST["reg"];
$year= $_POST["year"];
$price= $_POST["price"];
$distance= $_POST["distance"];

$ino = $_POST["ino"];
$rto = $_POST["rto"];
$emi = $_POST["emi"];


$sql1 = "INSERT INTO car(type,brand,model,fuel_type,transmission_type,owner_id) VALUES('$type','$brand','$model','$ft','$tt',$name)";

if ($connection->query($sql1) === TRUE)
{
    $x = 1;
}
$caid = $connection->query("SELECT car_id FROM `car` WHERE type = '$type' and brand ='$brand' and model='$model' and fuel_type ='$ft' and transmission_type='$tt' and owner_id='$name' ")->fetch_object()->car_id;


$sql2 = "INSERT INTO car_details(car_id,car_condition,color,regno,year_of_purchase,price,distance_travelled,owner_id) VALUES('$caid','$car_cond','$color','$reg','$year','$price','$distance',$name)";
$sql3 = "INSERT INTO security_details(car_id,insurance_no,rto_no,emission_ratings) VALUES('$caid','$ino','$rto','$emi')";
$sql4 = "INSERT INTO status(owner_id,car_id,status) VALUES('$name','$caid','unsold')";
//$result = $connection->query($sql);
if ($x && $connection->query($sql2) === TRUE && $connection->query($sql3) === TRUE && $connection->query($sql4) === TRUE) {
    echo "New record created successfully";

    header("Location: home2.html");
} else {
    echo "Error: " . $sql1.$sql2 . "<br>" . $connection->error;
}
?>