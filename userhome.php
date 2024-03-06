
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

.extcard
		{
			margin: 10px;
			height: auto;
			border-radius: 15px;
			cursor: pointer;
			background-position: center;
		    background-size: cover;
		    transition: transform 0.5s;
		}
		.extcard:hover
		{
		    transform: translateY(-10px);
			/*transform:  rotateY(360deg);
			transition: 0.7s;*/
		}
		.extcard img
		{
			height: 200px;
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
        
        <a href="#" class="list-group-item list-group-item-action py-2 ripple active"> 
        <i class="bi bi-house-door-fill"></i>
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Home</span>
        </a>  <br> 
        <a href="login.php" class="list-group-item list-group-item-action py-2 ripple active"> 
        <i class="bi bi-house-door-fill"></i>
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Login</span>
        </a>  <br>  
  <a href="sellersignup.php" class="list-group-item list-group-item-action py-2 ripple active">
  <i class="bi bi-bag-plus-fill"></i>
    <i class="fas fa-lock fa-fw me-3"></i> <span>Become Seller</span></a>  <br>
  <a href="about.php" class="list-group-item list-group-item-action py-2 ripple active">
  <i class="bi bi-bag-heart-fill"></i>

          <i class="fas fa-chart-area fa-fw me-3"></i><span>About us </span>
        </a>  <br> 
            
</div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <img src="img/logo1.png" class="card-img-top" style="height: 60px; width: 70px ;  margin-left: 10px;">
  <a class="navbar-brand " href="#" style="color:white ;margin-left: 20px;">Farmer's food grains</a>  
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" 
  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
   style="margin-left: 650px;  width: 150px ;" >
    Filter by Price
  </button>
  <ul class="dropdown-menu"  style="margin-left: 650px;">
  <li><a class="dropdown-item" href="userhome.php">All</a></li>
    <li><a class="dropdown-item" href="userhome.php?f=1000">less than 1000</a></li>
    <li><a class="dropdown-item" href="userhome.php?f=2000">1000rs to 2000rs </a></li>
    <li><a class="dropdown-item" href="userhome.php?f=2500">more than 2000rs</a></li>
  </ul>
</div>

  <div> 
    <div class="collapse navbar-collapse" id="navbarScroll"> 
      <form class="d-flex" style="margin-left: 10px" method="post" > 
        <input class="px-2 search" type="text" name="sr" placeholder="Search" aria-label="Search">
        <input class="btn1" type="submit" name="srbtn" value="Search" >
      </form>  
  
</nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4"></div> 
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
    <div class="carousel-item ">
      <img class="d-block w-100" src="https://source.unsplash.com/1200x300/?wheat" alt="Second slide">
    </div>
    <div class="carousel-item ">
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
       if(isset($_GET['f']))
       {  
        $price=$_GET['f'];   
        if($price==1000){
        $query = "SELECT * FROM productdetail WHERE verify='verified' AND  price < 1000"; 
        } 
        if($price==2000){
          $query = "SELECT * FROM productdetail WHERE verify='verified' AND  price > 1000 AND price < 2000"; 
          } 
          if($price==2500){
            $query = "SELECT * FROM productdetail WHERE verify='verified' AND   price > 2000"; 
            }

       } 

       else if(isset($_POST['srbtn']))
       {  
        $sr=$_POST['sr']; 
        $query = "SELECT * FROM productdetail WHERE verify='verified' AND  grain='$sr'";


       }  
       else{ 
		 	$query = "SELECT * FROM productdetail WHERE verify='verified' ";
     }
		 	$query_run = mysqli_query($link,$query);
		 	$check_details = mysqli_num_rows($query_run)>0;

		 	if($check_details)
		 	{
		 		while ($row = mysqli_fetch_array($query_run))
		 		{
		 			?>

		 			<div class="col-md-3">
					<div class="card extcard shadow carddmeo">
						<div class="card-body" text-center>
							<img src="images/<?php echo $row['photo'];?>" class="card-img-top" style="height: 250px;" >
							<h4 class="card-title" ><?php echo $row['grain']; ?></h4>
              <h6 class="card-title"><?php echo ("Price: ".$row['price'].".00 Rs"); ?></h6> 
              <h4 class="card-title" ><?php echo $row['weight']; ?></4><br> <br> 
              <a  type="submit" href="login.php"  class="btn btn-primary" style="width:150px;">Add To Cart</a> 
             
							
						</div>
					</div>
				</div>
		<?php
		 		} 
		  }
		 	else
		 	{  ?>
        <div class="col-md-3">
            <h4> No Result Found</h4>
      </div>

     <?php   
		 		echo ("<script>alert('No product detail')</script>"); 
		 	}
		 ?>
  </div> 
  </div>   
 
</main> 

<footer>  <?php require 'Footer.php' ?>  </footer>
<!--Main layout-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>  


</html>
