
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
        
        <a href="hpage.php" class="list-group-item list-group-item-action py-2 ripple active"> 
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
<main>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">About Us</h1>
      <hr>
      <p>Our e-commerce site was founded in  with a vision to provide customers with the best online shopping experience. We strive to offer a wide variety of products at competitive prices while maintaining the highest level of customer service.</p>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <h2>Our Mission</h2>
      <p>At Farm's food grains, our mission is to provide customers with a seamless and enjoyable online grains shopping experience. </p>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <h2>Our Team</h2>
      <p>We have a dedicated team of professionals who are passionate about providing the best possible experience for our customers. From our customer service representatives to our website developers, everyone on our team works tirelessly to ensure that our platform is always up-to-date and user-friendly.</p>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <h2>Contact Us</h2>
      <p>If you have any questions or concerns, please don't hesitate to contact us. You can reach our customer service team by phone, email, or live chat. We are always happy to hear from our customers and help in any way we can.</p>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <h2>Thank You</h2>
      <p>Thank you for choosing Farm's food grains for your online shopping needs. We appreciate your business and look forward to serving you in the future.</p>
    </div>
  </div>
</div>

<!--Main layout-->


<footer>  <?php require 'Footer.php' ?>  </footer>
<!--Main layout--> 
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>  


</html>
