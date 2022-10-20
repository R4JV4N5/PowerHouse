<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "powerhouse";

$conn = mysqli_connect($server, $username, $password, $database);
if($conn){
    echo "success";
}
else{
    die("ErroR: ". mysqli_connect_error());
}
?>