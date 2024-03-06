<?php
session_start();  
$id = $_GET['id']; 
$link = mysqli_connect("localhost","root","","users");

$query = "DELETE FROM `ordrs` WHERE id='$id'";
$query_run = mysqli_query($link,$query);
if($query_run){ 
    echo "<script>alert('Deleted Succefully')</script>";   
    header('refresh:0; url=orders.php ');


} ?>