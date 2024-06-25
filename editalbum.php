<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php include "header.php"; ?>

<?php 
$mykey1=$_REQUEST['key0'];
$mykey2=$_REQUEST['key1'];
$mykey3=$_REQUEST['key2'];
?>

    <script type="application/javascript">
        function img_up() {
            var fup = document.getElementById('upload');
            var fileName = fup.value;
            var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
            if (ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "PNG" || ext == "png") {
                return true;
            } else {
                alert("Image format not supported!");
                fup.focus();
                return false;
            }
        }
    </script>
    <?php
    //echo $user;
    if (isset($_POST['submit'])) {
        $aname = $_POST['aname'];
        $adesc = $_POST['adesc'];
        $adate = date('Y-m-d H:i:s');
        $status = 'progress';
        // This is the temporary file created by PHP
        if (empty($aname)) {
            echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>";
        } else {
            include "connect.php";
            // Create connection
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }
            $sql = "UPDATE tbl_album SET name='$aname', adesc='$adesc' WHERE albumid = '$mykey1'";
            if ($con->query($sql) === TRUE) {
                echo "<script>location.href='viewallalbums.php'</script>";
            } else {
                echo "Error updating record: " . $con->error;
            }
            $con->close();
        }
    }
    ?>

    <div class="rows">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading-addgall">
                    <h2>Edit Album Title and Description</h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="#" method="post" enctype="multipart/form-data" name="upload">

                                <div class="form-group">
                                    <h3>Album Name or Title</h3>
                                    <input class="form-control" placeholder="Enter Title" name="aname" required>
                                    <p class="help-block">Example "Friendship day"</p>
                                </div>
                                <div class="form-group">

                                    <h3>Event Description</h3>
                                    <p class="help-block">Maximum of 1000 Characters </p>
                                    <textarea class="form-control" rows="3" placeholder="Enter Description" name="adesc" maxlength="1000"></textarea required>
                                </div>

                                <div class="button-container">
                                    <button type="submit" class="btn btn-primary" name="submit">Create</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                            </form>
                        </div>
                    </div>
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

<style>



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



    .form-group .bx {
    position: absolute;
    top: 150px;

    transform: translate(-50%, -50%);
    font-size: 20px;
    color: black;
}

.form-group {
    position: relative;
    justify-content: center;
    text-align: center;
    
    margin-top: 20%;

    }



    .form-group p {
        white-space: nowrap;
        font-family: sans-serif;
        font-size: 15px;
    }

    textarea.form-control {
        width: 350px;
        height: auto;
    }

    .form-control {
        width: 350px;
        height: auto;
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
  margin-top: 300px;
  margin-bottom: -150px;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 500px;
  height: 500px;
  background-color: rgb(116, 116, 116);
  padding: 0  30px 40px;
  font-family: "Poppins", sans-serif;
  background: linear-gradient(rgba(0, 0, 0, 0.774), rgba(0, 0, 0, 0.534)), url(icons/navbg-blur.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  border-radius: 30px;
}


h3 {

    text-align: center;
    align-items: center;
    white-space: nowrap;
}

/* Style the button container */
.button-container {
    display: flex;
    position: absolute;
    left: 100%;
    transform: translate(-50%, -50%);
    text-align: center; /* Align buttons in the center */
    padding: 30px;
    margin: auto;
    top: 400px;
}

/* Define the button style */
.btn {
  cursor: pointer;
  transition: background-color 0.3s ease;
}





.btn:nth-child(1) {
    background-color: green;
    color: white;
    outline: 1px solid green;
}

.btn:nth-child(1):hover {
    background-color: green;
    outline: 3px solid green;
    
}

.btn:nth-child(2) {
    background-color: crimson;
    color: white;
    margin-left: 10px;
    outline: 1px solid crimson;
}

.btn:nth-child(2):hover {
    background-color: crimson;
    outline: 3px solid crimson;
    
}


</style>

<br><br><br><br>

</body>
    <?php include "footer.php"?>
</html>
