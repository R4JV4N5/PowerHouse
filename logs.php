<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerHouse - Logs</title>
    <style>
    table.main {
        margin-left: auto;
        margin-right: auto;
        margin-top: 5%;
    }

    th {
        padding: 15px;
    }

    td {
        text-align: center;
        padding: 1em;
    }
    .CheckIn{
        border-radius: 0.5em;
        background-color: #8FFFBA;
    }
    .CheckOut{
        border-radius: 0.5em;
        background-color: #FF8F91;
    }
    </style>
</head>

<body>
    <?php 
    require "partials/_adminNav.php"
?>

    <table class='main' border='2'>
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
</body>

</html>