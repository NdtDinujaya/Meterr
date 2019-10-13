<?php
include 'connectionDB.php';
$url = "dashboard.php";
$urlfail = "index.php";

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM userInfo WHERE email='" . $email . "' AND password='" . $pass ."';" ;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $email . " - Name: " . $pass . "<br>";
    }
    
     header("Location:" . $url);
} else {
    header("Location:" . $urlfail);
}



$conn->close();
?>