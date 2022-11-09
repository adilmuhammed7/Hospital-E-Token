<?php

include 'connection.php';

if(isset($_POST['sbmt'])){

    $name=$_POST['nm'];
    $place=$_POST['pl'];
    $phone=$_POST['ph'];
    $email=$_POST['em'];
    $user=$_POST['us'];
    $pass=$_POST['ps'];

    mysqli_query($a,"INSERT INTO login_table (username,password,type)VALUES('$user','$pass','pharmacy')");
    $log= mysqli_insert_id($a);
    mysqli_query($a,"INSERT INTO pharmacy_registration (login_id,pharmacy_name,place,phone_no,email)VALUES('$log','$name','$place','$phone','$email')");
    header("location:login.php");
}

?>

 
<!DOCTYPE html>
<html lang="en">
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


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
					<h2 class="mb-2 title-color">Sign Up</h2>
					<p class="mb-4"></p>
					     <form id="#" class="appoinment-form" method="post">
                    <div class="row">
                         <!-- <div class="col-lg-6"> -->
                            <!-- <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Choose Department</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div> -->
                        <!-- </div> -->
                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect2">
                                  <option>Select Doctors</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div>
                        </div> -->

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="nm" id="name" type="text" class="form-control" placeholder="pharmacy name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="pl" id="name" type="text" class="form-control" placeholder="place">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="ph" id="email" type="text" class="form-control" placeholder="phone no">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="em" id="phone" type="text" class="form-control" placeholder="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="us" id="phone" type="text" class="form-control" placeholder="username">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="ps" id="phone" type="password" class="form-control" placeholder="password">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div> -->

                   
                     <!-- <a class="btn btn-main btn-round-full" href="docter home.php">Sign Up<i class="icofont-simple-right ml-2  "></i></a> -->
                   <button name ="sbmt" class="btn btn-main btn-round-full" >Sign Up<i class="icofont-simple-right ml-2  "></i></button>
                     <p>Already Have An Account</p>
                    <a class="btn btn-main btn-round-full" href="login.php" >Log In<i class="icofont-simple-right ml-2  "></i></a>

                </form>
            </div>
			</div>
		</div>
	</div>
</section>
</body>
</html>