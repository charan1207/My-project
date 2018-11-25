
<?php 
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$email;
	$password;
	$database=db;

	$conn = new mysqli("$servername","$username","","$database");

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}

	$fname = $_POST["Firstname"];
	$lname = $_POST["lastname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["Address"];
	$pan = $_POST["PAN"];
	$password = $_POST["password"];
	$storename = $_POST["storename"];
	$wallet=0;

	$sql = "INSERT INTO sellertable VALUES ('$fname','$lname','$pan','$email','$password','$address','$phone','$storename','$wallet')";

	if ($conn->query($sql) === TRUE)
	{
	    $_SESSION['email'] = $email;
	    header('location:sellerdashboard.php');
	} 
	else
	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	} 
?>