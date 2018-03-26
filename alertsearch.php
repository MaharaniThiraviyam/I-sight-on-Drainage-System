<?php
 include("alertpageheader.php");
 session_start();
 ?>
 <style>
 input[type=checkbox]:checked + label {
  color:#CC0066;
  font-style: normal;
} 
  input:checked {
    height: 30px;
    width: 30px;
	background:#009933;
	}

 .image1{
   position:absolute;
	  left:30px; 
 }
   .image2{
     position:absolute;
     right:100px;
 }
.login{
  font-family: "Imprint MT Shadow";
  color:#000000;
  font-size: 22px;
 }
 
.title{
 font-family:Imprint MT Shadow;
 text-align:center;
 }
 .heading{
 font-family:Kristen ITC;
 text-align:center;
 color:#990033;
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
    from {color:#FF0066;}
    to {color: black;}
}
 .textbox{
   font-family:"Lucida Fax";
   background-color:#FFFFFF;
   color:#000000;
   }
 
  .textbox1{
   font-family:"Lucida Fax";
   font-size:21px;
   }
 
 .submit1
{
background-color:#FF66FF;
font-size: 30px;
color:#000000;
border-radius: 10px;
font-family:"Lucida Bright";
}
.button
{
background-color: #FF3399;
font-size: 30px;
color: #000000;
border-radius: 10px;
font-family: "monotype Corsiva";
}

.button2
{
background-color: #FF3399;
font-size: 30px;
color: #000000;
border-top-style: groove;
font-family: "monotype Corsiva";
border-radius: 10px;
}


.style1 {
font-family: "monotype Corsiva";
color: #000000;
background-color: #FFCCFF;
font-size: 24px;
}



</style>
<title>Search</title>
<body>
<br>
<form action="" method="post">
<table align="center" height="15%" width="20%" cellpadding="0" cellspacing="30" >
<tr ><td align="center"><input type="submit" name="today" value="Drainage Problem Today" class="button2" align="center"></td>
<td align="center"><input type="submit" name="ward_no" value="Drainage issues By Ward-No" class="button2" align="center"></td>
<td align="center"><input type="submit" name="category" value="Drainage issues By Category" class="button2" align="center"></td>

<td align="center"><input type="submit" name="drainage_id" value="Alert By Drainage-ID" class="button2" align="center"></td>

<a href="adminhome.php">BACK</a>
</tr>
</table>
	
</form>
</body>

<?php
   if(isset($_POST['today'])){
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
	
	 $sql="SELECT * FROM id5089309_drainage_monitoring.alert_logs where current_date1=CURRENT_DATE and status='incomplete'";
	 $result= $conn->query($sql);
	if ($result->num_rows > 0) {
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
   
  
    }
	else
	   echo "<center><h2 class=flash> SORRY !!! No Alert Message is Avilable Today ...</h2></center>";
	} // Today search complete   
	  
	  
	else if(isset($_POST['ward_no'])){ // Alert Message based on Ward_no
	
	echo"<center>  <h2 class=title>Drainage Problem By Ward-Number</h2>";
    echo'<form location="" method="post">';
    echo'<table width=30% cellpadding=10"><th align=center>Ward no</th><td align=center><input class=textbox1 type=text name=ward_no placeholder="Ward Number" autofocus required></td><td>
 <input class=submit1 type="submit" value="Search" name="search"></td></table><br>
</center></form>';
  
  } // Alert Message based on Ward_no
  
	else if(isset($_POST['drainage_id'])){ // Alert Message based on drainage_id
	
	echo"<center>  <h2 class=title>Drainage Issues By Drainage ID </h2>";
    echo'<form location="" method="post">';
    echo'<table width=30% cellpadding=10"><th align=center>Drainage ID</th><td align=center><input class=textbox1 type=text name=drainage_id1 placeholder="Drainage ID" autofocus required></td><td>
 <input class=submit1 type="submit" value="Search" name="search1"></td></table><br>
</center></form>';
  
  } // Alert Message based on Ward_no  
	
	 else if(isset($_POST['category'])){  //Drainage Problem By Category
  echo"<center>  <h2 class=title>Drainage Problem by Category</h2>";
  echo'<form location="" method="post">';
  echo'<table width=37%>
 <tr><th>Category :</th><td><input class=submit1 type="submit" value="Search" name="search2"></td></tr>
 <tr><td><input align=justify type="checkbox" name="wateroverflow" value="yes" ><label class=textbox1 for="bridgetender">Drainage Water Overflow</label></td></tr><br>
 <tr><td><input  align=justify type="checkbox" name="lidopen" value="yes" ><label class=textbox1 for="schooltender">Drainage Lid Open</label></td></tr>
 <tr><td><input align=justify type="checkbox" name="pollution" value="yes" ><label class=textbox1 for="railwaytender">Drainage Highly Pollute</label></td></tr>
 <tr><td><input   type="checkbox" name="chemical" value="yes" ><label class=textbox1 for="slumtender">Drainage Highly Chemical</label></td></tr>

</form>';

 }
 

  
	   
	?>




 <?php //search by ward_no
  if(isset($_POST['search'])){
   
   $ward_num=$_POST['ward_no'];
   
   $host="localhost";
   $user="id5089309_maha";
   $password1="12345";
   $dbname="id5089309_drainage_monitoring";
   $zone_name="";
  
   $zone_name="";
  

	 $conn = new mysqli($host, $user, $password1, $dbname);
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }
	
	 $sql="SELECT * FROM id5089309_drainage_monitoring.alert_logs where ward_no=$ward_num and status='incomplete'";
	 $result= $conn->query($sql);
	if ($result->num_rows > 0) {
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
   
  
    }
	else
	   echo "<center><h2 class=flash> SORRY !!! No Alert Message is Avilable To This Ward Number ...</h2></center>";
	}
	?>
	
	
	
	
	<?php // search by drainage_id
  if(isset($_POST['search1'])){
   
   $drainage_id=$_POST['drainage_id1'];
   
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
	
	 $sql="SELECT * FROM id5089309_drainage_monitoring.alert_logs where drainage_id=$drainage_id and status='incomplete'";
	 $result= $conn->query($sql);
	if ($result->num_rows > 0) {
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
   
  
    }
	else
	   echo "<center><h2 class=flash> SORRY !!! No Alert Message is Avilable Relevant to This Drainage...</h2></center>";
	}
	?>
	
	
	
	<?php
	if(isset($_POST['search2'])){ //Tender By Category
  
	 echo"<center>  <h2 class=title>Tender by Category</h2>";
    
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
	 if(isset($_POST['wateroverflow'])){ //Drainage Water Overflow
	  $sql="SELECT * FROM id5089309_drainage_monitoring.alert_logs where water_overflow='yes' and status='incomplete'";
	 $result= $conn->query($sql);
	if ($result->num_rows > 0) {
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
   
  
    }
	else
	   echo "<center><h2 class=flash> SORRY !!! No Alert Message is Avilable Relevant to This Drainage...</h2></center>";
	}
 if(isset($_POST['lidopen'])){ // Drainage Lid Open
	  $sql="SELECT * FROM alert_logs where lid_open='yes' and status='in complete'";
	 $result= $conn->query($sql);
	if ($result->num_rows > 0) {
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
   
  
    }
	else
	   echo "<center><h2 class=flash> SORRY !!! No Alert Message is Avilable Relevant to This Drainage...</h2></center>";
	}
 
 
  if(isset($_POST['pollution'])){ // Drainage Highly Pollution
	  $sql="SELECT * FROM id5089309_drainage_monitoring.alert_logs where pollution='yes' and status='incomplete'";
	 $result= $conn->query($sql);
	if ($result->num_rows > 0) {
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
   
  
    }
	else
	   echo "<center><h2 class=flash> SORRY !!! No Alert Message is Avilable Relevant to Drainage Highly Pollute...</h2></center>";
	}

	if(isset($_POST['chemical'])){ // Drainage Highly Pollution
	  $sql="SELECT * FROM id5089309_drainage_monitoring.alert_logs where chemical_action='yes' and status='incomplete'";
	 $result= $conn->query($sql);
	if ($result->num_rows > 0) {
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
   
  
    }
	else
	   echo "<center><h2 class=flash> SORRY !!! No Alert Message is Avilable Relevant to This Drainage...</h2></center>";
	}


	}
	?>
