<?php
include 'connection.php';
$w=$_GET['id'];
mysqli_query($a,"DELETE FROM pharmacy_registration WHERE pharmacy_id=$w");
header('location:admin view pharmacy.php')
?>
