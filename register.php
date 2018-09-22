<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="new.css">
</head>
<body background="pattern.png">
<center>

<form method="POST" action="register.php">
<h2>Registration Form</h2>	
	First Name<br>
	<input type="text" name="firstname" required autofocus placeholder="First Name" pattern="[a-zA-Z]{3,}" title="Please enter more than three letters">
	
	<br>
	<br>

	Email<br>

	<input type="text" name="email" required="" autofocus placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email address. Ex: xyz@gmail.com">

	<br>
	<br>

	<!-input class="loginform" type="password" name="password" placeholder="Password" required=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Your Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"->



	Phone Number<br>

	<input type="tel" name="phonenumber" pattern="^\d{10}$" required autofocus placeholder="phonenumber">
	
	<br>
	<br>
	
	Date of Birth<br>

	<input type="date" name="date" required autofocus placeholder="dateofbirth" min="1947-01-01" max="2017-12-01">
	
	<br>
	<br>
	
	Gender
	
	<br>
	<br>
	
	<input type="radio" name="gender" value="male" required> Male<br>
  	<input type="radio" name="gender" value="female" required> Female<br>
  	<input type="radio" name="gender" value="other" required=""> Other
  	
  	<br>
  	<br>

  	Select your Role

  	<br>
  	<br>
	
	<select name="interests" required>
	<option value="" required>Select</option>
 	<option value="Play Games" required>Bride</option>
    <option value="Watch Movies" required>Groom</option>
    <option value="Read Books" required>Bride's Relative</option>
    <option value="Cook" required>Groom's Relative</option>
	<option value="Others" required>Friends</option>
	</select>	
	
	<br>
	<br>
	
	<input type="checkbox" name="Conditions" value="" required>I agree Terms and Conditions 
	<pre>

	<button type="submit" name="register">apply</button>      
	
	</pre>
</form>
</center>
</body>
</html>

<?php

	session_start();
	$db=mysqli_connect('localhost', 'root', '', 'registration_data');
	if(isset($_POST['register']))
	{
	
		$firstname=mysqli_real_escape_string($db,$_POST['firstname']);
		$email=mysqli_real_escape_string($db,$_POST['email']);
		$phonenumber=mysqli_real_escape_string($db,$_POST['phonenumber']);
		$date=mysqli_real_escape_string($db,$_POST['date']);
		$gender=mysqli_real_escape_string($db,$_POST['gender']);
		$interests=mysqli_real_escape_string($db,$_POST['interests']);
		$sql="INSERT INTO apply_data VALUES (LAST_INSERT_ID(),'$firstname','$email','$phonenumber','$date','$gender','$interests')";
		mysqli_query($db,$sql);
		header('location: page.html');
	}
?>