<?php
session_start();  
$id = $_GET['id']; 
$link = mysqli_connect("localhost","root","","users");

$query = "UPDATE `productdetail` SET `verify`='verified' WHERE id='$id'";
$query_run = mysqli_query($link,$query);
if($query_run){ 
    echo "<script>alert('verify Succefully')</script>";   
    header('refresh:0; url=product.php ');


}
?>