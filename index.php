<?php
$servername =  "devmysqldb.mysql.database.azure.com";
$username = "sqladmin@devmysqldb";
$password = "Pass=1234";
$database = "fmlyrsrc"

	
$conn=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con,$servername,$username ,$password, $database, 3306);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>