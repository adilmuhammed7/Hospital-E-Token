<?php

include 'connection.php';

$x = mysqli_query($a,"SELECT * FROM feedback_table JOIN patient_registration ON feedback_table.patient_id=patient_registration.patient_id ");

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
	
         

<section class="section testimonial">
               <div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<h2 class="mb-4">What they say about us</h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">
               <?php
                 while($i=mysqli_fetch_assoc($x)){
		      	?>
				<div class="testimonial-block">
					<div class="client-info ">
						<h4><?php echo $i['name'] ?></h4>
						
					</div>
					<p>
						<?php echo $i['feedback'] ?>
					</p>
					<i class="icofont-quote-right"></i>
					
				</div>

                <?php   
                 }
                ?>
                  

				<!-- <div class="testimonial-block">
					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div> -->

				<!-- <div class="testimonial-block">
					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div> -->

				<!-- <div class="testimonial-block">
					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div> -->

				<!-- <div class="testimonial-block">
					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div> -->
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