<?php
$servername = "localhost";
$username = "root";
$password = "Temp@1234";
$dbname = "ztocdb";

$conn = new mysqli("localhost", "root", "Temp@1234", "ztocdb");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM contact WHERE userid='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>