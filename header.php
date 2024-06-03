<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">


  	
</head>

<body>
 <nav class="navbar navbar-dark bg-dark fixed-top">
<a class="navbar-brand" href="#">
    <img src="icons/main-logo2.png" alt="Brand Logo" style="height: 80px;">
</a>

      <div class="nav">
          <ul>
            </i>
            <li><a href="home.php">HOME</a></li>
            <li><a href="vgall.php">GALLERY</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="faq.php">FAQ's</a></li>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>    

    
    
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
       <img src="icons/main-logo2.png"  class="offcanvas-title" id="offcanvasDarkNavbarLabel" alt="">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        
      </div>
      
      <div class="offcanvas-body">
      <hr class="overview">
      <p class="hr-text"></p>

      <li class="nav-item dropdown">
            <a href="#" role="button">
            <i class='bx bx-home-alt bx-tada' style='color:#ff7703' ></i> HOMEPAGE
            </a>
            


        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class='bx bxs-grid-alt bx-tada' style='color:#ff7703' ></i> ALBUMS
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="addalbum.php">Create Album</a></li>
              <li><a class="dropdown-item" href="viewallalbums.php">View Albums (Album Management)</a></li>
            </ul>    
                    
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class='bx bx-upload bx-tada' style='color:#ff7703' ></i> UPLOADS
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Add Photos (Upload)</a></li>
              <li><a class="dropdown-item" href="#">View Photos (Photo Management)</a></li>
              <li>
              </li>
            </ul>

       


            <br><br><br><br><br>
            <hr class="overview">
            <p class="hr-text">ACCOUNTS</p>
          
       
          
          </li>
        </ul>
       
      </div>
    </div>
  </div>
</nav> 
            
          </ul>
        </div>

  



</body>
</html>