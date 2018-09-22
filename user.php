<?php

	session_start();


	$connect=mysqli_connect('localhost','root','','wedding');
	if(isset($_POST['1']))
{ 
  $hotel=mysqli_real_escape_string($connect,$_POST['selection']);
   header('location:theme.php');
}  
	
    $id=$_SESSION['id'];
		$query="SELECT firstname FROM user WHERE id='$id'";
	$result = $connect->query($query);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name= $row["firstname"];
		
    }
} else {
    echo "0 results";
}

$connect->close();
	
?>
<html>
<head>
<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
<title>The Knot</title>
<style>
img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
	height:150px;
}

body    { border: 11px solid white }
body,h1,h2,h3,h4,h5,h6 {font-family: 'Alegreya'}
.containerr {
 
  width: 50%;

    position: absolute; /* Position the background text */
   
    background: rgba(0, 0, 0, 0); /* Black background with 0.5 opacity */
   
    width: 97%; /* Full width */
   
}
/* Make the image responsive */
.b{
		height: 40px;
		width: 240px;
	border-radius: 10px;
		margin-top: 20px;
		margin-left: 10px;
		font-family: 'Alegreya';
		font-size: 16px;
		}

/* Style the button and place it in the middle of the container/image */
.container .btn {
  position:absolute;
 top: 6%;
opacity: 1;
  transition: 0.3s;
font-family: 'Pacifico';
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 20px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
   height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.container .btn:hover {
opacity: 0.6;
  
}
.container {
    position: relative;
    text-align: center;
    color: white;
	font-size: 16px;
}
.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}
.container .content {
    position: absolute; /* Position the background text */
    top: 130; /* At the bottom. Use top:0 to append it to the top */
    background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
    color: #f1f1f1; /* Grey text */
    width: 97%; /* Full width */
    padding: 20px; /* Some padding */
}
.container .conten {
    position: absolute; /* Position the background text */
    top:-40; /* At the bottom. Use top:0 to append it to the top */
    background: rgba(0, 0, 0, 0); /* Black background with 0.5 opacity */
    color: white; 
    width: 97%; /* Full width */
    padding: 20px; /* Some padding */
	font-size: 100px;
}
.centered {
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
	background: rgba(0, 0, 0, 0.5);
	color: #f1f1f1; 
	padding: 20px;
	
}

.centered {
    position: absolute;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
	background: rgba(0, 0, 0, 0);
	color: white; 
	padding: 20px;
	
}
a:hover {
    
	color:black;
}
a:link {
    color:white;
	text-decoration: none;
}

a:visited {
    color:white;
	text-decoration: none;
}
#cssload-cupcake {
	flex-direction: row;
		-o-flex-direction: row;
		-ms-flex-direction: row;
		-webkit-flex-direction: row;
		-moz-flex-direction: row;
	justify-content: center;
		-o-justify-content: center;
		-ms-justify-content: center;
		-webkit-justify-content: center;
		-moz-justify-content: center;
	height: 100%;
	width: 100%;
}

.cssload-letter {
	font-size: 97px;
	color: rgba(255,255,255,0.98);
	font-family: 'Pacifico';
}

.cssload-box {
	display: box;
	display: box;
		display: -o-box;
		display: -ms-box;
		display: -webkit-box;
		display: -moz-box;
	display: flex;
		display: -o-flex;
		display: -ms-flex;
		display: -webkit-flex;
		display: -moz-flex;
}

.cssload-cupcakeCircle,
.cssload-cupcakeInner,
.cssload-cupcakeCore {
	border-radius: 50%;
}

.cssload-cupcake,
.cssload-letter,
.cssload-cupcakeCircle,
.cssload-cupcakeInner,
.cssload-cupcakeCore {
	flex: none;
		-o-flex: none;
		-ms-flex: none;
		-webkit-flex: none;
		-moz-flex: none;
}

.cssload-letter,
.cssload-cupcakeCircle {
	align-self: center;
	align-self: center;
		-o-align-self: center;
		-ms-align-self: center;
		-webkit-align-self: center;
		-moz-align-self: center;
}

.cssload-cupcakeCircle {
	align-items: center;
		-o-align-items: center;
		-ms-align-items: center;
		-webkit-align-items: center;
		-moz-align-items: center;
	justify-content: center;
		-o-justify-content: center;
		-ms-justify-content: center;
		-webkit-justify-content: center;
		-moz-justify-content: center;
	height: 97px;
	width: 97px;
	background-color: white;
}

.cssload-cupcakeInner {
	align-self: center;
		-o-align-self: center;
		-ms-align-self: center;
		-webkit-align-self: center;
		-moz-align-self: center;
	justify-content: center;
		-o-justify-content: center;
		-ms-justify-content: center;
		-webkit-justify-content: center;
		-moz-justify-content: center;
	height: 50%;
	width: 50%;
	background-color: rgba(240,232,149,0.97);
	animation-name: cssload-cupcakeAnimate;
		-o-animation-name: cssload-cupcakeAnimate;
		-ms-animation-name: cssload-cupcakeAnimate;
		-webkit-animation-name: cssload-cupcakeAnimate;
		-moz-animation-name: cssload-cupcakeAnimate;
	animation-duration: 575ms;
		-o-animation-duration: 575ms;
		-ms-animation-duration: 575ms;
		-webkit-animation-duration: 575ms;
		-moz-animation-duration: 575ms;
	animation-direction: alternate;
		-o-animation-direction: alternate;
		-ms-animation-direction: alternate;
		-webkit-animation-direction: alternate;
		-moz-animation-direction: alternate;
	animation-timing-function: ease-in-out;
		-o-animation-timing-function: ease-in-out;
		-ms-animation-timing-function: ease-in-out;
		-webkit-animation-timing-function: ease-in-out;
		-moz-animation-timing-function: ease-in-out;
	animation-iteration-count: infinite;
		-o-animation-iteration-count: infinite;
		-ms-animation-iteration-count: infinite;
		-webkit-animation-iteration-count: infinite;
		-moz-animation-iteration-count: infinite;
}

.cssload-cupcakeCore {
	align-self: center;
		-o-align-self: center;
		-ms-align-self: center;
		-webkit-align-self: center;
		-moz-align-self: center;
	height: 25%;
	width: 25%;
	background-color:white;
	animation-name: coreAnimate;
		-o-animation-name: coreAnimate;
		-ms-animation-name: coreAnimate;
		-webkit-animation-name: coreAnimate;
		-moz-animation-name: coreAnimate;
	animation-duration: 1.15s;
		-o-animation-duration: 1.15s;
		-ms-animation-duration: 1.15s;
		-webkit-animation-duration: 1.15s;
		-moz-animation-duration: 1.15s;
	animation-direction: alternate;
		-o-animation-direction: alternate;
		-ms-animation-direction: alternate;
		-webkit-animation-direction: alternate;
		-moz-animation-direction: alternate;
	animation-timing-function: ease-in-out;
		-o-animation-timing-function: ease-in-out;
		-ms-animation-timing-function: ease-in-out;
		-webkit-animation-timing-function: ease-in-out;
		-moz-animation-timing-function: ease-in-out;
	animation-iteration-count: infinite;
		-o-animation-iteration-count: infinite;
		-ms-animation-iteration-count: infinite;
		-webkit-animation-iteration-count: infinite;
		-moz-animation-iteration-count: infinite;
}





@keyframes cssload-cupcakeAnimate {
	to {
		height: 90%;
		width: 90%;
	}
}

@-o-keyframes cssload-cupcakeAnimate {
	to {
		height: 90%;
		width: 90%;
	}
}

@-ms-keyframes cssload-cupcakeAnimate {
	to {
		height: 90%;
		width: 90%;
	}
}

@-webkit-keyframes cssload-cupcakeAnimate {
	to {
		height: 90%;
		width: 90%;
	}
}

@-moz-keyframes cssload-cupcakeAnimate {
	to {
		height: 90%;
		width: 90%;
	}
}

@keyframes coreAnimate {
	to {
		height: 90%;
		width: 90%;
	}
}

@-o-keyframes coreAnimate {
	to {
		height: 90%;
		width: 90%;
	}
}

@-ms-keyframes coreAnimate {
	to {
		height: 90%;
		width: 90%;
	}
}

@-webkit-keyframes coreAnimate {
	to {
		height: 90%;
		width: 90%;
	}
}

@-moz-keyframes coreAnimate {
	to {
		height: 90%;
		width: 90%;
	}
}
i {
    border: solid white;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
}
.down {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}
.form{
		text-align:center;
	width: 700px;
	margin: 0px auto;
	padding: 20px;
	
	background: white;
	opacity:0.7;
	
	
}
.btnn {
  background-color:transparent;
  border: none;
  color: white;

  text-align: center;
  font-size: 20px;
  margin: 4px 2px;
  
  transition: 0.3s;
	font-family: 'Pacifico';
}
.btnn:hover {opacity: 0.6}

 .right {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
}
.parallax {
    /* The image used */
    background-image:url('37.PNG');

    /* Full height */
    height: 150%; 
    
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.parallaxx {
    /* The image used */
     background:url('s3.jpg');

    /* Full height */
    height: 100%; 
    
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* The actual popup (appears on top) */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>
</head>
<body>

</style>
</head>
<body>

<div class="w3-content w3-section" style="max-width:1300px">
<div class="container">

 <div class="parallax">

  
  <div class="conten">
  <div id="cssload-cupcake" class="cssload-box">
	<span class="cssload-letter">T</span>
    <span class="cssload-letter">h</span>
	<span class="cssload-letter">e</span>
	<span class="cssload-letter"> </span>
	<span class="cssload-letter">K</span>
	<span class="cssload-letter">n</span>
	<div class="cssload-cupcakeCircle cssload-box">
		<div class="cssload-cupcakeInner cssload-box">
			<div class="cssload-cupcakeCore cssload-box"></div>

		</div>
	</div>

	<span class="cssload-letter cssload-box">t</span>
	
</div>
</div>

   <br><br><br>
   <br><br><br><br>
 <font size="5">
 <?php echo "Hi"," ",$name;?><a href="main.html"><font size="3">&nbsp; Logout?</a>
 <BR>
 <form method="POST">
 <input type="submit" class="b" value="MAKE A NEW CHOICE (+)" name="1" /></form>
 <div class="popup" onclick="myFunction()"><a href="view.php"><input type="submit" class="b" value="VIEW CHOICE IN DETAIL <0>" name="2" /></a>
 
  <span class="popuptext" id="myPopup">Popup text...</span>
</div>
 Your Choices<br>
 <div class="form">
 <?php $connect=mysqli_connect('localhost','root','','wedding');
$sql = "SELECT * FROM choice where id='$id'";
$result = mysqli_query($connect, $sql);
$choice="1";
echo"<center>";
echo"<table border:'1'>";
		echo"<tr>";
		echo"<th>"."<FONT COLOR='black' size='4'>"."Choiceno"."</th>";
		echo"<th>"."<FONT COLOR='black' size='4';>"."Hotel"."</th>";
		echo"<th>"."<FONT COLOR='black' size='4'>"."Theme"."</th>";
		echo"<th>"."<FONT COLOR='black' size='4'>"."Music"."</th>";
		echo"<th>"."<FONT COLOR='black' size='4'>"."Venue"."</th>";
		echo"<th>"."<FONT COLOR='black' size='4'>"."Photographer"."</th>";
		echo"<th>"."<FONT COLOR='black' size='4'>"."Total"."</th>";
		echo"</tr>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		echo"<tr>";
		echo "<td> " ."<FONT COLOR='black' size='4'>". $choice."</td>";
		$choice++;
		$cid=$row['cid'];
		$hid=$row['hid'];
		$tid=$row['tid'];
		$mid=$row['mid'];
		$vid=$row['vid'];
		$pid=$row['pid'];
		$s = "SELECT * FROM budget where cid='$cid'";
		
		$sq = "SELECT * FROM hotel where hid='$hid'";
		$sqll = "SELECT * FROM theme where tid='$tid'";
		$a = "SELECT * FROM music where mid='$mid'";
		$b = "SELECT * FROM venue where vid='$vid'";
		$c = "SELECT * FROM photographer where pid='$pid'";
		$resultt = mysqli_query($connect, $sq);
		$resul = mysqli_query($connect, $sqll);
		$x = mysqli_query($connect, $a);
		$y= mysqli_query($connect, $b);
		$z = mysqli_query($connect, $c);
		$t = mysqli_query($connect, $s);
		while($row = mysqli_fetch_assoc($resultt)) {
			echo "<td> " ."<FONT COLOR='black' size='4'>". $row["hname"]."</td>";
		}
		while($row = mysqli_fetch_assoc($resul)) {
			echo "<td>" . "<FONT COLOR='black' size='4'>".$row["tname"]."</td>";
		}
		while($row = mysqli_fetch_assoc($x)) {
			echo "<td> " ."<FONT COLOR='black' size='4'>". $row["mname"]."</td>";
		}
		while($row = mysqli_fetch_assoc($y)) {
			echo "<td>" ."<FONT COLOR='black' size='4'>". $row["vname"]."</td>";
		}
		while($row = mysqli_fetch_assoc($z)) {
			echo "<td> " ."<FONT COLOR='black' size='4'>". $row["pname"]."</td>";
		}while($row = mysqli_fetch_assoc($t)) {
			echo "<td>" . "<FONT COLOR='black' size='4'>".$row["total"]."</td>";
		}
		echo"</tr>";
		
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
	
	echo"</table>";
	echo"</center>";
} else {
    echo "0 results";
}

mysqli_close($connect);?>
</font>
  </div></div>
</div></div>

<script>
// When the user clicks on <div>, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
</body>
</html>