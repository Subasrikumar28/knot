<?php

	session_start();
	$connect=mysqli_connect('localhost','root','','wedding');
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


?>

<html>
<head>
<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css" />
<title>The Knot</title>
<style>


body    { border: 11px solid white }
body,h1,h2,h3,h4,h5,h6 {font-family: 'Pacifico'}
.containerr {
 
  width: 50%;

    position: absolute; /* Position the background text */
   
    background: rgba(0, 0, 0, 0); /* Black background with 0.5 opacity */
   
    width: 97%; /* Full width */
   
}
/* Make the image responsive */
.container img {
  width: 100%;
  height: auto;
  opacity: 0.5;
    filter: alpha(opacity=50); 
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
  
  border: none;
  cursor: pointer;
 
 

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
    top:150; /* At the bottom. Use top:0 to append it to the top */
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
    height: 100%; 
    
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.parallaxx {
    /* The image used */
     background:url('us.jpg');

    /* Full height */
    height: 50%; 
    
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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
<table style="width:100%">
<tr style=color:#f1f1f1>
<div class="containerr">
  <th><button class="btn"><a href="main.html" target="main">Home</button></th>
  <th><button class="btn"><a href="venue.html">Venue</a></button></th>
 <th><button class="btn"><a href="theme.php">Theme</a></button></th>
 <th><button class="btn"><a href="hotel.php">Hotel</a></button></th>
<th><button class="btn"><a href="photo.php">Photographers</a></button></th>
<th><button class="btn"><a href="music.html">Music</a></button></th>
<th><button class="btn"><a href="transport.html">Transport</a></button></th></tr>
</div>

   </table>
   <br><br>
   <br>
  <?php echo "Hi"," ",$name;
 
  ?>
  </div>
</div></div></div>

</body>
</html>