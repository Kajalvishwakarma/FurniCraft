<?php 

$id = $_POST["id"];
$name = $_POST["name"];
$category = $_POST["category"];
$mrp = $_POST["mrp"];
$sp = $_POST["sp"];
// $file = $_FILES['image']['name'];

// $target_dir = "uploads/";
// $target_file = $target_dir.basename($_FILES['image']['name']);
// move_uploaded_file($_FILES['image']['tmp_name'],$target_file);


$conn = mysqli_connect("localhost","root","","furnicraft");

if (!$conn) {
    echo "Database not connected" . mysqli_connect_error();
}


// $sql = "UPDATE `products` SET `name` = '$name', `mrp` = '$mrp', `sp` = '$sp', `category` = '$category', `image` = '$file' WHERE `products`.`id` = '$id'";
$sql = "UPDATE `products` SET `name` = '$name', `mrp` = '$mrp', `sp` = '$sp', `category` = '$category' WHERE `products`.`id` = '$id'";
if (mysqli_query($conn,$sql)) {
    header("Location:admin_show_allprod.php");
} else {
    header("Location:all_error.html");
}


mysqli_close($conn);



?>