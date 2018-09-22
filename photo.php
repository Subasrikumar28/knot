<?php 		
session_start();																			
$db=mysqli_connect('localhost','root','','wedding');
if(isset($_POST['submit']))
{ 
  $pstay=mysqli_real_escape_string($db,$_POST['days']);
  $photo=mysqli_real_escape_string($db,$_POST['selection']);
  
  mysqli_query($db,$sql);
  $_SESSION["pid"] = $photo;
  $getinfo = "select pcost from photographer where pid ='$photo'";
$query = mysqli_query($db,$getinfo);

while ($row = mysqli_fetch_array($query)) {
    $pcostt = $row['pcost'];
	$pcosttt=$pcostt * $pstay;
	$_SESSION["pcost"] = $pcosttt;
		header('location:music.php');

}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
<style>
.parallax {
    /* The image used */
    background-image:url('37.PNG');

    /* Full height */
    height: 160%; 
    background-position: center;
    background-repeat: no-repeat
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    ;
    background-size: cover;
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


h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 23%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 4px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}
form{
		text-align:center;
	width: 1000px;
	margin: 0px auto;
	padding: 20px;
	
	background:white;
	opacity:0.8;
	
	
}
.container {
    position: relative;
    text-align:17px;
    color: white;
	top: 8px;
}
.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="container">
<div class="parallax">
<body >
<font face="Alegreya" color="white"> 
<br>
<h2> <center> Photographers </center> </h2><br></font></div></div>

<br>
<form method="POST" style="margin-left:150px">
<!-- Portfolio Gallery Grid -->
<div class="row">
 <font face="Alegreya" color="black">
  <div class="column">
    <div class="content">
     <a href="ajay.html"><img src="ajay.png" width="170" height="120" ></a>
      <font face="Alegreya" color="black"><h3>Ajay Menon</h3></font>
      <p>Playful by nature, and yet very serious about what I do, I am one of the pioneers of the candid wedding photography movement. People have trusted me for the past 8 years for one thing: A wedding story driven by moments.</p>
<input type="radio" name="selection" value="1" required>Rs.50000*/day 
 </div>
  </div>
  <div class="column">
    <div class="content">
     <a href="mahesh.html"><img src="mahesh.png" width="170" height="120"></a>
      <font face="Alegreya" color="black"><h3>Mahesh Santharam</h3></font>
      <p>
A specialist artistic candid wedding photographer who aims at capturing moments and happiness in a non-intrusive way without unnecessarily making the couple pose unnaturally or re-do rituals.</p>   
 <br>
<input type="radio" name="selection" value="2" required>Rs.56000*/day
</div>
  </div>
  <div class="column">
    <div class="content">
     <a href="raj.html"><img src="raj.png" width="170" height="120"></a>
      <font face="Alegreya" color="black"><h3> Raj</h3></font>
      <p>
We offer professional photography services for all occasions. We specialize in Wedding, South Indian Wedding, North Indian Wedding.We will make it a memorable event for you and your family.</p>  
<br>  <input type="radio" name="selection" value="3" required >Rs.70000*/day
</div>

</div>
  <div class="column">
    <div class="content">
     <a href="swaroop.html"><img src="swaroop.png" width="170" height="120"></a>
      <font face="Alegreya" color="black"><h3>Mark Swaroop</h3></font>
      <p>My journey as a wedding photographer has taken me to the most surreal venues from Rajasthan all the way down to Kerala. I’ve been a witness to such beautiful moments in small marriage halls,
as well as grand palaces. </p>  
<input type="radio" name="selection" value="4" required>Rs.30000*/day
</div>
  </div>
<br>
<br><input type="text"  name="days" title="Enter total days hired"/ pattern="[0-9]" placeholder="No of days hired" required=""><br>
  <input class="b" type="submit" value="Submit" name="submit" />
</div>
</form>  
<!-- END GRID -->
</div>


<!-- END MAIN -->
</div>

</body>
</html>
	