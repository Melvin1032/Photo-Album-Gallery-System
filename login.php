<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Dotcode-Gallery | Admin Login</title>


    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="admin/css/sb-admin-2.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                   
                    <div class="panel-body">
                    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$myuser = $_POST['username'];
$mypass= $_POST['password'];
    if ($myuser == '' || $mypass == '') {
        echo " <div class='alert alert-danger'>Enter username or password</div>";

}
else
{


include "connect.php";
$query = "SELECT * FROM tbl_login WHERE username = '$myuser' AND password = '$mypass'";
$result = $con->query($query);


if (mysqli_num_rows($result)>0)
{
   $row = mysqli_fetch_array($result);

   if ($row[3]=='admin')
	$_SESSION['uname']=$myuser;
    echo "<script>location.href='home.php'</script>";

 
}
else
{
  echo " <div class='alert alert-danger'>Your username or password is incorrect</div>";
  echo ""; 
 
}
}
}
?>
                        <form role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" name="login" value="Login">
                            </fieldset>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div align="center">
Develop By <a href="https://www.youtube.com/channel/UCW8P_Q9V4YfGmLtNZRcO8wQ" target="_blank">&lt;DOTCODE&gt;</a></div>
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
