<?php 		
session_start();																			
$db=mysqli_connect('localhost','root','','wedding');

if(isset($_POST['submit']))
{ 
$vstay=mysqli_real_escape_string($db,$_POST['days']);
  $venue=mysqli_real_escape_string($db,$_POST['selection']);
$_SESSION["vid"] = $venue;
  $getinfo = "select vcost from venue where vid ='$venue'";
$query = mysqli_query($db,$getinfo);

while ($row = mysqli_fetch_array($query)) {
    $vcostt = $row['vcost'];
	$vcosttt=$vcostt * $vstay;
	$_SESSION["vcost"] = $vcosttt;
		header('location:hotel.php');

}
}

?>
<html>
<head>
<link href="http://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet" type="text/css" />
<style>

.main 
{
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}


.row,
.row >
 .column 
{
    padding: 8px;
}

.column {
    float: left;
    width: 23%;
}

 
.row:after {
    content: "";
    display: table;
    clear: both;
}


.content {
    background-color: white;
    padding: 10px;
}


@media screen and (max-width: 900px) 
{
    .column 
    {
        width: 50%;
    }
}
@media screen and (max-width: 600px)
 {
    .column 
    {
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
    height: 20%; 
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
<div class="parallax">
<div class="container">
<br>
<font face ="Alegreya" color="white" > <h2>  <center>Venue</center></h2><br></font>
</h2></div></div>

<form method="POST" style="margin-left:130px">
<font face="Alegreya" >


<div class="row">
  <div class="column">
    <div class="content">
     <a href="temple.html"> <img src="temp.1.jpg" alt="Mountains" width="100%" height="150"> </a>

      
      The Temple Tree Leisure<br>
      <input type="Radio" name="selection" value="1" required >Rs.200000*/day
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="element.html"><img src="ele.3.jpg" alt="Lights" width="100%" height="150"></a>
      Elements<br><input type="Radio" name="selection" value="2"  required >Rs.250000*/day
      <p>
</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
   <a href="sidhartha.html"> <img src="sid.3.jpg" width="100%" height="150"></a>
    Sidhartha Mandapa <br><input type="Radio" name="selection" value="3"  required>Rs.100000*/day
      <p> </p>
    </div>
  </div>
  <div class="column">
    <div class="content">
  <a href="ndk.html">  <img src="ndk.5.png" width="100%" height="150"></a>
      NDK Kalyana Mandir<br><input type="Radio" name="selection" value="4"  required>Rs.100000*/day
      <p></p>
    </div>
  </div>
  

<!-- END GRID -->

<div class="column">
    <div class="content">
    <a href="ganjam.html"><img src="gan.1.jpg" alt="Nature" width="100%" height="150"></a>
      Ganjam Mandir<br><input type="Radio" name="selection" value="5"  required >Rs.175000*/day
      <p></p>
    </div>
  </div>
<div class="column">
    <div class="content">
    <a href="padmavathi.html"><img src="pad.1.jpg" alt="Nature" width="100%" height="150"></a>
      Sree Padmavathi Mandapa<br><input type="Radio" name="selection" value="6" required >Rs.150000*/day
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="balan.html"><img src="balan.1.jpg" width="100%" height="150"></a>
      Balan ConventionCenter<br><input type="Radio" name="selection" value="7"  required >Rs.150000*/day
      <p></p>
    </div>
  </div>

  <div class="column">
    <div class="content">
    <a href="vl.html"><img src="vl.5.jpg" width="100%" height="150"></a>
      V Legacy Convention Center<br><input type="Radio" name="selection" value="8"  required >Rs.300000*/day
      <p></p>
    </div>
  </div>

  
<br>
<br>

</div>
<!-- END MAIN -->
</div>

  
 <input type="text"  name="days" title="Enter total days rented"/ pattern="[0-9]" placeholder="No of days rented" required=""><br>

<input  class="b" type="submit" value="Submit" name="submit" />
</form>

</font>
</body>
</html>
