<?php
include 'connection.php';
$w=$_GET['iq'];
mysqli_query($a,"DELETE FROM medicine_table WHERE medicine_id=$w");
header('location:pharmacy view medicine.php')
?>