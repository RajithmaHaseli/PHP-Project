<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "tutorial";  

$conn = mysqli_connect("localhost", "root", "", "tutorial");
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
?>