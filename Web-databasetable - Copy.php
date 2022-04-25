
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
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
}

</style>
 </head>
<body>

	  <table>
  
  <tr>
	<th>UserID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Mobile</th>
	<th>City</th>
	<th>Subject</th>
	<th>Action</th>
  </tr>

   <br>
<button type="submit" formaction="ashu-form.php">Add new record</button>
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "Temp@1234";
$dbname = "ztocdb";

$conn = new mysqli("localhost", "root", "Temp@1234", "ztocdb");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM contact");

if (mysqli_num_rows($result) > 0) {
?>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["userid"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["number"]; ?></td>
	<td><?php echo $row["City"]; ?></td>
	<td><?php echo $row["sub"]; ?></td>
	<td><button type="update" formaction="update_row1.php">Update</button>
	<button type="delete" formaction="delete_row.php">Delete</button></td>
</tr>

<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>

 </body>
</html>