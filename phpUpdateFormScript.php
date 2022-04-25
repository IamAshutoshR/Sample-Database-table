<?php

		$id = $_POST["id"];
		$clientname = $_POST['clientname'];

        $email = $_POST['email'];

        $number1 = $_POST['number1'];
        
        $City = $_POST['City'];

        $sub = $_POST['sub'];

$servername = "localhost";
$username = "root";
$password = "Temp@1234";
$db = "ztocdb";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "UPDATE Contact SET Name='$clientname', Email='$email', Mobile='$number1', City='$City', Subject='$sub' where id='$id'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$id."-".$name."-".$age."-".$gender;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>