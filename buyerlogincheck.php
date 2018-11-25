
<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database="db";
	$email;

	//$password;
    $f1=0;$f2=0;
	// Create connection
	$conn = new mysqli($servername, $username, $password,$database);
	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
		$f1=($_POST['email']);
		$f2=($_POST['password']);


$sql = "SELECT * from buyertable WHERE email='$f1' AND password='$f2'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    	$_SESSION['buyeremail']=$f1;
    	header('location:buyerdashboard.php');
    
} else {
    echo "0 results";
}
	$conn->close();
?>
