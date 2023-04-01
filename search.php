<?php

$search = $_POST['search'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "medical record";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from medical_record where fname like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["fname"]."  ".$row["lname"]."  ".$row["age"]. "  ".$row["phone_number"]."  ".$row["gender"]."  ".$row["address"]."  ".$row["email"]."  ".$row["adate"]."  ".$row["ddate"]."  ".$row["reason"]."  ".$row["bp"]."  ".$row["sugar"]."  ".$row["history"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>