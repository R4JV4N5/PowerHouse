<html>
    <head>
        <title>Gym User List</title>
    </head>
    <body>
        <table border= '2'>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Phone Number</th>
        <th>Email Address</th>
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
    </tr>";
}
?>