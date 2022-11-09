<?php
include 'connection.php';
$w=$_GET['id'];
mysqli_query($a,"DELETE FROM leave_table WHERE leave_id=$w");
header('location:view2.php')
?>
