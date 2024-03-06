<?php  
$err=false;
$failed=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
include 'pariuals/_dbconnect.php';
$username=$_POST["username"]; 
$mobile=$_POST["mobile"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];  
$name=$_POST["name"];
if($password==$cpassword){
  $sql="INSERT INTO `user` (`sno`, `name`, `username`, `mobile`, `password`, `dt`)
   VALUES (NULL, '$name', '$username','$mobile', '$password', current_timestamp());";

  $result =mysqli_query($conn,$sql);
  if($result){ 
      $err=true; 
      echo "<script>alert('Registration Sucessfully')</script>";
      header('refresh:0; url=login.php');
  }                     
   } 
 else
   {   
      $failed=true;
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
    <title>signin</title>
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
    <title>singup!</title> 
    <style>
      body{  
                background-image: linear-gradient(rgba(0,0,0, 0.6),rgba(0,0,0, 0.6)), url('img/signupbgimg.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;  
              }
     h1{
      font-size: 2.1rem;
      line-height:1.4;
      letter-spacing:0.5rem;
      color:black;
      margin-top:25px; 
    }
      #object1 {
  width: 600px;
  height: 300px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -140px;
  margin-left: -100px;
  background: orange;
}

</style> 
  </head>
  <body>
  <nav class="navbar navbar-expand-lg">
  <div class="container">
  <a class="navbar-brand text-white" href="#" >Food Farm Grains</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav m-auto my-2 my-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php"style="color:white;">Home</a>
        </li>
          <li class="nav-item">
          <a class="nav-link " href="login.php"style="color:white;" >Login</a>
        </li>  
        </li>
          <li class="nav-item">
          <a class="nav-link " href="#"style="color:white;" >About</a>
        </li> 
      </ul>
      <form class="d-flex">
        <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
   <?php  
   
   if($err==true) 
   { 
   echo '<div class="alert alert-success alert-dismissible fade show" role="sucess">
   <strong>Success !</strong> account created go to login
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';  

  }   
  if($failed==true)
  { 
    echo '<div class="alert alert-warning alert-dismissible fade show" role="sucess">
    <strong>failed !</strong> password do not match. 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';  
 
   } 
   ?>
   <div class="container">
    <h1 class="text-left" style="color:white;">Signup to our website</h1>
    <form action="sing.php" method="post"> 
     <div class="form-group col-md-4 " >
    <label for="username">Name </label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter full name  " required>
     </div> 
  <div class="form-group col-md-4 " >
    <label for="username">Email</label>
    <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter email" required>
     </div> 
     <div class="form-group col-md-4 " >
    <label for="username">Mobile Number</label>
    <input type="text" class="form-control" id="mobile" name="mobile" aria-describedby="emailHelp" placeholder="Enter Mobile Number" required>
     </div>
  <div class="form-group col-md-4">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="password"  name="password"  placeholder="Password" required>
  </div> 
  <div class="form-group col-md-4">
    <label for="CPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword"  placeholder="re-enter password" required>
      </div>
 
  <button type="submit" class="btn btn-primary" style="width:130px;">Signup</button>
</form> 
   </div>
    </body>
</html>
</body>
</html>