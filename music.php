<?php 		
session_start();																			
$db=mysqli_connect('localhost','root','','wedding');
if(isset($_POST['submit']))
{ 
$mstay=mysqli_real_escape_string($db,$_POST['days']);
  $music=mysqli_real_escape_string($db,$_POST['selection']);
  
  mysqli_query($db,$sql);
  $_SESSION["mid"] = $music;
  $getinfo = "select mcost from music where mid ='$music'";
$query = mysqli_query($db,$getinfo);

while ($row = mysqli_fetch_array($query)) {
    $mcostt = $row['mcost'];
	$mcosttt=$mcostt * $mstay;
	$_SESSION["mcost"] = $mcosttt;
		header('location:venue.php');

}
}
?>
<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


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
    padding: 10px;
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
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="parallax">
<div class="container">
<font face="Alegreya" color="white"> <br>
<h2> <center> Music </center> </h2></font><br></div></div>
<form method="POST">
<font face="Alegreya" color="black">
<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
	
     <img src="ind.jpg"  width="170" height="120" ></a>
      <h3>Slow Music</h3>
      <input type="radio" name="selection" value="1" required>Santharam's slow music-Rs.20000*/day
 <br> <input type="radio" name="selection" value="2"  required>Seetha lakshmi's music-Rs.17000*/day
<br>  
  <input type="radio" name="selection" value="3"  required>Shishti's slow music-Rs.25000*/day<br>
 </div>
  </div>
  <div class="column">
    <div class="content">
     <a href="fast.html"><img src="fas.jpg"  width="170" height="120"></a>
      <h3>Fast Music</h3>
<input type="radio" name="selection" value="4"  required>Arjun's troop<br>-Rs.30000*/day <br>
 <input type="radio" name="selection" value="5"  required >Swaroop's band-Rs.35000*/day <br>
 <input type="radio" name="selection" value="6"  required>Jane's music<br>-Rs.25000*/day<br>   
</div>
  </div>
  <div class="column">
    <div class="content">
     <a href="classical.html"><img src="slo.jpg"  width="170" height="120"></a>
      <h3> Indian Music</h3>
      <input type="radio" name="selection" value="7"  required >Hari's band-<br>Rs.30000*/day  <br>
 <input type="radio" name="selection" value="8"  required >Swagath's band-<br>Rs.35000*/day   <br>
 <input type="radio" name="selection" value="9"  required>Anuj's troop-<br>Rs.20000*/day <br>
</div>
</div>
  <div class="column">
    <div class="content">
     <a href="western.html"><img src="wes.jpg"   width="170" height="120"></a>
      <h3>Western music</h3>
<input type="radio" name="selection" value="10"  required>Rohit's music<br>-Rs.25000*/day <br>
 <input type="radio" name="selection" value="11"  required>Saloni's sing<br>-Rs.25000*/day   <br>
 <input type="radio" name="selection" value="12"  required>Mitali's Pride<br>-Rs.35000*/day   <br>
</div>
  </div><br><br>
<input type="text"  name="days" title="Enter total days hired"/ pattern="[0-9]" placeholder="No of days hired" required="">
  <br><input class="b" type="submit" value="Submit" name="submit" />

</div>
</form>
  </div>
<!-- END GRID -->
</div>



<!-- END MAIN -->
</div>

</body>
</html>
	