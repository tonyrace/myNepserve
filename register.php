<?php
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
 <head>
   <title> Registration page</title>
   <link rel = "stylesheet" href= "css/style.css">
  </head>
  <body style="background-color:#7f8c8d">
   <div id = "main-wrapper">
   <h2 style= text-align:center>Registration Form</h2>
  <center><img src ="imgs/tt.png" class ="tt"/></center>


<form  class ="myform" action = "register.php" method = "post">
<label>UserName:</label><br>
<input name= "username" type ="text" class="inputvalues" placeholder = "type username here" required/><br>
<label>password:</label><br>
<input  name = "password" type = "password" class = "inputvalues" placeholder = "your password" required/>
<label> confirm password:</label><br>

<input  name= "cpassword" type = "password" class = "inputvalues" placeholder = "confirm password "required"/>

<input name ="submit_btn" type = "submit" id = "sign-up"value = "sign-up"/><br>
  
 <a href ="index.php"><input type = "button" id = "back-btn" value = "<<Back"/></a>
 
</form>
<?php
if(isset($_POST['submit_btn']))
{
	//echo '<script type ="text/javascript"> alert("sign up button clicked")</script>';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	if($password == $cpassword)
	{
		$query = "select * from user WHERE username = '$username'";
		$query_run = mysqli_query($con,$query);
		{
			if(mysqli_num_rows($query_run)>0)
				
			echo '<script type ="text/javascript"> alert("user already exists..,try another name")</script>';
				
		}
	
		
		{  
		$query = "insert into user values('$username','$password')";
			$query_run = mysqli_query($con,$query);
			 if ($query_run)
			 {
				echo '<script type ="text/javascript"> alert("user registered..go to login page")</script>'; 
			 }
			 else
			 {
				 echo '<script type ="text/javascript"> alert("Error!")</script>';
				 
			 }
			
			
		}
	}
	else{
		
				 echo '<script type ="text/javascript"> alert("Passwords dont match")</script>';
		
	}
}

?>


</div>

</body> 
</html>
