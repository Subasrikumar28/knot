<?php 		
session_start();																			
$db=mysqli_connect('localhost','root','','wedding');
if(isset($_POST['submit']))
{ 
  $theme=mysqli_real_escape_string($db,$_POST['Select']);
  $_SESSION["tid"] = $theme;
 
  $getinfo = "select tcost from theme where tid ='$theme'";
  $query = mysqli_query($db,$getinfo);
  while ($row = mysqli_fetch_array($query)) {
    $tcostt = $row['tcost'];
	;
	$_SESSION["tcost"] = $tcostt;
		header('location:photo.php');

}
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
<style>


.b{
	height: 40px;
	width: 240px;
border-radius: 10px;
	margin-top: 20px;
	margin-left: 10px;
	}

.a
{
text-align: right;
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
    width: 25%;
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

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
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
    text-align:20px;
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
<h2> <center> Themes </center> </h2>
<br>
<font face="Alegreya" color="black"> 
<!-- Portfolio Gallery Grid -->
<div class="content">
<form method="POST" style="margin-left:120px">
<div class="row">
  <div class="column">
    <div class="content">
     <a href="t1.html"><img src="c3.png" style="width:100%" ></a>
      <h3>Classic Style</h3>
<p><!--<font color="#696969">Classic weddings are defined by lovers of tradition -- the heart and soul of Style Me Pretty Weddings. They can be understated and inspired, white on white, organically elegant, or some combination of family traditions passed down through the ages as well as new twists on an age-old passion for romance.</font>--></p>
  <input type="radio" value="1" name="Select" required>Rs.500000
   </div>
  </div>
  <div class="column">
    <div class="content">
     <a href="t2.html"><img src="e4.png" style="width:100%"></a>
      <h3>Ethnic Style</h3>
<input type="radio" value="2" name="Select" required>Rs.400000

  </div>
  </div>
  <div class="column">
    <div class="content">
     <a href="t3.html"><img src="s1.png" style="width:100%"></a>
      <h3>Sea Side </h3>
<input type="radio" value="3" name="Select" required>Rs.700000
 </div>
  </div>
  <div class="column">
    <div class="content">
     <a href="t4.html"><img src="v1.png"  style="width:100%"></a>
      <h3>Vintage</h3>
<input type="radio" value="4" name="Select" required>Rs.600000
      </div>
  </div>

<input  class="b" type="submit" value="Submit" name="submit" /></font>
</div>
</div>
<!-- END GRID -->
</div>
<!-- END MAIN -->
</div></div></div>
</form>

</body>
</html>
