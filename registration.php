<!DOCTYPE html>
<html>
<head>
<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
	</head>
<title>Sign Up</title>
<style>
body    { border: 5px solid white }
body,h1,h2,h3,h4,h5,h6 {font-family: 'Alegreya'}
#body{
  width: 100%;
  height: auto;
}
#outer
{
}
form{
		text-align:center;
	width: 450px;
	margin: 0px auto;
	padding: 20px;
	
	background: transparent;
	opacity:1;
	
	
}
.a{
	height: 40px;
	width: 240px;
border-radius: 10px;
	margin-top: 20px;
	margin-left: 10px;
}
.b{
	height: 40px;
	width: 240px;
border-radius: 10px;
	margin-top: 20px;
	margin-left: 10px;
	font-family: 'Alegreya';
		font-size: 16px;
	}
	
	h1{
			color:white;
			text-align: left;

		}

		.Student {
  			overflow: hidden;
  			background-color: transparent;
		}

    	.Student a {
  			float: right;
  			display: block;
  			color: black;
  			text-align:left;
  			padding: 14px 16px;
  			text-decoration: none;
  			font-size: 17px;
		}


		.Student a.active {
    		background-color: transparent;
    		color: white;
    	}
		.Student a:hover {
  			background-color: gray;
  			color: white;
		}
		d1
		{
			opacity: 1.0;
			
		}
		.parallax {
    /* The image used */
	
    background-image:url('39.PNG');
    
    /* Full height */
    height: 100%; 
	
   
    /* Create the parallax scrolling effect*/
      background-attachment: fixed;
    background-position: center; 
	background-repeat: no-repeat;
    background-size: cover;
    
}
</style>
</head>
<body>
 <div class="parallax">
     <h1><center>Join with us</center></h1>
     <center>
	 <div id="form"  style="margin-left:400px auto;width:20%;text-align:left">
      
	  <form method="post" style="margin-left:-120px">
	    <input  class="a" type="number" name="id" placeholder="Id" required="" pattern="[0-9]" title="enter id number"/><br>
     	<input  class="a" type="text" name="firstname"  placeholder="User Name" pattern="[a-zA-Z]{3,29}" title="Please enter more than three letters"/><br>
		<input class="a" type="email" name="email" placeholder="Email ID ex:xyz@gmail.com" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email address ex: xyz@gmail.com."><br>
		<input  class="a" type="text" name="phonenumber" placeholder="Phone number" required="" pattern="[0-9]{10}" title="enter valid 10 digit phone number"/><br>
		<input class="a" type="password" name="password" placeholder="Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Your Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" /><br>
     	<input  type="checkbox" required=""/><b>I agree to the <a href="terms.html">terms and conditions.</b></a>
		<input  class="b" type="submit" value="Submit" name="submit" /><br><a href="loginn.php"><b>Already a member??</b></a>
		<br>
		<br>
		
	
		</center>
	</form>
     </div>
      </div>
    
	  
	  
</body>
</html>
<?php 																					
$db=mysqli_connect('localhost','root','','wedding');
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
	$phonenumber=$_POST['phonenumber'];
	$password=$_POST['password'];
	
	if(count($errors)==0)
	{
		$query="SELECT * FROM user ";
	$result = $db->query($query);
	while($row = $result->fetch_assoc()) {
        $idd= $row["id"];
		if($idd==$id)
		{
			echo"Username exists";
		}
		else
		{
		$sql="INSERT INTO user (id,firstname,email,phonenumber,password) VALUES ('$id','$firstname','$email','$phonenumber','$password')";
		mysqli_query($db, $sql);
		header('location:loginn.php');
		}
	}
	}

}


?>
