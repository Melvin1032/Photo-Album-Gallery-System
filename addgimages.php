<?php session_start();
if(isset($_SESSION['uname']))
{
?>


<title>Gallery Grid - ADD PHOTO</title>
<link rel="icon" href="icons/main-logo.png">

<?php include 'header.php'?>
<?php $agid=$_REQUEST['id']; ?>
<?php
include"connect.php";
$sql = "select * from tbl_album where albumid='$agid'";
$rs_result = mysqli_query ($con,$sql);
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<?php $aname=$row["name"]; ?>
<?php };?>



<body class="addgal">
    

<div id="page-wrapper">
    
           

<?php
$gid=$agid;
$gname=$aname;
$gdate = date('Y-m-d H:i:s');
$status='process';
include"connect.php";
$rd=rand();
if(isset($_FILES['upload1'])){
    $errors= array();
	foreach($_FILES['upload1']['tmp_name'] as $key => $tmp_name){
		$file_name = $key.$rd.$_FILES['upload1']['name'][$key];
		$file_size =$_FILES['upload1']['size'][$key];
		$file_tmp =$_FILES['upload1']['tmp_name'][$key];
		$file_type=$_FILES['upload1']['type'][$key];	
		
        if($file_size > 52428800){
			$errors[]='File size must be less than 50 MB';
        }	
		
        $desired_dir="gupload";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 'gupload');		
            }
            if(is_dir("$desired_dir/".$file_name)==false){
			
$src = imagecreatefromjpeg($tmp_name);
list($width,$height)=getimagesize($tmp_name);
$newwidth=($width/$height)*150;
$newheight=150;
$tmp=imagecreatetruecolor($newwidth,$newheight);
imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
$rd=rand();
$filename = "gcatch/".$file_name;
imagejpeg($tmp,$filename,100);
imagedestroy($src);
move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
            }else{									// rename the file if another one exist
                $new_dir="$desired_dir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
			  $query="INSERT into tbl_gallery(`gid`,`aid`,`gname`,`gimages`,`date`,`status`) VALUES('','$gid','$gname','$file_name','$gdate','$status')";
		 mysqli_query($con,$query);			
        }
		else
		{
         
		 print_r($errors);
		
        }
    }
	if(empty($errors)){
	echo " <div class='alert alert-success'>Your Photos Is Successfully Uploded. <br><a href='viewphotos.php'>View Photos</a> |<a href='addevent.php'> Add new Photos</a></div>";
	
	}
}

	
?>


      
            <div class="rows">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="panel-heading-addgall">
                           <h2>Upload a Photo</h2> 
                        </div>



                        <div class="panel-body-addgal">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        
                                        <div class="form-group">
                                        <div class="drop_box">
      <header>
      <h4>Upload Images</h4>

      <p>Files Supported: JPEG Only.
        <br><br>Best If you use 3:2 Image Ratio for Images you want to uplaod.</p> 
      
      <div class="file-upload-container">
         <input type="file" name="upload1[]" multiple id="upload" accept=".jpg, .jpeg" required>
      </div>
    </div>

   <div class="button-container">
   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
   <button type="reset" class="btn btn-default">Reset</button>
    
</div>
                                        </div>

                             
                        <!-- 
                        <div class="panel-body-addgal">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        
                                        <div class="form-group">
                                            <label>Gallery Image</label>
                                            <input type="file" name="upload1[]" multiple  id="upload" />
                
                                            <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
                                        </div> -->
    
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
<?php
}
else
{
header("location:login.php");
}
?>



<style>





/* ADD GALLERY_PHP  ADD IMAGES ON ALBUMS */

.alert-success {
  padding-top: -20px;
  width: 800px;
  height: 300px;
  position: absolute;
  left: 50%;
  top: 40%;
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
  font-family: 'Drep';

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
  display: inline-block;
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
    top: 10px;
    display: flex;
    white-space: nowrap;
    justify-content: center;
    padding: 10px 170px;
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
        text-align: center;
        width: 350px;
        padding: 100px 70px;
        margin-top: 100px;
    }

    .drop_box p {
        color: #666; /* Grey file supported text */
        font-size: 12px
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
    








body{
  color: #FFF0A5;
  background: url(icons/whitegal.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  height: auto;
}


.panel-heading-addgall {  
  width: 100%;
  height: 150px;
  background: url(icons/manage.jpg);
  background-size: cover;
  background-repeat: no-repeat; 
  border-color: #ddd;
  padding: 30px;
  margin-top: 100px;
  font-weight: bold;
}

.panel-heading-addgall h2 {
  top: 15px;
  font-family: 'Drep';
  font-size: 45px;
  color: white;
  position: relative;
  text-align: center;
  font-family: 'Drep';
  text-shadow: 2px 2px #00000091;
} 


.panel-body-addgal {
  position: relative;
  margin-top: 300px;
  margin-bottom: -150px;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 500px;
  height: 550px;
  background-color: rgb(116, 116, 116);
  padding: 0  30px 40px;
  font-family: "Poppins", sans-serif;
  background: linear-gradient(rgba(0, 0, 0, 0.774), rgba(0, 0, 0, 0.534)), url(icons/navbg-blur.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  border-radius: 30px;
}


</style>


</body>

<?php include "footer.php"; ?>
</html>
