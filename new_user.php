<?php
  $showAlert = false;
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
    $exists = false;
        
    if(($password == $c_password) && $exists == false){
      $query = "insert into register(fname, lname, phno, age, email, gender, password, c_password) 
        values('$fname', '$lname', '$phno', '$age', '$email', '$gender', '$password', '$c_password' )";
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
  <title>New User</title>
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Economica&family=Staatliches&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
    rel="stylesheet" />
    <!-- bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> -->
  <link rel="stylesheet" href="css/new_user.css" />

  <!-- <script>
        function show_pass() {
        var x = document.getElementById("show_pass");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
  </script> -->
</head>


<body style="background-image: url('images/add_user_bg.jpg');">
  <!-- <div class="nav_bar">
    <table style="width: 100%">
      <tr>
        <td>
          <div>
            <h3 class="m_logo">PowerHouse</h3>
          </div>
        </td>
        <td>
          <div class="nav_buttons">
            <ul class="u_list">
              <li class="nav_items">
                <a class="nav_items_inside" href="Courses.html">Classes </a>
              </li>
              <li class="nav_items">
                <a class="nav_items_inside" href="member.html">Membership</a>
              </li>
              <li class="nav_items">
                <a class="nav_items_inside" href="">Blogs </a>
              </li>
              <li class="nav_items">
                <a class="nav_items_inside" href="">About us</a>
              </li>
              <li class="nav_items">
                <div class="dropdown">
                  <a class="dropbtn">Options</a>
                  <div class="dropdown-content">
                    <a href="#">Add Member</a>
                    <a href="checkin.html">Check-In-Out</a>
                    <a href="userlist.php">Users List</a>
                    <a href="#">user Activities</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </td>
      </tr>
    </table>
  </div> -->
  
  <?php require "partials/_adminNav.php"; ?>

  <?php
    if($showAlert){
      echo'<div class="alert alert-success d-flex align-items-center" role="alert">
        An example success alert with an icon
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }  
  ?>
  <center>
    <div class="form_div" style="margin-top: 8em;">
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
                <p class="add_u" style="font-weight: 800;">ADD MEMBER</p>
                <hr width="100%" />
                <form onsubmit="return validate();" action="new_user.php" method="post">
                  <table>
                    <tr>
                      <td>
                        <p>First Name:</p>
                        <input type="text" name="fname" placeholder="Enter First Name" id="fname" />
                      </td>
                      <td>
                        <p>Last Name:</p>
                        <input type="text" name="lname" placeholder="Enter Last Name" id="lname" />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p>Phone number:</p>
                        <input type="number" name="phno" id="Phno" placeholder="Enter Phone Number" />
                      </td>
                      <td>
                        <p>Age:</p>
                        <input type="number" name="age" id="age" placeholder="Enter Age"/>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p>Email:</p>
                        <input type="email" name="email" placeholder="Enter Email Id" id="email" />
                      </td>
                      <td>
                        <p>Gender:</p>
                        <input type="radio" style="width: 1.25em" name="gender" value="male" /><span>Male</span>
                        <input type="radio" style="width: 1.25em" name="gender" value="female" /><span>Female</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p>Password:</p>
                        <input type="password" name="password" id="pwd_1" placeholder="Enter Password"/>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p>Confirm Password:</p>
                        <input type="password" name="c_password" id="pwd_2" placeholder="Re-enter Password"/>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="checkbox" style="width: 1.5em" name="show_pass" id="show_pass" onclick="show_pass()"/><span> Show
                          Password</span>
                      </td>
                    </tr>
                  </table>
                  <center>
                    <input class="submit_button" type="submit" value="Add Member" name="submit" />
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