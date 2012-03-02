<?php

	/* This file: 
		Adds a row to given database and table
			REQUIRED $_POST inputs:	
			* tableName
			* numFields
			* field1, field2, .... fieldX
	*/
	
	// Include clean input function
	// include "CleanInput.php";
	
	
	// Connect to the database
	require_once('sqllogin.php');
		mysql_select_db("hactus_chile", $con);


	/* clean input function*/ // NEED TO MOVE TO ITS OWN FILE
	/*
	function cleanInput($input) {
	    $output = str_ireplace("DROP","",$output);
	    $output = str_ireplace("DELETE","",$output);
	    $output = str_ireplace("UPDATE","",$output);
	    $output = mysql_real_escape_string($output);
	    return $output;
	}
	*/

	// Get table name to add data to
		$tableName = htmlspecialchars(trim($_POST['tableName']));
		// $tableName = cleanInput($tableName);
		$IP = $_SERVER['REMOTE_ADDR']; // Record the IP of the submitter

	// Get all the data to put into the table
		$fieldsToInsert = "";
		$valuesToInsert = "";
		$numFields = htmlspecialchars(trim($_POST['numFields'])); 	// Get the number of fields to add
	
		$addedFields = false;
		for ($i=0; $i<$numFields; $i++)
		{
			// add each element
			$addedFields = true;
			// Clean each element
//			$fields[$i] = cleanInput($fields[$i]);
//			$datas[$i] = cleanInput($datas[$i]);

			$fieldsToAdd .= htmlspecialchars(trim($_POST['field'.$i])) . ",";

			$valuesToAdd .= "'" . htmlspecialchars(trim($_POST['data'.$i])) . "',"; 
			// Note: extra ' are necessary for SQL in VALUES.

		}

	echo "i was $i\n 
		fieldstoadd was $fieldsToAdd\n
		valuestoadd was $valuesToAdd\n";
	// remove last comma from strings
		$fieldsToAdd = substr($fieldsToAdd,0,-1);
		$valuesToAdd = substr($valuesToAdd,0,-1);

	if ($addedFields = false)
	{
		$fieldsToAdd = "Name";
		$valuesToAdd = " ";
	}
	// Add it to the database
	$query=
		"INSERT INTO $tableName
			(
				$fieldsToAdd
			)
			VALUES 
			(
				$valuesToAdd
			)";
	echo "\nSQL was: ".$query;
	if (!mysql_query($query,$con))    die('Error: ' . mysql_error());
	
	
	echo ".....something happened! $i valuess were added to a new row in $tableName";
	mysql_close($con);
?>