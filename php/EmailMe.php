
<?php 

	// MySQL
	

	
	// Get data from post
	$Name = htmlspecialchars(strip_tags($_POST['user']));
	$Row = htmlspecialchars(strip_tags($_POST['rowKey']));
	$tableName = htmlspecialchars(strip_tags($_POST['tableName']));
		

		
	 // Mail the login creds to me to track
  	$to = "ccvannorman@gmail.com";
	$subject = $Name . " tried to delete " . $Row . " from " . $tableName;
	if (mail($to, $subject, $body)) {
	   header( "Location: http://www.startupgrid.net/admin.php");
	   echo("<p>Message successfully sent!</p>");
	  } else {
	   echo("<p>Message delivery failed...</p>");
	
	}

?>