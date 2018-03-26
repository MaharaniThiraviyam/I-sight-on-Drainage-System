<?php
  
 
  session_destroy();
  session_regenerate_id(true);  
	echo" <script>window.location = 'index.php';</script>";
  ?>
