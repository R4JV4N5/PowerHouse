<?php
	$userid = $_POST['userid'];
	// Database connection
	$conn = new mysqli('localhost','root','','powerhouse');
	if(isset($_POST['checkin'])){
		if($conn->connect_error){
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
		} else {
			$query = "insert into check_in (user_id) values('$userid')";
			$data = mysqli_query($conn, $query);
			// echo "Registration successful";
			// echo "<br>";
		}
	}
	
	if(isset($_POST['checkout'])){
		if($conn->connect_error){
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
		} else {
			$query= "delete from check_in where user_id = '$userid'";
			$data = mysqli_query($conn, $query);
			// echo "deletion successful";
			// echo "<br>";
		}
	}
?>