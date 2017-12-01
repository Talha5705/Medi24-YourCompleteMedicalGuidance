<?php
$sql = "SELECT hospital_name,info FROM hospital where ID=1";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Hospital Name: " . $row["hospital_name"]. " Information: " . $row["info"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>