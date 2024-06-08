<?php session_start();
if(isset($_SESSION['uname']))
{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="icons/main-logo.png">
</head>
<?php include 'header.php'?>
<body>
    
</body>
<?php include 'footer.php'?>
</html>


<?php
}
else
{
header("location:login.php");
}
?>