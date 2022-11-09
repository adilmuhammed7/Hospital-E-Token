<?php

include 'connection.php';

$b=$_GET['iq'];

mysqli_query($a,"UPDATE appointment_table SET status = '1' WHERE docter_id = '$b' ");

header("location.php");

?>