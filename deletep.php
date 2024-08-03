<?php 

$id = $_GET["id"];
// $category = $_GET["category"];

$server = "localhost";
$username = "root";
$password = "";
$dbname = "furnicraft";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    echo "Not connected".mysqli_connect_error();
}

$sql = "DELETE FROM `products` WHERE `id` = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: admin_show_allprod.php");
} else {
    # code...
    header("Location: all_error.html");
}
mysqli_close($conn);

?>