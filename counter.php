<?php
  session_start();
  include "partials/_dbconnect.php";
  $query = "select * from check_in";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);

?>


<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/counter.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
        rel="stylesheet" />
</head>

<body>
    <?php 
      if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {
        require "partials/_nav.php";
      }else{
        require "partials/_adminNav.php";
      }
      ?>

    <center>
        <div class="num_container">
            <div class="count">
                <?php echo $total ?>
            </div>
        </div>
    </center>
</body>

</html>