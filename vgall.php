<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">


    <script src="js/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="stylesheets/navigation.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/style1.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/style_common.css" />
    <link href="litebox-master/assets/css/litebox.css" rel="stylesheet" type="text/css" media="all" />
    <link href="stylesheets/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">

</head>
<?php include 'header.php'?>
<body>
<br><br><br><br><br><br><br><br><br>
<section class="wrapper cl" >
	
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
		<div class="pic" style="margin-right:1px;margin-left:1px;margin-top:1px;margin-bottom:1px">
        <?php echo "<img src='admin/acatch/$aimage' class='pic-image' alt='Pic' alt='$aname'>"; ?>
		   <?php echo"<a href='gallery.php?id=$aid'>
		    <span class='pic-caption left-to-right'>
            
		        <p style='color:#FFFFFF;font-size:24px'>$aname</p>
		    </span></a>"?>
		</div>
<?php } ?>
	</section>

		</div>

		

	</div>	

	
<div class="seeall_div2">
			<!--   NAVIGATION FOR BLOG POST -->
				<div class="blog_navigation">
					<div style="margin-top:20px;margin-left:180px">
               
<?php
$sql = "SELECT COUNT(name) FROM tbl_album";
$rs_result = mysqli_query($con, $sql);
$row = mysqli_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 12);
for ($i=1; $i<=$total_pages; $i++) {
echo "<span class='navigations_items_span'>";
echo "<b>Page: </b>";
echo "<a href='index.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a>";							
echo "</span>";
};
?>				
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
</body>
<br><br><br><br><br><br><br>
<?php include "footer.php"; ?>
</html>
