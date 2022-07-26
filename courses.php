<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerHouse - Courses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/course.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
        rel="stylesheet" />
</head>

<body>
    <?php 
        session_start();
        error_reporting(0);
      if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {
        require "partials/_nav.php";
      }else{
        require "partials/_adminNav.php";
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
                        <span> <i class="fas fa-calendar"></i> monday </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>Weight lifting classes</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> tuesday </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>Diet planning classes</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> wednesday </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>Post workout classes</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> thursday </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>Warmup and streching classes</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> friday </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>Kickboxing classes</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-6.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> saturday </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>CrossFit classes</h3>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/img-7.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> sunday </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>Calesthethics</h3>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/img-8.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icons">
                        <span> <i class="fas fa-calendar"></i> sunday </span>
                        <span> <i class="fas fa-clock"></i> 1 hours </span>
                    </div>
                    <h3>power yoga classes</h3>
                </div>
            </div>
            

        </div>
    </section>

    <?php 
    require 'partials/_footer.html'
    ?>
</body>

</html>