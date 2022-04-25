<?php

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$servername = "localhost";
$username = "root";
$password = "Temp@1234";
$db = "classDB";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO students(name,age,gender) VALUES('$name', $age, '$gender')";

if ($conn->query($sql) === TRUE) {
	echo "ADDED: ".$name.", ".$age.", ".$gender;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>
