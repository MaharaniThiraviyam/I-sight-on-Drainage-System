 <?php
 session_start();
  include("alertpageheader.php");
 ?>
 <!DOCTYPE html>
<html>
<title>Admin Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
<style>
.mySlides {display:none;}
.img1{
 border-radius:75px;
 }
.big {
    line-height: 2.2;
}
.title1{
font-family:"Imprint MT Shadow";
color:#0000FF;
font-size:25px;
}
.flash {
   animation-name: flash;
    animation-duration: 0.2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
	font-family:"Courier New";
	font-size:30px;
}
@keyframes flash {
    from {color:blue;}
    to {color: black;}
}
 
body {margin:0;}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #1E90FF;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img1 {
    border-radius: 50%;
}

</style>
</head>
<body>
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
  <a href="#" id="top">Home</a>
  <a href="alertpage.php">View Alerts</a>
  <a href="alertreport.php">View Alerts Report
  <a href="alertsearch.php">Search Alerts</a>
  
  <a href="#aboutus">About Us</a>
  <a href="logout.php">Logout</a>
</div>
<span style="font-size:20px;cursor:pointer" onClick="openNav()">&#9776; MENU</span>

<center><font face="Imprint MT Shadow" color="#0000FF" size="+3" class="flash"><b>Welcome To Madurai Corporation</b> </font></center>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images/logo.png" style="width:100%" height="40%">
  <img class="mySlides" src="images/images1.png" style="width:100%" height="40%" >
  <img class="mySlides" src="images/images2.png" style="width:80%" height="40%">
  <img class="mySlides" src="images/images3.jpg" style="width:100%" height="40%">
  <img class="mySlides" src="images/images4.jpg" style="width:100%" height="40%">
  <img class="mySlides" src="images/images5.png" style="width:100%" height="40%">
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<br />
<center><h1 class="title1" id="aboutus">ABOUT US</h1></center>

<p class="text1 big" align="center">
		There is a reason why we take pride in branding ourselves the best online placement training.<br>
 Our instructors, graduates from Stanford University, IITs, IIITs, are Master craftsmen with years of <br>
 industry experience at Facebook, Amazon, American Express, Times Internet, etc.<br><br>
 		At Info Zone, our mission is to continuously innovate the best ways to train the next generation <br>
 of developers and to transform the way tech education is delivered. Were constantly evolving the ways <br>
 in which we train amazing developers, as staying stagnant is not an option. We approach our educational<br>
  philosophy as a never-ending journey of self-improvement, and we apply it to everything we do.
</p>

<br><br>
<img src="images/images6.jpg" width="100%" height="400" />
</body>
</html>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
