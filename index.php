<?php
session_start();
$_SESSION['loggedin'] = false;
// $_SESSION['admin'] = false; 
// $_SESSION['user'] = true;
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]  == "POST"){
    include "partials/_dbconnect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
        
    $query = "select * from register where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $query);
	$num = mysqli_num_rows($result);
	if ($num == 1) {
		$login =  true;
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['flag'] = 0;
		header("location: after_login_user.php");
	}
	else {
		$showError = true;
	}
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

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!--css linking-->
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>

    <?php 
    require 'partials/_nav.php'
  ?>

    <?php 
    if($showError){
       echo  '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style = "margin-top: 1.75em; margin-bottom:0.2em;">
                Invalid credentials!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="
                padding-left: 1em;
                border: 0px;
                background-color: #f8d7da;">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
  ?>

    <div class="Q_div">
        <video class="bg_video" autoplay loop muted>
            <source src="video/NewWebsiteHOME.webm" type="video/mp4" />
        </video>
        <center>
            <div class="Quote_div">
                <h2 class="quote">
                    The <span style="color: red; font-weight: 700">pain</span> You feel
                    today, Will be your
                    <span style="color: red; font-weight: 700">Strength</span> tommorow
                </h2>
                <form action="html/member.html">
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
                    You become part of our family. We live by our mantra that
                    <b>NOTHING IS STRONGER THAN FAMILY..</b>
                </p>
            </div>

            <form action="/html/login.html">
                <button type="submit" class="join_button">join now</button>
            </form>
        </center>
    </div>

    <div class="classes_div">
        <div class="classes_inner_div">
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

                    <form action="/html/classes.html">
                        <button type="submit" class="explore_button">explore now</button>
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