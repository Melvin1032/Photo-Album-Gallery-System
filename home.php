<?php session_start();
if(isset($_SESSION['uname']))
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/0b0a8bec2d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  	
</head>

<?php include 'header.php'?>

<body>
<br><br><br><br>
 
<div class="homec1">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="icons/group_pic2.png" class="d-block w-100" alt="..."  style="width: 400px; height: 500px;">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic1.png" class="d-block w-100" alt="..."  style="width: 400px; height: 500px;">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic2.png" class="d-block w-100" alt="..."  style="width: 400px; height: 500px;">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic3.png" class="d-block w-100" alt="..."  style="width: 400px; height: 500px;">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic4.png" class="d-block w-100" alt="..."  style="width: 400px; height: 500px;">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic5.png" class="d-block w-100" alt="..."  style="width: 400px; height: 500px;">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="icons/pic6.png" class="d-block w-100" alt="..."  style="width: 400px; height: 500px;">
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


