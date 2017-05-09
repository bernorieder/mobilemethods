<?php

$hostname =	"localhost";					// define hostname
$database =	"mobilemethods"; 				// define database name
$dbuser =	"root"; 						// user
$dbpass =	"";

ini_set("memory_limit","7000M");


function dbconnect() {
	
	global $hostname,$database,$dbuser,$dbpass,$db;
	
	$db = mysqli_connect($hostname,$dbuser,$dbpass,$database);

	if (!$db) {
    	echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    	exit;
	}
	//$db = mysql_connect($hostname,$dbuser,$dbpass) or die("Database error");
	//mysql_select_db($database, $db);
	//mysql_set_charset('utf8',$db);

	echo "Host information: " . mysqli_get_host_info($db) . PHP_EOL;
}

function dbclose() {
	global $db;
	mysqli_close($db);
}

?>