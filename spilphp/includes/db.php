<?php 
$serverName = "localhost";
$username = "root";
$password = "root";
$db = "spilphp";

$conn = mysqli_connect($serverName, $username, $password, $db); //Vi forbinder til databasen

//Et check på forbindelsen

if(mysqli_connect_errno()){
    echo "Connection failed" . mysqli_connect_errno();
}

?>