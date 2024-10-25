<?php

$severname= "localhost";
$username= "root";
$password = "";

$db_name = "tutorial";

$conn = mysqli_connect($severname, $username, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}