<?php
	$emailid = $_POST['emailid'];
	// Database connection
  include "partials/_dbconnect.php";
  $checkin  = 'CheckIn';
  $checkout  = 'CheckOut';
  $showError = false;
  $already = false;

	if(isset($_POST['checkin'])){
        // Check if email exists in database 
      $check = "select * from register where email = '$emailid'";
      $result=  mysqli_query($conn, $check);
      $num = mysqli_num_rows($result); 

      // Check if email already checkedin 
    //   $check2 = "select * from check_in where email = '$emailid'";
    //   $result2=  mysqli_query($conn, $check2);

      if($num > 0){
        // if(mysqli_num_rows($result2)){
            $query = "insert into check_in (email_id) values('$emailid')";
            $query2 = "insert into logs (email_id, checkInOut) values('$emailid', '$checkin')";
            $data = mysqli_query($conn, $query);
            $data2 = mysqli_query($conn, $query2);   
        } else{
            $showError = true;
          }
      }

	
	if(isset($_POST['checkout'])){
			$query= "delete from check_in where email_id = '$emailid'";
			$query2 = "insert into logs (email_id, checkInOut) values('$emailid', '$checkout')";
			$data = mysqli_query($conn, $query);
			$data2 = mysqli_query($conn, $query2);
		}
?>

<html>

<head>
    <title>Check In & Check Out</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
        rel="stylesheet" />
    <style>
        .buttons {
            background: #ff4742;
            border: 1px solid #ff4742;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
            box-sizing: border-box;
            color: #ffffff;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: 800;
            line-height: 16px;
            min-height: 40px;
            outline: 0;
            padding: 12px 14px;
            text-align: center;
            text-rendering: geometricprecision;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
        }

        .buttons:hover,
        .buttons:active {
            background-color: initial;
            background-position: 0 0;
            color: #ff4742;
        }

        .buttons:active {
            opacity: 0.5;
        }

        .p {
            font-weight: 300;
            font-size: 25;
        }

        .main {
            margin: auto;
            width: 25%;
            padding-top: 20%;
            color: white;
        }

        .input {
            margin-left: 5em;
        }

        .buttons {
            margin-left: 27%;
            font-weight: 700;
        }

        h2 {
            color: white;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-size: 40;
            margin-bottom: 50px;
        }

        .main2 {
            background-color: rgba(0, 0, 0, 0.7);
            padding-bottom: 30px;
            height: 60.2em;
        }
    </style>
</head>

<body style="
      background-image: url('images/add_user_bg.jpg');
      background-repeat: no-repeat;
      background-size: 100%;
    ">
    <?php require "partials/_adminNav.php"; ?>
    <?php 
    if($showError){
       echo  '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style = "margin-top: 5em; margin-bottom:0.2em;">
                <b>Error! Checkin Unsuccessful!</b> Email not present in the database!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="
                padding-left: 1em;
                border: 0px;
                background-color: #f8d7da;">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
    
    if($already){
       echo  '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style = "margin-top: 5em; margin-bottom:0.2em;">
                <b>Error!</b> User already checked in!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="
                padding-left: 1em;
                border: 0px;
                background-color: #f8d7da;">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
  ?>

    <div class="main2">
        <form action="checkin.php" method="post" class="main">
            <center>
                <h2>CHECK IN & CHECK OUT</h2>
            </center>
            <span class="p"> Enter email id:</span><input type="email" name="emailid" class="input" />
            <br />
            <br />
            <div class="">
                <button name="checkin" class="buttons">CHECK IN</button>
                <button name="checkout" class="buttons" style="margin-left: 50px">
                    CHECK OUT
                </button>
            </div>
        </form>
    </div>
</body>

</html>