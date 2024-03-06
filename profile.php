<?php 
session_start(); 
if(!isset($_SESSION['username'])) { 

header ("location: login.php");
}

if(isset($_POST['submit'])){   
$username=$_SESSION['username'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];

$link = mysqli_connect("localhost","root","","users");
$query = "UPDATE `user` SET `name`='$name',`mobile`='$mobile' WHERE username='$username'";
$query_run = mysqli_query($link,$query);
if($query_run){ 
    echo "<script>alert('Updated Succefully')</script>";   
   header('refresh:0; url=profile.php ');


} 
else{
  echo "<script>alert('something wrong')</script>";  

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
  <?php require 'pariuals/nav.php' ?>
  <!-- Navbar -->
</header>
<!--Main Navigation--> 
<main style="margin-top: 100px; margin-left: 100px; ">
  <div class="container pt-4">

  <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
   
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body ">
              <h3>Personal Information</h3>

              <form method="post">

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Name</label>
                  <input type="text" name="name" class="form-control form-control-lg" />
              
                </div>

               

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Mobile No.</label>
                  <input type="text" name="mobile" class="form-control form-control-lg" />
                 
                </div>


                <div class="d-flex justify-content-center">
                  <input type="submit" value="Update" name="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"/>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	</div> 

	
</div>

<!--Main layout-->

</main>  
<?php require 'footer.php'?>


<!--Main layout-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>
