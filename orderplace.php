<?php 
session_start(); 
if(!isset($_SESSION['username'])) { 

header ("location: login.php");
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'pariuals/_dbconnect.php'; 
$username=$_SESSION['username']; 
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$address=$_POST["address"];  
$state=$_POST["state"];
$city=$_POST["city"];  
$pincode=$_POST["pincode"];
$mobilenum=$_POST["mobilenum"];   
$add="$fname $lname <br> $address <br> $city $state  $pincode<br> $mobilenum " ; 
  $sql="INSERT INTO `address` (`username`, `fname`, `lname`, `address`, `state`, `city`, `pincode`, `mobilenum`) VALUES  ('$username','$fname', '$lname', '$address', '$state', '$city', '$pincode', '$mobilenum')";
  $result =mysqli_query($conn,$sql);  
}if($result){  
     
 header("location:placed.php?add=.$add");
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
<main>
<!--Main Navigation-->  
<div class="container pt-2">
    <form action="#" method="POST"> 
  <div class="container py-1 h-20">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://source.unsplash.com/800x800/?grains"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">𝙎𝙃𝙄𝙋𝙋𝙄𝙉𝙂 𝘼𝘿𝘿𝙍𝙀𝙎𝙎</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="fname" name="fname" class="form-control form-control-lg" required />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="lname" name="lname" class="form-control form-control-lg" required/>
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="address" name="address" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select class="select" id="state" name="state" required>
                      <option value="">State</option>
                      <option value="Maharastra">Maharastra</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-4">

                    <select class="select" id="city" name="city"> 
                      <option value="  ">City</option>
                      <option value="Aurangabad">Aurangabad</option>
                      <option value="Pune">Pune</option>
                      <option value="Nagpur">Nagpur</option>
                      <option value="Mumbai">Mumbai</option>
                      <option value="Jalna">Jalna</option>
                      <option value="Amravati">Amravati</option>
                      <option value="Ahmadnagar">Ahmadnagar</option>
                    </select>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="pincode" name="pincode" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="mobilenum" name="mobilenum" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example97">Mobile no</label>
                </div> 


                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-warning btn-lg ms-2">𝘊𝘰𝘯𝘵𝘪𝘯𝘶𝘦 𝘚𝘩𝘰𝘱𝘱𝘪𝘯𝘨</button>
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

 
 
 
 
 
 
 
 
