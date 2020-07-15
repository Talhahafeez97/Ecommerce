<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title> Assignment </title>

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
	          		<li class="nav-item active">
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
	          		<li class="nav-item">
				  		<a href="Login.php" class="nav-link"> Login </a>
			  		</li>              		
			  		<?php
			  			if(isset($_SESSION["Userr"])) {
							?>
							<li class="nav-item cta cta-colored">
				  				<a href="Cart.php" class="nav-link"> 
					  				<span class="icon-shopping_cart"></span>
					  				 	[<?php
					  				 		if(isset($_SESSION["shopping_cart"])) {
					  				 			$count = count($_SESSION["shopping_cart"]);
					  				 			echo $count;
					  				 		}
					  				 	?>]
				  				</a>
			  				</li>
							<li class="nav-item active">
								<a href="Profile.php" class="nav-link"> 
					  				<?php
					  					echo $_SESSION["Userr"];
					  				?>
				  				</a>
				  			</li>
				  			<li  class="nav-item">
								<a href="LogoutProcess.php" class="nav-link"> 
					  				Logout
				  				</a>				  				
				  			</li>
				  			<?php
						}
			  		?>
	        	</ul>
	      	</div>
		</div>
	</nav>
	
    <!--================ Assignment=================-->
	<center>
		<div id="slider">
			<div id="headerSlider" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    				<li data-target="#headerSlider" data-slide-to="1"></li>
    				<li data-target="#headerSlider" data-slide-to="2"></li>
  				</ol>
  				<div class="carousel-inner">
    				<div class="carousel-item active">
      					<img src="Images/banner-iphone-hands_3_by-tranmautritam.jpg" class="d-block img-fluid" >
						<div class="carousel-caption">
							<h5>The amazing iphone X</h5>
						</div>
    				</div>
    				<div class="carousel-item">
      					<img src="Images/iphone_iphone_6_apple_101170_3840x2160.jpg" class="d-block img-fluid" >
						<div class="carousel-caption">
							<h5>Iphone 7</h5>
						</div>
    				</div>
    				<div class="carousel-item">
      					<img src="Images/osmiPhone_HD_Banner.jpg" class="d-block img-fluid">
						<div class="carousel-caption">
							<h5>The iphone osm</h5>
						</div>
    				</div>
    			</div>
 				 <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="sr-only">Next</span>
  				</a>
			</div>
		</div>
	</center>

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
