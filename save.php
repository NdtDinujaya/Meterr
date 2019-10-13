
<?php

	include 'connectionDB.php';

	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$address = $_POST["address"];
	$password = $_POST["password"];
	$email = $_POST["email"];

	$ewatermeterid = $_POST["ewatermeterid"];
	$cid = $_POST["cid"];
	$start_up_date = $_POST["start-up-date"];
	$extradetails = $_POST["extradetails"];
	$ewm_street_name = $_POST["ewm_street_name"];
	$ewm_street_number = $_POST["ewm_street_number"];
	$ewm_city = $_POST["ewm_city"];
	$country = $_POST["country"];

	$url = "index.php";
	$urlfail = "register.html";

	$sql = "INSERT INTO userInfo (firstname, lastname, address, password ,email ) VALUES ('" . $fname . "' , '" . $lname . "' , '" . $address . "' , '" . $password . "' , '" . $email . "');";

	if ($conn->query($sql) === TRUE) {
	    echo "New userinfo record created successfully";
		$sql = "INSERT INTO waterMeterDetails (cid ,extradetails, ewm_street_name, ewm_street_number, ewm_city, country ) VALUES (  $cid ,'" . $extradetails . "','" . $ewm_street_name . "','" . $ewm_street_number . "','" . $ewm_city . "','" . $country . "');";

		if ($conn->query($sql) === TRUE) {
		     echo "<br> New waterMeterDetails record created successfully";
		     header("Location:" . $url);
		 } else {
		     echo "Error: " . $sql . "<br>" . $conn->error;
		      header("Location:" . $urlfail);
		 }
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	     header("Location:" . $urlfail);

	}

	 


	$conn->close();

?>
