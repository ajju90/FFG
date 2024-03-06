<?php    

session_start(); 
if(!isset($_SESSION['login'])) { 

header ("location: login.php");
}



$id=$_GET['id'];
$link = mysqli_connect("localhost","root","","users");

$query = "UPDATE `ordrs` SET `status`='Delivered' WHERE id='$id'";
$query_run = mysqli_query($link,$query);
if($query_run){ 
    echo "<script>alert('verify Succefully')</script>";   
    header('refresh:0; url=Orders.php ');


} 
else{
	echo "<script>alert('something wrong')</script>";   
    header('refresh:0; url=Orders.php ');

}
?>