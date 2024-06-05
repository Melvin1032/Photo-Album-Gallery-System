<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php include "header.php"; ?>
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
		
        if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
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
	echo " <div class='alert alert-success'>Your Photos Is Successfully Uploded. <a href='viewphotos.php'>View Photos</a> |<a href='addevent.php'> Add new Photos</a></div>";
	
	}
}

	
?>

      
            <div class="rows">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="panel-heading-addgall">
                           <h2>Fill This Form To Add Gallery</h2> 
                        </div>
                        <div class="panel-body-addgal">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        
                                        <div class="form-group">
                                            <label>Gallery Image</label>
                                            <input type="file" name="upload1[]" multiple  id="upload" />
                
                                            <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
                                        
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
    body {
  color: #FFF0A5;
  background: url(icons/navbg-blur.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  height: 150vh;
}


.form-group {

}


/* ADD GALLERY_PHP  ADD IMAGES ON ALBUMS */

.panel-heading-addgall {  
  margin-top: -100px;
  width: 100%;
  height: 150px;
  background: url(icons/manage.jpg);
  background-size: cover;
  background-repeat: no-repeat; 
  border-color: #ddd;
  padding: 30px;
  margin-top: 110px;
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

.addgal-container {
  background: linear-gradient(rgba(0, 0, 0, 0.521), rgba(0, 0, 0, 0.24)), url(icons/navbg-blur.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
  height: auto;
  font-family: 'Cake';
}

.panel-body-addgal {
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  height: 400px;
  background-color: rgb(116, 116, 116);
  padding: 0  30px 40px;
  font-family: "Poppins", sans-serif;
   background: linear-gradient(rgba(0, 0, 0, 0.774), rgba(0, 0, 0, 0.534)), url(icons/navbg-blur.jpg);
   background-size: cover;
   background-repeat: no-repeat;
   border-radius: 30px;
}

.form-group {
    top: 200px;
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    color: blue;
    text-align: center;
    padding: 50px 20px;
}

</style>




</body>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<?php include "footer.php"; ?>
</html>
