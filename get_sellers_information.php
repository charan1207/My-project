<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db";
		$data=array();
		//$email=$_POST["email"];
		// Create connectio		
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM sellertable";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    // while($row = $result->fetch_assoc()) {
		    //     array_push($data,array('sname'=>$row["firstname"],'semail'=>$row["email"],'shopname'=>$row["lastname"]));
		    //   }
		     while($row = $result->fetch_assoc()) {
		         array_push($data,array('semail'=>$row["email"],'shopname'=>$row["storename"]));
		      }
		} else {
		    echo "0 results";
		}
		$conn->close();
		echo json_encode($data);
?>
