<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerHouse - Logs</title>
    <style>
    table {
        background-color: rgba(0, 0, 0, 0.4);;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 5%;
    }
    
    th {
        padding: 15px;
    }

    td {
        text-align: center;
        padding: 1em;
    }
    .CheckIn{
        color: black;
        border-bottom: solid black 1px;
        border-radius: 0.5em;
        background-color: #8FFFBA;
    }
    .CheckOut{
        color: black;
        border-bottom: solid black 1px;
        border-radius: 0.5em;
        background-color: #FF8F91;
    }

    .main{
        margin-top: 5%;
        color: white;
    }

    .main h3{
        font-weight: 800;
        margin-bottom: 1em;
    }
    </style>
</head>

<body style="background-image: url('images/counter_bg.jpg');
    background-size: 100%;
    background-repeat: no-repeat;">
    <?php 
      error_reporting(0);
    require "partials/_adminNav.php"
?>

<div class="main">
<h3 class="text-center">LOGS</h3>
    <table border='2'>
        <tr style="text-align: center; border-bottom: 1px solid black;">
            <th>Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Check In - Check Out</th>
            <th>Time</th>
        </tr>

        <?php
            include "partials/_dbconnect.php";
            $query= "select * from logs";
            $data = mysqli_query($conn, $query);
            while($result = mysqli_fetch_assoc($data)){
                $email = $result['email_id'];
                $query2 = "select * from register where email = '$email'";
                $data2 = mysqli_query($conn, $query2);
                while($row = mysqli_fetch_assoc($data2)){
                    $fullName = $row['fname']." ".$row['lname'];
                    echo "<tr>
                    <td>".$fullName."</td>
                    <td>".$result['email_id']."</td>
                    <td>".$row['phno']."</td>
                    <td class=".$result['checkInOut'].">".$result['checkInOut']."</td>
                    <td>".$result['time']."</td>
                </tr>";
                }
            }
        ?>
    </table>
</div>    

</body>

</html>