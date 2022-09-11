<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phno = $_POST['phno'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];

	// Database connection
	$conn = new mysqli('localhost','root','','powerhouse');
	if(isset($_POST['submit'])){
		if($conn->connect_error){
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
		} else {
			$stmt = $conn->prepare("insert into register(fname, lname, phno, age, email, gender, password, c_password) values(?, ?, ?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("ssiissss", $fname, $lname, $phno, $age, $email, $gender ,$password, $c_password);
			$execval = $stmt->execute();
			echo $execval;
			
			echo "Registration successful";
			echo "<br>";
			$stmt->close();
			$conn->close();
		}
	}
?>
<meta http-equiv = "refresh" content = "2; url = http://localhost/PowerHouse/new_user.html" />