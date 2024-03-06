
<?php 
 session_start(); 
 if(!isset($_SESSION['username'])) { 
 
 header ("location: login.php");
 }
 
 
  $username=$_SESSION['username'];
$link = mysqli_connect("localhost","root","","users"); 
$query = "SELECT * FROM my_cart WHERE username='$username'";
$query_run = mysqli_query($link,$query);
$check_details = mysqli_num_rows($query_run)>0;
if($check_details)
{
  while ($row = mysqli_fetch_array($query_run))
  {     
$address=$_GET['add'];
$username=$_SESSION['username']; 
$id=$row['id'];
$grains=$row['grain'];
$price=$row['price'];
$weight=$row['weight'];
$photo=$row['photo'];   
$seller=$row['seller'];

$sql="INSERT INTO `ordrs` (`username`, `id`, `grain`, `price`, `weight`, `photo`, `address`, `date`, `status`, `seller`) VALUES
 ('$username','$id','$grains','$price','$weight','$photo','$address',current_timestamp(),'placed','$seller');";   
 $result =mysqli_query($link,$sql);  

  

  } 
  if($result){  
    $del="DELETE FROM `my_cart` WHERE username='$username'";  
    mysqli_query($link,$del);  

    echo "<script>alert('Order Placed')</script>";
    header('refresh:0; url=order_history.php'); 
} 
else{ 
  echo "<script>alert('Something Wrong')</script>";

}
} 


?> 