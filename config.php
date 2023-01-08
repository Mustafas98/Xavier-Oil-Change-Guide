<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "xavier1";

// Create connection
$link = mysqli_connect($host, $username, $password, $dbname);
$mysqli = new mysqli($host, $username, $password, $dbname);
$conn=mysqli_connect($host, $username, $password, $dbname);
	  


 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
