<?php    

session_start(); 
if(!isset($_SESSION['login'])) { 

header ("location: login.php");
}  

?>
 
 <!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>users</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	</head>
	<body>	
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">Farm food grains|</a>
				<!-- <h6 style="color: black;">WELCOME </h6>-->
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
          
						<a href="#" style="text-decoration: none;" class="text-dark">𝐇𝐎𝐌𝐄</a>
				  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				    <ul class="navbar-nav ms-auto">
				      <li class="nav-item">
						<a href="logou.php" style="text-decoration: none;" class="text-dark">𝐥𝐨𝐠𝐨𝐮𝐭</a>
				      </li>
				    </ul>
				  </div>
				</nav>
                <div class="container-fluid bg-dark">
					<div class="row p-1" style="height: 100vh;">
						<div class="col-sm-2 ml-0 bg-dark border-right p-0" style="height: 100vh;">
							<div class="row bg-white ml-4 mt-3" style="border-radius: 00px; height: 40px; width: 100%; ">
								<p class="text-dark ml-3"><a href="index.php" style="text-decoration: none; color:Red;">🎯𝐃𝐚𝐬𝐡𝐛𝐨𝐚𝐫𝐝🎯</a></p>
							</div>
					
							<div class=" row bg-white ml-4 mt-3" style="border-radius: 00px; height: 40px; width: 100%;">
			            
						<p class="text-dark ml-3"><a href="users.php" style="text-decoration: none; color: black;">𝐔𝐬𝐞𝐫</a></p>
						
					  </div>
					  <div class="row bg-white ml-4 mt-3" style="border-radius: 00px; height: 40px; width: 100%;">
						  <p class="text-dark ml-3"><a href="orders.php" style="text-decoration: none; color: black;">𝐓𝐨𝐭𝐚𝐥 𝐎𝐫𝐝𝐞𝐫𝐬</a></p> 
					  </div>
					  <div class="row bg-white ml-4 mt-3" style="border-radius: 00px; height: 40px; width: 100%;">
						  <p class="text-dark ml-3"><a href="Product.php" style="text-decoration: none; color: black;">𝐕𝐞𝐫𝐢𝐟𝐲 𝐏𝐫𝐨𝐝𝐮𝐜𝐭</a></p>  
                      </div>  
						  <div class="row bg-white ml-4 mt-3" style="border-radius: 00px; height: 40px; width: 100%;">
						  <p class="text-dark ml-3"><a href="allproduct.php" style="text-decoration: none; color: black;">𝐓𝐨𝐭𝐚𝐥 𝐏𝐫𝐨𝐝𝐮𝐜𝐭</a></p> 
					  </div>
					  <div class="row bg-white ml-4 mt-3" style="border-radius: 00px; height: 40px; width: 100%;">
						  <p class="text-dark ml-3"><a href="seller_info.php" style="text-decoration: none; color: black;">𝐒𝐞𝐥𝐥𝐞𝐫 𝐈𝐧𝐟𝐨</a></p>
					  </div>
				
					
                            
						</div>
						<div class="col-sm-10 mr-0 bg-white border-left p-0" style="height: 100vh; width: 100%;"> 
    <main class="mt-100">
    <div class="col-sm-9">
    <table class="table table-bordred table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>GRAINS</th>
        <th>PRICE</th>
        <th>WEIGHT</th> 
		<th>USERNAME</th>
        <th>PHOTO</th> 
        <th>VERIFY</th> 
        <th>DELETE</th>
         
		

        <!-- <th>Email</th>
        <th>Applied Job</th> -->
      </tr>
    </thead>
    <?php

$conn = mysqli_connect("localhost","root","","users");
            $query = "select * from productdetail ";
            $result=mysqli_query($conn,$query);
            
            while($row=mysqli_fetch_assoc($result))
            {

            ?>
    <tbody>
      <tr>
      <td>
        <?php echo $row['id'] ?></td>
        <td><?php echo $row['grain'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><?php echo $row['weight'] ?></td>
		<td><?php echo $row['username'] ?></td>
        <td><?php echo $row['photo'] ?></td>  
        <td><?php echo $row['verify'] ?></td> 
		<td><a href="del.php?id=<?= $row['id']; ?>" class="btn btn-success ">Delete</a></td> 

	
      </tr>
      <?php
       }           
      ?>
    </tbody>
  </table>
      </main>

    </div>
</div>
</body>
</head>
</html>


