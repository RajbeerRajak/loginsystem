<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";
$port = "4306";

$conn = mysqli_connect($server, $username, $password, $database, $port);
if (!$conn){
//    echo "success";
//}
//else {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
