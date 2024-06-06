<?php

$mykey1 = $_REQUEST['key1'];
$mykey2 = $_REQUEST['key2'];
$status = 'delete';

include 'connect.php';

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Prepare and bind the SQL statement
$query = "UPDATE tbl_gallery SET status=? WHERE gid=?";
$stmt = $con->prepare($query);
$stmt->bind_param("si", $status, $mykey1);

// Execute the statement
if ($stmt->execute()) {
    echo "<script>location.href='viewsgimages.php?ids=$mykey2'</script>";
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$con->close();

?>
