<?php

$mykey1 = $_REQUEST['key1'];
$status = 'delete';

include 'connect.php';
    
$query = "UPDATE tbl_album SET status = ? WHERE albumid = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("si", $status, $mykey1);

if ($stmt->execute()) {
    echo "<script>location.href='viewallalbums.php'</script>";
} else {
    echo "Error: " . $con->error;
}

$stmt->close();
$con->close();

?>
