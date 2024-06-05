<link rel="stylesheet" href="style.css">

<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php include "header.php"; ?>
<div class="vall-container">
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Your Albums</h1>
                </div>
                

            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h5>Album Management</h5>
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive table-bordered">
                           <?php
include"connect.php";
if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 20;
$sql = "select * from tbl_album where status='process' ORDER BY albumid DESC LIMIT $start_from, 20";
$rs_result = mysqli_query ($con,$sql);
?>
                                <table class="table">
                                    
<thead>
                                        <tr>
                                            <th width="20%">Albumname</th>
                                                                                       <th>Albumdesc</th>

                                            <th>Images</th>
											<th colspan=2 width="18%">Action (Delete & Edit)</th>
											
											
                                            
                                        </tr>
                                    </thead>

<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>

<tbody>
                                        <tr>
                                            <td> <?php echo $row["name"]; ?> </td>
                                                                                        <td><?php echo $row["adesc"]; ?></td>
                                           
                                            <td><a href='admin/achangeimage.php?key0=<?php echo  $row["albumid"];?>'><img src="admin/acatch/<?php echo $row["image"]; ?>"  width="100px"/></a></td>
                                           <td><a href='albumdelete.php?key1=<?php echo $row["albumid"]; ?>'>Delete</a> | <a href = 'editalbum.php?key0=<?php echo $row["albumid"]; ?> &key1=<?php echo $row["name"]; ?> &key2=<?php echo $row["adesc"]; ?>&key3=<?php echo $row["image"]; ?> '>Edit</a>
										   
                                        </tr>
										
										</tbody>

<?php
};
?>
</table>
<strong>Pages  </strong>

<?php
$sql = "SELECT COUNT(name) AS total FROM tbl_album";
$result = mysqli_query($con, $sql);
$rs_result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 20);
for ($i=1; $i<=$total_pages; $i++) {
echo "<a href='viewallalbums.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a> ";
};
?>


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- jQuery Version 1.11.0 -->
</div>
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
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
</body>
<?php include "footer.php"; ?>
</html>
