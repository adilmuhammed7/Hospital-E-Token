<?php

session_start();

$log = $_SESSION['id'];

include 'connection.php';

$b=$_GET['iq'];

$x = mysqli_query($a,"SELECT * FROM time_slot_table JOIN docter_registration ON time_slot_table.docter_id = docter_registration.docter_id ");
$z = mysqli_query($a,"SELECT * FROM time_slot_table JOIN docter_registration ON time_slot_table.docter_id = docter_registration.docter_id ");

$j = mysqli_fetch_assoc($z);
$w = $j['docter_id'];

if(isset($_POST['sbmt'])){

  $slot = $_POST['slot'];

  mysqli_query($a,"INSERT INTO appointment_table(patient_id,docter_id,time)VALUES('$log','$w','$slot')");

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


	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Book your Seat</span>
          <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
            <?php
              $i=mysqli_fetch_assoc($x);
		      	?>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
            
            </div>
             <span class="h3"><?php echo $i['docter_name'] ?></span>
              <h2 class="text-color mt-3"><?php echo $i['department'] ?></h2>
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Book an appoinment</h2>
            <p class="mb-4"> Available Slots</p>
               <form id="#" class="appoinment-form" method="post" >
                   
               
                        <div class="col-lg-6" style="margin-left:169px;">
                            <div class="form-group">
                               <center> <div style="" name="date" id="date" type="text" class="form-control" placeholder=""><?php echo $i['date'] ?></div></center>
                            </div>
                        </div>


                   
                   
                        <div class="row">
                 
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div name="name" id="date" type="text" class="form-control" placeholder=""><?php echo $i['slot_1'] ?></div> 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div name="time" id="time" type="text" class="form-control" placeholder=""><?php echo $i['slot_2'] ?></div>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <div name="name" id="name" type="text" class="form-control" placeholder=""><?php echo $i['slot_3'] ?></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div name="phone" id="phone" type="text" class="form-control" placeholder=""><?php echo $i['slot_4'] ?></div> 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div name="phone" id="phone" type="text" class="form-control" placeholder=""><?php echo $i['slot_5'] ?></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div name="phone" id="phone" type="text" class="form-control" placeholder=""><?php echo $i['slot_6'] ?></div>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="col-lg-6" style="margin-left:169px;">
                            <div class="form-group">
                                <select name="slot" class="form-control" id="exampleFormControlSelect2">
                                  <option>Select Slot</option>
                                  <option value="<?php echo $i['slot_1'] ?>"><?php echo $i['slot_1'] ?></option>
                                  <option value="<?php echo $i['slot_2'] ?>"><?php echo $i['slot_2'] ?></option>
                                  <option value="<?php echo $i['slot_3'] ?>"><?php echo $i['slot_3'] ?></option>
                                  <option value="<?php echo $i['slot_4'] ?>"><?php echo $i['slot_4'] ?></option>
                                  <option value="<?php echo $i['slot_5'] ?>"><?php echo $i['slot_5'] ?></option>
                                  <option value="<?php echo $i['slot_6'] ?>"><?php echo $i['slot_6'] ?></option> 
                                </select>
                            </div>
                        </div><br>

                        <button name ="sbmt" class="btn btn-main btn-round-full" style="margin-left:290px;" >Book<i></i></button>

              </form>
            </div>
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