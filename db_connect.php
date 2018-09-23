<?php
$connection = mysqli_connect('localhost', 'root', '12345678','usersinfo');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'UsersInfo');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}