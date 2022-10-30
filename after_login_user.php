<?php
 
 session_start();
 error_reporting(0);
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
  }
  else{
    include "partials/_dbconnect.php";
    $email1 = $_SESSION['email'];
    // $_SESSION['flag'] = 1;
    $query =  "select * from register where email = '$email1'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PowerHouse</title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Economica&family=Staatliches&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
        rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!--css linking-->
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>

    <?php
    require "partials/_nav.php";
  ?>

    <div class="Q_div">
        <video class="bg_video" autoplay loop muted>
            <source src="video/NewWebsiteHOME.webm" type="video/mp4" />
        </video>
        <center>
            <div class="Quote_div">
                <h2 class="quote">
                    The <span style="color: red; font-weight: 700;">pain</span> You feel today, Will be
                    your <span style="color: red; font-weight: 700;">Strength</span> tommorow
                </h2>
                <form action="member.php">
                    <button type="submit" class="join_button">Get started</button>
                </form>
                <p class="Q_para">
                    We do the hard work and you do all the heavy lifting. Get the body
                    you always wanted today!
                </p>
            </div>
        </center>
    </div>

    <div class="book_now_div">
        <center>
            <div class="head_text_div">
                <p class="head_text" id="head_text_1">COME FOR THE FITNESS</p>
                <center>
                    <hr class="head_hr" />
                </center>
                <p class="head_text" id="head_text_2">STAY FOR THE COMMUNITY</p>
            </div>
            <div class="book_now_para">
                <p class="bn_para">
                    PowerHouse isn't just a gym. It's a place where lives are
                    transformed. Where fear and intimidation give way to inspiration,
                    achievement & a renewed self-confidence. Where “I can't” becomes “I
                    did!” We are a family-run facility promoting family-centred fun,
                    fitness, wellness and community. Here you are a name and a person.
                    You have goals, and don't get a pat on the back just for showing up.
                    You become part of our family. We live by our mantra that <b>NOTHING IS
                        STRONGER THAN FAMILY..</b>
                </p>
            </div>

            <form action="member.php">
                <button type="submit" class="join_button">join now</button>
            </form>
        </center>
    </div>

    <div class="classes_div">
        <div class="classes_inner_div ">

            <div class="class_head">
                <center>
                    <p class="class_head_text_1">explore PowerHouse</p>
                    <center>
                        <hr class="head_hr" />
                    </center>
                    <p class="class_head_text_2">
                        Experience the best group excercise classes in our gym!
                    </p>
                </center>
            </div>
            <div class="classes_tabs_div">
                <center>
                    <table>
                        <tr>
                            <td class="classes_td">
                                <img class="classes_tabs" src="images/kickbboxing.jpg" alt="cardio_pic" />
                                <center>
                                    <p class="classes_names">kickboxing</p>
                                </center>
                            </td>
                            <td class="classes_td">
                                <img class="classes_tabs" src="images/poweryoga.jpg" alt="weight_lifting" />
                                <center>
                                    <p class="classes_names">Poweryoga</p>
                                </center>
                            </td>
                            <td class="classes_td">
                                <img class="classes_tabs" src="images/zumba.jpg" alt="weight_lifting" />
                                <center>
                                    <p class="classes_names">zumba</p>
                                </center>
                            </td>
                        </tr>
                    </table>

                    <form action="courses.php">
                        <button type="submit" class="explore_button">explore now
                        </button>
                    </form>
                </center>
            </div>
        </div>
    </div>
    <?php 
    require 'partials/_footer.html'
    ?>
</body>

</html>