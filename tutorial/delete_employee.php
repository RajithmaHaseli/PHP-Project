<?php
if(isset ($_GET["id"])) {
    $id=$_GET["id"];


    $servername="localhost";
    $username="root";
    $password="";
    $database="tutorial";

    //Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql="DELETE FROM employeers WHERE  id=$id";
    $connection->query($sql);
}
header("location:employeer_management.php");
 exit;
?>
