<html>

<head>
    <title>Gym User List</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
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
    </script>
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
        <td><a href= '_updateModal.php?id=$result[email]' class = 'up-btn'>Update</a></td>
        <td><a href= 'delete.php?id=$result[email]' class = 'del-btn'>Delete</a></td>
    </tr>";
}

// include "_updateModal.php";

?>