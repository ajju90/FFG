<?php 
session_start(); 
if(!isset($_SESSION['username'])) { 

header ("location: login.php");
}

?>

<?php 
$id=$_GET['id'];
$link = mysqli_connect("localhost","root","","users");

$query = "SELECT * FROM productdetail WHERE id='$id'";
$query_run = mysqli_query($link,$query);
$check_details = mysqli_num_rows($query_run)>0;

if($check_details) 
{
  while ($row = mysqli_fetch_array($query_run))
  {  
$username=$_SESSION['username'];
$id=$row['id'];  
$seller=$row['username'];
$grains=$row['grain'];
$price=$row['price'];
$weight=$row['weight'];
$photo=$row['photo'];  

$sql="INSERT INTO `my_cart`(`username`, `id`, `grain`, `price`, `weight`,`seller`,`photo`)
 VALUES ('$username','$id','$grains','$price','$weight','$seller','$photo');"; 
 $result =mysqli_query($link,$sql);
  if($result){ 
      $err=true; 
      echo "<script>alert('Sucessfully')</script>";
      header('refresh:0; url=my_cart.php'); 
  }

  }
} 


?> 

 
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<style>
    body {
background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
main {
padding-left: 240px;
}
}

/* Sidebar */
.sidebar {
position: fixed;
top: 0;
bottom: 0;
left: 0;
padding: 58px 0 0; /* Height of navbar */
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
width: 240px;
z-index: 600;
}

@media (max-width: 991.98px) {
.sidebar {
width: 100%;
}
}
.sidebar .active {
border-radius: 5px;
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
position: relative;
top: 0;
height: calc(100vh - 48px);
padding-top: 0.5rem;
overflow-x: hidden;
overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
</style>
</head>
  <body>
    <!--Main Navigation-->
<header>
  <!-- Sidebar -->
 <?php require 'pariuals/my_account_nav.php' ?> 
  <!-- Sidebar -->

  <!-- Navbar -->
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
  <!-- Navbar -->
</header>
<!--Main Navigation-->  
<main style="margin-top: 58px;">
  <div class="container pt-2"> 
  <section class="vh-100" style="background-color:">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <p><span class="h2">Shopping Cart </span> 

      <?php 
      $username=$_SESSION['username']; 
      $total=0; 
      $a=0;
       $query = "SELECT * FROM `my_cart` WHERE username='$username'";
$query_run = mysqli_query($link,$query);
$check_details = mysqli_num_rows($query_run)>0;

if($check_details)
{
  while ($row = mysqli_fetch_array($query_run))
  {  ?>
        <div class="card mb-4">
          <div class="card-body p-4">

            <div class="row align-items-center">
              <div class="col-md-2">
                <img src="images/<?php echo $row['photo'];?>"
                  class="img-fluid" alt="Generic placeholder image">
              </div> 
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Product</p>
                  <p class="lead fw-normal mb-0"><?php echo $row['grain'] ; ?></p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Weight</p>
                  <p class="lead fw-normal mb-0"><i class="fas fa-circle me-2" style="color: #fdd8d2;"></i>
                  <?php echo $row['weight']; ?> </p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Quantity</p>
                  <p class="lead fw-normal mb-0">1</p>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div>
                  <p class="small text-muted mb-4 pb-2">Price</p>
                  <p class="lead fw-normal mb-0"><?php echo ($row['price'].".00 Rs"); ?></p>
                </div> 
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <div> 
                <form method='POST' action="#"> 
                <?php 
              $path = "dcode.php?id=".$row['id'];
              ?>
                <a href="<?php echo $path; ?>" type="submit" name="submit" value="submit" class="btn btn-primary" style="width:100px;">Remove </a>
             </form> 
              </div>
              </div>  
          </div>
        </div>  

        <?php 
             $p=$row['price'];
             $total=$total+$p;
        }} 
        else {  
          $a=1;
          ?>
          
         <h1>Product not Added </h1> 
         

      <?php  }
        
        
        ?> 
        
    
        <div class="card mb-5">
          <div class="card-body p-4">
        <?php if($a!=1) { ?>
            <div class="float-end">
              <p class="mb-0 me-5 d-flex align-items-center">
                <span class="small text-muted me-2">Order total:</span> <span
                  class="lead fw-normal"> <?php echo ($total.".00 Rs"); ?></span>
              </p>
            </div> 
        

          </div>
        </div> 


        <div class="d-flex justify-content-end">
          <a href="orderplace.php" type="button" class="btn btn-primary btn-lg" style="width:230px; ">Contiue Shopping</a>
        </div> 
        

      </div>
    </div>
  </div> 
  <?php } ?>
</section>
</main>
<!--Main layout-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

 
 
 
 
 
 
 
 
