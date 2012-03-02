<?php

require_once 'config.php';
require_once 'defaults.php';

$token    = $_GET['id'] ?  $_GET['id'] : $_POST['id'];
$renderer = $_GET['renderer'] ?  $_GET['renderer'] : $_POST['renderer'];

// cvn mod: removed "token"
$query = sprintf("SELECT value 
                  FROM config 
                  ORDER BY id DESC
                  LIMIT 1");
                  
/*$query = sprintf("SELECT value 
                  FROM config 
                  WHERE token='%s' 
                  ORDER BY id DESC
                  LIMIT 1", 
                  $token);*/ //only yields from 'defaults' token (paragraph_1 = token 1)

$retval =  $dbh->query($query)->fetchColumn(0);

$retval = trim($retval) ?  $retval : $default[$token];
$retval = trim($retval) ?  $retval : 'Edit me!';
print '<script type="text/javascript">
				console.log(load running);
			</script>';
if ('textile' == $renderer) {
    require_once 'Textile.php';
    $t = new Textile();
    $retval = $t->TextileThis($retval);
} 

print $retval;