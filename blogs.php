<?php
    session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PowerHouse - Blogs</title>
    <style>
      * {
        margin: 0px;
        font-family: "poppins";
      }
      .sample_nav {
        padding: 1em;
        color: white;
        background-color: black;
        width: 100%;
      }
      .B_title {
        font-family: "poppins";
        font-size: 4em;
        padding: 3em;
        background-image: url("https://64.media.tumblr.com/0c36f0b28db57091db8cae7268eb4072/tumblr_pxeis7lXoK1uzwgsuo1_400.gifv");
        background-repeat: no-repeat;
        background-size: 100%;
        color: white;
      }
      .blogs {
        /* background-color: rgba(0, 0, 0, 0.466); */
        width: fit-content;
        padding: 2em;
        color: white;
        background-image: url("https://www.snapfitness.com/assets/HeaderBackgroundImages/0474d629df/2H9A5588.jpg");
        background-size: 100%;
      }
      .blogs_table tr td {
        width: fit-content;
        padding: 2em 2em 1em 2em;
      }

      .blog_heading {
        color: white;
        font-size: 2em;
        padding: 0 1em 0 1em;
        
        text-decoration: none;
      }
      .blog_heading:hover{
        color: yellow;
        background-color: black;
        border-radius: 1em;
      }
      .blog_img {
        height: 20em;
      }
      .blog_contents{
        background-color: rgba(0, 0, 0, 0.596);
        border-radius: 1em;
        padding: 1em;

      }
      .blog_contents:hover {
        background-color: darkred;
        color: white;
      }
    </style>
  </head>
  <body>
    
    <?php
      require "partials/_nav.php";
    ?>


    <div class="blog_box">
      <h1 class="B_title">
        <center>Blog</center>
      </h1>
      <center>
        <div class="blogs">
          <center>
            <table class="blogs_table">
              <tr>
                <td>
                  <div class="blog_contents text-center text-center">
                    <a href="http://www.nerdfitness.com/blog/" class="blog_heading">Nerd Fitness</a>
                    <img
                      src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/05/nerd_fitness_400x400.png?w=525"
                      alt="nerd gym"
                      class="blog_img"
                    />
                    <p class="blog_content">
                        A self-described community of “underdogs, misfits, and mutants” ready and willing to help people with every step of their fitness journey, Nerd Fitness is a comprehensive resource that's motivating and inspiring. Sure, they'll teach you how to work out without a gym and how to prepare a basic meal, but they also focus on helping you fix your own mindset, develop positive habits, and really change your life one step at a time.
                    </p>

                  </div>
                </td>

                <td>
                  <div class="blog_contents text-center">
                    <a href="http://rosstraining.com/blog/" class="blog_heading">Ross training.com</a>
                    <img
                      src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/05/ross_training_400x400.png?w=315&h=840"
                      alt="Ross_training"
                      class="blog_img"
                    />
                    <p class="blog_content">
                        Ross Enamait's website is dedicated to high performance conditioning, strength, and athletic development. The longtime trainer and boxing coach understands that a successful fitness regimen boils down to finding what works for you. His blog is a great resource for information about different kinds of training — from fitness fundamentals to old-school workouts like jumping rope to philosophical riffs on mental endurance.
                    </p>
                  </div>
                </td>

                <td>
                  <div class="blog_contents text-center">
                    <a href="https://lovesweatfitness.com/blog/" class="blog_heading">Love Sweat Fitness</a>
                    <img
                      src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/05/love_sweat_fitness_400x400.png?w=315&h=840"
                      alt="Love Sweat Fitness"
                      class="blog_img"
                    />
                    <p class="blog_content">
                        Katie Dunlop's Love Sweat Fitness community inspires women everywhere to find their own healthy, happy bodies. While the website features daily workouts, recipes, community forums, and much more, the blog is where Katie shares content like her own healthy spring morning routine, the biggest weight loss mistake you may be making, weekly workout schedules, and her latest sweat babe crush
                    </p>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="blog_contents text-center">
                    <a href="https://breakingmuscle.com/" class="blog_heading">Breaking Muscle</a>
                    <img
                      src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/05/breaking_muscle_400x400.png?w=315&h=840"
                      alt="breaking_muscle"
                      class="blog_img"
                    />
                    <p class="blog_content">
                        Designed for fitness consumers and professionals, Breaking Muscle is a leading publisher of timely, quality information about all things fitness and nutrition. In addition to countless workouts and recipes, there's content geared specifically to coaches and trainers. Check out podcasts and thought-provoking posts written by the blog's coaches in residence.
                    </p>
                  </div>
                </td>

                <td>
                  <div  class="blog_contents text-center">
                    <a href="https://www.advancedhumanperformance.com/blog" class="blog_heading" style="font-size: 1.7em;">Advanced Human Performance</a>
                    <img
                      src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/05/advanced_human_performance_400x400.png?w=315&h=840"
                      alt="Advanced Human Performance<"
                      class="blog_img"
                    />
                    <p class="blog_content">
                        Anyone feeling frustrated by a fitness plateau will find help from Advanced Human Performance creator Joel Seedman, PhD. He started this site to help people break through their nutritional and training barriers. He provides the most advanced, scientifically proven methods. The blog features comprehensive information relating to specialized exercises and tips for improving technique and function.
                    </p>
                  </div>
                </td>

                <td>
                  <div class="blog_contents text-center">
                    <a href="http://tonygentilcore.com/blog/" class="blog_heading">Tony Gentilcore</a>
                    <img
                      src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/05/tony_gentilcore_400x400.png?w=315&h=840"
                      alt="Tony Gentilcore"
                      class="blog_img"
                    />
                    <p class="blog_content">
                        Tony Gentilcore is a trainer and co-founder of Cressey Sports Performance, a fitness training facility “by athletes for athletes.” His focus is largely on weightlifting. He jokes that he's a pro at “picking things up and putting them down again.” On his blog, Tony shares insightful and often humorous posts about everything from deadlift warmups and workouts to make you leaner to fitness marketing 101 and important things every coach should know.
                    </p>
                  </div>
                </td>
              </tr>
            </table>
          </center>
        </div>
      </center>
    </div>

    <?php 
    require 'partials/_footer.html'
    ?>
  </body>
</html>
