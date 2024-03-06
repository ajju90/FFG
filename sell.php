<?php  

session_start(); 
if(!isset($_SESSION['username'])) { 

header ("location: login.php");
}


  if(isset($_POST['submit'])){
    include 'pariuals/_dbconnect.php';
    $grain=$_POST["grain"]; 
    $username=$_SESSION['username'];
    $photo_name = $_FILES["photo"]["name"]; 
    $photo_tmp = $_FILES["photo"]["tmp_name"];   
    $price=$_POST["price"];  
    $weight=$_POST["weight"];  
    move_uploaded_file($photo_tmp,"images/$photo_name");
      $sql="INSERT INTO `productdetail` (`id`, `username`, `grain`, `photo`, `price`, `weight`) 
      VALUES  (NULL,'$username','$grain', '$photo_name', '$price', '$weight')";
      $result =mysqli_query($conn,$sql); 
    if($result){ 
      header("location:pickupdetail.php");
    }  
  } 
    ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
      <meta name="viewport" 
      content="width=device-width, initial-scale=1.0">
      <title>sell</title> 
     
  </head>
  <body>  
  <!doctype html>
  <html lang="en">
    <head>  
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
      <title>sell</title> 
      <style>
  .card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em; 
  
  }
  .card-registration .select-arrow {
  top: 13px;
  }
  
  </style> 
    </head>
    <body>
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
  <a class="navbar-brand " href="#" style="color:white">Farmer's food grains</a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav m-auto my-2 my-lg-0 ">
        
      </ul>
      <form class="d-flex">
        <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>  

<?php require ("pariuals/seller_side.php"); ?>



<main style="margin-top: 58px;  margin-left: 100px;">  

     <div class="container">
      <form action="/proj_16_ffg/sell.php" method="post" enctype="multipart/form-data"> 
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="img/img2.jpg"
                  alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">Product detail</h3>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <select class="select" id="grain" name="grain">
                        <option value="">Type of Grains</option>
                        <option value="Wheat">Wheat</option>
                        <option value="millet(bajara)">millet(bajara)</option>
                        <option value="sorghum(jawar)">sorghum(jawar)</option>
                      </select>
  
                    </div>
                </div> 
                <div class="form-outline mb-4">
                    <input type="number" id="price" name="price" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example90" >price</label>
                  </div>
  
             <div class="input-group mb-4"> 
                  <input type="file" class="form-control" name="photo"> 
            </div>
                  <div class="col-md-4 mb-4">
                      <select class="select" id="weight" name="weight">
                        <option value="">Weight of bags</option>
                        <option value="25kg">25kg</option>
                        <option value="50kg">50kg</option>
                        <option value="100kg">100kg</option>
                      </select>
                    </div>
                  <div class="d-flex justify-content-end pt-3">
                    <button type="submit" id="submit" name="submit" class="btn btn-warning btn-lg ms-2">Sell Product</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>  
</main>
     </div>
      </body>
  </html>
  </body>
  </html>  
  



