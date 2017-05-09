<?php

include("ini.php");

dbconnect();

insertAccelerometer();
insertActivity();
insertGravity();
insertGyroscope();
insertLight();
insertLinearAcceleration();
insertLocation();
insertRunningApplication();
insertScreen();
insertWifi();

dbclose();

// -------------------------------
// probe_Accelerometer
// -------------------------------

function insertAccelerometer() {

	global $db;

	$sql = "CREATE TABLE IF NOT EXISTS `probe_Accelerometer` (
	  `id` varchar(64) NOT NULL,
	  `participantId` varchar(32) NOT NULL,
	  `data_accuracy` int(11) NOT NULL,
	  `data_created` int(11) NOT NULL,
	  `data_id` int(11) NOT NULL,
	  `data_x` double NOT NULL,
	  `data_y` double NOT NULL,
	  `data_z` double NOT NULL,
	  `projectId` varchar(64) NOT NULL,
	  `creation_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
	
	$result = mysqli_query($db,$sql);
	
	if(!$result) {
		echo "error creating table probe_Accelerometer";
		exit;
	}
	
	echo "table probe_Accelerometer was created or existed already";
	
	$data = json_decode(file_get_contents("./cache/probe_Accelerometer.json"));
	
	echo "inserting " . count($data->data) . " items ";
	
	for($i = 0; $i < count($data->data); $i++) {
	
		$d = $data->data[$i];
	
		$sql = "INSERT INTO probe_Accelerometer (id,participantId,data_accuracy,data_created,data_id,data_x,data_y,data_z,projectId,creation_date)".
			   "VALUES ('".$d->id."','".$d->participantId."','".$d->data->accuracy."','".$d->data->created."','".$d->data->id."','".$d->data->x."','".$d->data->y."','".$d->data->z."','".$d->projectIds[0]."','".$d->_creation_date."');";
		
		echo $i . " ";
		
		$results = mysqli_query($db,$sql);
	}
}


// -------------------------------
// probe_Activity
// -------------------------------

function insertActivity() {

	global $db;

	$sql = "CREATE TABLE IF NOT EXISTS `probe_Activity` (
	  `id` varchar(64) NOT NULL,
	  `participantId` varchar(32) NOT NULL,
	  `data_created` int(11) NOT NULL,
	  `data_id` int(11) NOT NULL,
	  `data_confidence` int(11) NOT NULL,
	  `data_activity` varchar(32) NOT NULL,
	  `projectId` varchar(64) NOT NULL,
	  `creation_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
	
	$result = mysqli_query($db,$sql);
	
	if(!$result) {
		echo "error creating table probe_Activity";
		exit;
	}
	
	echo "table probe_Activity was created or existed already";
	
	$data = json_decode(file_get_contents("./cache/probe_Activity.json"));
	
	
	
	echo "inserting " . count($data->data) . " items ";
	
	for($i = 0; $i < count($data->data); $i++) {
	
		$d = $data->data[$i];
		
		//print_r($d); exit;
	
		$sql = "INSERT INTO probe_Activity (id,participantId,data_created,data_id,data_confidence,data_activity,projectId,creation_date)".
			   "VALUES ('".$d->id."','".$d->participantId."','".$d->data->created."','".$d->data->id."','".$d->data->confidence."','".$d->data->activity."','".$d->projectIds[0]."','".$d->_creation_date."');";
		
		echo $i . " ";
		
		$results = mysqli_query($db,$sql);
	}
}


// -------------------------------
// probe_Gravity
// -------------------------------

function insertGravity() {

	global $db;

	$sql = "CREATE TABLE IF NOT EXISTS `probe_Gravity` (
	  `id` varchar(64) NOT NULL,
	  `participantId` varchar(32) NOT NULL,
	  `data_accuracy` int(11) NOT NULL,
	  `data_created` int(11) NOT NULL,
	  `data_id` int(11) NOT NULL,
	  `data_x` double NOT NULL,
	  `data_y` double NOT NULL,
	  `data_z` double NOT NULL,
	  `projectId` varchar(64) NOT NULL,
	  `creation_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
	
	$result = mysqli_query($db,$sql);
	
	if(!$result) {
		echo "error creating table probe_Gravity";
		exit;
	}
	
	echo "table probe_Gravity was created or existed already";
	
	$data = json_decode(file_get_contents("./cache/probe_Gravity.json"));
	
	echo "inserting " . count($data->data) . " items ";
	
	for($i = 0; $i < count($data->data); $i++) {
	
		$d = $data->data[$i];
		
		//print_r($d); exit;
	
		$sql = "INSERT INTO probe_Gravity (id,participantId,data_accuracy,data_created,data_id,data_x,data_y,data_z,projectId,creation_date)".
			   "VALUES ('".$d->id."','".$d->participantId."','".$d->data->accuracy."','".$d->data->created."','".$d->data->id."','".$d->data->x."','".$d->data->y."','".$d->data->z."','".$d->projectIds[0]."','".$d->_creation_date."');";
		
		echo $i . " ";
		
		$results = mysqli_query($db,$sql);
	}
}


// -------------------------------
// probe_Gyroscope
// -------------------------------

function insertGyroscope() {

	global $db;

	$sql = "CREATE TABLE IF NOT EXISTS `probe_Gyroscope` (
	  `id` varchar(64) NOT NULL,
	  `participantId` varchar(32) NOT NULL,
	  `data_accuracy` int(11) NOT NULL,
	  `data_created` int(11) NOT NULL,
	  `data_id` int(11) NOT NULL,
	  `data_x` double NOT NULL,
	  `data_y` double NOT NULL,
	  `data_z` double NOT NULL,
	  `projectId` varchar(64) NOT NULL,
	  `creation_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
	
	$result = mysqli_query($db,$sql);
	
	if(!$result) {
		echo "error creating table probe_Gyroscope";
		exit;
	}
	
	echo "table probe_Gyroscope was created or existed already";
	
	$data = json_decode(file_get_contents("./cache/probe_Gyroscope.json"));
	
	echo "inserting " . count($data->data) . " items ";
	
	for($i = 0; $i < count($data->data); $i++) {
	
		$d = $data->data[$i];
		
		//print_r($d); exit;
	
		$sql = "INSERT INTO probe_Gyroscope (id,participantId,data_accuracy,data_created,data_id,data_x,data_y,data_z,projectId,creation_date)".
			   "VALUES ('".$d->id."','".$d->participantId."','".$d->data->accuracy."','".$d->data->created."','".$d->data->id."','".$d->data->x."','".$d->data->y."','".$d->data->z."','".$d->projectIds[0]."','".$d->_creation_date."');";
		
		echo $i . " ";
		
		$results = mysqli_query($db,$sql);
	}
}


// -------------------------------
// probe_Light
// -------------------------------

function insertLight() {

	global $db;

	$sql = "CREATE TABLE IF NOT EXISTS `probe_Light` (
	  `id` varchar(64) NOT NULL,
	  `participantId` varchar(32) NOT NULL,
	  `data_accuracy` int(11) NOT NULL,
	  `data_created` int(11) NOT NULL,
	  `data_id` int(11) NOT NULL,
	  `data_lux` int(11) NOT NULL,
	  `projectId` varchar(64) NOT NULL,
	  `creation_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
	

	$result = mysqli_query($db,$sql);
	
	if(!$result) {
		echo "error creating table probe_Light";
		exit;
	}
	
	echo "table probe_Light was created or existed already";
	
	$data = json_decode(file_get_contents("./cache/probe_Light.json"));
	
	echo "inserting " . count($data->data) . " items ";
	
	for($i = 0; $i < count($data->data); $i++) {
	
		$d = $data->data[$i];
		
		//print_r($d); exit;
	
		$sql = "INSERT INTO probe_Light (id,participantId,data_accuracy,data_created,data_id,data_lux,projectId,creation_date)".
			   "VALUES ('".$d->id."','".$d->participantId."','".$d->data->accuracy."','".$d->data->created."','".$d->data->id."','".$d->data->lux."','".$d->projectIds[0]."','".$d->_creation_date."');";
		
		echo $i . " ";
		
		$results = mysqli_query($db,$sql);
	}
}


// -------------------------------
// probe_LinearAcceleration
// -------------------------------

function insertLinearAcceleration() {

	global $db;

	$sql = "CREATE TABLE IF NOT EXISTS `probe_LinearAcceleration` (
	  `id` varchar(64) NOT NULL,
	  `participantId` varchar(32) NOT NULL,
	  `data_accuracy` int(11) NOT NULL,
	  `data_created` int(11) NOT NULL,
	  `data_id` int(11) NOT NULL,
	  `data_x` double NOT NULL,
	  `data_y` double NOT NULL,
	  `data_z` double NOT NULL,
	  `projectId` varchar(64) NOT NULL,
	  `creation_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
	
	$result = mysqli_query($db,$sql);
	
	if(!$result) {
		echo "error creating table probe_LinearAcceleration";
		exit;
	}
	
	echo "table probe_LinearAcceleration was created or existed already";
	
	$data = json_decode(file_get_contents("./cache/probe_LinearAcceleration.json"));
	
	echo "inserting " . count($data->data) . " items ";
	
	for($i = 0; $i < count($data->data); $i++) {
	
		$d = $data->data[$i];
		
		//print_r($d); exit;
	
		$sql = "INSERT INTO probe_LinearAcceleration (id,participantId,data_accuracy,data_created,data_id,data_x,data_y,data_z,projectId,creation_date)".
			   "VALUES ('".$d->id."','".$d->participantId."','".$d->data->accuracy."','".$d->data->created."','".$d->data->id."','".$d->data->x."','".$d->data->y."','".$d->data->z."','".$d->projectIds[0]."','".$d->_creation_date."');";
		
		echo $i . " ";
		
		$results = mysqli_query($db,$sql);
	}
}


// -------------------------------
// probe_Location
// -------------------------------

function insertLocation() {

	global $db;

	$sql = "CREATE TABLE IF NOT EXISTS `probe_Location` (
	  `id` varchar(64) NOT NULL,
	  `participantId` varchar(32) NOT NULL,
	  `data_accuracy` int(11) NOT NULL,
	  `data_created` int(11) NOT NULL,
	  `data_id` int(11) NOT NULL,
	  `data_altitude` int(11) NOT NULL,
	  `data_bearing` int(11) NOT NULL,
	  `data_latitude` double NOT NULL,
	  `data_longitude` double NOT NULL,
	  `data_speed` int(11) NOT NULL,
	  `projectId` varchar(64) NOT NULL,
	  `creation_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
	

	$result = mysqli_query($db,$sql);
	
	if(!$result) {
		echo "error creating table probe_Location";
		exit;
	}

	
	echo "table probe_Location was created or existed already";
	
	$data = json_decode(file_get_contents("./cache/probe_Location.json"));
	
	echo "inserting " . count($data->data) . " items ";
	
	for($i = 0; $i < count($data->data); $i++) {
	
		$d = $data->data[$i];
		
		//print_r($d); exit;
	
		$sql = "INSERT INTO probe_Location (id,participantId,data_accuracy,data_created,data_id,data_altitude,data_bearing,data_latitude,data_longitude,data_speed,projectId,creation_date)".
			   "VALUES ('".$d->id."','".$d->participantId."','".$d->data->accuracy."','".$d->data->created."','".$d->data->id."','".$d->data->altitude."','".$d->data->bearing."','".$d->data->latitude."','".$d->data->longitude."','".$d->data->speed."','".$d->projectIds[0]."','".$d->_creation_date."');";
		
		echo $i . " ";
		
		$results = mysqli_query($db,$sql);
	}
}


// -------------------------------
// probe_RunningApplication
// -------------------------------

function insertRunningApplication() {

	global $db;

	$sql = "CREATE TABLE IF NOT EXISTS `probe_RunningApplication` (
	  `id` varchar(64) NOT NULL,
	  `participantId` varchar(32) NOT NULL,
	  `data_created` int(11) NOT NULL,
	  `data_id` int(11) NOT NULL,
	  `data_mClass` varchar(32) NOT NULL,
	  `data_mFlags` varchar(32) NOT NULL,
	  `data_mPackage` varchar(32) NOT NULL,
	  `projectId` varchar(64) NOT NULL,
	  `creation_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
	
	$result = mysqli_query($db,$sql);
	
	if(!$result) {
		echo "error creating table probe_RunningApplication";
		exit;
	}
	
	echo "table probe_RunningApplication was created or existed already";
	
	$data = json_decode(file_get_contents("./cache/probe_RunningApplication.json"));
	
	echo "inserting " . count($data->data) . " items ";
	
	for($i = 0; $i < count($data->data); $i++) {
	
		$d = $data->data[$i];
		
		//print_r($d); exit;
	
		$sql = "INSERT INTO probe_RunningApplication (id,participantId,data_created,data_id,data_mClass,data_mFlags,data_mPackage,projectId,creation_date)".
			   "VALUES ('".$d->id."','".$d->participantId."','".$d->data->created."','".$d->data->id."','".$d->data->mClass."','".$d->data->mFlags."','".$d->data->mPackage."','".$d->projectIds[0]."','".$d->_creation_date."');";
		
		echo $i . " ";
		
		$results = mysqli_query($db,$sql);
	}
}


// -------------------------------
// probe_Screen
// -------------------------------

function insertScreen() {

	global $db;

	$sql = "CREATE TABLE IF NOT EXISTS `probe_Screen` (
	  `id` varchar(64) NOT NULL,
	  `participantId` varchar(32) NOT NULL,
	  `data_created` int(11) NOT NULL,
	  `data_id` int(11) NOT NULL,
	  `data_screenOn` varchar(32) NOT NULL,
	  `projectId` varchar(64) NOT NULL,
	  `creation_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
	
	$result = mysqli_query($db,$sql);
	
	if(!$result) {
		echo "error creating table probe_Screen";
		exit;
	}
	
	echo "table probe_Screen was created or existed already";
	
	$data = json_decode(file_get_contents("./cache/probe_Screen.json"));
	
	echo "inserting " . count($data->data) . " items ";
	
	for($i = 0; $i < count($data->data); $i++) {
	
		$d = $data->data[$i];
		
		//print_r($d); exit;
	
		$sql = "INSERT INTO probe_Screen (id,participantId,data_created,data_id,data_screenOn,projectId,creation_date)".
			   "VALUES ('".$d->id."','".$d->participantId."','".$d->data->created."','".$d->data->id."','".$d->data->screenOn."','".$d->projectIds[0]."','".$d->_creation_date."');";
		
		echo $i . " ";
		
		$results = mysqli_query($db,$sql);
	}
}


// -------------------------------
// probe_Wifi
// -------------------------------

function insertWifi() {

	global $db;

	$sql = "CREATE TABLE IF NOT EXISTS `probe_Wifi` (
	  `id` varchar(64) NOT NULL,
	  `participantId` varchar(32) NOT NULL,
	  `data_created` int(11) NOT NULL,
	  `data_id` int(11) NOT NULL,
	  `data_BSSID` varchar(32) NOT NULL,
	  `data_SSID` varchar(32) NOT NULL,
	  `data_capabilities` varchar(128) NOT NULL,
	  `data_frequency` int(11) NOT NULL,
	  `data_level` int(11) NOT NULL,
	  `projectId` varchar(64) NOT NULL,
	  `creation_date` datetime NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8;";

	$result = mysqli_query($db,$sql);
	
	if(!$result) {
		echo "error creating table probe_Wifi";
		exit;
	}
	
	echo "table probe_Wifi was created or existed already";
	
	$data = json_decode(file_get_contents("./cache/probe_Wifi.json"));
	
	echo "inserting " . count($data->data) . " items ";
	
	for($i = 0; $i < count($data->data); $i++) {
	
		$d = $data->data[$i];
		
		//print_r($d); exit;
	
		$sql = "INSERT INTO probe_Wifi (id,participantId,data_created,data_id,data_BSSID,data_SSID,data_capabilities,data_frequency,data_level,projectId,creation_date)".
			   "VALUES ('".$d->id."','".$d->participantId."','".$d->data->created."','".$d->data->id."','".$d->data->BSSID."','".$d->data->SSID."','".$d->data->capabilities."','".$d->data->frequency."','".$d->data->level."','".$d->projectIds[0]."','".$d->_creation_date."');";
		
		//echo $sql; exit;
		
		echo $i . " ";
		
		$results = mysqli_query($db,$sql);
	}
}




?>