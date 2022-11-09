<?php

include 'connection.php';

$b=$_GET['iq'];

mysqli_query($a,"UPDATE docter_registration SET status = '1' WHERE docter_id = '$b' ");

header("location:admin home.php");

?>