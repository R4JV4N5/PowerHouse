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