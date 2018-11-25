<?php
session_start();
$email=$_SESSION['buyeremail'];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db";
		
		$walletamount=$_POST['number'];
		//$email=$_POST["email"];
		// Create connectio		
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "UPDATE buyertable SET wallet='number' WHERE email='$email'";
		$result = $conn->query($sql);
			if($result)
			{
				echo "added";
			}
			else
			{
				echo "fail";
			}
					$conn->close();

		
?>
