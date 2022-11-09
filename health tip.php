<?php

session_start();

$log = $_SESSION['id'];

include 'connection.php';

if(isset($_POST['sbmt'])){

  $tip = $_POST['tip'];

  mysqli_query($a,"INSERT INTO health_tips_table(docter_id,health_tip)VALUES('$log','$tip')");


}

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

<br><br><br><br>





	<div class="col-lg-12">
		<form method="post" class="comment-form my-5" id="comment-form">
			<h3 style="margin-left:520px" class="mb-4">Write health tip</h3>
			<!-- <div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" type="text" name="name" id="name" placeholder="Name:">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
					</div>
				</div>
			</div> -->


			<textarea class="form-control mb-4" name="tip" id="comment" cols="30" rows="5" placeholder="write"></textarea>

            <button style = "margin-left:530px" name="sbmt" class="btn btn-main btn-round-full">submit <i class="icofont-simple-right ml-2  "></i></a></button> 
		</form>
	</div>
</div>



   

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