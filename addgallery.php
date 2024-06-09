<?php session_start();
if(isset($_SESSION['uname']))
{
?>

<title>Gallery Grid - ADD PHOTO</title>
<link rel="icon" href="icons/main-logo.png">

<?php include 'header.php'?>
<?php include 'connect.php'?>

            <?php
		
		if(isset($_POST['submit']))
{
$ename = $_POST['gname'];
}
			?>

<body class="addgal">
            <div class="rows">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading-addgall">
                           <h2> Upload a Photo</h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="glink.php" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                            <h4>Please Select Album Name <br>
                                            Where you want to add your images.</h4>
                                            <i class='bx bx-chevron-down bx-tada' ></i>
<?php
$sql = "select * from tbl_album where status='process'";
$rs_result = mysqli_query ($con,$sql);
echo  "<select class='form-control' name='gname'> ";
while ($row = mysqli_fetch_assoc($rs_result)) {


echo "<option value=$row[albumid]>$row[name]</option>";
                                        };
										echo "</select>";
										
										?>
                        
              </div>
                                                                                
                                        <button type="submit" class="btn btn-primary" name="submit">Go Next</button>
                                        
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


    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="js/sb-admin-2.js"></script>
<?php
}
else
{
header("location:login.php");
}
?>
</body>



<style>

.form-group .bx {
    position: absolute;
    top: 150px;
    left: 90%;
    transform: translate(-50%, -50%);
    font-size: 20px;
    color: black;
}

.form-group {
    position: absolute;
    top: 100px;
    left: 100%;
    transform: translate(-50%, -50%);
   border: none;
    }


    h4 {
        color: orange; /* Orange title */
        font-size: 25px;
        white-space: nowrap;
        text-align: center;
        padding: 50px 20px;
        font-family: 'Drep';
        
    }

    .form-control {
        padding: 10px 0;
        text-align: left;
        padding-left: 20px;
        font-size: 15px;
        color: black;
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


.panel-body {
    position: relative;
  margin-top: 200px;
  margin-bottom: -150px;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 500px;
  height: 350px;
  background-color: rgb(116, 116, 116);
  padding: 0  30px 40px;
  font-family: "Poppins", sans-serif;
  background: linear-gradient(rgba(0, 0, 0, 0.774), rgba(0, 0, 0, 0.534)), url(icons/navbg-blur.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  border-radius: 30px;
}



.btn {
            background-color: orange;
            border: 2px solid orange;
            color: #fff; /* White text */
            padding: 10px 30px;
            border-radius: 4px;
            cursor: pointer;
            position: absolute;
            white-space: nowrap;
            top: 280px;
            left: 100%;
            transform: translate(-50%, -50%);
            font-size: 20px;
            font-family: 'Drep';
    }
    .btn:hover {
        background-color: #ff8c00; /* Darker orange on hover */
    }
    

</style>




<br><br><br>
<?php include "footer.php"; ?>
</html>
