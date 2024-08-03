<?php 
include('dbconn.php');

$uname = $_POST["name"];
$pass = $_POST["pass"];

if ($uname == 'kajal' && $pass=='kajal') {
    header('Location: adminpage.html');
} else {
    header('Location: erroradmin.html');
}
mysqli_close($conn);

?>

