<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css"> 
    npm i bootstrap-icons
    <style>  

  

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
.btn{
    height: 40px;
    width: 40%;
    outline: none;
    border: none;
    background: rgb(248,26,92);
    color: white;
    font-weight: 700;
    border-radius: 60px;
} 
.btn1{
    height: 40px;
    width: 40%;
    outline: none;
    border: none;
    background: rgb(248,26,92);
    color: white;
    font-weight: 700;
    border-radius: 60px;
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
    <title>proj_16_ffg</title>
  </head>
  <body>
  <header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark " >
    <div class="position-sticky " >
      <div class="list-group  mx-3 mt-4  ">
        
        <a href="#" class="list-group-item list-group-item-action py-2 ripple active"> 
        <i class="bi bi-house-door-fill"></i>
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Home</span>
        </a>  <br> 
       
  <button class="list-group-item list-group-item-action py-2 ripple active"  data-toggle="dropdown" aria-haspopup="true" >
  <i class="bi bi-box-arrow-in-right"></i></i>
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Login</span>
</button>
  <div class="dropdown-menu active" aria-labelledby="dropdownMenuButton ">
    <a class="dropdown-item active" href="profile.php"><i class="bi bi-person-circle"></i>
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Profile</span> </a>

    <a class="dropdown-item active" href="login.php"><i class="bi bi-box-arrow-in-right"></i> 
    <i class="fas fa-chart-area fa-fw me-3"></i><span>Singup</span> </a>
  </div> <br> 
  <a href="sell.php" class="list-group-item list-group-item-action py-2 ripple active">
  <i class="bi bi-bag-plus-fill"></i>
    <i class="fas fa-lock fa-fw me-3"></i> <span>Become Seller</span></a>  <br>
  <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
  <i class="bi bi-bag-heart-fill"></i>
    <i class="fas fa-lock fa-fw me-3"></i> <span>Cart</span></a>  <br> 
    <a href="#" class="list-group-item list-group-item-action py-2 ripple active"> 
    <i class="bi bi-info-circle-fill"></i> 
          <i class="fas fa-chart-area fa-fw me-3"></i><span>About us </span>
        </a>  <br> 
            <a href="#" class="list-group-item list-group-item-action py-2 ripple active"> 
            <i class="bi bi-box-arrow-in-left"></i>
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>Logout</span> 
        </a> 
</div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
   <?php require 'homenav.php' ?>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->   
<main style="margin-top: 58px;">  
<br>
<div id="carouselExampleIndicators"  class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/img4.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/img5.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/1200x300/?wheat" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid ">
	<div class="row mt-4"> 

    	
		<?php 
		 	$link = mysqli_connect("localhost","root","","users");

		 	$query = "SELECT * FROM productdetail";
		 	$query_run = mysqli_query($link,$query);
		 	$check_details = mysqli_num_rows($query_run)>0;

		 	if($check_details)
		 	{
		 		while ($row = mysqli_fetch_array($query_run))
		 		{
		 			?>

		 			<div class="col-md-3">
					<div class="card extcard">
						<div class="card-body" text-center>
							<img src="images/<?php echo $row['photo'];?>" class="card-img-top" style="height: 250px;" >
							<h4 class="card-title" ><?php echo $row['grain']; ?></h4>
              <h6 class="card-title"><?php echo ("Price: ".$row['price'].".00 Rs"); ?></h6> 
              <h4 class="card-title" ><?php echo $row['weight']; ?></4><br> <br>
              <button  type="submit" class="btn btn-primary">Buy Now</button> 
             
							
						</div>
					</div>
				</div>
		<?php
		 		} 
		 	}
		 	else
		 	{
		 		echo ("<script>alert('No product detail')</script>");
		 	}
		 ?>
  </div> 
  </div>  
  <?php require 'Footer.php' ?>
  
</main> 

<!--Main layout-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<!--Main Navigation-->
