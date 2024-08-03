<?php 
include('dbconn.php');
$id = $_GET["id"];


$sql = "SELECT * FROM `contact` WHERE `id` = $id;";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($result);

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main>

      <div class="container-fluid" style=" background-color: rgba(197, 217, 232, 0.232); padding-top: 60px; padding-bottom: 80px;">
      <a name="" id="" class="btn btn-outline-dark" href="showuser.php" role="button">BACK</a>
            <div class="block">
              <center><h4 class="display-5" style="margin-bottom: 70px;"><img src="images/con" class="img-fluid rounded-top" alt="">CONTACT US</h4></center>
              <div class="row justify-content-center align-items-center g-2" style="padding-left: 10px; padding-right: 10px;">
                  <div class="col-sm-12 col-md-6">
                      <img src="img/5138237.jpg" class="img-fluid rounded-top" alt="" style="height: 500px; width: 600px; mix-blend-mode: multiply;">
                  </div>
    
                <div class="col-sm-12 col-md-6">
    
                  <form action="contactmail.php" method="post">
                  <div class="mb-3">
          <label class="visually-hidden" for="inputName">ID</label>           
          <input type="hidden" class="form-control" name="id" id="inputName" placeholder="" value='<?php echo "{$rows['id']}"; ?>'>
        </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label class="text-black" for="fname" style="padding-left: 10px; margin-bottom: 5px; font-size: large;">First name</label>
                          <input type="text" class="form-control" id="fname" name="fname" style="padding: 15px; border-radius: 20px;" value='<?php echo "{$rows['fname']}"; ?>'>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label class="text-black" for="lname" style="padding-left: 10px; margin-bottom: 5px; font-size: large;">Last name</label>
                          <input type="text" class="form-control" id="lname" name="lname" style="padding: 15px; border-radius: 20px;" value='<?php echo "{$rows['lname']}"; ?>'>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="text-black" for="email" style="padding-left: 10px; margin-bottom: 5px; font-size: large;">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" style="padding: 15px; border-radius: 20px;" value='<?php echo "{$rows['email']}"; ?>'>
                    </div>
    
                    <div class="form-group mb-5">
                      <label class="text-black" for="message" style="padding-left: 10px; margin-bottom: 5px; font-size: large;">Message</label>
                      <textarea name="query" class="form-control" id="message" cols="30" rows="5" style="padding: 15px; border-radius: 20px;"><?php echo "{$rows['query']}"; ?></textarea>
                    </div>
                    <div class="form-group mb-5">
                      <label class="text-black" for="message" style="padding-left: 10px; margin-bottom: 5px; font-size: large;">Reply</label>
                      <textarea name="reply" class="form-control" id="message" cols="30" rows="5" style="padding: 15px; border-radius: 20px;"></textarea>
                    </div>
    
                   
                    <button type="submit" class="btn btn-primary-hover-outline" style="background-color: black; color: white; padding: 15px; border-radius: 20px; font-weight: bolder; padding-left: 20px; padding-right: 20px;">&nbsp;Send &nbsp;Message&nbsp;</button>
                  </form>
    
                </div>
    
              </div>
    
            </div>
    
          </div>
    
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
