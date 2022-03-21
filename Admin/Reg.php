<?php
//session_start();
include_once '../Code/dbConfig.php';
if (isset($_POST['registration'])) 
{
	$userName=$_POST['userName'];
	$password=$_POST['password'];
	$password1=$_POST['password1'];

	if ($password==$password1) 
	{
		$password=md5($password);
		$sql="INSERT INTO admin(userName,password) VALUES('$userName','$password')";
		mysqli_query($con,$sql);
		header("location:Login.php");
	}
	else
	{
		echo "The two passwords do not match";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN REGISTRATION FORM</title>
	<link rel="stylesheet" type="text/css" href="../CSS/general.css">
</head>
<body>
      <div class="navigation">
    <div>
      <ul class="nav">

        
        <li><a class="special" href="index.php">Home</a></li>
      </ul>
    </div>
  </div>
  <div class ="header">
        </div>	
<div class=loginbox>
	<form class="signup" action="Reg.php" method="post" >
			<fieldset>


				<div class="head">
					<h1>Sign up</h1>
				</div>
				<div class="body">
				<label for="username" class="label-title">Username</label>
				<br>
				<input type="text" class="form-input" name="userName" placeholder ="Enter your username">
				<br>
				<label for="password" class="label-title">Password</label>
				<br>
				<input type="password" name="password" class="form-input" placeholder="Enter your password" required="required">
				<br>
				<label for="Confirm_password" class="label-title">Confirm Password *</label>
    			<input type="password" name="password1" class="form-input"placeholder="Confirm your password again" required="required">

				<div class="form-footer">
						<center>
							 <button type="submit" class="btn" name="registration">Create</button><br><br>
							  <a href="Login.php">Have an account?</a>
						</center>

								</div>
			</fieldset>




	</form>
</div>
</body>
</html>