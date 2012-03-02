<?php
		
	

	require_once 'sqllogin.php';
	
	$database = "hacktus";
	//	$database = mysql_real_escape_string(htmlspecialchars($_POST['database']));
	$tableName = mysql_real_escape_string(htmlspecialchars($_POST['tableName']));
	$value = mysql_real_escape_string(htmlspecialchars($_POST['value']));  // Founder_ID
	$rowKey = mysql_real_escape_string(htmlspecialchars($_POST['row']));	
	
	
	mysql_select_db($database);
	
	// Get any existing Founder_ID from MySQL
	$getOldID="SELECT 'Founder_ID' FROM $tableName WHERE `key` = '$rowKey'";

	// If the old Founder_ID exists, add it to the new Founder_ID with "," in between.
	if (strlen($getOldID > 3))
		$newID = $value . ", " . $getOldID;
	else
		$newID = $value;
		
	// Pass the Founder_ID back to MySQL
	$query="UPDATE $tableName
		SET Founder_ID = '$newID'
		WHERE `key` = $rowKey
		LIMIT 1";
				
	//echo 'query was ' . $query;

	// Make the query			
	if (!mysql_query($query,$con))    die('Error: ' . mysql_error());				
	
	mysql_close($con);
?>
	