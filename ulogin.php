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
		header("location: after_login_user.html");
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

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
	
		<link rel="stylesheet" href="css/ulogin.css" />
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
		<div class="box-form">
			<div class="left" style="background-image: url('images/dumbess.jpg')">
				<div class="overlay">
					<h1>Powerhouse</h1>
					<h2>Gains is what you gain here</h2>
					<!-- <span>
						<p>Follow us here</p>
						<a href="https://www.facebook.com/groups/557118538870807/?ref=share"><i class="fa fa-facebook"
								aria-hidden="true"></i> Facebook</a>
						<a href="https://instagram.com/powerhousegym?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"
								aria-hidden="true"></i> Instagram</a>
					</span> -->
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

				<!-- <br /><br /> -->

				<!-- <div class="remember-me--forget-password">
					<label>
						<input type="checkbox" name="item" checked />
						<span class="text-checkbox">Show password</span>
					</label>
				</div> -->
			</div>
		</div>
	</div>
	<!-- partial -->
</body>

</html>