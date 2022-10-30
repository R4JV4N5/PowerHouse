<?php
  session_start();
  error_reporting(0);
  // set todays date
  $month = date('m');
  $day = date('d');
  $year = date('Y');

  $today = $year . '-' . $month . '-' . $day;

  $showAlert = false;
  $exists = false;
  session_start();
  if($_SERVER["REQUEST_METHOD"]  == "POST"){
    include "partials/_dbconnect.php";
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
    
    $check = "select * from register where email = '$email'";
    $result2 =  mysqli_query($conn, $check);
    $num = mysqli_num_rows($result2);
    if($num != 0){
        $exists = true;
    }

    if(($password == $c_password) && $exists == false){
      $query = "insert into register(fname, lname, phno, age, email, gender, password, c_password, date_join, date_end) 
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PowerHouse - Add Member</title>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Economica&family=Staatliches&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/new_user.css" />

</head>


<body style="background-image: url('images/add_user_bg.jpg');">

    <?php require "partials/_adminNav.php"; ?>

    <?php
    if($showAlert){
      echo'<div class="alert alert-success d-flex align-items-center" role="alert">
        New Member added successfully
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }  
    
    if($exists){
      echo'<div class="alert alert-danger d-flex align-items-center my-3" role="alert">
        <b>Error!</b> Member not addded. Email Id already exists!
        <button type="button" class="btn-close mx-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }  
  ?>
    <center>
        <div class="form_div" style="margin-top: 4em;">
            <table>
                <tr>
                    <td width="40%">
                        <div class="left_quote">
                            <p>Journey of new warrior begins</p>
                        </div>
                    </td>
                    <td width="60%">
                        <div class="add_user_form">
                            <center>
                                <p class="add_u" style="font-weight: 800; margin-top: 0;">ADD MEMBER</p>
                                <hr width="100%" />
                                <form onsubmit="return validate();" action="new_user.php" method="post">
                                    <table>
                                        <tr>
                                            <td style="margin-right: 1em;">
                                                <p class="form-left">First Name:</p>
                                                <input type="text" name="fname" placeholder="Enter First Name"
                                                    id="fname" />
                                            </td>
                                            <td>
                                                <p>Last Name:</p>
                                                <input type="text" name="lname" placeholder="Enter Last Name"
                                                    id="lname" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="form-left">Phone number:</p>
                                                <input type="number" name="phno" id="Phno"
                                                    placeholder="Enter Phone Number" />
                                            </td>
                                            <td>
                                                <p>Age:</p>
                                                <input type="number" name="age" id="age" placeholder="Enter Age" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="form-left">Email:</p>
                                                <input type="email" name="email" placeholder="Enter Email Id"
                                                    id="email" />
                                            </td>
                                            <td>
                                                <p>Gender:</p>
                                                <select name="gender" id="gender">
                                                    <option value="select-gender">Select gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="form-left">Password:</p>
                                                <input type="password" name="password" id="pwd_1"
                                                    placeholder="Enter Password" />
                                            </td>
                                            <td>
                                                <p class="form-left">Confirm Password:</p>
                                                <input type="password" name="c_password" id="pwd_2"
                                                    placeholder="Re-enter Password" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="mb-3 form-check" style="margin-top: 0.5em;">
                                                    <input type="checkbox" class="form-check-input" id="show-check"
                                                        style="height: 1em; width: 1em;" onclick="showPass()">
                                                    <label class="form-check-label" for="show-check">Show
                                                        Password</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="form-left">Joining Date</p>
                                                <input type="date" id="date-join" name="date-join"
                                                    value="<?php echo $today; ?>">
                                            </td>
                                            <td>
                                                <p class="form-left">Ending Date</p>
                                                <input type="date" id="date-end" name="date-end"
                                                    value="<?php echo $today; ?>">
                                            </td>
                                        </tr>
                                    </table>
                                    <center>
                                        <input class="submit_button" type="submit" value="Add Member" name="submit"
                                            style="margin-top: 3em;" />
                                    </center>
                                </form>
                            </center>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </center>
</body>

</html>

<script>
function showPass() {
    var show = document.getElementById('pwd_1');
    var show2 = document.getElementById('pwd_2');
    if (show.type == 'password' && show2.type == 'password') {
        show.type = 'text';
        show2.type = 'text';
    } else {
        show.type = 'password';
        show2.type = 'password';
    }
}
</script>