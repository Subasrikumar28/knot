<?php 	

session_start();																			
$db=mysqli_connect('localhost','root','','wedding');
 
if(isset($_POST['submit']))
{ 
  $hotel=mysqli_real_escape_string($db,$_POST['selection']);
  $dcost=mysqli_real_escape_string($db,$_POST['dcost']);
  $scost=mysqli_real_escape_string($db,$_POST['scost']);
  $cost=mysqli_real_escape_string($db,$_POST['cost']);
  $hstay=mysqli_real_escape_string($db,$_POST['night']);
  $tid = $_SESSION["tid"];
  $pid = $_SESSION["pid"];
  $mid = $_SESSION["mid"];
  $vid = $_SESSION["vid"];
  $id=$_SESSION["id"];
  $tcost = $_SESSION["tcost"];
  $pcost = $_SESSION["pcost"];
  $mcost = $_SESSION["mcost"];
  $vcost = $_SESSION["vcost"];

  $sql="UPDATE choice SET(hid,mid,pid,tid,vid) VALUES ('$hotel','$mid','$pid','$tid','$vid') where cid='12'";
 
if (mysqli_query($db, $sql)) {
$cid = mysqli_insert_id($db);}

  
  $_SESSION["hid"] = $hotel;
  $_SESSION["cid"] = $cid;
   

 /*$query="SELECT hcost FROM hotel WHERE hid='$hotel'";
	$result = $db->query($query);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $hcostt= $row["hcost"];
		//$hcost=$hcostt * $hstay;
		$sqll="INSERT INTO budget (hcost,id,bid) VALUES ('$id','$id','$id')";
        mysqli_query($db,$sqll);
		
    }*/
	
	$getinfo = "select * from hotel where hid ='$hotel'";
$query = mysqli_query($db,$getinfo);

while ($row = mysqli_fetch_array($query)) {
    $hdcostt = $row['hdcost'];
	$hscostt = $row['hscost'];
	$hcostt = $row['hcost'];
	$hcosttt=$hcostt * $hstay;
	$hdcosttt=$hdcostt * $hstay;
	$hscosttt=$hscostt * $hstay;
	$thcost=$hcosttt*$cost;
	$thdcost=$hdcosttt*$dcost;
	$thscost=$hscosttt*$scost;
	$thc=$thcost+$thdcost+$thscost;
	
   $sqll="UPDATE budget SET (hcost,vcost,tcost,pcost,mcost) VALUES ('$thc','$vcost','$tcost','$pcost','$mcost') where cid='12'";
        mysqli_query($db,$sqll);
	

}
//	$getinfo = "select max(bid) from hotel";
//$query = mysqli_query($db,$getinfo);

$getinfo1 = "select hcost,vcost,tcost,fcost,pcost,tancost,mcost from budget where id='$id' and cid='12'";
$query1 = mysqli_query($db,$getinfo1);

while ($row = mysqli_fetch_array($query1)) {
    $hcostt = $row['hcost'];
	$vcostt = $row['vcost'];
	$tcostt = $row['tcost'];
	$fcostt = $row['fcost'];
	$pcostt = $row['pcost'];
	$tancostt = $row['tancost'];
	$mcostt = $row['mcost'];
	$total=$hcostt + $vcostt + $tcostt + $fcostt + $pcostt + $tancostt + $mcostt ;
	$sqll ="UPDATE budget SET total='$total' WHERE id='$id' and cid='$12'";
   
        mysqli_query($db,$sqll);
		

}


    header('location:user.php');

//}
}
?>
<!DOCTYPE html>
<html>
<head>
<body>
<link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
<style>


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
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
}

</style>
</head>
<body>
<div class="parallax">
<div class="container">
<font face ="Alegreya" color="white"> <br><h2>  <center>Accomodation </center><br>
</h2></font></div></div>
<form method="POST">
<font face ="Alegreya" color="black">
<div class="row">
  <div class="column">
    <div class="content">
     <a href="comfort inn.html"> <img src="comfort inn insys.jpg" alt="Mountains" width="100%" height="150"> </a>

      
      <h3><input type="radio" name="selection" value="1" required>Comfort INN inysys</h3>
      

			<table cellspacing="20" >

				<tr>
					<td>
						<i><b>Room Type <b></i>
					</td>
					<td>
					<i><b>	Room Rate</b></i>
					</td>
				</tr>
				<tr>
					<td>
					
						<b>Deluxe Room</b><br>
					</td>
					<td>
						Rs.3000*/NIGHT
					</td>
					</tr>

					<tr>
					<td>
					
						<b>Studio Room</b><br>
					</td>
					<td>
						Rs.4500*/NIGHT
					</td>
					</tr>
					<tr>
					<td>
					
					<b>Suite Room</b><br>
					</td>
					<td>
						Rs.6000*/NIGHT
					</td>
				</tr></center>
			</table>

      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="loards.html"><img src="lords eco inn.jpg" alt="Lights" width="100%" height="150"></a>
      <h3><input type="radio" name="selection" value="2" required>Lords eco INN </h3>
	  <table cellspacing="20">
				<tr>
					<td>
						<i><b>Room Type <b></i>
					</td>
					<td>
					<i><b>	Room Rate</b></i>
					</td>

				</tr>
				<tr>
					<td>
						<b> Deluxe Room</b><br>
						
					</td>
					<td>
						Rs.3324*/NIGHT
					</td>
					</tr>
					

					<tr>
					<td>
						<b>Studio Room</b> <br>
						

					</td>                    
					<td>
						Rs.3824*/NIGHT
					</td>
					</tr>
					<tr>
					<td>
					<b>Suite Room</b><br>
					</td>
					<td>
						
Rs.4328*/NIGHT
					</td>
				</tr>
			</table>
      <p>
</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
   <a href="zone.html"> <img src="zone by the park infantry.jpg" alt="Nature" width="100%" height="150"></a>
      <h3><input type="radio" name="selection" value="3" required>Zone </h3><table cellspacing="20">
				<tr>
					<td>
						<i><b>Room Type <b></i>
					</td>
					<td>
					<i><b>	Room Rate</b></i>
					</td>
				</tr>
				<tr>
					<td>
						<b>Deluxe Room</b>
					</td>
					<td>
						Rs.2598*/NIGHT
					</td>
					</tr>

					<tr>
					<td>
						<b>Studio Room</b>
					</td>
					<td>
						Rs.3999*/NIGHT
					</td>
					</tr>
					<tr>
					<td>
					<b>	Suite Room</b>
					</td>
					<td>
						Rs.5500*/NIGHT
					</td>
				</tr></center>
			</table>

      <p> </p>
    </div>
  </div>
  <div class="column">
    <div class="content">
  <a href="fern.html">  <img src="the fern residency.jpg" width="100%" height="150"></a>
      <h3><input type="radio" name="selection" value="4" required>The Fern Residency</h3><table cellspacing="20">
				<tr>
					<td>
						<i><b>Room Type <b></i>
					</td>
					<td>
					<i><b>	Room Rate</b></i>
					</td>
				</tr>
				<tr>
					<td>
						<b> Deluxe Room</b>
					</td>
					<td>
						Rs.4999*/NIGHT
					</td>
					</tr>

					<tr>
					<td>
						<b>Studio Room</b> 
					</td>
					<td>
						Rs.5999*/NIGHT
					</td>
					</tr>
					<tr>
					<td>
					<b>	Suite Room</b>
					</td>
					<td>
						Rs.6999*/NIGHT
					</td>
				</tr>
			</table></center>

      <p></p>
    </div>
  </div>
  

<!-- END GRID -->

<div class="column">
    <div class="content">
    <a href="lemon.html"><img src="lemon tree.jpg" alt="Nature" width="100%" height="150"></a>
      <h3><input type="radio" name="selection" value="5" required>Lemon Tree</h3><table cellspacing="20" >

				<tr>
					<td>
						<i><b>Room Type <b></i>
					</td>
					<td>
					<i><b>	Room Rate</b></i>
					</td>
				</tr>
				<tr>
					<td>
					
						<b> Deluxe Room</b><br>
					</td>
					<td>
						Rs.3000*/NIGHT
					</td>
					</tr>

					<tr>
					<td>
					
						<b>Studio Room/b<br> 
					</td>
					<td>
						Rs.4500*/NIGHT
					</td>
					</tr>
					<tr>
					<td>
					
					<b>	Suite Room</b><br>
					</td>
					<td>
						Rs.6000*/NIGHT
					</td>
				</tr>
			</table>



      <p></p>
    </div>
  </div>
<div class="column">
    <div class="content">
    <a href="fortune.html"><img src="fortune park jp celestial.jpg" alt="Nature" width="100%" height="150"></a>
      <h3><input type="radio" name="selection" value="6" required>Fortune park</h3><table cellspacing="20">
				<tr>
					<td>
						<i><b>Room Type <b></i>
					</td>
					<td>
					<i><b>	Room Rate</b></i>
					</td>
				</tr>
				<tr>
					<td>
						<b> Deluxe Room</b>
					</td>
					<td>
						Rs.3500*/NIGHT
					</td>
					</tr>

					<tr>
					<td>
						<b>Studio Room</b> 
					</td>
					<td>
						Rs.5500*/NIGHT
					</td>
					</tr>
					<tr>
					<td>
					<b>Suite Room</b>
					</td>
					<td>
						Rs.6500*/NIGHT
					</td>
				</tr>
			</table>
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="golden.html"><img src="golden tulip.jpg" width="100%" height="150"></a>
      <h3><input type="radio" name="selection" value="7" required>Golden Tulip</h3><table cellspacing="20" >

				<tr>
					<td>
						<i><b>Room Type <b></i>
					</td>
					<td>
					<i><b>	Room Rate</b></i>
					</td>
				</tr>
				<tr>
					<td>
					
						<b> Deluxe Room</b><br>
					</td>
					<td>
						Rs.5999*/NIGHT
					</td>
					</tr>

					<tr>
					<td>
					
						<b>Studio Room</b><br> 
					</td>
					<td>
						Rs.6999*/NIGHT
					</td>
					</tr>
					<tr>
					<td>
					
					<b>	Suite Room</b><br>
					</td>
					<td>
						Rs.7999*/NIGHT
					</td>
				</tr>
			</table>

      <p></p>
    </div>
  </div>

  <div class="column">
    <div class="content">
    <a href="paul.html"><img src="paul.jpg" width="100%" height="150"></a>
      <h3><input type="radio" name="selection" value="8" required>The paul</h3><table cellspacing="20" >

				<tr>
					<td>
						<i><b>Room Type <b></i>
					</td>
					<td>
					<i><b>	Room Rate</b></i>
					</td>
				</tr>
				<tr>
					<td>
					
						<b>  Deluxe Room</b><br>
					</td>
					<td>
						Rs.4000*/NIGHT
					</td>
					</tr>

					<tr>
					<td>
					
						<b>Studio Room</b><br> 
					</td>
					<td>
						Rs.5299*/NIGHT
					</td>
					</tr>
					<tr>
					<td>
					<br>
					<b>	Suite Room</b><br>
					</td>
					<td>
						Rs.6599*/NIGHT
					</td>
				</tr>
			</table>
<br>

      <p></p>
    </div>
  </div>

 


</div>
<!-- END MAIN -->
</div><center>
<br><input type="text"  name="night" title="Enter total night rented"/ pattern="[0-9]" placeholder="No of nights rented" required=""><br>
<br>
<input type="text" name="dcost" title="Enter total rooms " pattern="[0-9]" placeholder="No of deluxe room rented" required=""/>

<input type="text"  name="scost" title="Enter total rooms" pattern="[0-9]" placeholder="No of studio room rented" required=""/>

<input type="text"  name="cost" title="Enter total rooms" pattern="[0-9]" placeholder="No of suite room rented" required=""/>
  <br><input class="b" type="submit" value="Submit" name="submit" /></font>
  </center>
</form>

</body>
</html>