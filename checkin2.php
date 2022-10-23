<html>
  <head>
    <title>Check In & Check Out</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
    rel="stylesheet" />
    <style>
      * {
        margin: 0px;
        font-family: "Poppins", sans-serif;
      }

      .m_logo {
        color: aliceblue;
        margin: 5px;
        font-family: "Bungee";
        font-size: 30px;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 15px;
      }

      .nav_bar {
        width: 100%;
        background-color: rgba(0, 0, 0, 0.481);
        position: relative;
        z-index: 1;
      }

      .u_list {
        display: inline;
        margin-top: 5px;
        margin-bottom: 5px;
      }

      .nav_items {
        display: inline;
        color: aliceblue;
      }

      .nav_buttons {
        margin-right: 3em;
        width: fit-content;
        height: fit-content;
        float: right;
      }
      .m_logo,
      .nav_buttons {
        display: inline;
      }

      .nav_items_inside {
        font-family: "Poppins", sans-serif;
        color: aliceblue;
        text-decoration: none;
        padding: 2px;
        margin-left: 5px;
        font-size: 22px;
      }

      .nav_items_inside:hover {
        border-radius: 3px;
        padding: 2px 2px 2px 2px;
        background-color: yellow;
        color: black;
      }

      /* drop down */
      /* Dropdown Button */
      .dropbtn {
        font-family: "Poppins", sans-serif;
        color: aliceblue;
        padding: 16px;
        font-size: 22px;
        border: none;
      }

      /* The container <div> - needed to position the dropdown content */
      .dropdown {
        position: relative;
        display: inline-block;
      }

      /* Dropdown Content (Hidden by Default) */
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
      }

      /* Links inside the dropdown */
      .dropdown-content a {
        font-family: "Poppins", sans-serif;
        color: aliceblue;
        padding: 16px;
        font-size: 22px;
        border: none;
        color: black;
        /* padding: 12px 16px; */
        text-decoration: none;
        display: block;
      }

      /* Change color of dropdown links on hover */
      .dropdown-content a:hover {
        background-color: #ddd;
      }

      /* Show the dropdown menu on hover */
      .dropdown:hover .dropdown-content {
        display: block;
      }

      /* Change the background color of the dropdown button when the dropdown content is shown */
      .dropdown:hover .dropbtn {
        background-color: #3e8e41;
      }

      .buttons {
        background: #ff4742;
        border: 1px solid #ff4742;
        border-radius: 6px;
        box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
        box-sizing: border-box;
        color: #ffffff;
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: 800;
        line-height: 16px;
        min-height: 40px;
        outline: 0;
        padding: 12px 14px;
        text-align: center;
        text-rendering: geometricprecision;
        text-transform: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: middle;
      }

      .buttons:hover,
      .buttons:active {
        background-color: initial;
        background-position: 0 0;
        color: #ff4742;
      }

      .buttons:active {
        opacity: 0.5;
      }
      .p {
        font-weight: 300;
        font-size: 25;
      }
      .main {
        margin: auto;
        width: 25%;
        padding-top: 20%;
        color: white;
      }
      .input {
        margin-left: 5em;
      }
      .buttons {
        margin-left: 27%;
        font-weight: 700;
      }
      h2 {
        color: white;
        font-family: "Poppins", sans-serif;
        font-weight: 700;
        font-size: 40;
        margin-bottom: 50px;
      }
      .main2 {
        background-color: rgba(0, 0, 0, 0.7);
        padding-bottom: 30px;
        height: 60.2em;
      }
    </style>
  </head>
  <body
    style="
      background-image: url('images/add_user_bg.jpg');
      background-repeat: no-repeat;
      background-size: 100%;
    "
  >
    <!-- <div class="nav_bar">
      <table style="width: 100%">
        <tr>
          <td>
            <div>
              <h3 class="m_logo">PowerHouse</h3>
            </div>
          </td>
          <td>
            <div class="nav_buttons">
              <ul class="u_list">
                <li class="nav_items">
                  <a class="nav_items_inside" href="Courses.html">Classes </a>
                </li>
                <li class="nav_items">
                  <a class="nav_items_inside" href="member.html"
                    >Membership Options
                  </a>
                </li>
                <li class="nav_items">
                        <a class="nav_items_inside" href="">Blogs </a>
                      </li>
                <li class="nav_items">
                  <a class="nav_items_inside" href="">About us</a>
                </li>
                <li class="nav_items">
                  <div class="dropdown">
                    <a class="dropbtn">Options</a>
                    <div class="dropdown-content">
                      <a href="#">Add Member</a>
                      <a href="checkin.html">Check-In-Out</a>
                      <a href="userlist.php">Users List</a>
                      <a href="#">user Activities</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </td>
        </tr>
      </table>
    </div> -->

    <?php require "partials/_adminNav.php"; ?>
    <div class="main2">
      <form action="checkin.php" method="post" class="main">
        <center><h2>CHECK IN & CHECK OUT</h2></center>
        <span class="p"> Enter user id:</span
        ><input type="number" name="userid" class="input" />
        <br />
        <br />
        <div class="">
          <button name="checkin" class="buttons">CHECK IN</button>
          <button name="checkout" class="buttons" style="margin-left: 50px">
            CHECK OUT
          </button>
        </div>
      </form>
    </div>
  </body>
</html>