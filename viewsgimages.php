<?php session_start();
if(isset($_SESSION['uname']))
{
?>


<?php $asid=$_REQUEST['ids']; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Grid - MANAGE PHOTOS</title>
    <link rel="icon" href="icons/main-logo.png">
    
<?php include "header.php"; ?>

</head>
<body>
<div class="rows">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Manage Photos
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive table-bordered">
                           <?php
include"connect.php";
if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 20;
$sql = "select * from tbl_gallery where status='process' and aid='$asid' ORDER BY gid ASC LIMIT $start_from, 20";
$rs_result = mysqli_query ($con,$sql);
?>


<table class="table">
                                    
<thead>
                                        <tr>
                                            <th>Image Name</th>
                                                                                       

                                            <th>Images</th>
											<th colspan=2 width="18%">Action (Delete)</th>
											
											
                                            
                                        </tr>
                                    </thead>

<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>

<tbody>
                                        <tr>
                                            <td><?php echo $row["gimages"]; ?></td>
                                                                                        
                                           
                                            <td><a href='gchangeimage.php?key0=<?php echo  $row["gid"];?>&asid2=<?php echo $row["aid"]; ?>'><img src="gcatch/<?php echo $row["gimages"]; ?>"  width="100px"/></a></td>
                                            <td><a href='gallerydelete.php?key1=<?php echo $row["gid"];?> && key2=<?php echo $row["aid"]; ?>' onclick="return confirmDelete();" ><i class='bx bxs-edit bx-tada' style='color:#d20e0e'  ></i>  Delete</a>
                                          
										   
                                        </tr>
										
										</tbody>

<?php
};
?>
</table>

<br><br><br><br><br><br><br>
<strong>Pages  </strong>

<?php
$sql = "SELECT COUNT(aid) FROM tbl_gallery where aid='$asid' AND status='process'";
$rs_result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 20);
for ($i=1; $i<=$total_pages; $i++) {
echo "<a href='viewsgimages.php?page=$i&ids=$asid' class='navigation_item selected_navigation_item'>".$i."</a> ";
};
?>


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
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/sb-admin-2.js"></script>

</body>
</html>

          
    
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
<?php
}
else
{
header("location:login.php");
}
?>



<script>
    function confirmDelete() {
        return confirm('Are you sure you want to permanently delete this album?');
    }
</script>




<style>
.panel-heading {  
  position: absolute;  
  width: 100%;
  height: 150px;
  background: url(icons/manage.jpg);
  background-size: cover;
  background-repeat: no-repeat; 
  border-color: #ddd;
  padding: 30px;
  margin-top: 90px;
  font-weight: bold;
}

.panel-heading{
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
    padding: 40px 90px;
}

	</style>

</body>
<?php include "footer.php"; ?>
</html>
