<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/member.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
        rel="stylesheet" />
</head>

<body>
    <?php 
      session_start();
      if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
        require "partials/_nav.php";
      }else{
        require "partials/_nav2.php";
      }
      ?>
    <div class="wrapper">
        <div class="singleprice">
            <h1>Monthly</h1>
            <div class="price">
                <h2>₹1,000</h2>
            </div>
            <div class="deals">
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
            </div>
            <a href="#">Learn more</a>
        </div>
    </div>
    <div class="wrapper">
        <div class="singleprice">
            <h1>Quarterly</h1>
            <div class="price">
                <h2>₹2,800</h2>
            </div>
            <div class="deals">
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
            </div>
            <a href="#">Learn more</a>
        </div>
    </div>
    <div class="wrapper">
        <div class="singleprice">
            <h1>Annually</h1>
            <div class="price">
                <h2>₹11,000</h2>
            </div>
            <div class="deals">
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
                <h4>Hello</h4>
            </div>
            <a href="#">Learn more</a>
        </div>
    </div>


</body>

</html>