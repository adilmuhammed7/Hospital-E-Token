<?php

include 'connection.php';

$x = mysqli_query($a,"SELECT * FROM time_slot_table JOIN docter_registration ON time_slot_table.docter_id=docter_registration.docter_id ");

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

</head>

<body id="top">

<header>
	
</header>
	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Time Slots</span>
          <h1 class="text-capitalize mb-5 text-lg">View Time Schedule</h1>

         
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div>
    <?php
             while($i=mysqli_fetch_assoc($x)){
		      	?>
		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					

					
				</div>
			</div>



			<div class="col-lg-4">
            <h3 class="mt-5 mb-4"><?php echo $i['docter_name'] ?></h3>
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4"><?php echo $i['date'] ?></h5>

					<ul class="list-unstyled">
					  <li class="d-flex justify-content-between align-items-center">
					    <p><?php echo $i['slot_1'] ?></p>
					    <p><?php echo $i['slot_2'] ?></p>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <p><?php echo $i['slot_3'] ?></p>
					    <p><?php echo $i['slot_4'] ?></p>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <p><?php echo $i['slot_5'] ?></p>
					    <p><?php echo $i['slot_6'] ?></p>
					  </li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php
      }
    ?>
</section>


   

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