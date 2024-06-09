<?php session_start();
if(isset($_SESSION['uname']))
{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="icons/main-logo.png">
    <link href="about.css" rel="stylesheet">
</head>
<?php include 'header.php'?>
<body>
    

</head>

<body id="page-top" class="index">

<br><br>

  <!-- Header -->
  <header>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="intro-text">
                      <span class="name">Gallery Grid</span>
                      <span class="skills">Photo Gallery Website</span>

                  </div>
                  <img class="img-responsive img-bigScreen" src="https://res.cloudinary.com/dasdezine/image/upload/v1458052055/glass_cdjbpa.png" alt="glasses image" title="geek loves glasses">
              </div>
          </div>
          <br><br>
          <div class="seeMore-btn text-center btn-style">
              <div class="btn-styleLine double-line page-scroll">
                  <a href="#portfolio" class="btn btn-lg btn-outline">
                      <i class="fa fa-fw fa-arrow-circle-down"></i>See More
                  </a>
              </div>
          </div>    
      </div>
  </header>

  <br><br> <br><br>

  <!-- My Likes Grid Section -->
  <section id="myLikes">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h3>What does Gallery Grid offers</h3>
              <br><br><br>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-4 portfolio-item">
                  <a href="#" class="portfolio-link text-center" data-toggle="modal">
                      <span class="fa fa-th-large" aria-hidden="true" title="This symbolizes I Love to listen good music
                      "></span>
                  </a>
                  <article class="portfolio-item-One">
                      <header>
                          <h3>Organize Photos</h3>
                      </header>
                      <p>
                      Your go-to resource for managing digital image clutter. Discover tips for sorting, categorizing, and storing your cherished memories efficiently. Whether you're a casual snapper or a seasoned photographer, this guide helps you reclaim control over your photo library.
                      </p>
                  </article>                    
              </div>
              <div class="col-sm-4 portfolio-item">
                  <a href="#" class="portfolio-link text-center" data-toggle="modal">
                      <span class="fa fa-align-center" aria-hidden="true" title="This symbolizes I Like to design and develop websites
                      "></span>
                  </a>
                  <article class="portfolio-item-Two">
                      <header>
                          <h3>Add Captions</h3>
                      </header>
                      <p>
                      Adding descriptions to photos enhances accessibility for all users, especially those with visual impairments, by providing context and information that screen readers can convey. These descriptions also aid in search engine optimization, improve user experience, and ensure legal compliance and ethical clarity.
                      </p>
                  </article>                    
              </div>
              <div class="col-sm-4 portfolio-item">
                  <a href="#" class="portfolio-link text-center" data-toggle="modal">
                      <span class="fa fa-fw fa-camera-retro" aria-hidden="true" title="This symbolizes I Love to capture moments
                      "></span>
                  </a>
                  <article class="portfolio-item-Three">
                      <header>
                          <h3>photography</h3>
                      </header>
                      <p>
                      Storing photos online offers a convenient and secure way to preserve memories and access them from anywhere with an internet connection. Whether it's through cloud storage services, social media platforms, or dedicated photo-sharing websites.
                      </p>
                  </article>                    
              </div>
          </div>
      </div>
  </section>


  <br><br>

 

          </div>
      </div>       
  </section>

  <br><br>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->


  </div>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/cbpAnimatedHeader.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="js/freelancer.js"></script>

</body>



<style>
    
</style>
</html>
</body>
<?php include 'footer.php'?>
</html>


<?php
}
else
{
header("location:login.php");
}
?>