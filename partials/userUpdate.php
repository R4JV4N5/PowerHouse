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