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
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark " >
    <div class="position-sticky " >
      <div class="list-group  mx-3 mt-4  ">
        
        <a href="my_product.php" class="list-group-item list-group-item-action py-2 ripple active"> 
        <i class="bi bi-house-door-fill"></i>
          <i class="fas fa-chart-area fa-fw me-3"></i><span>My Product</span>
        </a>  <br> 
        
  <a href="seller.php" class="list-group-item list-group-item-action py-2 ripple ">
  <i class="bi bi-bag-plus-fill"></i>
    <i class="fas fa-lock fa-fw me-3"></i> <span>Sell Product</span></a>  <br>
  <a href="orders.php" class="list-group-item list-group-item-action py-2 ripple active">
  <i class="bi bi-bag-heart-fill"></i>
    <i class="fas fa-lock fa-fw me-3"></i> <span>Orders</span></a>  <br> 
    <a href="#" class="list-group-item list-group-item-action py-2 ripple active"> 
    <i class="bi bi-info-circle-fill"></i> 
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Payment</span>
        </a>  <br> 
            <a href="logou.php" class="list-group-item list-group-item-action py-2 ripple active"> 
            <i class="bi bi-box-arrow-in-left"></i>
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>Logout</span> 
        </a> 
</div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <?php require 'pariuals/nav.php' ?>
  <!-- Navbar -->
</header>
<!--Main Navigation-->  
<main style="margin-top: 58px; margin-left : 58px;">
  <div class="container pt-2"> 
      <form action="sell.php" method="post" enctype="multipart/form-data"> 
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
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
                <label class="form-label" for="form3Example90" >price</label>
                    <input type="number" id="price" name="price" class="form-control form-control-lg" required />
                    
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
     </div> 
</main>
<!--Main layout-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
