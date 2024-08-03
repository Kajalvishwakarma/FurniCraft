<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "furnicraft";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    echo "Not connected".mysqli_connect_error();
}
?>