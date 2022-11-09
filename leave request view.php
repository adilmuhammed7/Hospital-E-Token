<?php

include 'connection.php';

$x = mysqli_query($a,"SELECT * FROM leave_table JOIN docter_registration ON leave_table.docter_id=docter_registration.docter_id ");

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
	
<?php
      while($i=mysqli_fetch_assoc($x)){
	?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Doctor Details</span>
          <h1 class="text-capitalize mb-5 text-lg"><?php echo $i['docter_name'] ?></h1>

          
        </div>
      </div>
    </div>
  </div>
</section>

    

<section class="section doctor-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="doctor-img-block">
					<img src="images/<?php echo $i['image'] ?>" alt="" class="img-fluid w-100">

					<div class="info-block mt-4">
						<h4 class="mb-0"><?php echo $i['docter_name'] ?></h4>
						<p>Orthopedic Surgary</p>

						<ul class="list-inline mt-4 doctor-social-links">
							<li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="icofont-skype"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="icofont-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-8 col-md-6">
				<div class="doctor-details mt-4 mt-lg-0">
					<h2 class="text-md"><?php echo $i['date'] ?></h2>
					<div class="divider my-4"></div>
					<p><?php echo $i['reason'] ?></p>
					<?php  if($i['status'] == 0){ ?>
						<button name ="sbmt" class="btn btn-main btn-round-full" > <a href="reject leave.php?id=<?php echo $i['docter_id'] ?>">Reject</a> <i class="  "></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
						<button name ="sbmt" class="btn btn-main btn-round-full" ><a href="leave approvel.php?iq=<?php echo $i['docter_id'] ?>">approve</a><i class="icofont-simple-right ml-2  "></i></button>
						<?php } ?>
						<?php if($i['status'] == 1){ ?>
						<button style="" name ="sbmt" class="btn btn-main btn-round-full" >approved</button>	
						<?php } ?>
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