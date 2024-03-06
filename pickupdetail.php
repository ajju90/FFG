<?php  
session_start(); 
if(!isset($_SESSION['username'])) { 

header ("location: login.php");
} 

$result=false; 
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'pariuals/_dbconnect.php';
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$address=$_POST["address"];  
$state=$_POST["state"];
$city=$_POST["city"];  
$pincode=$_POST["pincode"];
$mobilenum=$_POST["mobilenum"];     
  $sql="INSERT INTO `pickup` (`fname`, `lname`, `address`, `state`, `city`, `pincode`, `mobilenum`) VALUES ('$fname', '$lname', '$address', '$state', '$city', '$pincode', '$mobilenum')";
  $result =mysqli_query($conn,$sql);  
}if($result){ 
 header("location:my_product.php");
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>pickupdetail</title>   
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

    <title>singup!</title> 
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">FFG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/loginss/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
 
<li class="nav-item active">
        <a class="nav-link" href="members.php">My Order<span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="sell.php">Sell Product<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/loginss/logou.php">logout</a>
      </li> 
</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> 
    </div> 
  </div>
</nav> 
   <div class="container">
    <form action="/PROJ-16-FFG/pickupdetail.php" method="POST"> 
  <div class="container py-5 h-100">
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
                <h3 class="mb-5 text-uppercase">Pickup detail</h3>

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
                      <option value="1">City</option>
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
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Sell Product</button>
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
    </body>
</html>
</body>
</html>