<?php
//session_start(); 
//<?php
 include "db_connect.php";
include "authen_login.php";
$key = isset($_POST['key']) ? $_POST['key'] : ''; //this is car id
$username = $_SESSION['username'];
$id = $connection->query("SELECT owner_id FROM `login_info` WHERE username='$username'")->fetch_object()->owner_id;  //this is owner id
$sql = "UPDATE `car` SET `owner_id` = $id WHERE `car`.`car_id` = $key";
if ($connection->query($sql) === TRUE)
{
    echo "Congratulations";
    header("Location: home2.html");
}
?>