<?php
	
	//mysql creds
	$con = mysql_connect('FTP.DOMAIN.COM', 'USERNAME', 'PASSWORD');
	if (!$con)  {  die('Could not connect: ' . mysql_error());  }
	mysql_select_db("hacktus", $con);
	
	
		
?>