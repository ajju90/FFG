<?php  
session_start();
session_unset();
session_destroy();
echo "<script>alert('logout Succefully ')</script>";   
header("Location:http://localhost/PROJ-16-FFG/adminlogin.php");
?>