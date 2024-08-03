<?php 

$name = $_POST["name"];
$category = $_POST["category"];
$mrp = $_POST["mrp"];
$sp = $_POST["sp"];
$file = $_FILES['image']['name'];

// $target_dir = "uploads/";
// $target_file = $target_dir . basename( $_FILES['image']['name']);
// move_uploaded_file($_FILES['image']['tmp_name'],$target_file);

$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$target_file);

$server = "localhost";
$username = "root";
$password = "";
$dbname = "furnicraft";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    echo "Not connected".mysqli_connect_error();
}

$sql = "INSERT INTO `products`(`id`, `name`, `mrp`, `sp`,`category`, `image`) VALUES (NULL,'$name','$mrp','$sp','$category','$file')";

if (mysqli_query($conn, $sql)) {
    header("Location: admin_show_allprod.php");
} else {
    # code...
    header("Location: all_error.html");
}
mysqli_close($conn);

?>