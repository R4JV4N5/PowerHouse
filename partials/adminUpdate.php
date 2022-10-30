<?php
if($_SERVER["REQUEST_METHOD"]  == "POST"){
    include "partials/_dbconnect.php";   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $doj = date('Y-m-d', strtotime($_POST['date-join']));
    $doe = date('Y-m-d', strtotime($_POST['date-end']));
    
    $exec = true;
    if($exec){
      $query = "UPDATE `register` SET `fname`='$fname',`lname`='$lname',`phno`='$phno', `date_join`='$doj',`date_end`='$doe' WHERE `email`='$email'";
      $result = mysqli_query($conn, $query); 

      if($result){
        echo "Updated Successfully!";
      }else
      {
        echo"Unsuccessful";
      }
    }    
  }
  ?>