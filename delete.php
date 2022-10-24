<?php 
    include "partials/_dbconnect.php";
    $email = $_GET['id'];
    $query = "delete from register where email = '$email'";
    $data = mysqli_query($conn, $query);

    if($data){
        echo "Member deleted successfully";
        echo "<meta http-equiv='refresh' content='0; URL=userlist.php'>";
    }
    else{
        echo "failed";
    }
?>