<html>
<body>

<form method = "post">
Enter Your Full Name: 
<input type="text" name="clientname" required="required" /><br><br>
Enter your email:  
<input type="email" name="email" required="required" /><br><br> 

Enter your Mobile Number:  
<input type="number" name="number" required="required" /><br><br>
Enter your City:  
<input type="text" name="City" required="required" /><br><br>
Enter Subject:  
<input type="text" name="sub" required="required" /><br><br>  
<input type="submit">
</form>


<?php

    $clientname = $_POST['clientname'];

        $email = $_POST['email'];

        $number = $_POST['number'];
        
        $City = $_POST['City'];

        $sub = $_POST['sub'];

echo "Form is accepted check your email"." ".$clientname.$email.$City.$number.$sub; 

$servername = "localhost";
$username = "root";
$password = "Temp@1234";
$dbname = "ztocdb";

$conn = new mysqli($servername,  $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}

$sql = "INSERT INTO contact (name, email, number , City, sub)
VALUES ('$clientname','$email',$number,'$City','$sub')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>

