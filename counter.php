<!-- <?php
      session_start();
      error_reporting(0);
      include "partials/_dbconnect.php";
      $query = "select * from check_in";
      $data = mysqli_query($conn, $query);
      $total = mysqli_num_rows($data);

      ?>
 -->

<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PoewerHouse - Counter</title>
  <link rel="stylesheet" href="css/counter.css" />
  <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap" rel="stylesheet" />
</head>

<body style="background-image: url('counter.jpg');
    background-size: 100%;
    background-repeat: no-repeat;">
  <?php
  if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {
    require "partials/_nav.php";
  } else {
    require "partials/_adminNav.php";
  }
  ?>
  

  <center>
    <div class="num_container">
      <h3>CURRENT GYM OCCUPANCY</h3>
      <div class="count" style="font-size: 7em;">
        <?php echo $total ?>
      </div>
    </div>
  </center>

  <!-- <div class="promo_video">
    <table style="padding: 0px;">
      <tr>
        <td width="50%">
          <iframe width="1000" height="667" src="https://www.youtube.com/embed/cJn8ElwDRhM" style="padding:5em;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </td>
        <td width="50%" style="font-family: 'poppins'; background:red; padding: 3em;">
          <h1>gym talks</h1>
          <p>
            Obaid Pathan khan is our gym member and have won various prices in gym competitions.
            heres a video on one of his competition journey.
            Its not just about body building but also seeing the dragon inside you !!
          </p>

        </td>
      </tr>
    </table>
  </div> -->
</body>

</html>