<!DOCTYPE html>
<html>
 <head>
   <title>ztocdb Table</title>
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

a:link { text-decoration: none; 
color: black;}


a:visited { text-decoration: none; }


a:hover { text-decoration: none; }


a:active { text-decoration: none; }
</style>
 </head>
<body>
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

			<form>
			<button type="submit" formaction="ashu-form.php">Add new record</button>
	  	</form>
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
		<td><button><a href="update_row1.php?userid=<?php echo $row["userid"]; ?>" onclick="return updatepage()">Update</a></button>
		<button><a href="delete_row.php?userid=<?php echo $row["userid"]; ?>"onclick="return checkdelete()">Delete</a></button></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
<script>
	function checkdelete() 
	{
		return confirm('Are you sure to delete this record ?');
	}
</script>

<script>
	function updatepage()
	{
		return confirm('Are you sure to update this Data ? ');
	}

</script>

 </body>
</html>