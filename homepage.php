
<?php
  session_start();
  require 'dbconfig/config.php';

?>

<!DOCTYPE html>
<html>
 <head>
   <title> Home page</title>
   <link rel = "stylesheet" href= "css/style.css">
  </head>
  <body style="background-color:#7f8c8d">
    
	<div id = "main-wrapper">
	<center>
   <h2>Home page</h2>
   <h3> Welcome 
 
         <?php echo $_SESSION['username']?>
   
   </h3>
 
  <img src ="imgs/tt.png" class ="tt"/>
  
  </center>


<form  class ="myform" action = "homepage.php" method = "post">

<input  name="logout" type = "submit" id="logout-btn" value = "LogOut"/><br>

</form>
  <?php
    if(isset($_post['logout']))
	{
    session_destroy();
	header('location:index.php');
	}
    
	?>
</div>
</body> 



</html>
