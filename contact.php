<!-- <?php 

include("dbconn.php");  
$fname = $_POST["fname"];
$email = $_POST["email"];
$lname = $_POST["lname"];
$query = $_POST["query"];


$sql = "insert into contact(fname,lname,email,query) values('$fname',  '$lname', '$email', '$query')";

if (mysqli_query($conn, $sql)) {
    header("Location: aftercontact.html");
} else {
    # code...
    echo "Something went wrong";
}
mysqli_close($conn);

?> -->


<?php
session_start();

if (!isset($_SESSION["uname"]) && !isset($_SESSION["pass"])) {
header("Location:login.html");
}
else{
    include("dbconn.php"); 
$fname = $_POST["fname"];
$email = $_POST["email"];
$lname = $_POST["lname"];
$query = $_POST["query"];

// $con=mysqli_connect("localhost","root","","sdacproject");

$sql = "insert into contact(fname,lname,email,query) values('$fname',  '$lname', '$email', '$query')";

if(mysqli_query($con,$sql)){
    header("Location: aftercontact.html");
    

}
else{
    header("Location: all_error.html");
}
mysqli_close($conn);
}

?>