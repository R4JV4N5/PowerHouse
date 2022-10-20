<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PowerHouse</title>
    <!-- fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Economica&family=Staatliches&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Bungee&family=Economica&family=Staatliches&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!--css linking-->
    <link rel="stylesheet" href="css/index.css" />

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <?php 
    require 'partials/_nav.html'
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
            PowerHouse isn't just a gym. It’s a place where lives are
            transformed. Where fear and intimidation give way to inspiration,
            achievement & a renewed self-confidence. Where “I can’t” becomes “I
            did!” We are a family-run facility promoting family-centred fun,
            fitness, wellness and community. Here you are a name and a person.
            You have goals, and don’t get a pat on the back just for showing up.
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
                  <img
                    class="classes_tabs"
                    src="images/kickbboxing.jpg"
                    alt="cardio_pic"
                  />
                  <center>
                    <p class="classes_names">kickboxing</p>
                  </center>
                </td>
                <td class="classes_td">
                  <img
                    class="classes_tabs"
                    src="images/poweryoga.jpg"
                    alt="weight_lifting"
                  />
                  <center>
                    <p class="classes_names">Poweryoga</p>
                  </center>
                </td>
                <td class="classes_td">
                  <img
                    class="classes_tabs"
                    src="images/zumba.jpg"
                    alt="weight_lifting"
                  />
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
    <!-- <div class="footer_div">
      <center>
        <table>
          <tr>
            <td class="footer_table_td">
              <p class="footer_heading">contact us</p>
            </td>
            <td class="footer_table_td">
              <p class="footer_heading">connect with us !</p>
            </td>
          </tr>
          <tr>
            <td class="footer_table_td">
              <p class="footer_details">
                <span style="color: red">Address</span>: Lorem ipsum dolor sit
                amet, consectetur adipisicing elit.\
              </p>
            </td>

            <td class="footer_table_td">
              <a href="" class="footer_details"
                ><img src="images/icons/instagram.png" alt="instagram" />
                bili_bili</a
              >
            </td>
          </tr>
          <tr>
            <td class="footer_table_td">
              <p class="footer_details">
                <span style="color: red">phone</span>: +918547265896
              </p>
            </td>

            <td class="footer_table_td">
              <a href="" class="footer_details"
                ><img
                  src="images/icons/facebook.png"
                  alt="facebook"
                />&nbspbili_bili</a
              >
            </td>
          </tr>
          <tr>
            <td class="footer_table_td">
              <a href="mailto:rajvenniyar65@gmail.com" class="footer_details">
                <p>
                  <span style="color: red">email</span>: powerhouse@gmail.com
                </p>
              </a>
            </td>
          </tr>
        </table>
      </center>
    </div> -->

    <!-- footer -->
    <?php 
    require 'partials/_footer.html'
    ?>
  </body>
</html>
