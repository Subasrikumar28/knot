<!DOCTYPE>
<html>
<head>
<style>

<title> Welcome to Student Performance Analysis</title>
#body{
  width: 100%;
  height: auto;
}
#outer
{
}#form{
	height: 380px;
	width: 240px;
	opacity: 0.8;
  margin-top:100px;
}
.a{
	height: 40px;
	width: 240px;
border-radius: 10px;
	margin-top: 20px;
	margin-left: 500px;
}
.b{
	height: 40px;
	width: 240px;
border-radius: 10px;
	margin-top: 20px;
	margin-left: 500px;
	}		h1{
			color: white;
			text-align: left;

		}

		.Student {
  			overflow: hidden;
  			background-color: transparent;
		}

    	.Student a {
  			float: right;
  			display: block;
  			color: white;
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
		.Students {
  			overflow: hidden;
  			background-color: transparent;
		}

    	.Students a {
  			float: left;
  			display: block;
  			color: white;
  			text-align:left;
  			padding: 14px 16px;
  			text-decoration: none;
  			font-size: 17px;
  			margin-left: 500px;

		}


		.Students a.active {
    		background-color: transparent;
    		color: white;
    	}
		.Students a:hover {
  			background-color: gray;
  			color: white;
		}
		 
</style>
</head>

<body background="rgb.png" link=white text=white leftmargin=5% topmargin=5%>

<h1 style="
  			margin-left: 520px;"> Admin Login </h1>
 <div>
       <form method="POST">
      <input  class="a" type="number" id="id" placeholder="Enter Your Admin ID"/><br>
    <input  class="a" type="password" id="password" placeholder="Enter the password" /><br>
    <input  class="b" type='submit' id='submit' value='Submit' />
     </form>
     </div>
   
</body>
</html>

  <?php
session_start();
if(isset($_POST['submit']))
{
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'wedding') or die(mysqli_error($con));
 $id=$_POST['id'];
 $password=$_POST['password'];
 if($id!=''&&$password!='')
 {
   $query=mysqli_query($con,"select * from user where id='".$id."' and password='".$password."'");
   $res=mysqli_fetch_row($query) or die(mysqli_error($con));
   if($res)
   {
	    header('location:user.php');
  
   }
   else
   {
	    echo'You entered userid or password is incorrect';
    
   }
 }
 else
 {
  echo'<p style="margin-left: 515px;"> Enter valid userid/password</p>';
 }
}
?>