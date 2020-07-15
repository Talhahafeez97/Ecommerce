<?php 
	session_start();
	if(isset($_SESSION["Userr"])) {
		header("location:Home.php?Registered=true");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title> Registeration </title>

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
	          		<li class="nav-item active">
				  		<a href="Register.php" class="nav-link"> Register </a>
			  		</li>              		
	          		<li class="nav-item">
				  		<a href="Login.php" class="nav-link"> Login </a>
			  		</li>              		
	        	</ul>
	      	</div>
		</div>
	</nav>

	<!--================ Main Background =================-->
	<div class="hero-wrap hero-bread" style="background-image: url('Images/Register.jpg');">
		<div class="container">
        	<div class="row no-gutters slider-texttt align-items-center justify-content-center">
          		<div class="col-md-9 ftco-animate text-center">
            		<h1 class="mb-0 bread" style="color: white;"> Register </h1>
            		<p class="breadcrumbs">
						<span class="mr-2">
							<a href="Home.php" style="color: white"> Home </a>
						</span> 
						<span style="color: white"> Register </span>
					</p>
          		</div>
        	</div>
      	</div>
    </div>
	
    <!--================ Registeration Form =================-->
    <section class="ftco-section">
    	<div class="container">
        	<div class="row justify-content-center">
          		<div class="col-xl-8 ftco-animate">
					<form action="Registeration.php" class="billing-form bg-light p-3 p-md-5" method="Post">
						<h3 class="mb-4 billing-heading"> Registeration	Form </h3>
    						<?php 
								if (isset($_GET["Error"]) ) {
									?>
									 <div class="alert alert-warning"> 
									 	User Already Exists!

									 </div>
									<?php
								}    
								if (isset($_GET["Success"]) ) {
									?>
									 <div class="alert alert-success"> 
									 	Successfully Registered!
									 </div>
									<?php
								}    																			
							?>						
	          			<div class="row align-items-end">
	              			<div class="col-md-6">
	                			<div class="form-group">
	                				<label for="username">Username</label>
	                  				<input type="text" name="usr" id="usrq" class="form-control" placeholder="" required>
	                			</div> 
	                			<script>
	                				document.getElementById("usrq").addEventListener("change", valUsr);
    							</script>
    							<div class="valid-feedback" id="usrV" style="padding-bottom: 10px">
    								Looks Good!
    							</div>
    							<div class="invalid-feedback" id="usrIV" style="padding-bottom: 10px">
    								Please try again..
    							</div>	                			
                			</div>
	              			<div class="col-md-6">
	                			<div class="form-group">
	                				<label for="email">Email Address</label>
	                  				<input type="text" name="email" class="form-control" placeholder="" id="email" required>
	                			</div>
	                			<script>
	                				document.getElementById("email").addEventListener("change", valEmail);
    							</script>
    							<div class="valid-feedback" id="EmailV" style="padding-bottom: 10px">
    								Looks Good!
    							</div>
    							<div class="invalid-feedback" id="EmailIV" style="padding-bottom: 10px">
    								Format Jessies@youremail.com
    							</div>  	                				                			
                			</div>                			
	          				<div class="col-md-6">
	                			<div class="form-group">
	                				<label for="firstname">First Name</label>
	                  				<input type="text" name="fName" class="form-control" placeholder="" required>
	                			</div>
	              			</div>
	              			<div class="col-md-6">
	                			<div class="form-group">
	                				<label for="lastname">Last Name</label>
	                  				<input type="text" name="lName" class="form-control" placeholder="" required>
	                			</div>
                			</div>
	              			<div class="col-md-6">
	                			<div class="form-group">
	                				<label for="password">Password</label>
	                  				<input type="password" id="uP" name="uPass" class="form-control" placeholder="" required>
	                			</div>
    							<div class="valid-feedback" id="verS" style="padding-bottom: 10px">
    								Looks Good!
    							</div>
    							<div class="invalid-feedback" id="verF" style="padding-bottom: 10px">
    								Password Don't Match
    							</div>	                			
                			</div>
	              			<div class="col-md-6">
	                			<div class="form-group">
	                				<label for="password1">Confirm Password</label>
	                  				<input type="password" id="uP1" name="uPass1" class="form-control" placeholder="" required>
	                			</div>
	                			<script>
	                				document.getElementById("uP1").addEventListener("change", verPass);
	                				document.getElementById("uP").addEventListener("change", verPass);
    							</script>
    							<div class="valid-feedback" id="verSS" style="padding-bottom: 10px">
    								Looks Good!
    							</div>
    							<div class="invalid-feedback" id="verFF" style="padding-bottom: 10px">
    								Password Don't Match
    							</div>	                			
                			</div>                			
               				<div class="col-md-6">
	                			<div class="form-group">
	                				<label for="phone">Phone Number</label>
	                  				<input type="text" name="pN" id="pno" class="form-control" placeholder="" required>
	                			</div>
	                			<script>
	                				document.getElementById("pno").addEventListener("change", valPhone);
    							</script>
    							<div class="valid-feedback" id="PhoV" style="padding-bottom: 10px">
    								Looks Good!
    							</div>
    							<div class="invalid-feedback" id="PhoIV" style="padding-bottom: 10px">
    								Format (03XX - XXXXXXX)
    							</div>    							  
	              			</div>                			
                			<div class="w-100"></div>
		            		<div class="col-md-12">
		            			<div class="form-group">
		            				<label for="city">City</label>
		            				<div class="select-wrap">
		                  				<div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  				<select name="city" id="" class="form-control" required>
		                  					<option value="">None</option>
		                  					<option value="">Karachi</option>
		                    				<option value="">Islamabad</option>
		                    				<option value="">Lahore</option>
		                    				<option value="">Hyderabad</option>
		                   					<option value="">Gujranwala</option>
		                				</select>
		                			</div>
		            			</div>
		            		</div>

		           			<div class="w-100"></div>
		            		<div class="col-md-6">
		            			<div class="form-group">
	                				<label for="streetaddress">Street Address</label>
	                  				<input type="text" name="address" class="form-control" placeholder="House number and street name" required>
	                			</div>
		            		</div>
		            		<div class="col-md-6">
		            			<div class="form-group">
	                  				<input type="text" name="oApt" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                			</div>
		            		</div>
                		</div>
                		<p> <center>
                			<input type="submit" class="btn btn-primary py-3 px-4" name="submit" value="Submit">              			
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
