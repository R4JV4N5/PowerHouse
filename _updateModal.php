<?php 
    include "partials/_dbconnect.php";
    $email = $_GET['id'];
    $query =  "select * from register where email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $phno = $row['phno'];
    $doj = $row['date_join'];
    $doe = $row['date_end'];
?>

<?php
if($_SERVER["REQUEST_METHOD"]  == "POST"){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phno = $_POST['phno'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password']; 
    $doj = date('Y-m-d', strtotime($_POST['date-join']));
    $doe = date('Y-m-d', strtotime($_POST['date-end']));
    

    if(($password == $c_password) && $exists == false){
      $query = "update register set(fname, lname, phno, age, email, gender, password, c_password, date_join, date_end) 
        values('$fname', '$lname', '$phno', '$age', '$email', '$gender', '$password', '$c_password', '$doj', '$doe' )";
      $result = mysqli_query($conn, $query); 

      if($result){
        $showAlert = true;
      }
    }    
  }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerHouse - Update Details</title>
</head>

<body>
    <?php 
    require "partials/_adminNav.php"
?>

    <h3 class="text-center" style="margin-top:3em; margin-bottom:2em; font-weight:800;">UPDATE ACCOUNT DETAILS</h3>
    <!-- Account details card-->
    <div class="card mb-4" style="margin-right:3em; margin-left:3em;">
        <div class="card-header">Account Details</div>
        <div class="card-body">
            <form action="_updateModal.php" method="post">
                <!-- Form Group (username)-->
                <!-- Form Row-->
                <div class="row gx-3 mb-3">
                    <!-- Form Group (first name)-->
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputFirstName">First name</label>
                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name"
                            value=<?php echo $fname ?> />
                    </div>
                    <!-- Form Group (last name)-->
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputLastName">Last name</label>
                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name"
                            value=<?php echo $lname ?> />
                    </div>
                </div>
                <!-- Form Row        -->
                <!-- Form Group (email address)-->

                <!-- Form Row-->
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                        <input class="form-control" id="inputEmailAddress" type="email"
                            placeholder="Enter your email address" value=<?php echo $email ?> disabled=disabled />
                    </div>
                    <!-- Form Group (phone number)-->
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputPhone">Phone number</label>
                        <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number"
                            value=<?php echo $phno ?> />
                    </div>
                </div>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <label class="small mb-1" for="date-join">Joining Date</label>
                        <input class="form-control" type="date" id="date-join" name="date-end" value=<?php echo $doj ?>>
                    </div>
                    <div class="col-md-6">
                        <label class="small mb-1" for="date-end">Ending Date</label>
                        <input class="form-control" type="date" id="date-end" name="date-end" value=<?php echo $doe ?>>
                    </div>
                </div>
                <!-- Save changes button-->
                <button class="btn btn-primary" type="button">
                    Save changes
                </button>
            </form>
        </div>
    </div>

</body>

</html>