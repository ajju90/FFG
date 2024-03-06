<?php 
$id=$_GET['id'];
$link = mysqli_connect("localhost","root","","users");

$query = "DELETE FROM `my_cart` WHERE id='$id'";
$query_run = mysqli_query($link,$query);
if($query_run)
{   
    echo "<script>alert('Remove Sucessfully')</script>";
      header('refresh:0; url=my_cart.php');

}

?>