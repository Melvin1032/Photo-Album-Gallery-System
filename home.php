<?php session_start();
if(isset($_SESSION['uname']))
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Grid - HOME</title>
    <link rel="icon" href="icons/main-logo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/0b0a8bec2d.js" crossorigin="anonymous"></script>
   
  	
</head>

<?php include 'header.php'?>

<body>
<br><br><br><br>
 
<div class="homec1">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="icons/laptop.png" class="d-block w-100" alt="...">
    </div>
    <!-- <div class="carousel-item" data-bs-interval="3000">
    <img src="icons/group_pic2.png" class="d-block w-100" alt="...">
    </div> -->

  </div>
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
</div> 
</div>

<div class="homec2">


<br><br> 

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
                        <h3>ORGANIZED PHOTOS</h3>
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
                        <h3>ADD CAPTIONS</h3>
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
                        <h3>PHOTOGRAPHY</h3>
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

<div class="homec3">
<br><br><br><br><br>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="icons/group_pic2.png" class="d-block w-100" alt="..."  style="width: 100px;">
      <br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Development Team</h5>  
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="icons/pic1.png" class="d-block w-100" alt="..."  style="width: 100px;">
      <br><br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Vincent "Yuri" Gagarin</h5> 
        <p>Quality Assurance (QA) Tester</p> 
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="icons/pic2.png" class="d-block w-100" alt="..."  style="width: 100px;">
      <br><br><br>
      <div class="carousel-caption d-none d-md-block">
      <h5>John Melvin "Melvz" Macabeo</h5> 
      <p>Full-Stack Developer</p>  
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="icons/pic3.png" class="d-block w-100" alt="..."  style="width: 100px;">
      <br><br><br>
      <div class="carousel-caption d-none d-md-block">
      <h5>Jerald Jay "JJ" Halos</h5> 
      <p>Grpahic Designer(UX/UI)</p>  
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="icons/pic4.png" class="d-block w-100" alt="..."  style="width: 100px;">
      <br><br><br>
      <div class="carousel-caption d-none d-md-block">
      <h5>Jumar "Barbs" Hernando</h5> 
      <p>Project Manager</p>  
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="icons/pic5.png" class="d-block w-100" alt="..."  style="width: 100px;">
      <br><br><br>
      <div class="carousel-caption d-none d-md-block">
      <h5>Dryn "Miss Dreyn" Manabat</h5> 
      <p>Content Creator/Writer</p>  
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="icons/pic6.png" class="d-block w-100" alt="..."  style="width: 100px;">
      <br><br><br>
      <div class="carousel-caption d-none d-md-block">
      <h5>Jan Angelo "Mr. Pink" Remular</h5> 
      <p>Back-End Developer</p>   
      </div>
    </div>
  </div>
 
 
</div>
</div>




<?php
}
else
{
header("location:login.php");
}
?>
</body>
<?php include 'footer.php'?>
</html>


