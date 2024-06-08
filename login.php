<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Gallery Grid Login</title>

    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">


</head>

<body>

<div class="container" id="container">
    <div class="form-container sign-up">
        <form >
            <h1>Create Account</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <span>or use your email for registeration</span>
            <input type="text" placeholder="Name">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <button>Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <h1>Sign In</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <span>or use your email password</span>
            <input type="username" placeholder="Username" name="username" type="username" autofocus>
            <input type="password" placeholder="Password" name="password" type="password" value="">
            <a href="#">Forget Your Password?</a>
            <button>Sign In</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Welcome Back!</h1>
                <p>Enter your personal details to use all of site features</p>
                <button class="hidden" id="login">Sign In</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Hello, Friend!</h1>
                <p>Register with your personal details to use all of site features</p>
                <button class="hidden" id="register">Sign Up</button>
            </div>
        </div>
    </div>
</div>
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
  echo " <div class='alert alert-danger'>   Your username or password is incorrect</div>";
  echo ""; 
 
}
}
}
?>

<script>const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});</script>

</body>

    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="js/sb-admin-2.js"></script>

</html>
