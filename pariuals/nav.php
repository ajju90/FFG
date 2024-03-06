
<?php 
		 	$link = mysqli_connect("localhost","root","","users");
      $username=$_SESSION['username'];

		 	$query = "SELECT * FROM `user` WHERE username='$username'";
		 	$query_run = mysqli_query($link,$query);
		 	$check_details = mysqli_num_rows($query_run)>0;

		 	if($check_details) {
		$row = mysqli_fetch_array($query_run);
      }
		 			?> 
<nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <img src="img/logo1.png" class="card-img-top" style="height: 60px; width: 70px ;  margin-left: 10px;">
  <a class="navbar-brand " href="#" style="color:white; margin-left: 20px; ">Farmer's food grains</a> 
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" 
  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
   style="margin-left: 500px;  width: 150px ;" >
    Filter by Price
  </button>
  <ul class="dropdown-menu"  style="margin-left: 500px;">
  <li><a class="dropdown-item" href="hpage.php">All</a></li>
    <li><a class="dropdown-item" href="hpage.php?f=1000">less than 1000</a></li>
    <li><a class="dropdown-item" href="hpage.php?f=2000">1000rs to 2000rs </a></li>
    <li><a class="dropdown-item" href="hpage.php?f=2500">more than 2000rs</a></li>
  </ul>
</div>
      <form  method="post" action="hpage.php" class="d-flex">
        <input class="px-2 search" type="text" name="sr" placeholder="Search" aria-label="Search">
        <input type="submit" class="btn1" name="srbtn" value="Search" >
      </form>   
      <i style="color: white ;font-size:30px; margin-left: 30px;"  class="bi bi-person-circle" ></i>  
      <h6  style="color: white; margin-left: 10px; ">WELCOME <br><?php echo @$row['name']; ?></h6> <br> 
</nav>