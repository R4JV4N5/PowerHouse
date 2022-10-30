<?php 
  include "partials/_dbconnect.php";

if($_SERVER["REQUEST_METHOD"]  == "POST"){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phno = $_POST['phno'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password']; 

//   if($password == $c_password){
    $query = "update register set(fname, lname, phno, password, c_password) 
      values('$fname', '$lname', '$phno', '$password', '$c_password') where email = '$email'";
    $result = mysqli_query($conn, $query); 

    if($result){
        header("location: profile.php");
    }
//   }else{
//     echo "Passwords don't match";
//   }   
}

 ?>