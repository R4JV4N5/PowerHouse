<html>
    <head>
        <title>Gym User List</title>
        <link rel="stylesheet" href="css/new_user.css" />
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
                                <a class="nav_items_inside" href="">Classes </a>
                            </li>
                            <li class="nav_items">
                                <a class="nav_items_inside" href="">Membership Options </a>
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
                                            <a href="new_user.html">Add Member</a>
                                            <a href="checkin.html">check-in-out</a>
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
        <table class='main' border= '2'>
                <tr>
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
$conn = new mysqli('localhost','root','','powerhouse');
// error reporting (0);
$query= "select * from register";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
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
    // echo $total;
}
?>
