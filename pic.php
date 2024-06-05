<?php session_start() ?>

<?php include "header.php"; ?>
<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <? include "header.php"?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php  
		include 'connect.php';
if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 12;
$sql = "SELECT * FROM tbl_album where status='process' ORDER BY albumid DESC LIMIT $start_from, 12";
$rs_result = mysqli_query($con, $sql);


		
####### Fetch Results From Table ########

while ($row = mysqli_fetch_assoc($rs_result)) {
$aimage=$row['image'];
$aid=$row['albumid'];
$aname=$row['name'];
$astatus=$row['status'];


?>
<?php } ?>
<div class="picGallery">
        <?php echo "<img src='admin/acatch/$aimage' class='pic-image' alt='Pic' alt='$aname'>"; ?>

			
	

		</div>
</body>
</html>