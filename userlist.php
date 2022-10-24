<html>
    <head>
        <title>Gym User List</title>
        <style>
            table.main{
                margin-left: auto; 
                margin-right: auto;
                margin-top: 5%;
            }
            th{
                padding: 15px;
            }
            td{
                padding: 15px;
            }
            .del-btn{
                padding: 10px 15px;
                color: white;
                border-radius: 6px;
                background-color: #f44336;
            }
            .up-btn{
                padding: 10px 15px;
                color: white;
                border-radius: 6px;
                background-color: #008CBA;
            }
            a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php require "partials/_adminNav.php"; ?>
        <table class='main' border= '2'>
                <tr style="text-align: center;">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Phone Number</th>
                    <th>Email Address</th>
                    <th colspan = 2>Operations</th>
                </tr>
    </body>
</html>
<?php
include "partials/_dbconnect.php";
// error reporting (0);
$query= "select * from register";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
echo $total;
// $result = mysqli_fetch_assoc($data);
while($result = mysqli_fetch_assoc($data)){
    echo "<tr>
        <td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['age']."</td>
        <td>".$result['phno']."</td>
        <td>".$result['email']."</td>
        <td><a href = '' class = 'up-btn'>Update</a></td>
        <td><a href = '' class = 'del-btn'>Delete</a></td>
    </tr>";
}
?>
