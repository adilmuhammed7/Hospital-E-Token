<?php

include 'connection.php';

$x = mysqli_query($a,"SELECT * FROM medicine_table");

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Novena- Health & Care Medical template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <style>
table,td,th{border: 2px solid black; border-collapse: collapse;
}
</style>

</head>


<body id="top">


	<table>
 <tr>
    <th>Medicine</th>
    <th>Stock</th>
    <th>Price</th>
    <th>Exp-Date</th>
  </tr>
<?php
while($i=mysqli_fetch_assoc($x)){ 
?>
  <tr>
    <td><?php echo $i['medicine_name'] ?></td>
    <td><?php echo $i['stock'] ?></td>
    <td><?php echo $i['price'] ?></td>
    <td><?php echo $i['exp_date'] ?></td>

   <td> <button name ="sbmt" class="btn btn-main btn-round-full" > <a href="edit medicine.php?id=<?php echo $i['medicine_id'] ?>">Edit</a> <i class=" icofont-simple-right ml-2 "></i></button> </td>
	 <td>	<button name ="sbmt" class="btn btn-main btn-round-full" ><a href="delete medicine.php?iq=<?php echo $i['medicine_id'] ?>">Delete</a><i class=" icofont-simple-right ml-2  "></i></button> </td>
						
  </tr>

  <?php
    }
  ?>
  </table>
   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>