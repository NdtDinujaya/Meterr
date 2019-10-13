<?php
	//Connect to database
    $servername = "localhost";
    $username = "root";		//put your phpmyadmin username.(default is "root")
    $password = "";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "";
    
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Create database
	$sql = "CREATE DATABASE ewatermeter";
	if ($conn->query($sql) === TRUE) {
	    echo "Database created successfully";
	} else {
	    echo "Error creating database: " . $conn->error;
	}

	echo "<br>";

	$dbname = "ewatermeter";
    
	$conn = new mysqli($servername, $username, $password, $dbname);
	// sql to create table
	$sql = "CREATE TABLE IF NOT EXISTS `units` (
  		`id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  		`waterMeterId` int(11) DEFAULT NULL,
  		`cid` int(11) NOT NULL,
  		`units` int(100) NOT NULL,
  		`logTime` DATETIME DEFAULT NULL,
  		PRIMARY KEY (`id`),
  		FOREIGN KEY (waterMeterId) REFERENCES waterMeterDetails(waterMeterId),
  		FOREIGN KEY (cid) REFERENCES userInfo(cid)
		) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10";

	if ($conn->query($sql) === TRUE) {
	    echo "Table logs created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}

	$sql = "CREATE TABLE IF NOT EXISTS `userInfo` (
 		`cid` int(11) NOT NULL AUTO_INCREMENT,
 		`firstname` varchar(100) NOT NULL,
 		`lastname` varchar(100) NOT NULL,
 		`address` varchar(100) NOT NULL,
 		`password` varchar(100) NOT NULL,
 		`email` varchar(100) NOT NULL,
 		PRIMARY KEY (`cid`)
		) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10";

	if ($conn->query($sql) === TRUE) {
	    echo "Table users created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}

	$sql = "CREATE TABLE IF NOT EXISTS `waterMeterDetails` (
 		`waterMeterId` int(11) NOT NULL AUTO_INCREMENT,
 		`cid` int(11) DEFAULT NULL,
 		`ewm_street_name` varchar(100) DEFAULT NULL,
 		`ewm_street_number` varchar(100) DEFAULT NULL,
 		`ewm_city` varchar(100) DEFAULT NULL,
 	    `country` varchar(100) DEFAULT NULL,
 		`extradetails` varchar(500) DEFAULT NULL,
 		PRIMARY KEY (`waterMeterId`)
		) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10";

	if ($conn->query($sql) === TRUE) {
	    echo "Table users created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}
		
	$conn->close();
?>