  
   <?php 
session_start();
error_reporting(0);
if(!isset($_SESSION['loggedin'])||($_SESSION['loggedin'])!=true)
{
	header('refresh:0; url=userhome.php');
} 
else
{ 
	header('refresh:0; url=hpage.php');
}
?> 