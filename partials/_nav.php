<?php
  include "partials/_dbconnect.php";
  $loggedin = $_SESSION['loggedin'];
  if($loggedin){
    $email1 = $_SESSION['email'];
    $query =  "select * from register where email = '$email1'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
  }

?>
<!-- font -->
  <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
    rel="stylesheet" />

<!-- css -->
  <style>
    .nav-link {
        color: white;
        border-radius: 0.5rem;
        font-size: 1.25em;
    }

    .nav-link:hover {
        background-color: orangered;
    }

    .m_logo {
        color: white;
        font-size: 2rem;
        font-family: "Bungee";
        text-decoration: none;
    }

    .m_logo:hover {
        color: white;
    }

    .btn-primary {
        background-color: orangered;
    }

    .profile_img {
        height: 2em;
        border-radius: 1em;
    }
  </style>

<?php echo '<nav class="navbar fixed-top navbar-expand-lg navbar-expand-md bg-dark">
    <div class="container-fluid">
        <a class="m_logo" href="after_login_user.php">POWERHOUSE</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="d-flex navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="courses.php">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="member.php">Membership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="blogs.php">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">About Us</a>
                </li>';?>
                
                <?php 
                if(!$loggedin){
                echo '<li class="nav-item">
                    <button type="button" class="btn btn-danger btn-sm my-2 mx-3"
                    data-bs-toggle="modal" data-bs-target="#loginModal">Sign-in</button>
                </li>';}
                ?>

                <?php if($loggedin){
                    echo '<li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="margin-right: 2.5em; margin-left: 1em">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPo5Ws8LxZvnKr4hMGOSZr9N9uMceAuBnZkIZM9rNSXs-QAMoKoxOIsMGxFiN66_jgF-4&usqp=CAU"
                                alt="" class="profile_img" />';
                            echo $fname;
                        echo '</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile.php">View Profile</a></li>
                            <li><a class="dropdown-item" href="counter.php">Check occupanncy</a></li>
                            <li><a class="dropdown-item" href="logout.php">Log-out</a></li>
                        </ul>
                    </div>
                </li>';}
                ?>

            <?php echo '</ul>
        </div>
    </div>
</nav>';?>

<?php
    include "_loginModal.php";
  ?>