<?php 
	session_start();
	if(isset($_SESSION["Userr"])) {
		header("location:Home.php?Check=true");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title> Login </title>

	<!-- Fonts -->	
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">	
	
	<!-- Bootstrap CSS & Main CSS -->
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/CustomValidation.js"></script>
</head>

<body>
	<!--================ Header Menu Area =================-->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2" id="ftco-navbar">
		<div class="container">
	    	<a class="navbar-brand" href="Home.html"> Jessie's Tech </a>
	      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        	<span class="oi oi-menu"> </span> Menu </button>

	      	<div class="collapse navbar-collapse" id="ftco-nav">
          		<ul class="navbar-nav ml-auto">
	          		<li class="nav-item">
				  		<a href="Home.php" class="nav-link"> Home </a>
			  		</li>
	          		<li class="nav-item">
				  		<a href="Shop.php" class="nav-link"> Shop </a>
			  		</li>				
	          		<li class="nav-item">
				  		<a href="Assignment.php" class="nav-link"> Assignment </a>
			  		</li>							  		
	          		<li class="nav-item">
				  		<a href="About.php" class="nav-link"> About </a>
			  		</li>				
	          		<li class="nav-item dropdown">
              			<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Help </a>
              			<div class="dropdown-menu" aria-labelledby="dropdown04">
              				<a class="dropdown-item" href="Contact.php"> Contact Us </a>
              			</div>
              		</li>
	          		<li class="nav-item">
				  		<a href="Register.php" class="nav-link"> Register </a>
			  		</li>              		
	          		<li class="nav-item active">
				  		<a href="Login.php" class="nav-link"> Login </a>
			  		</li>              		
	        	</ul>
	      	</div>
		</div>
	</nav>

	<!--================ Main Background =================-->
	<div class="hero-wrap hero-bread" style="background-image: url('Images/Login1.jpg');">
		<div class="container">
        	<div class="row no-gutters slider-texttt align-items-center justify-content-center">
          		<div class="col-md-9 ftco-animate text-center">
            		<h1 class="mb-0 bread" style="color: white;"> Login </h1>
            		<p class="breadcrumbs">
            			<div class="page_link">
							<span class="mr-2">
								<a href="Home.php" style="color: white"> Home </a>
							</span> 
							<span style="color: white"> Login </span>
						</div>
					</p>
          		</div>
        	</div>
      	</div>
    </div>
	
    <!--================ Login Form =================-->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 ftco-animate">
					<div class="login_box_img">
						<img class="img-fluid" src="Images/Login2.jpg">
						<div class="login_box_img container hover">
							<h4>New to our website?</h4>
							<p>Register to Access over 1,000 Electronic Products with
								Special Disocunts
							</p>
							<button class="btn btn-primary py-3 px-4">
								<a href="Register.php" style="color: white">
									Register Now
								</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-lg-6 ftco-animate">
					<form action="LoginProcess.php" class="billing-form bg-light p-3 p-md-5" method="Post">
						<center><h3 class="mb-4 billing-heading"> Login	Form </h3></center>
    						<?php 
								if (isset($_GET["Check"]) ) {
									?>
									 <div class="alert alert-warning"> 
									 	Please Login First!

									 </div>
									<?php
								}    								
								if (isset($_GET["Error"]) ) {
									?>
									 <div class="alert alert-warning"> 
									 	Invalid Username or Password!
									 </div>
									<?php
								}   	
								if (isset($_GET["False"]) ) {
									?>
									 <div class="alert alert-warning"> 
									 	Login First!
									 </div>
									<?php
								}  															  
							?>						
	          			<div class="row align-items-end">
	              			<div class="col-md-11">
	                			<div class="form-group">
	                				<label for="username">Username</label>
	                  				<input type="text" name="usr" class="form-control" placeholder="" required>
	                			</div> 
                			</div>
	              			<div class="col-md-11">
	                			<div class="form-group">
	                				<label for="password">Password</label>
	                  				<input type="password" id="uP" name="uPass" class="form-control" placeholder="" required>
	                			</div>
                			</div>
                		</div>
                		<p> <center>
                			<input type="submit" class="btn btn-primary py-3 px-4" name="submit" value="Login">              			
                		</center> </p>
                	</form>
				</div>
			</div>
		</div>
	</section>    

    <!--================ Footer =================-->
    <footer class="ftco-footer bg-light ftco-section">
    	<div class="container">
        	<div class="row mb-5">
          		<div class="col-md">
          			<h3 class="ftco-heading-2"> Made By: </h3>
          			<div class="block-23 mb-3">
	              		<ol>
	                		<li>
	                			<span class="text"> Minaam Ahmed Awan </span>
	                		</li>
	                		<li>
	                			<span class="text"> Talha Hafeez </span>
	                		</li>
	                		<li>
	                			<span class="text"> Hamza Saleem </span>
	                		</li>
	              		</ol>
	            	</div>
            		<p>
              			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
            		</p>  
          		</div>
          	
          		<div class="col-md">
            		<div class="ftco-footer-widget mb-4">
            			<h2 class="ftco-heading-2">Have a Questions?</h2>
            			<div class="block-23 mb-3">
	              			<ul>
	                			<li>
	                				<span class="icon icon-map-marker"></span>
	                				<span class="text"> Bahria University, Karachi Campus </span>
	                			</li>
	                			<li>
		                			<a href="#">
		                				<span class="icon icon-phone"></span>
	    	            				<span class="text">+92 302 2777356 </span>
	        	        			</a>
	            	    		</li>
	              			</ul>
	            		</div>
            		</div>
          		</div>
        	</div>
      	</div>
    </footer>

	<!-- Optional JavaScript -->
	<script src="js/jquery.min.js"> </script>
  	<script src="js/jquery-migrate-3.0.1.min.js"> </script>
  	<script src="js/popper.min.js"> </script>
  	<script src="js/bootstrap.min.js"> </script>
  	<script src="js/jquery.easing.1.3.js"> </script>
  	<script src="js/jquery.waypoints.min.js"> </script>
  	<script src="js/jquery.stellar.min.js"> </script>
  	<script src="js/owl.carousel.min.js"> </script>
  	<script src="js/jquery.magnific-popup.min.js"> </script>
  	<script src="js/aos.js"> </script>
  	<script src="js/jquery.animateNumber.min.js"> </script>
  	<script src="js/bootstrap-datepicker.js"> </script>
  	<script src="js/scrollax.min.js"> </script>
  	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"> </script>
  	<script src="js/google-map.js"> </script>
  	<script src="js/main.js"> </script> 
	
</body>
</html>
