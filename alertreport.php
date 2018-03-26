<?php
 include("alertpageheader.php");
 session_start();
 ?>
  <style type="text/css">
 .login{
  font-family: "Imprint MT Shadow";
  color:#000000;
  border-color:#3333CC;
  background-color:#66FFFF;
  font-size: 22px;
 }
 .textbox{
   font-family:"Lucida Fax";
   background-color:#FFFFFF;
   color:#000000;
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
    from {color:blue;}
    to {color: black;}

 </style>
 
 
 
  
  <br>
  <title>Report Information</title>
 <h3 align="right"> <a href="adminhome.php">BACK</a></h3>
 <h2 class="flash"><font face="Lucida Calligraphy"><center><b>Completion Of Drainage Issues Report Details</b></center></font></h2>


 <?php
 
   $host="localhost";
   $user="id5089309_maha";
   $password1="12345";
   $dbname="id5089309_drainage_monitoring";
   $zone_name="";
  

	 $conn = new mysqli($host, $user, $password1, $dbname);
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }
	
	 $sql="SELECT * FROM id5089309_drainage_monitoring.alert_history";
	 $result= $conn->query($sql);
	if ($result->num_rows > 0){
	 echo" <br><table class=login align=center cellpadding=0 cellspacing=0 width=90% height=15% border=2>
          
          <tr><th align=center>Drainage ID</th><th align=center>Ward No</th><th align=center>Zone</th><th align=center>Water Overflow </th><th align=center>Lid Open</th><th align=center>High pollution</th><th align=center>Highly Chemical</th><th align=center>Date</th><th align=center>Current Status</th>";
 
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
	
   
    echo"<tr><td class=textbox align=center>$row[drainage_id]</td><td class=textbox align=center>$row[ward_no]</td><td class=textbox align=center>$zone_name</td><td class=textbox align=center>$row[water_overflow]</td><td class=textbox align=center>$row[lid_open]</td><td class=textbox align=center>$row[pollution]</td><td class=textbox align=center>$row[chemical_action]</td><td class=textbox align=center>$row[current_date1]</td><td class=textbox align=center>$row[status]</td></tr>";
   }
   
    echo"</table>";
   
   }
   
   ?>
   
  
  
 
