<?php
include 'connection.php';
$w=$_GET['id'];
mysqli_query($a,"DELETE FROM docter_registration WHERE docter_id=$w");
header('location:docter view.php')
?>