<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "furnicraft";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    echo "Not connected".mysqli_connect_error();
}

$sql = "select * from contact";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
    echo "<div class='container-fluid' style='background-color: rgba(197, 217, 232, 0.232); margin-bottom: 30px; padding-left: 30px; padding-right: 30px; padding-top: 30px; padding-bottom: 100px;'>
    <div class='container'>
    <center>
     <img src='img/logo.png' class='img-fluid rounded-top' alt='' style='height: 100px; width: 100px; mix-blend-mode: multiply;'>
     <br><h1 class='display-6' style='color: rgb(102, 7, 7);'>USER MESSAGES</h1>
    </center><br>
    
    <div class='table-responsive'>
<table class='table table-orange table-hover'>
    <thead>
        <tr>
            <th scope='col' style='padding: 10px; border-radius: 20px 0px 0px 0px; background-color: rgba(255, 166, 0, 0.126);font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(102, 7, 7);' class='text-center display-10'>ID</th>
            <th scope='col' style='padding: 10px; background-color: rgba(255, 166, 0, 0.126);font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(102, 7, 7);' class='text-center'>FIRST NAME</th>
            <th scope='col' style='padding: 10px; background-color: rgba(255, 166, 0, 0.126);font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(102, 7, 7);' class='text-center'>LAST NAME</th>
            <th scope='col' style='padding: 10px; background-color: rgba(255, 166, 0, 0.126);font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(102, 7, 7);' class='text-center'>EMAIL</th>
            <th scope='col' style='padding: 10px; background-color: rgba(255, 166, 0, 0.126);font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(102, 7, 7);' class='text-center'>QUERY</th>
            <th scope='col' style='padding: 10px; border-radius: 0px 20px 0px 0px; background-color: rgba(255, 166, 0, 0.126);font-family: Verdana, Geneva, Tahoma, sans-serif; color: rgb(102, 7, 7);' class='text-center'>ACTION</th>
        </tr>
    </thead>
    <tbody>";
    while($rows = mysqli_fetch_assoc($result)){
        echo "<tr class=''>
        <td scope='row' style='padding: 10px; border-radius: 0px 20px 20px 0px; background-color: rgba(255, 166, 0, 0.126)' class='text-center'>{$rows['id']}</td>
        <td style='padding: 10px; background-color: rgba(255, 166, 0, 0.126);font-family: Verdana, Geneva, Tahoma, sans-serif;' class='text-center'>{$rows['fname']}</td>
        <td style='padding: 10px; background-color: rgba(255, 166, 0, 0.126);font-family: Verdana, Geneva, Tahoma, sans-serif;' class='text-center'>{$rows['lname']}</td>
        <td style='padding: 10px; background-color: rgba(255, 166, 0, 0.126);font-family: Verdana, Geneva, Tahoma, sans-serif;' class='text-center'>{$rows['email']}</td>
        <td style='padding: 10px; background-color: rgba(255, 166, 0, 0.126);font-family: Verdana, Geneva, Tahoma, sans-serif;' class='text-center'>{$rows['query']}</td>
        <td style='padding: 10px; background-color: rgba(255, 166, 0, 0.126);font-family: Verdana, Geneva, Tahoma, sans-serif;' class='text-center'><a name='' id='' class='btn btn-outline-info' href='edit.php?id={$rows['id']}' role='button'>Reply</a>
        <a name='' id='' class='btn btn-outline-danger' href='delete.php?id={$rows['id']}' role='button'>Delete</a></td>
    </tr>";
    }
    echo " </tbody>
   
    </table>
    <div class='row justify-content-center align-items-center g-2'>
    <div class='col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2'></div>
    <div class='col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2'></div>
    <div class='col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2' style='padding-left: 200px;'><a name='' id='' class='btn' href='adminpage.html' role='button' style='background-color: brown; color: white; padding: 10px 20px 10px 20px; font-size: large; border-radius: 10px;'>Back</a></div>
</div>
</div>
        </div>
        </div>";
} else {
    # code...
    echo "0 record";
}
mysqli_close($conn);

?>


  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>