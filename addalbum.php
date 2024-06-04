<?php session_start();
if(isset($_SESSION['uname']))
{
?>

<?php include 'header.php'?>
<div id="page-wrapper">

            <script type="application/javascript">
function img_up(){var fup = document.getElementById('upload');var fileName = fup.value;var ext = fileName.substring(fileName.lastIndexOf('.') + 1);if(ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG"){return true;}else{alert("only jpeg format supported!");fup.focus();return false;}}</script>
<?php
if(isset($_POST['submit']))
{
$aname = $_POST['aname'];
$adesc = $_POST['adesc'];
$adate = date('Y-m-d H:i:s');
$status='process';
$rd=rand();

$uploadedfile = $_FILES['upload']['tmp_name'];

$src = imagecreatefromjpeg($uploadedfile);

list($width,$height)=getimagesize($uploadedfile);


$newwidth=290;
$newheight=($height/$width)*300;
$tmp=imagecreatetruecolor($newwidth,$newheight);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

$filename = "admin/acatch/".$rd. $_FILES['upload']['name'];
imagejpeg($tmp,$filename,100);

imagedestroy($src);
imagedestroy($tmp); 
$photo=$rd.$_FILES['upload']['name'];
move_uploaded_file($_FILES["upload"]["tmp_name"],"admin/aupload/".$rd.$_FILES["upload"]["name"]);

if (empty($aname))
{
 echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div> ";
 }
else
{
include "connect.php";

$query="INSERT INTO tbl_album(name,adesc,image,date,status) VALUES ('$aname','$adesc','$photo','$adate','$status')";
if(mysqli_query($con, $query))
    {
      
echo " <div class='alert alert-success'>Your New Album Is Successfully Added. <br> <a href='viewallalbums.php'>View albums</a> |<a href='addalbum.php'> Add new album</a></div>";
?>
<script>
    // Hide the form when success alert is displayed
    document.getElementById('albumForm').style.display = 'none';
</script>
<i class='bx bx-check-circle' style='color:#08bf1b' ></i>
<?php
    }
    else
    {
        echo "error";
        print mysql_error();
    }

// echo "<script>location.href='addevent.php </script";
   }
}   
?>

<body class="addAlbum">
   
<form id="albumForm" action="" method="post" enctype="multipart/form-data" name="upload">
<div class="container-upload">
  <div class="card">
    <div class="form-group">
         <h3>ALBUM CREATION</h3>
         <hr></hr>
        <label><h2>Album Name or Title</h2></label>
        <input class="form-control" placeholder="Enter Title" name="aname" required>
        <p class="help-block">Example: "Moon Collections "</p>
    </div>
        <br><br><br>
    <div class="form-group">
        <label><h2>Album Description</h2></label>
        <textarea class="form-control" rows="3" placeholder="Enter Description" name="adesc" maxlength="1000" required></textarea>   
        <p class="help-block">Example: "This is my Collections of Moon Images that I capture in my life. I recently started taking pictures of the moon since i was a kid."</p>
    </div>

    <div class="drop_box">
      <header>
      <h4>Album Cover Image</h4>
      </header>
      <p>Files Supported: JPEG Only.
        <br>Best If you use 3:2 Image Ratio for Album Cover</p> 
      
      <div class="file-upload-container">
         <input type="file" name="upload" id="upload" accept=".jpg, .jpeg" required>
      </div>
    </div>

   <div class="button-container">
   <button type="submit" class="btn btn-primary" name="submit">Create</button>
   <button type="reset" class="btn btn-default">Reset</button>
    
</div>

  </div>
</div>
</form>
</body>

<style>

  
@font-face {
  font-family: 'Cake';
  src: url(webfonts/Cakewalk.ttf);
}  


@font-face {
  font-family: 'Drep';
  src: url(webfonts/DREPHONIC.ttf);
}  

  

  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
   @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');

/* ALERT */

/* Base alert styles */
.alert-success {
  padding-top: 20px;
  height: 100px;
  color: #155724;
  background: linear-gradient(rgba(0, 0, 0, 0.774), rgba(0, 0, 0, 0.534)), url(icons/navbg-blur.jpg);

}



.alert-danger {
  color: #721c24;
  background: linear-gradient(rgba(0, 0, 0, 0.774), rgba(0, 0, 0, 0.534)), url(icons/navbg-blur.jpg);
}

.bx.bx-check-circle {
    position: relative;
    color: #08bf1b; /* Set the color */
    z-index: 9999; /* Set a high z-index to bring it to the front */
    font-size: 100px;
    top: 580px;
    left: 47%; /* Move the element to the middle of its container */
    transform: translateY(-50%); /* Adjust for center alignment */
    animation: burst 2.5s ease;
    animation-fill-mode: forwards;
   
}



@keyframes burst {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}

.alert-success {
  padding-top: 20px;
  width: 800px;
  height: 400px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  margin-top: 100px; /* Half of the height */
  color: green;
  border: none;
  z-index: 999; /* Adjust the z-index value */
  background: linear-gradient(rgba(0, 0, 0, 0.863), rgba(0, 0, 0, 0.842));
  backdrop-filter: blur(5.5px); /* Adjust the blur radius as needed */
  border-radius: 20px;
  font-size: 25px;  
  font-family: 'Drep';
  box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5); 
  padding: 100px 0;
}



.alert a {
  text-decoration: none;
  font-size: 30px;
  font-family 'Drep';

}


.alert-success a {
    position: relative;
    margin: auto;
    color: white;
}

.alert-success {
    text-align: center; /* Center the content horizontally */
}

.alert-success a:hover {
    color: orange;
    text-decoration: underline;
    
}









.container-upload {
  height: 115vh;
  width: 100%;
  align-items: center;
  display: flex;
  justify-content: center;
  border: none;
  outline: none;
  
}

.card {
  border-radius: 50px;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
  width: 600px;
  height: auto;
  background: linear-gradient(rgba(0, 0, 0, 0.774), rgba(0, 0, 0, 0.534)), url(icons/navbg-blur.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  padding: 0  30px 40px;
  font-family: "Poppins", sans-serif;
  box-shadow: 0 5px 60px 0 rgba(255, 255, 255, 0.5);
}

.card h3 {
  font-size: 20px;
  font-weight: 600;
  top: 50px;
  
}

.drop_box {
  margin: 10px 0;
  padding: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  border: 3px dotted #a3a3a3;
  border-radius: 5px;
}

.drop_box h4 {
  font-size: 16px;
  font-weight: 400;
  color: #2e2e2e;
}

.drop_box p {
  margin-top: 10px;
  margin-bottom: 20px;
  font-size: 1px;
  color: #a3a3a3;
}

.file-upload-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Style for the file input */
input[type="file"] {
  padding: 10px;
  border-radius: 5px;
  font-size: 16px;
  outline: none;
}



.btn {
  text-decoration: none;
  background-color: #005af0;
  color: black;
  padding: 10px 20px;
  border: none;
  outline: none;
  transition: 0.3s;
}

.btn:hover{
  text-decoration: none;
  background-color: black;
  color: black;
  padding: 10px 20px;
  border: none;
  outline: 1px solid orange;
}

.button-container {
    position: relative;
    margin: auto;
    padding-top: 10px;
}

.btn:nth-child(1) {
    background-color: #00000000;
    color: white;
    outline: 1px solid green;
}

.btn:nth-child(1):hover {
    background-color: green;
    outline: 1px solid green;
    
}

.btn:nth-child(2) {
    background-color: #00000000;
    color: white;
    margin-left: 10px;
    outline: 1px solid crimson;
}

.btn:nth-child(2):hover {
    background-color: crimson;
    outline: 1px solid crimson;
    
}



.form input {
  margin: 10px 0;
  width: 100%;
  background-color: #e2e2e2;
  border: none;
  outline: none;
  padding: 12px 20px;
  border-radius: 4px;
}
.form-group {
        margin-top: -50px;
    }
    h2 {
        color: orange; /* Orange title */
        font-size: 25px;
    }

    h3 {
        color: white; /* Orange title */
        position: relative;
        text-align: center;
        padding: 20px 20px;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc; /* Grey border */
        border-radius: 4px;
        box-sizing: border-box;
        background-color: #fff; /* White background */
        color: #333; /* Black text */
        font-family: "Poppins", sans-serif;
    }
    .help-block {
        color: #666; /* Grey help block text */
        font-style: italic;
        font-size: 13px;
    }
    .drop_box {
        border: 2px dashed orange; /* Orange dashed border */
        padding: 20px;
        text-align: center;
        margin-top: 20px;
    }
    .drop_box header h4 {
        color: orange; /* Orange header text */
    }
    .drop_box p {
        color: #666; /* Grey file supported text */
        font-size: 15px
    }
    .btn {
        background-color: orange; /* Orange button */
        color: #fff; /* White text */
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .btn:hover {
        background-color: #ff8c00; /* Darker orange on hover */
    }
    

.form-group hr {
  width: 100%; /* Adjust the width as needed */
  border-color: #333; /* Change the color of the border */
  margin: 45px 5px 40px  auto; 
}



  /*General Styling*/
body {
    color: #FFF0A5;
    background: url(icons/navbg-blur.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 130vh;
}

.container {
  display: block;
  margin-top: 10%;
}


.container h5 {
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
  top: 300px;
  font-size: 65px;
  font-weight: 800;
  font-family: sans-serif;
  color: white;
  white-space: nowrap;
  text-align: center;
}



.container p {
  position: absolute;
  left: 50%;
  top: 720px;
  transform: translate(-50%, -50%);
  font-size: 17px;
  color: gray;
}


hr {
    display: block;
    -webkit-margin-before: 0.5em;
    -webkit-margin-after: 0.5em;
    -webkit-margin-start: auto;
    -webkit-margin-end: auto;
    border-style: inset;
    border-width: 1px;
    width: 80px;
}

/*Burger-Menu*/

.menu {
    position: relative;
    width: 30px;
    height: 30px;
    margin: 25px;
}
.menu span {
    margin: 0 auto;
    position: relative;
    top: 12px;
}

.menu span:before, .menu span:after {
    position: absolute;
    content: '';
}
.menu span, .menu span:before, .menu span:after {
    width: 30px;
    height: 6px;
    background-color: #FFF0A5;
    display: block;
}
.menu span:before {
    margin-top: -12px;
}
.menu span:after {
    margin-top: 12px;
}

/*Fake-Trigger*/
#sized {
    position: absolute;
    left: 47%;
    transform: translate(-50%, -50%);
    top: 600px;
    font-size: 80px;
    color:transparent;
    background-color: transparent;
    border: transparent;
}

#sized::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 174, 0, 0.3); 
    opacity: 0; /* Initially hidden */
    transition: opacity 0.3s ease; 
}

#sized:hover::after {
    opacity: 1; /* Show overlay on hover */
}
/*Modal-Box*/
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding:0.5%;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto;
}

.modal-content {
    position: relative;
    margin: auto;
    padding: 0;
    width: 100%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animatiOn-duration: 0.4s;
    backdrop-filter: blur(0.5px); /* Adjust the blur radius as needed */
    background-color: #ffffffa4;
}

.modal-header {
    border-bottom: none;
    height:35vh;
}

.modal-body {
    padding: 2px 16px;
    background-color: #FFF0A5;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #FFF0A5;
    color: black;
    border-top: none;
    text-align: center;
}

.modal-footer hr {
    margin-top: 20vh;
}

.modal-footer>p {
  color: #468966
}

.modal-footer h3 {
    text-transform: none;
    font-size:4vh;

}

.close {
    color: crimson;
    float: left;
    margin-left: 50px;
    font-size: 5em;
    font-weight: bold;
    opacity: 1;
}

.close:hover,
.close:focus {
    color: #B64926;
    text-decoration: none;
    cursor: pointer;
}

@-webkit-keyframes zoomIn {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3);
    }

    50% {
        opacity: 1;
    }
}

.zoomIn {
    -webkit-animation-name: zoomIn;
    animation-name: zoomIn;
}

.animated {
    -webkit-animation-duration: .3s;
    animation-duration: .3s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}


/*Navigation Inner Styling*/

</style>


<script>
  // Get Modal
var modal = document.getElementById('myModal');
    
    // Get pseudoelement to open Modal
    var btn = document.getElementById("sized");
    
    // Get the <span> element to close Modal
    var span = document.getElementsByClassName("close")[0];
    
    // When user clicks button, open Modal
    btn.onclick = function() {
       modal.style.display = "block";
       };
    
    // When user clicks Close (x), close Modal
    span.onclick = function() {
       modal.style.display = "none";
       };
    
    // When user clicks anywhere outside of the Modal, close Modal
     window.onclick = function(event) {
        if (event.target == modal) {
           modal.style.display = "none";
           }
        }
</script>
</body>


<?php
}
else
{
header("location:login.php");
}

?>




<?php include "footer.php"; ?>
</html>