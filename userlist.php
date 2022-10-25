<html>

<head>
    <title>Gym User List</title>
    <style>
    table.main {
        margin-left: auto;
        margin-right: auto;
    }

    th {
        padding: 15px;
    }

    td {
        padding: 15px;
    }

    .del-btn {
        padding: 10px 15px;
        color: white;
        border-radius: 6px;
        background-color: #f44336;
    }

    .up-btn {
        padding: 10px 15px;
        color: white;
        border-radius: 6px;
        background-color: #008CBA;
    }

    a {
        text-decoration: none;
    }
    </style>
</head>

<body>
    <?php require "partials/_adminNav.php"; ?>
    <h3 class="text-center" style= "margin-top:4em; font-weight:800;">GYM USER DETAILS</h3>
    <table class='main' border='2'>
        <tr style="text-align: center;">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th colspan=2>Operations</th>
        </tr>
</body>

</html>
<?php
include "partials/_dbconnect.php";
$query= "select * from register";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
echo $total;
while($result = mysqli_fetch_assoc($data)){
    echo "<tr>
        <td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['age']."</td>
        <td>".$result['phno']."</td>
        <td>".$result['email']."</td>
        <td><a href= '_updateModal.php?id=$result[email]' class = 'up-btn'>Update</a></td>
        <td><a href= 'delete.php?id=$result[email]' class = 'del-btn'>Delete</a></td>
    </tr>";
}

?>