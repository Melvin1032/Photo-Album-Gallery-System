<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php include "header.php"; ?>


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
 echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>"; 
 }
else
{
include "connect.php";

$query="INSERT INTO tbl_album(name,adesc,image,date,status) VALUES ('$aname','$adesc','$photo','$adate','$status')";
if(mysqli_query($con, $query))
	{
echo " <div class='alert alert-success'>Your New Album Is Successfully Added. <a href='admin/viewallalbums.php'>View albums</a> |<a href='addevent.php'> Add new album</a></div>";
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




<style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');



.container-upload {
  height: 110vh;
  width: 100%;
  align-items: center;
  display: flex;
  justify-content: center;
  background-color: #fcfcfc;
}

.card {
  border-radius: 50px;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
  width: 600px;
  height: auto;
  background: linear-gradient(rgba(0, 0, 0, 0.774), rgba(0, 0, 0, 0.534)), url(icons/navbg-blur.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  padding: 100px 30px 40px;
  font-family: "Poppins", sans-serif;
}

.card h3 {
  font-size: 22px;
  font-weight: 600;
  
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
  font-size: 12px;
  color: #a3a3a3;
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
        margin-bottom: 20px;
    }
    h2 {
        color: orange; /* Orange title */
    }
    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc; /* Grey border */
        border-radius: 4px;
        box-sizing: border-box;
        background-color: #fff; /* White background */
        color: #333; /* Black text */
    }
    .help-block {
        color: #666; /* Grey help block text */
        font-style: italic;
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
    </style>

<form action="#" method="post" enctype="multipart/form-data" name="upload">
<div class="container-upload">
  <div class="card">

    <div class="form-group">
        <label><h2>Album Name or Title</h2></label>
        <input class="form-control" placeholder="Enter Title" name="aname">
        <p class="help-block">Example "Summertime Saga Memories"</p>
    </div>
        <br>
    <div class="form-group">
        <label><h2>Album Description</h2></label>
        <textarea class="form-control" rows="3" placeholder="Enter Description" name="adesc" maxlength="1000"></textarea>   
        <p class="help-block">Example "Summertime Saga Memories"</p>
    </div>

    <br>

    <div class="drop_box">
      <header>
      <h4>Album Cover Image</h4>
      </header>
      <p>Files Supported: JPEG Only</p> 
      <input type="file" name="upload" id="upload">
    </div>

   <div class="button-container">
   <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
   <button type="reset" class="btn btn-default">Reset Button</button>
    
</div>

  </div>
</div>
</form>

<?php
}
else
{
header("location:login.php");
}

?>

<script>
  const dropArea = document.querySelector(".drop_box");
const button = dropArea.querySelector("button");
const fileInput = dropArea.querySelector("input[type=file]");

button.addEventListener("click", function() {
  fileInput.click();
});

</script>

</body>
<?php include "footer.php"; ?>
</html>
