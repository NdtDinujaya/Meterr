<<?php 
	include('connectionDB.php');
	$sql = "SELECT waterMeterId  ,cid ,units, logTime  FROM `units` ;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["waterMeterId"]."</td>
        <td>".$row["cid"]."</td>
        <td>".$row["units"]."</td>
        <td>".$row["logTime"]."</td>

        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

 ?>