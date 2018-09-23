<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
	<h1>Car Trade</h1>
<?php

include "db_connect.php";

?>

<form action="search1.php" method="POST">
  Keyword:<br>
  <input type="text" name="Keyword"><br><br>
  <input type="submit" value="Submit">
</form>

<hr>
<h1>Sign Up</h1>
<form action="insert1.php" method="POST">
  First Name:<br>
  <input type="text" name="fname"><br><br>
    Last Name:<br>
  	<input type="text" name="lname"><br><br>
  		Phone No:<br>
  		<input type="text" name="phno"><br><br>
  <input type="submit" value="Submit">
</form>
</hr>

<?php
//echo $conn->host_info;
/*// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/
$conn->close();
?>
</html>
</body>