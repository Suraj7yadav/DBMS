<?php  
include "db_connect.php";
include "authen_login.php";
$username = $_SESSION['username'];
$caid=$_SESSION['ca'];
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
    }
        $insert = $connection->query("UPDATE `car_details` SET image='$imgContent' WHERE car_id='$caid'   ");
      if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again". mysqli_error($connection);
        } 
}
?>