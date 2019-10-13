<?php

	include 'connectionDB.php';

	$waterMeterId = $_GET["waterMeterId"];
	$cid = $_GET["cid"];
	$units = $_GET["units"];
	date_default_timezone_set("Asia/Colombo");
	$logTime = date("Y-m-d h:i");
	
	
	$sql = "INSERT INTO units (waterMeterId, cid, units, logTime) VALUES ('" . $waterMeterId .  "','" . $cid . "','". $units. "','" . $logTime . "')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>