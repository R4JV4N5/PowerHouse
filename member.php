<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerHouse - Membership Plans</title>
    <link rel="stylesheet" href="css/member.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
        rel="stylesheet" />
</head>

<body>
    <?php 
      session_start();
      if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {
        require "partials/_nav.php";
      }else{
        require "partials/_adminNav.php";
      }
      ?>
    <div class="wrapper">
        <div class="singleprice">
            <h1>Silver</h1>
            <div class="price">
            <h2></h2>
            <h2>Price</h2>
            <h2>₹</h2>
            <h2>5,000</h2>
            </div>
            <div class="deals">
                <h4>Weights</h4>
                <h4>Cardio</h4>
                <h4>Yoga Room</h4>
                
            </div>
            <a href="https://wa.me/+919029020360">Learn more</a>
        </div>
        <div class="singleprice">
            <h1>Gold</h1>
            <div class="price">
            <h2></h2>
            <h2>Price</h2>
            <h2>₹</h2>
            <h2>10,000</h2>
            </div>
            <div class="deals">
                <h4>Silver</h4>
                <h4>Steam</h4>
                <h4>Sauna</h4>
            </div>
            <a href="https://wa.me/+919029020360">Learn more</a>
        </div>
        <div class="singleprice">
            <h1>Platinum</h1>
            <div class="price">
            <h2></h2>
            <h2>Price</h2>
            <h2>₹</h2>
            <h2>15,000</h2>
            </div>
            <div class="deals">
                <h4>Silver</h4>
                <h4>Gold</h4>
                <h4>Personal sTrainer</h4>
            </div>
            <a href="https://wa.me/+919029020360">Learn more</a>
        </div>
    </div>


</body>

</html>