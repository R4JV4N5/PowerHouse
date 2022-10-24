<?php
    session_start();
    require "partials/bootstrap.html";
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New User</title>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Economica&family=Staatliches&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
        rel="stylesheet" />
    <!-- bootstrap -->

    <!-- css -->
    <style>
    .nav-link {
        color: white;
        border-radius: 0.5rem;
        font-size: 1.25em;
    }

    .nav-text:hover {
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
        text-decoration: none;
    }

    .btn-primary {
        background-color: orangered;
    }

    .profile_img {
        height: 2em;
        border-radius: 1em;
    }
    </style>
</head>

<nav class="navbar fixed-top navbar-expand-lg navbar-expand-md bg-dark">
    <div class="container-fluid">
        <a class="m_logo" href="after_login_user.php">POWERHOUSE</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="d-flex navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-text text-light" href="courses.php">Courses</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-light">|</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link nav-text text-light" href="member.php">Membership Plans</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-light">|</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-text text-light" href="new_user.php">Add New Member</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-light">|</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-text text-light" href="counter.php">View Occupancy</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-light">|</a>
                </li>
                
                <li class="nav-item">
                    <div class="dropdown my-1">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="margin-right: 2.5em; margin-left: 0.5em">
                            More Options
                        </button>
                        <ul class="dropdown-menu">
                            <li></li>
                            <li><a class="dropdown-item" href="checkin2.php">Check-In-Out</a></li>
                            <li><a class="dropdown-item" href="userlist.php">User List</a></li>
                            <li><a class="dropdown-item" href="#">View Logs</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>