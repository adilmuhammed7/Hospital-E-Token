<?php

include 'connection.php';

$x = mysqli_query($a,"SELECT * FROM pharmacy_registration")

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


	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">View & </span>
          <h1 class="text-capitalize mb-5 text-lg">Approve registerd pharmacy</h1>

         
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section department-single">
	<div class="container">
		
    <?php
    while($i=mysqli_fetch_assoc($x)){
    ?>
    
		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					

					<h3 class="mt-5 mb-4"><?php echo $i['pharmacy_name'] ?></h3>
					<div class="divider my-4"></div>
					<ul class="list-unstyled department-service">
						<li><i class="icofont-check mr-2"></i><?php echo $i['place'] ?></li>
						<li><i class="icofont-check mr-2"></i><?php echo $i['phone_no'] ?></li>
						<li><i class="icofont-check mr-2"></i><?php echo $i['email'] ?></li>
						
					</ul>
          <?php  if($i['status'] == 0){ ?>
          <button name ="sbmt" class="btn btn-main btn-round-full" > <a href="reject pharmacy.php?id=<?php echo $i['pharmacy_id'] ?>">Reject</a><i class="  "></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="approve pharmacy.php?iq=<?php echo $i['pharmacy_id'] ?>" class="btn btn-main-2 btn-round-full">Approve<i class="icofont-simple-right ml-2  "></i></a>
          <?php } ?>

      

          <?php if($i['status'] == 1){ ?>
						<button style="" name ="sbmt" class="btn btn-main btn-round-full" >approved</button>	
						<?php } ?>

				</div>
			</div>

			

      <?php
        }
      ?>
				
			</div>
		</div>
	</div>
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