<?php 
include('dbconn.php');
$id = $_GET["id"];


$sql = "SELECT * FROM `products` WHERE `id` = $id;";
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

      <div class="container-fluid" style=" background-color: rgba(197, 217, 232, 0.232); padding-top: 40px; padding-bottom: 80px;">
      <a name="" id="" class="btn btn-outline-dark" href="admin_show_allprod.php" role="button" style="margin-left: 20px;">BACK</a>
            
            <div class="block">
              <center><h4 class="display-5" style="margin-bottom: 70px;"><img src="images/con" class="img-fluid rounded-top" alt="">EDIT PRODUCT</h4></center>
              <div class="row justify-content-center align-items-center g-2" style="padding-left: 10px; padding-right: 10px;">
                  <div class="col-sm-12 col-md-6">
                      <img src='<?php echo "uploads/{$rows['image']}";?>' class="img-fluid" alt="" style="height: 400px; width: 450px; mix-blend-mode: multiply; border-radius:20px">
                  </div>
    
                <div class="col-sm-12 col-md-6" >
    
                  <div class="col-sm-12 col-md-6">

            <form action="updateprod.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
          <label class="visually-hidden" for="inputName">ID</label>           
          <input type="hidden" class="form-control" name="id" id="inputName" placeholder="" value='<?php echo "{$rows['id']}"; ?>'>
        </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="fname"
                      style="padding-left: 10px; margin-bottom: 5px; font-size: large;"><b>NAME :</b></label>
                    <input type="text" class="form-control" id="" name="name"
                      style="padding: 15px; border-radius: 20px;" value='<?php echo "{$rows['name']}";?>'>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="lname"
                      style="padding-left: 10px; margin-bottom: 5px; font-size: large;"><b>CATEGORY: </b></label>
                    <input type="text" class="form-control" id="" name="category"
                      style="padding: 15px; border-radius: 20px;" value=' <?php echo "{$rows['category']}";?>'>
                  </div>
                </div>
              </div><br>
              <div class="row">
               <!-- <div class="form-group">
                    <label class="text-black" for="fname"
                      style="padding-left: 10px; margin-bottom: 5px; font-size: large;"><b>DESCRIPTION:</b> <br> <p></p></label>
                    <input type="text" class="form-control" id="" name="name"
                      style="padding: 15px; border-radius: 20px;" value= "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum fugiat voluptate ipsa laborum debitis necessitatibus esse repudiandae numquam accusamus consequuntur.">
                  </div> -->
                  
                    <div class="mb-3">
                        <label for="" class="form-label text-black" style="padding-left: 10px; margin-bottom: 5px; font-size: large;"><b>DESCRIPTION:</b> <br></label>
                         <textarea class="form-control" name="" id="" rows="5" cols="30" style="border-radius: 20px; width:300px">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi est sint aliquid. Pariatur, illum soluta?
                        </textarea>
                    </div>
                
            </div>
                
              
              <!-- <br> -->
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="fname"
                      style="padding-left: 10px; margin-bottom: 5px; font-size: large;"><b>MRP:</b></label>
                    <input type="number" class="form-control" id="" name="mrp"
                      style="padding: 15px; border-radius: 20px;" value='<?php echo "{$rows['mrp']}";?>'>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="lname"
                      style="padding-left: 10px; margin-bottom: 5px; font-size: large;"><b>OFFER PRICE:</b></label>
                    <input type="number" class="form-control" id="" name="sp"
                      style="padding: 15px; border-radius: 20px;" value='<?php echo "{$rows['sp']}";?>'>
                  </div>
                </div>
              </div>
              <!-- <div class="row">
               <div class="col-6"> 
              <div class="mb-3">
  <label for="" class="form-label" style="padding-left: 10px; margin-bottom: 5px; font-size: large;">Choose file</label>
  <input type="file" class="form-control" name="image" id="" placeholder="" aria-describedby="fileHelpId" style="padding: 15px; border-radius: 20px;">
  

</div>
              </div>-->
              <br> 

              <button type="submit" class="btn btn-primary-hover-outline"
                style="background-color: black; color: white; padding: 15px; border-radius: 20px; font-weight: bolder; padding-left: 20px; padding-right: 20px;">&nbsp;UPDATE 
                &nbsp;PRODUCT&nbsp;</button>
            </form>
        </div>
    
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
