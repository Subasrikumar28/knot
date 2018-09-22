	<?php
	   include("config.php");
	   session_start();
	   
	   if($_SERVER["REQUEST_METHOD"] == "POST") {
		  // username and password sent from form 
		  
		  $myusername = mysqli_real_escape_string($db,$_POST['id']);
		  $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
		  
		  $sql = "SELECT id FROM user WHERE id = '$myusername' and password = '$mypassword'";
		  $result = mysqli_query($db,$sql);
		  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  
		  
		  $count = mysqli_num_rows($result);
		  
		  // If result matched $myusername and $mypassword, table row must be 1 row
			
		  if($count == 1) {
			 
			 $_SESSION['id'] = $myusername;
			 
			 
			 header("location:user.php");
		  }else {
			 $error = "Your Login Name or Password is invalid";
		  }
	   }
	   else
	   {
		   $error=" ";
	   }
	?>
	<html>
	   
	   <head>
	   <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
	   <link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css" />
		  <title>Login Page</title>
		  
		  <style type = "text/css">
	   body    { border: 11px solid white }
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
	width: 400px;
	margin: 0px auto;
	padding: 20px;
	
	
	
	
	
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


			.Student a {
				float: right;
				display: block;
				color: black;
				text-align:left;
				padding: 14px 16px;
				text-decoration: none;
				font-size: 20px;
			}


			.Student a.active {
				background-color: transparent;
				color: white;
			}
			.Student a:hover {
				background-color: gray;
				color: white;
			}
			
			.parallax {
		/* The image used */
		
		background-image:url('39.PNG');
		
		
		/* Full height */
		height: 100%; 
		
	   
		/* Create the parallax scrolling effect */
		  background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
		  </style>
		  
	   </head>
	   
	   <body>
	   <font color="white">
		 <div class="parallax">
		  <div align = "right">
		  
			  <div id="form"  style="margin:0 auto;width:20%;text-align:left">
			  
				<h1><center>Login</h1>
					
				   <form action = "" method = "post" style="margin-left:-100px">
					  <input class="a" type = "number" placeholder="User Id" name = "id" pattern="[0-9]" title="enter id number"/><br /><br />
					 <input class="a" type = "password" placeholder="Password" name = "password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/><br/><br />
					  <input class="b" type = "submit" value = " Submit "/><br />
				   </form></center>
				   </font>
				  <div style = "font-size:16px; color:white; margin-top:10px"><?php echo "<b>".$error."<b>"; ?></div>
						
				</div>
					
			 </div>
				
		  </div>

	   </body>
	</html>