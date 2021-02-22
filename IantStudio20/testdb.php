<?php
$servername="localhost";
$username="root";
$password="";
$database_name="iantstudio";
//Create Connection
$conn=mysqli_connect($servername,$username,$password,$database_name);
//Check connection
if(!$conn)
{
	die("IantStudio Connection failed :".mysqli_connect_error());
}
echo "Iantstudio !! You have Connected Successfully!!!";

// Close connection
mysqli_close($conn);

?>