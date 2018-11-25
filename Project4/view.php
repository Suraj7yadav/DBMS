<?php
include "db_connect.php";
include "authen_login.php";
$key = isset($_POST['key']) ? $_POST['key'] : '';   
echo $key;
        $result = $connection->query("SELECT image FROM car_details WHERE car_id = '$key'");
    if($result){
        $imgData = $result->fetch_assoc();
        
        //Render image
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }      
?>
