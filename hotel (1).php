<?php 		
session_start();																			
$db=mysqli_connect('localhost','root','','wedding');
if(isset($_POST['submit']))
{ 
  $hotel=mysqli_real_escape_string($db,$_POST['selection']);
  $hstay=mysqli_real_escape_string($db,$_POST['night']);
  $tid = $_SESSION["tid"];
  $id=$_SESSION["id"];

  $sql="INSERT INTO choice (id,hid,tid) VALUES ('$id','$hotel','$tid')";
 mysqli_query($db,$sql);
  $_SESSION["hid"] = $hotel;

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
	
	$getinfo = "select hcost from hotel where hid ='$hotel'";
$query = mysqli_query($db,$getinfo);

while ($row = mysqli_fetch_array($query)) {
    $hcostt = $row['hcost'];
	$hcosttt=$hcostt * $hstay;
   $sqll="INSERT INTO budget (hcost,id,vcost) VALUES ('$hcosttt','$id','70')";
        mysqli_query($db,$sqll);
		

}
//	$getinfo = "select max(bid) from hotel";
//$query = mysqli_query($db,$getinfo);




/*	$getinfo1 = "select hcost,vcost,tcost,fcost,pcost,tancost,mcost from budget";
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
   $sqll="INSERT INTO budget (total) VALUES ('$total') ";
        mysqli_query($db,$sqll);
		

}*/


    header('location:transport.html');

//}
}
?>
<!DOCTYPE html>
<html>
<head>
<body background="pattern.png">
<style>
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Bell MT;
}
.button
{
 background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align:right;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
div.z
{
  text-align: right;
}


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
    width: 25%;
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
</style>
</head>
<body>
<font face ="Brush Script MT" color="#816687" size = "6"> <h3>  <i><center>Accomodation </center></i>
</h3></font>
<form method="POST">
<div class="main">


<hr>





<div class="row">
  <div class="column">
    <div class="content">
     <a href="comfort inn.html"> <img src="comfort inn insys.jpg" alt="Mountains" width="100%" height="150"> </a>

      
      <h3>Comfort INN inysys</h3>
      <input type="Radio" value="1" name="selection"  >Select
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="loards.html"><img src="lords eco inn.jpg" alt="Lights" width="100%" height="150"></a>
      <h3>Lords eco INN </h3><input type="Radio" value="2" name="selection"  >Select
      <p>
</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
   <a href="zone.html"> <img src="zone by the park infantry.jpg" alt="Nature" width="100%" height="150"></a>
      <h3>Zone by the park infantry</h3><input type="Radio" value="3" name="selection"  >Select
      <p> </p>
    </div>
  </div>
  <div class="column">
    <div class="content">
  <a href="fern.html">  <img src="the fern residency.jpg" width="100%" height="150"></a>
      <h3>The fern residency</h3><input type="Radio" value="4" name="selection"  >Select
      <p></p>
    </div>
  </div>
  

<!-- END GRID -->

<div class="column">
    <div class="content">
    <a href="lemon.html"><img src="lemon tree.jpg" alt="Nature" width="100%" height="150"></a>
      <h3>Lemon Tree</h3><input type="Radio" name="selection" value="5" >Select
      <p></p>
    </div>
  </div>
<div class="column">
    <div class="content">
    <a href="fortune.html"><img src="fortune park jp celestial.jpg" alt="Nature" width="100%" height="150"></a>
      <h3>Fortune park JP celestial</h3><input type="Radio" value="6"  name="selection"  >Select
      <p></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <a href="golden.html"><img src="golden tulip.jpg" width="100%" height="150"></a>
      <h3>Golden Tulip</h3><input type="Radio" value="7" name="selection"  >Select
      <p></p>
    </div>
  </div>

  <div class="column">
    <div class="content">
    <a href="paul.html"><img src="paul.jpg" width="100%" height="150"></a>
      <h3>The paul</h3><input type="Radio" value="8"  name="selection"  >Select
      <p></p>
    </div>
  </div>

  <div class="column">
    <div class="content">
   <a href="keys.html"> <img src="keys.jpg" width="100%" height="150"></a>
      <h3>Keys</h3><input type="Radio" value="9" name="selection"  >Select
      <p></p>
    </div>
  </div>


  <div class="column">
    <div class="content">
    <a href="gold.html"><img src="gold finch.jpg" width="100%" height="150"></a>
      <h3>Goldfinch</h3><input type="Radio" value="10"  name="selection"  >Select
      <p></p>
    </div>
  </div>

  <div class="column">
    <div class="content">
   <a href="royal.html"> <img src="royal orchid.jpg" width="100%" height="150"></a>
      <h3>Royal Orchid</h3><input type="Radio" value="11" name="selection"  >Select
      <p></p>
    </div>
  </div>


  <div class="column">
    <div class="content">
    <a href="ritz.html"><img src=" ritz carlton.jpg" width="100%" height="150"></a>
      <h3>The Ritz Carlton</h3><input type="Radio" value="12"  name="selection"  >Select
      <p></p>
    </div>
  </div>
  <input type="text" value="2" name="night" title="Enter total nights of stay"/>
  <input type="submit" value="submit" name="submit" /></font>
<br>
<br>

</div>
<!-- END MAIN -->
</div>

  <div class="z">
<button class="button">Next</button>
</div>
</form>
</body>
</html>