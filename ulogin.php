<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]  == "POST"){
    include "partials/_dbconnect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
        
    $query = "select * from register where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $query);
	$num = mysqli_num_rows($result);
	if ($num == 1) {
		$showAlert = true;
		session_start();
		header("location: after_login_user.php");
	}
	else {
		$showError = true;
	}
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>User Login</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	
	<!-- <link rel="stylesheet" href="css/ulogin.css" /> -->

</head>

<body style="background-image: url('images/gym.png')">
  	<?php
		if ($login) {
			echo'<div class="alert alert-success d-flex align-items-center" role="alert">
        SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
		}

		if ($showError) {
			echo'<div class="alert alert-danger d-flex align-items-center" role="alert">
        UNSUCESSSSSS
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
		}
	?>
	<!-- partial:index.partial.html -->
	<div style="
        background-color: rgba(0, 0, 0, 0.607);
        width: 100%;
        height: 100%;
        display: inline-block;
      ">
		<form class="col-3">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1">
			</div>
			<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

	<!-- <div class="box-form">
			<div class="left" style="background-image: url('images/dumbess.jpg')">
				<div class="overlay">
					<h1>Powerhouse</h1>
					<h2>Gains is what you gain here</h2>
				</div>
			</div>

			<div class="right">
				<h5>Login</h5>
				<p>
					Want to be a member? <a href="#">Contact Us</a> it takes less than a
					minute
				</p>
				<form action="ulogin.php" method="post">
					<p>Email:</p>
                    <input type="email" name="email" placeholder="Enter Email Id" id="email" />
					<br>
					<p>Password:</p>
                    <input type="password" name="password" id="pwd_1" placeholder="Enter Password"/>
					<br>
					<br>
					<button type="submit">Login</button>
				</form>
				
				<div class="inputs">
				</div>
			</div>
		</div> -->
	</div>
</body>

</html>