<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "xavier";

// Create connection
$link = mysqli_connect($host, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>