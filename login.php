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
        <form method="POST">
            <h1>Create Account</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <span>or use your email for registeration</span>
            <input type="text" placeholder="Name" name="username" required>
            <input type="email" placeholder="Email"  required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="hidden" placeholder="Password" name="type" value="admin" required>
            <!-- <button type="submit" name="saveAccount">Sign-Up</button> -->
        </form>
    </div>
    <div class="form-container sign-in">
    <form role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <h1>Sign In</h1>
    <div class="social-icons">
        <!-- Social icons here -->
    </div>
    <span>or use your email password</span>
    <input type="text" placeholder="Username" name="username" autofocus>
    <input type="password" placeholder="Password" name="password">
    <a href="#">Forget Your Password?</a>
    <button type="submit" name="login">Sign In</button> <!-- Added name attribute -->
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
                <h1>Hello, There!</h1>
                <p>Log-in with your personal details to use all of site features</p>
                <!-- <button class="hidden" id="register">Sign Up</button> -->
            </div>
        </div>
    </div>
</div>
<?php


// Include database connection
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    if (isset($_POST['login'])) { // Check if the sign-in form is submitted
        $myuser = isset($_POST['username']) ? $_POST['username'] : '';
        $mypass = isset($_POST['password']) ? $_POST['password'] : '';

        // Check if username or password is empty
        if ($myuser == '' || $mypass == '') {
            echo "<div class='alert alert-danger'>Enter username and password</div>";
        } else {
            // Query to check if the user exists with the provided username and password
            $query = "SELECT * FROM tbl_login WHERE username = '$myuser' AND password = '$mypass'";
            $result = $con->query($query);

            if ($result && $result->num_rows > 0) {
                // User found, set session variable to log the user in
                $_SESSION['uname'] = $myuser;
                
                // Redirect to home page or any desired page
                header("Location: home.php");
                exit; // Stop further execution
            } else {
                echo "<div class='alert alert-danger'>Incorrect username or password</div>";
            }
        }
    }

?>



<!-- REGISTER -->


<?php
if (isset($_POST['saveAccount']))
{
  if (!$con->query("INSERT INTO tbl_login (username, password, type) VALUES ('$_POST[username]',' $_POST[password]',' $_POST[type]')")) {
    echo "<div claass='alert alert-success'>Failed. Error is:".$con->error."</div>";
  }
  else
    echo "<div class='alert alert-info text-center'>Account Added Successfully!</div>";

}

include "connect.php";
// ?>

// <script>const container = document.getElementById('container');
// const registerBtn = document.getElementById('register');
// const loginBtn = document.getElementById('login');

// registerBtn.addEventListener('click', () => {
//     container.classList.add("active");
// });

// loginBtn.addEventListener('click', () => {
//     container.classList.remove("active");
// });</script>

</body>

    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="js/sb-admin-2.js"></script>

</html>
