
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
	$wallet=3500;

	$sql = "INSERT INTO buyertable VALUES ('$fname','$lname','$pan','$email','$address','$phone','$password','$wallet')";

	if ($conn->query($sql) === TRUE)
	{
	    $_SESSION['email'] = $email;
	    echo "Wellcome to Fruit market";
	    header('location:buyerdashboard.php');
	} 
	else
	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	} 
?>