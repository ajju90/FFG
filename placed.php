<?php 
session_start(); 
if(!isset($_SESSION['username'])) { 

header ("location: login.php");
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

.bgclass{
  width: 100%;
				background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("img/sellerregbg.jpg");
				background-position: center;
				background-size: cover;
				box-sizing: border-box;
				background-repeat: no-repeat;




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
  <?php require 'pariuals/nav.php' ?>
  <!-- Navbar -->
</header>
<!--Main Navigation--> 
<main class="bgclass" style="margin-top: 60px; margin-left: 100px; ">
  <div class="container pt-4">

  <section class="vh-100 bg-image bg-transparent">

    <div class="container h-10 0bg-transparent">
   
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body ">
              <h3>Payment</h3>

              <form> 
              <?php 
      $username=$_SESSION['username']; 
      $total=0; 
      $delivery=0;
      $a=0;
       $query = "SELECT * FROM `my_cart` WHERE username='$username'";
$query_run = mysqli_query($link,$query);
$check_details = mysqli_num_rows($query_run)>0;

if($check_details)
{
  while ($row = mysqli_fetch_array($query_run))
  {  ?>
        <div class="card mb-4 " >
            <div class="row align-items-center">
              
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
                  <p class="lead fw-normal mb-0"><?php echo ($row['price'].".00Rs"); ?></p>
                </div> 
              </div>
          </div>
        </div>  

        <?php  
            $delivery=$delivery+40;
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
            <p class="mb-0 me-5 d-flex align-items-center">
                <span class="small text-muted me-2">Delivery Charge:</span> <span
                  class="lead fw-normal"> <?php echo ($delivery.".00 Rs"); ?></span>
              </p>
              <p class="mb-0 me-5 d-flex align-items-center">
                <span class="small text-muted me-2"> Total:</span> <span
                  class="lead fw-normal"> <?php echo ($total+$delivery.".00 Rs"); ?></span>
              </p>
            </div> 
        

          </div> 
          <?php }?>


                <div class="form-outline mb-4">
                <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
  𝐂𝐚𝐬𝐡 𝐎𝐧 𝐃𝐞𝐥𝐢𝐯𝐞𝐫𝐲
  </label> 
</div>
 </div>

        </div> 
        <form action="placed.php" method="post">
                <div class="d-flex justify-content-center"> 
                  <?php $add=$_GET['add'];  
                   $path = "place.php?add=".$add;
                  
                  ?>
                <a  class="btn btn-primary" href="<?php echo $path; ?>" style="width:130px;">Place Order</a> 

        </form>
<!--Main layout-->

</main>  
<?php require 'footer.php'?>


<!--Main layout-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>  
<?php   


