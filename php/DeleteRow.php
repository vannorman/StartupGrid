
<?php 

	$database 		= htmlspecialchars(trim($_POST['database']));
	
	// Connect to MySQL
	require_once('sqllogin.php');
	mysql_select_db($database, $con);

    $tableName      = mysql_real_escape_string(htmlspecialchars(trim($_POST['tableName'])));  
	$rowKey			= mysql_real_escape_string(htmlspecialchars(trim($_POST['rowKey'])));
	echo "tablename and rowkey were .." . $tableName . ", " . $rowKey;

	// First, make a backup.
	// Skip LULZ

	//	if (!mysql_query($query,$con))    die('Error: ' . mysql_error());	
	// NOT WORKING
	$result = mysql_query("SELECT Name FROM $tableName");

	while($row = mysql_fetch_array($result))
	{
		if ($row['Key'] == $rowKey)
			$Name = $row['Name'];
		
	}

	$sql="DELETE FROM $tableName
		WHERE `key` = '$rowKey'";
		if (!mysql_query($sql,$con))  {  die('Error: ' . mysql_error());  }
	echo "Something got deleted row ....".$rowKey." from table " . $tableName;
    	// END MySQL
  	mysql_close($con);

        // Notes:

?>