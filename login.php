<!-- <?php
// Start the session
session_start();

include('dbconn.php');


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $username = $conn->real_escape_string($_POST['uname']);
    $password = $conn->real_escape_string($_POST['pass']);

    // Query the database to check user credentials
    $query = "SELECT * FROM users WHERE name='$username' AND password='$password'";
    $result = $conn->query($query);

    // Check if the query was successful and if the user was found
    if ($result && $result->num_rows > 0) {
        // Valid credentials, set session variable and redirect to home page
        $_SESSION['uname'] = $username;
        header("Location: home.php");
        exit();
    } else {
        // Invalid credentials, display an error message
        $error_message = "Invalid username or password. Please try again.";
        header("Location: error.html");
    }
}

// Close the database connection
$conn->close();
?> -->


 <?php 

session_start();

$uname = $_POST["uname"];
$pass = $_POST["pass"];

include('dbconn.php');


$sql = "SELECT * FROM users WHERE name='$uname' AND password='$pass'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    $_SESSION["uname"]=$uname;
    $_SESSION["pass"]=$pass;
    // $_SESSION["id"]=$id;
    header("Location:home.php");
}
else{
    header("Location:all_error.html");
}
// if (mysqli_query($conn,$sql)) {
  
// $_SESSION["uname"] = $uname;
// $_SESSION["pass"] = $pass;
// header("Location:home.php");

// } else {

    
//     echo "something went wrong";
// }


 mysqli_close($conn);





?>
