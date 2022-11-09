<?php

session_start();

$log = $_SESSION['id'];



include "connection.php";

if(isset($_POST['sbmt'])){

    $slot1=$_POST['s1'];
    $slot2=$_POST['s2'];
    $slot3=$_POST['s3'];
    $slot4=$_POST['s4'];
    $slot5=$_POST['s5'];
    $slot6=$_POST['s6'];
    $date=$_POST['date'];

   
    
    mysqli_query($a,"INSERT INTO time_slot_table (docter_id,slot_1,slot_2,slot_3,slot_4,slot_5,slot_6,date)VALUES('$log','$slot1','$slot2','$slot3','$slot4','$slot5','$slot6','$date')");
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

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@novena.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, New York, USA </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							<span>Call Now : </span>
							<span class="h4">823-4565-13456</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	



<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="images/about/img-3.jpg" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+23 345 67980</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Add time slots</h2>
					<p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
					     <form id="#" class="appoinment-form" method="post" >
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                
                            </div>
                        </div>

                         

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="s1" id="time" type="time" class="form-control" placeholder="slot-1">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="s2" id="name" type="time" class="form-control" placeholder="slot-2">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="s3" id="phone" type="time" class="form-control" placeholder="slot-3">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="s4" id="phone" type="time" class="form-control" placeholder="slot-4">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="s5" id="phone" type="time" class="form-control" placeholder="slot-5">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input  name="s6" id="phone" type="time" class="form-control" placeholder="slot-6">
                            </div>
                        </div>

                       
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input style = "margin-left:145px" name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                    </div>
                    

                     <button style = "margin-left:199px" name="sbmt" class="btn btn-main btn-round-full">submit <i class="icofont-simple-right ml-2  "></i></a></button> 
                </form>                   
            </div>
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
   