<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <!-- <div class="row justify-content-center align-items-center g-2"> -->

    
<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "furnicraft";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    echo "Not connected".mysqli_connect_error();
}

$sql = "select * from products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
    echo "<div class='container' style='margin-top: 50px;'>
    <span><a name='' id='' class='btn btn-outline-dark' href='adminpage.html' role='button'>BACK</a>
    <a name='' id='' class='btn btn-outline-dark' href='addproduct.html' role='button'>ADD NEW ITEM</a>
    <div class='row justify-content-center align-items-center g-2'>";

    while($rows = mysqli_fetch_assoc($result)){
    
    echo "<div class='col-sm-12 col-md-6 col-lg-4 col-xl-3 col-xxl-2'>
    <div class='card' style='border: white;'>
      
    <div class='card-body'>
    <img class='card-img-top' src='uploads/{$rows['image']}' class='img-fluid' height= '200' width = '50' alt='Title' style='border: white;mix-blend-mode: multiply;'/>
    <b><p class='card-text'>NAME: {$rows['name']}</p></b>
        <p class='card-text'>CATEGORY: {$rows['category']}</p>
        <p class='card-text'>MRP: <del>{$rows['mrp']}</del></p>
        <p class='card-text'>OFFER PRICE: {$rows['sp']}</p>
        <span><a name='' id='' class='btn btn-outline-warning' href='editpage_prod.php?id={$rows['id']}' role='button'>EDIT</a>
        <a name='' id='' class='btn btn-outline-danger' href='deletep.php?id={$rows['id']}' role='button'>DELETE</a></span>
      </div>
    </div>
  </div>";
    }

    echo "
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html> 
