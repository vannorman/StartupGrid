<?php 
	// Copied from admin.php. Intended to thwart attempts to access echo directly without a login.

	// Get Session information to see if the user is logged in as Admin.
	session_start();
	session_id($_GET['sessionID']);
	$login =$_SESSION['login'];
	$secretKey = $_SESSION['secretKey'];


	// If we didn't get here from the right place, redirect away
	if ( 	($secretKey != 'T@_#PFO;mes98;g34ytj@') // god, is this terrible
			|| ($login != 'true')	) 
	{
		//echo 'sessionID, secretKey, and login were '.Session_Name().'='.Session_ID().', '.$_SESSION['secretKey'].', '.$_SESSION['login'];
		header( 'Location: http://www.startupgrid.net/index.php' );
	}
	
	
			 
	else 
	{
	
	
		//$database = htmlspecialchars($_POST['database']);
		$database = "hacktus";
	
		// Init MySQL connection
		
		require_once 'sqllogin.php';
	
		mysql_select_db($database, $con);

	
		$tableName = mysql_real_escape_string(htmlspecialchars($_POST['tableName']));
		$columnName = mysql_real_escape_string(htmlspecialchars($_POST['column'])); 
		$value = mysql_real_escape_string(htmlspecialchars($_POST['value'])); 
		$rowKey = mysql_real_escape_string(htmlspecialchars($_POST['row']));	
		$user =mysql_real_escape_string(htmlspecialchars($_POST['user']));	
		
		$today = date("j-F, Y, g:i a"); 
		
			
		// $getOldVal="SELECT $columnName FROM $tableName WHERE Name = 'Hactus'";
		// echo "\ngetOldval was ".$getOldVal;
		$result=mysql_query("SELECT $columnName FROM $tableName WHERE Name = 'Hactus'");
		$oldValue = mysql_fetch_row($result); 
	
		$getOldLog="SELECT EditLog FROM $tableName WHERE `key` = '$rowKey'";
		echo "\ngetOldLog was ".$getOldLog;
		$result=mysql_query($getOldLog);
		$oldLog=mysql_fetch_row($result);
		
		$editLog = $oldLog[0]."\nuser ".$user." changed row ".$rowKey.", column ".$columnName." from ".$oldValue[0]." to ".$value." in table ".$tableName.", on ".$today."|";
		
		// Define Query to change the field value
		$query="UPDATE $tableName
				SET $columnName = '$value', EditLog = '$editLog'
				WHERE `key` = $rowKey
				LIMIT 1";
					
		echo 'query was ' . $query;
	
		// Make the query			
		if (!mysql_query($query,$con))    die('Error: ' . mysql_error());				
		
		mysql_close($con);
	}
?>