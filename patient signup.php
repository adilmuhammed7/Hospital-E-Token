<?php

include 'connection.php';

if(isset($_POST['sbmt'])){

    $name=$_POST['nm'];
    $age=$_POST['ag'];
    $gender=$_POST['gender'];
    $phone=$_POST['ph'];
    $email=$_POST['em'];
    $user=$_POST['us'];
    $pass=$_POST['ps'];

    mysqli_query($a,"INSERT INTO login_table (username,password,type)VALUES('$user','$pass','patient')");
    $log= mysqli_insert_id($a);
    mysqli_query($a,"INSERT INTO patient_registration (login_id,name,age,gender,phone_no,email)VALUES('$log','$name','$age','$gender','$phone','$email')");
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
					     <form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
                        

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="nm" id="name" type="text" class="form-control" placeholder=" Name">
                            </div>
                        </div>
                        

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="ag" id="Age" type="text" class="form-control" placeholder="Age">
                            </div>
                        </div>
                         

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="ph" id="phone" type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="em" id="email" type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="us" id="phone" type="text" class="form-control" placeholder="username">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="ps" id="email" type="text" class="form-control" placeholder="password">
                            </div>
                        </div>
                       <div class="col-lg-6"><br>
                            <div class="form-group">
                                <input name="gender" id="gender" type="radio" placeholder="gender">Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name = "gender" type="radio">female
                            </div>
                        </div>
                       
                    </div>

                   
                     <!-- <a class="btn btn-main btn-round-full" href="" >Sign Up<i class="icofont-simple-right ml-2  "></i></a> -->
                     <button name ="sbmt" class="btn btn-main btn-round-full" href="patient home.php">Sign Up<i class="icofont-simple-right ml-2  "></i></button>
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