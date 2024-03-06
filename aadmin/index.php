<?php    

session_start(); 
if(!isset($_SESSION['login'])) { 

header ("location: login.php");
}  
	$link = mysqli_connect("localhost","root","","users");

	$query = "SELECT sno FROM user";

	$result = mysqli_query($link,$query);

	$row=mysqli_num_rows($result);


	$query1 = "SELECT id FROM ordrs WHERE status='Placed'";

	$result1 = mysqli_query($link,$query1);

	$row1=mysqli_num_rows($result1);  


	$query2 = "SELECT sno FROM seller_info";

	$result2 = mysqli_query($link,$query2);

	$row2=mysqli_num_rows($result2); 


	$query3 = "SELECT id FROM ordrs WHERE status='Delivered'";

	$result3 = mysqli_query($link,$query3);

	$row3=mysqli_num_rows($result3);
	 
	 // echo $row;

	 ?>
 
 <!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Admin</title>

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
          
						<a href="homepg.php" style="text-decoration: none;" class="text-dark">𝐇𝐎𝐌𝐄</a>
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
								<p class="text-dark ml-3"><a href="#" style="text-decoration: none; color:Red;">🎯𝐃𝐚𝐬𝐡𝐛𝐨𝐚𝐫𝐝🎯</a></p>
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
</nav>  
<div class="col-md-8 grid-margin transparent "style = " margin-top: 80px ;margin-left:50px" >
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card"style = "background:#FFBE33 ">
                    <div class="card-body">
                      <h2 class="mb-4">𝐓𝐨𝐭𝐚𝐥 𝐔𝐬𝐞𝐫</h2>
                      <h3 style="margin-left:30px"><?php echo $row  ?></h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue" style = "background:#33FFCE ">
                    <div class="card-body">
                      <h2 class="mb-4">𝐏𝐞𝐧𝐝𝐢𝐧𝐠 𝐎𝐫𝐝𝐞𝐫𝐬</h2>
                      <h3 style="margin-left:30px"><?php echo $row1  ?></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card "style = "background:lightblue">
                    <div class="card-body">
                      <h2 class="mb-4">𝐃𝐞𝐥𝐢𝐯𝐞𝐫𝐞𝐝 𝐎𝐫𝐝𝐞𝐫𝐬</h2>
                      <h3 style="margin-left:30px"><?php echo $row3  ?></h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card "style = "background:#E6ABF1 ">
                    <div class="card-body">
                      <h2 class="mb-4">𝐓𝐨𝐭𝐚𝐥 𝐒𝐞𝐥𝐥𝐞𝐫</h2>
                      <h3 style="margin-left:30px"><?php echo $row2?></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>




	</body>
</html>
