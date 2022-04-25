<?php

$servername = "localhost";
$username = "root";
$password = "Temp@1234";
$dbname = "ztocdb";

$conn = new mysqli("localhost","root","Temp@1234","ztocdb");

if ($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE contact set userid='" . $_POST['userid'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', number='" . $_POST['number'] . "' ,City='" . $_POST['City'] . "' ,sub='" . $_POST['sub'] . "' WHERE userid='" . $_POST['userid'] . "'");

}
$result = mysqli_query($conn,"SELECT * FROM contact WHERE userid='" . $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Contact Data</title>
<style>
        table {
border-collapse: collapse;
width: 100%;
color: darkcyan;
font-size: 20px;
text-align: left;
}
</style>
</head>
<body>
    <table>
<form method="post" action="">
<div>
</div>
<div style="padding-bottom:5px;">
<a href="Web-databasetable.php">Web-Databasetable</a>
</div>
UserID: <br>
<input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
<input type="text" name="userid"  value="<?php echo $row['userid']; ?>">
<br>
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Mobile:<br>
<input type="text" name="number" class="txtField" value="<?php echo $row['number']; ?>">
<br>
City:<br>
<input type="text" name="City" class="txtField" value="<?php echo $row['City']; ?>">
<br>
Subject:<br>
<input type="text" name="sub" class="txtField" value="<?php echo $row['sub']; ?>">
<br>

<input type="submit" name="submit" value="Update" class="button">

</form>
</table>

<?php if(isset($_POST['submit'])) { 
    echo file_get_contents("update1.php");
 } 
 ?>

</body>
</html>