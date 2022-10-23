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

    .m_lo   go {
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
</head>



<nav class="navbar fixed-top navbar-expand-lg navbar-expand-md bg-dark">
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
                    <a class="nav-link text-light" href="#">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown my-1">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="margin-right: 2.5em; margin-left: 1em">
                            More Options
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="new_user.php">Add New Member</a></li>
                            <li><a class="dropdown-item" href="checkin2.php">Check-In-Out</a></li>
                            <li><a class="dropdown-item" href="userlist.php">User List</a></li>
                            <li><a class="dropdown-item" href="counter.php">View Occupancy</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>