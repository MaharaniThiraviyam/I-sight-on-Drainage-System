<?php
 include("alertpageheader.php");
 session_start();
 //echo "<script>alert($_SESSION[zone_no])</script>";
 ?>
 
  <style>
 input[type=radio]:checked + label {
  color:#CC0066;
  font-style: normal;
} 
  input:checked {
    height: 17px;
    width: 20px;
	background:#009933;
	}
 label{
 font-family:Segoe Print;
 font-size:18px;
 color:#000066;
 }
 .label1{
   padding-right:47px;
   }
  .label2{
   padding-right:70px;
   }
.label3{
   padding-right:125px;
   }
  .label4{
   padding-right:70px;
   }
.label5{
   padding-right:40px;
   }
  .label6{
   padding-right:10px;
   
   }
.label7{
   padding-right:55px;
   }
  .label8{
   padding-right:70px;
   }

   
       
 input[type=text], input[type=password],input[type=number] {
    width:40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-family:"Georgia";
	font-size:18px;
	
}


/* Set a style for all buttons */
button {
    background-color:#009900;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
	border:double;
	
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color:#FF0000;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    
    border-radius: 60%;
}


.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;

    margin: 5% auto 10% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

   .basic{
   font-family:"Footlight MT Light";
  
   font-size:23px;
   }
  .textbox1{
   font-family:"Lucida Fax";
   font-size:18px;
 }
  .login{
  font-family: "Imprint MT Shadow";
  border-color:#3333CC;
  background-color:#66FFFF;
 
  font-size: 22px;
 }

 .textbox{
   font-family:"Lucida Fax";
   font-size:18px;
   background-color:#FFFFFF;
   color:#000000;
   }

 .image1{
   position:absolute;
   left:50px;
	 
 
   }
   .image2{
     position:absolute;
     right:50px;
	 
	 }
   .image3{
     position:absolute;
     left:50px;
	 
	 }
   .image4{
     position:absolute;
	 left:450px;
	 
	 }

	.image5{
	  position:absolute;
     right:50px;
	 }
	 .flash {
   animation-name: flash;
    animation-duration: 0.2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}
@keyframes flash {
    from {color:#3300FF;}
    to {color: black;}
}
.dropbtn {
  background-color:#009900;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	width:7%;
	border-bottom-color:#FFFFFF;
	border:double;
}


.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}




</style>
 

 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Alert Messages</title>

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section --></head>

<body>
<br>
   <div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="#">Home</a>
    <a href="adminhome.php">Back to Home</a>
	<a href="alertreport.php">View Alerts Report</a>
    <a href="logout.php">Logout</a>
  </div>
</div>

    	<br><br><font face="Kristen ITC" size="+2" color="#FF0066" class="flash"><b><center>WELCOME TO MADURAI CORPORATION DRAINAGE MONITORING !!!</center></b></font>
    <br><br><br>
	<pre><h2 ><font face="Maiandra GD" color=#3300FF>	General Instructions </font></h2></pre>
	<font face="Lucida Calligraphy" size="+1">
	<ul type="disc">
	 <li>There are 350 Lid per Ward . </li>
	 <li>There are 10 Cleaning Staffs  working  per Area.</li>
	 <li>There are many problems occur in drainage system . They are Drainage water flow , Drainage lid open ,Drainage highly pollute , Unwanted chemical reaction held in drainage .</li>
	</font> 
		 
	<br>
	<h2 ><font face="Maiandra GD" color=#3300FF><center>DRAINAGE PROBLEM ALERT MESSAGES</center></font></h2>
	
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/adminsignuplogo.png"  class="avatar" height="125" width="150">
	  
    </div>

    <div class="container">
	<center>
      <label class="label2"><b>Drainage ID</b></label>
      <input type="text" placeholder="Enter Drainage ID" name="drainage_id" required><br>
    </center>  
	  <pre>
	  <label  class="label6"><b>Agree to Drainage Cleaning</b></label>       <input type="radio"  name="agree" value="yes"  ><font family="Georgia" size="+2">Yes<input type="radio" name="agree" value="no" >No<br></font></pre>
	
 	</pre>
	 
	 <center> <button type="submit" name="register">Agree To Clean</button><br>
      </center>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onClick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><font color="#009900" >Keep Our City Clean</font></span>
    </div>
  </form>
</div>

</body>
</html>


 <?php
   $host="localhost";
   $user="id5089309_maha";
   $password1="12345";
   $dbname="id5089309_drainage_monitoring";
   $zone_name="";
   //$zone_no=$_SESSION["zone_no"];

	 $conn = new mysqli($host, $user, $password1, $dbname);
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }
	
	 $sql="SELECT * FROM id5089309_drainage_monitoring.alert_logs where status='incomplete'";
	 $result= $conn->query($sql);
	if ($result->num_rows > 0) 
	 while($row = $result->fetch_assoc()){
	   
	   $zone=$row['zone_no'];
	   if($zone==1)
	    $zone_name="East Zone";
		else if($zone==2)
	    $zone_name="West Zone";
		else if($zone==3)
	    $zone_name="South Zone";
		else if($zone==4)
	    $zone_name="North Zone";
		else if($zone==5)
	    $zone_name="Central Zone";
		
	  echo"<button onClick=document.getElementById('id01').style.display='block' style=width:auto;background-color:0000CC>Response to  Alert</button>";
  // Display basic details
	echo"<table cellpadding=3 cellspacing=0 align=center class=basic >
	<tr><th align=justify> *   Drainage ID</th><td align=ceneter class=textbox1>: $row[drainage_id]</td></tr>
	<th align=justify> *   Ward Number </th><td align=ceneter class=textbox1>: $row[ward_no]</td></tr>
	<tr><th align=justify> *   Zone </th><td align=ceneter class=textbox1>: $zone_name</td></tr>
	<th align=justify> *   Address </th><td align=ceneter class=textbox1>: $row[address]</td></tr>
	</table>";
	
	// Display details in table
    echo" <br><table class=login align=center cellpadding=0 cellspacing=0 width=93% height=15% border=2>
   <tr><th align=center>Water Overflow </th><th align=center>Lid Open</th><th align=center>High pollution</th><th align=center>Highly Chemical</th><th align=center>Date</th><th align=center>Time</th><th align=center>Current Status</th>";
 
   
  
		
    
	
   echo"<tr><td class=textbox align=center>$row[water_overflow]</td><td class=textbox align=center>$row[lid_open]</td><td class=textbox align=center>$row[pollution]</td><td class=textbox align=center>$row[chemical_action]</td><td class=textbox align=center>$row[current_date1]</td><td class=textbox align=center>$row[current_date1]</td><td class=textbox align=center>$row[status]</td></tr>";
     echo"</table><br><hr/><br><br>";   
  
   }
   
   ?>
   
  
  


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<?php  //Agree to Drainge cleaning
 
 if(isset($_POST['register'])){
  
  $drainage_id=$_POST['drainage_id'];
  $agree=$_POST['agree'];
 
   $host="localhost";
   $user="id5089309_maha";
   $password1="12345";
   $dbname="id5089309_drainage_monitoring";
 
  
  if($agree=="yes"){
	 $conn = new mysqli($host, $user, $password1, $dbname);
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }
	
	 $sql="SELECT * FROM  id5089309_drainage_monitoring.alert_logs where drainage_id=$drainage_id";
	 $result= $conn->query($sql);
	 
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
	 $drainge_id=$row['drainage_id'];
	 $ward_no=$row['ward_no'];
	 $zone_no=$row['zone_no'];
	 $address=$row['address'];
	 $water_overflow=$row['water_overflow'];
	 $lid_open=$row['lid_open'];
	 $pollution=$row['pollution'];
	 $chemical_action=$row['chemical_action'];
	 $status=$row['status'];
	 $current_date1=$row['current_date1'];

	 $sql1="insert into  id5089309_drainage_monitoring.alert_history values($drainage_id,$ward_no,$zone_no,'$address','$water_overflow','$lid_open','$pollution','$chemical_action','complete','$current_date1')";
     $result1=$conn->query($sql1);
	 
	  $sql2="delete FROM  id5089309_drainage_monitoring.alert_logs where drainage_id=$drainage_id";
	  $result2= $conn->query($sql2);
	   }
	   
	   echo"<script>alert('Drainage Cleaning is done Successfully !!!')</script>";
	  }
    }
	else
	 echo"<script>alert('Sorry ... Drainage cleaning is not done')</script>";
	 }
	 ?>
