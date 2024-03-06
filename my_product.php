
<?php 
session_start(); 
if(!isset($_SESSION['username'])) { 

header ("location: login.php");
} 
if(isset($_GET['id'])){
$id = $_GET['id']; 
$link = mysqli_connect("localhost","root","","users");

$query = "DELETE FROM `productdetail` WHERE id='$id'";
$query_run = mysqli_query($link,$query);
if($query_run){ 
    echo "<script>alert('Deleted Succefully')</script>";   
    header('refresh:0; url=my_product.php ');


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
<?php require ('pariuals/seller_side.php'); ?>
  <!-- Sidebar -->

  <!-- Navbar -->
  <?php require 'pariuals/nav.php' ?>
  <!-- Navbar -->
</header>
<!--Main Navigation-->  
<main style="margin-top: 100px; margin-left : 5px;">
  <div class="container pt-2"> 
  <div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>My Product</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th>id</th>
                    <th>product</th>
                     <th>Price</th>
                     <th>weight</th>
                       <th>Delete</th>
                   </thead>
    <tbody> 
    <?php  

            
            $username=$_SESSION['username'];
		 	$link = mysqli_connect("localhost","root","","users");
            $query = "SELECT * FROM productdetail WHERE username='$username'";
		 	$query_run = mysqli_query($link,$query);
		 	$check_details = mysqli_num_rows($query_run)>0;

		 	if($check_details)
		 	{
		 		while ($row = mysqli_fetch_array($query_run))
		 		{
		 			?>

    
    <tr>  
   
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['grain'];?></td>
    <td><?php echo $row['price'];?></td>
    <td><?php echo $row['weight'];?></td>
    <td><a href="my_product.php?id=<?= $row['id']; ?>" class="btn btn-success ">Delete</a></td>
    </tr> 

    <?php }} ?>
</main>
<!--Main layout-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>