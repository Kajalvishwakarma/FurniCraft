<?php 

$id = $_GET["id"];

$server = "localhost";
$username = "root";
$password = "";
$dbname = "furnicraft";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    echo "Not connected".mysqli_connect_error();
}

$sql = "DELETE FROM `contact` WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: showuser.php");
} else {
    # code...
    header("Location: all_error.html");
}
mysqli_close($conn);

?>