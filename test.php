<?php
    $conn = new mysqli('localhost','root','','powerhouse');
    // error reporting (0);
    $query= "select * from check_in";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
    echo $total
    
?>