<!DOCTYPE html>
<html>
<head>
<title>Database html</title>
<style>

table {
border-collapse: collapse;
width: 100%;
color: darkcyan;
font-size: 20px;
text-align: left;
}

th {
background-color: darkcyan;
color: white;
width: 25%;
}

</style>
</head>

<body>

<table>

<tr>
<th>studentid</th>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "Temp@1234", "classDB");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT studentid, name, age, gender FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["studentid"]. "</td><td>" . $row["name"] . "</td><td>" . $row["age"]. "</td><td>". $row["gender"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
</body>
</html>
