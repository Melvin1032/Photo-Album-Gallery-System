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
    <div class="carousel-item" data-bs-interval="3000">
    <img src="icons/group_pic2.png" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 
</div>

<section class="section2">
 
</section>

<!-- 
<div class="homec2">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="icons/group_pic2.png" class="d-block w-100" alt="..."  style="width: 200px; height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Development Team</h5>  
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic1.png" class="d-block w-100" alt="..."  style="width: 200px; height: 450px;">
      <br><br>
      <div class="carousel-caption d-none d-md-block">
        <h5>Vincent "Yuri" Gagarin</h5> 
        <p>Quality Assurance (QA) Tester</p> 
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic2.png" class="d-block w-100" alt="..."  style="width: 200px; height: 450px;">
      <br><br>
      <div class="carousel-caption d-none d-md-block">
      <h5>John Melvin "Melvz" Macabeo</h5> 
      <p>Full-Stack Developer</p>  
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic3.png" class="d-block w-100" alt="..."  style="width: 200px; height: 450px;">
      <br><br>
      <div class="carousel-caption d-none d-md-block">
      <h5>Jerald Jay "JJ" Halos</h5> 
      <p>User Experience (UX) Designer</p>  
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic4.png" class="d-block w-100" alt="..."  style="width: 200px; height: 450px;">
      <br><br>
      <div class="carousel-caption d-none d-md-block">
      <h5>Jumar "Barbs" Hernando</h5> 
      <p>Project Manager</p>  
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic5.png" class="d-block w-100" alt="..."  style="width: 200px; height: 450px;">
      <br><br>
      <div class="carousel-caption d-none d-md-block">
      <h5>Dryn "Miss Dreyn" Manabat</h5> 
      <p>Content Creator/Writer</p>  
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic6.png" class="d-block w-100" alt="..."  style="width: 200px; height: 450px;">
      <br><br>
      <div class="carousel-caption d-none d-md-block">
      <h5>Jan Angelo "Mr. Pink" Remular</h5> 
      <p>Back-End Developer</p>   
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 
</div> -->

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


