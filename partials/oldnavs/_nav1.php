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
</style>

<nav class="navbar fixed-top navbar-expand-lg navbar-expand-md bg-dark">
    <div class="container-fluid">
        <a class="m_logo" href="index.php">POWERHOUSE</a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
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
                    <button type="button" class="btn btn-danger btn-sm my-2 mx-3"
                    data-bs-toggle="modal" data-bs-target="#loginModal">Sign-in</button>
                </li>
            </ul>
            <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
        </div>
    </div>
</nav>

<?php
    include "_loginModal.php";
  ?>