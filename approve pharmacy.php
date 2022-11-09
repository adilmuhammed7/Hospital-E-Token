<?php

include 'connection.php';

$b=$_GET['iq'];

mysqli_query($a,"UPDATE pharmacy_registration SET status = '1' WHERE pharmacy_id = '$b' ");

header("location:admin view pharmacy.php");

?>