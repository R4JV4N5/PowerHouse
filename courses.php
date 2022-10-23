<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/course.css">
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

    <section class="courses" id="courses">
        <div class="heading my-4 py-4">
            <h3>our latest courses</h3>
        </div>

        <div class="box-container container">
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> mon - sat </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>weight lifting and diet planing classes</h3>
                    <a href="#" class="link-btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> mon - sat </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>weight lifting and diet planing classes</h3>
                    <a href="#" class="link-btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> mon - sat </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>weight lifting and diet planing classes</h3>
                    <a href="#" class="link-btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> mon - sat </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>weight lifting and diet planing classes</h3>
                    <a href="#" class="link-btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> mon - sat </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>weight lifting and diet planing classes</h3>
                    <a href="#" class="link-btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-6.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> mon - sat </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>weight lifting and diet planing classes</h3>
                    <a href="#" class="link-btn">read more</a>
                </div>
            </div>

        </div>
    </section>

    <?php 
    require 'partials/_footer.html'
    ?>
</body>

</html>