<?php

	include 'connectionDB.php';

	$fname = $_GET["firstname"];
	$lname = $_GET["lastname"];
	$address = $_GET["address"];
	$password = $_GET["password"];
	
	
	$sql = "INSERT INTO asd (fname, lname) VALUES ('" . $fname .  "','" . $lname . "')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>