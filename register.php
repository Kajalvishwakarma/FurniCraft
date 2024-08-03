<?php 

include("dbconn.php");  
$name = $_POST["name"];
$email = $_POST["email"];
$cont = $_POST["cont"];
$pass = $_POST["pass"];


$sql = "insert into users(name,contact,email,password) values('$name',  '$cont', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
    header("Location: login.html");
} else {
    # code...
    echo "Something went wrong";
}
mysqli_close($conn);

?>