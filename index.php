<?php
 session_start();
 require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Login Page</title>
   <link rel = "stylesheet" href= "css/style.css">
  </head>
  <body style="background-color:#7f8c8d">
   <div id = "main-wrapper">
   <h2 style= text-align:center>Login Form </h2>
  <center><img src ="imgs/tt.png" class ="tt"/></center>


<form  class ="myform" action = "index.php" method = "post">
<label>UserName:</label><br>
<input  name = "username" type ="text" class="inputvalues" placeholder = "type username here " required/><br>
<label>password:</label><br>
<input name = "password" type = "password" class = "inputvalues" placeholder = "type password here" required/>
<input  name = "login" type = "submit" id = "login-btn" value = "login"/><br>
<a href="register.php"><input type = "button" id = "register-btn" value = "Register"/></a>
<span class="psw">Forgot <a href= "#"> password?</a></span>
 
</form>

<?php

if (isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query ="select * from user WHERE username ='$username' AND password = '$password'";
	
	$query_run = mysqli_query($con,$query);
	 
	 if (mysqli_num_rows($query_run)>0)
	{
		$_SESSION['username'] = $username;
		header('location:homepage.php');
	}
	else
	{
		echo '<script type ="text/javascript"> alert("invalid credentials") </script>';
	}
	
}
 ?>
</div>

</body> 



</html>
