<?php
 error_reporting (0);
  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
  }else{
  include "partials/_dbconnect.php";
  $email1 = $_SESSION['email'];
  $query =  "select * from register where email = '$email1'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $fname = $row['fname'];
  $lname = $row['lname'];
  $email = $row['email'];
  $phno = $row['phno'];
  $password = $row['password'];
  $c_password = $row['c_password'];
  $doj = $row['date_join'];
  $doe = $row['date_end'];
}
?>

<?php

session_start();
if($_SERVER["REQUEST_METHOD"]  == "POST"){
    include "_dbconnect.php";   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phno = $_POST['phno'];
    $email = $_SESSION['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    if($password == $c_password){
      $query = "UPDATE `register` SET `fname`='$fname',`lname`='$lname',`phno`='$phno', `password`='$password',`c_password`='$c_password' WHERE `email`='$email'";
      $result = mysqli_query($conn, $query); 

      if($result){
        echo "Updated Successfully!";
      }else
      {
        echo"Unsuccessful";
      }
    }else{
        echo "Passwords don't match";   
    } 
  }
  ?>




<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PowerHouse - Profile</title>
    <link rel="stylesheet" href="css/profile.css" />
</head>

<body>
    <?php require "partials/_nav.php"; ?>

    <div class="row my-5 py-5 mx-3">
        <!-- <div class="col-xl-4">
        Profile picture card
        <div class="card mb-4 mb-xl-0">
          <div class="card-header">Profile Picture</div>
          <div class="card-body text-center">
            Profile picture image
            <img
              class="img-account-profile rounded-circle mb-2"
              src="http://bootdey.com/img/Content/avatar/avatar1.png"
              alt=""
            />
            Profile picture help block
            <div class="small font-italic text-muted mb-4">
              JPG or PNG no larger than 5 MB
            </div>
            Profile picture upload button
            <button class="btn btn-primary" type="button">
              Upload new image
            </button>
          </div>
        </div>
      </div> -->

        <div class="col-xl-8 ">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="profile.php" method="POST">
                      <p>* Please Note: In order to change your account email address, contact reception at PowerHouse.</p>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="fname">First name</label>
                                <input class="form-control" id="fname" name='fname' type="text"
                                    placeholder="Enter your first name" value=<?php echo $fname ?> />
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="lname">Last name</label>
                                <input class="form-control" id="lname" name='lname' type="text"
                                    placeholder="Enter your last name" value=<?php echo $lname ?> />
                            </div>
                        </div>

                        <!-- Form Group (email address)-->
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="email">Email address</label>
                                <input class="form-control" id="email" name='email' type="email"
                                    placeholder="Enter your email address" disabled value=<?php echo $email ?> />
                            </div>
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="phno">Phone number</label>
                                <input class="form-control" id="phno" name='phno' type="tel"
                                    placeholder="Enter your phone number" value=<?php echo $phno ?> />
                            </div>
                        </div>

                        <!-- password  -->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="password">Password</label>
                                <input class="form-control" id="password" name='password' type="password"
                                    placeholder="Enter new password" value=<?php echo $c_password ?> />
                            </div>
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="c_password">Confirm Password</label>
                                <input class="form-control" id="c_password" name='c_password' type="password"
                                    placeholder="Confirm your new password" value=<?php echo $c_password ?> />
                            </div>
                        </div>
                        <div class="mb-3 form-check" style="margin-top: 0.5em;">
                            <input type="checkbox" class="form-check-input" id="show-check"
                                style="height: 1em; width: 1em;" onclick="showPass()">
                            <label class="form-check-label" for="show-check">Show
                                Password</label>
                        </div>

                        <!-- date  -->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="date-join">Date of Joining</label>
                                <input class="form-control" id="date-join" type="text" value=<?php echo $doj ?>
                                    disabled="disabled" />
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="date-end">Date of Ending</label>
                                <input class="form-control" id="date-end" type="text" name="date-end"
                                    value=<?php echo $doe ?> disabled="disabled" />
                            </div>
                        </div>

                        <!-- Save changes button-->
                        <input class="btn btn-primary" type="submit" value="Save Changes" name="submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
function showPass() {
    var show = document.getElementById('password');
    var show2 = document.getElementById('c_password');
    if (show.type == 'password' && show2.type == 'password') {
        show.type = 'text';
        show2.type = 'text';
    } else {
        show.type = 'password';
        show2.type = 'password';
    }
}
</script>

</html>