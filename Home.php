<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title> Jessie's Tech </title>

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

</head>

<body>
	<!--================ PHP Messages =================-->
	<?php 
		if (isset($_GET["Check"]) ) {
			?>
			<center>
			<div class="alert alert-warning" style="margin-bottom: -12px"> 
				Already Logged In!
			</div>
			</center>
			<?php
		}   
		if (isset($_GET["Registered"]) ) {
			?>
			<center>
			<div class="alert alert-warning" style="margin-bottom: -12px"> 
				User Already Registered!
			</div>
			</center>
			<?php
		}  		 
		if (isset($_GET["Welcome"]) ) {
			?>
			<center>
			<div class="alert alert-success" style="margin-bottom: -12px"> 
				Logged In Successfully!
			</div>
			</center>
			<?php
		}    	
		if (isset($_GET["Logout"]) ) {
			?>
			<center>
			<div class="alert alert-success" style="margin-bottom: -12px"> 
				Logged Out Successfully!
			</div>
			</center>
			<?php
		} 		
		if (isset($_GET["False"]) ) {
			?>
			<center>
			<div class="alert alert-danger" style="margin-bottom: -12px"> 
				Privellages not Given!
			</div>
			</center>
			<?php
		} 																		
	?>

	<!--================ Header Menu Area =================-->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
	    	<a class="navbar-brand" href="Home.php"> Jessie's Tech </a>
	      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        	<span class="oi oi-menu"> </span> Menu </button>

	      	<div class="collapse navbar-collapse" id="ftco-nav">
          		<ul class="navbar-nav ml-auto">
	          		<li class="nav-item active">
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
							<li class="nav-item">
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

	<!--================ Main Background =================-->
	<div class="hero-wrap js-fullheight" style="background-image: url('Images/iPhones.jpg');">
    	<div class="overlay"></div>
      	<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-10 ftco-animate text-center">
            		<h1 style="color: black"> New Stock </h1>
					<br> <br> <br>
          		</div>
          			<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
						</a>
					</div>
      		</div>
		</div>
    </div>
	
	<!--================ New Arrivals Slider =================-->
	<div class="goto-here"></div>
	<section class="ftco-section ftco-product">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          		<div class="col-md-12 heading-section text-center ftco-animate">
          			<h1 class="big"> New Arrivals </h1>
            		<h2 class="mb-4"> New Arrivals </h2>
          		</div>
        	</div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="product-slider owl-carousel ftco-animate">
    					
    					<!--================ Add Items =================-->
    					<div class="item">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img class="img-fluid" src="Images/iPhoneXWhite.jpg" alt="">
		    						<span class="status">30%</span>
		    					</a>
		    					<div class="text pt-3 px-3">
		    						<h3>
		    							<a href="#">iPhone X 256 GB (White)</a>
		    						</h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							<p class="price">
			    								<span class="mr-2 price-dc">$1120.00</span>
			    								<span class="price-sale">$1000.00</span>
			    							</p>
			    						</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>

    					<div class="item">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img class="img-fluid" src="Images/iPhoneXBlack.jpg" alt="">
		    					</a>
		    					<div class="text pt-3 px-3">
		    						<h3>
		    							<a href="#">iPhone X 256 GB (Black)</a>
		    						</h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							<p class="price">
			    								<span class="price-sale">$1120.00</span>
			    							</p>
			    						</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>	    				

    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	
    <!--================ Sale Background =================-->
    <section class="ftco-section ftco-section-more img" style="background-image: url(Images/StudentDiscount1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          		<div class="col-md-12 heading-section ftco-animate">
          			<h2 style="padding-bottom: px"> Student Discount </h2>
          		</div>
        	</div>
    	</div>
    </section>

    <!--================ Figures =================-->
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(Images/Shopping.jpg);">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		          		<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            		<div class="block-18 text-center">
		              			<div class="text">
		                			<strong class="number" data-number="10000">0</strong>
		                			<span>Happy Customers</span>
		              			</div>
		            		</div>
		          		</div>
		          		<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            		<div class="block-18 text-center">
		              			<div class="text">
		                			<strong class="number" data-number="100">0</strong>
		                			<span>Branches</span>
		              			</div>
		            		</div>
		          		</div>
		          		<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            		<div class="block-18 text-center">
		              			<div class="text">
		                			<strong class="number" data-number="1000">0</strong>
		                			<span>Partner</span>
		              			</div>
		            		</div>
		          		</div>
		          		<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
			            	<div class="block-18 text-center">
			            		<div class="text">
		    	           			<strong class="number" data-number="100">0</strong>
		        	        		<span>Awards</span>
		              			</div>
		            		</div>
		          		</div>
		        	</div>
	        	</div>
        	</div>
    	</div>
    </section>

    <!--================ Services =================-->
    <section class="ftco-section bg-light ftco-services">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          		<div class="col-md-12 heading-section text-center ftco-animate">
            		<h1 class="big">Services</h1>
            		<h2>We want you to express yourself</h2>
          		</div>
        	</div>

        	<div class="row">
        		<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
          			<div class="media block-6 services">
              			<div class="icon d-flex justify-content-center align-items-center mb-4">
            				<span class="flaticon-002-recommended"></span>
              			</div>
              			<div class="media-body">
	                		<h3 class="heading"> Refund Policy </h3>
    	            		<p>Items shipped can be returned within 30 days of receipt of shipment in most cases. Some products have different policies or requirements associated with them.
    	            		</p>
        	      		</div>
            		</div>      
          		</div>
          
				<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
        			<div class="media block-6 services">
            			<div class="icon d-flex justify-content-center align-items-center mb-4">
            				<span class="flaticon-001-box"></span>
              			</div>
              			<div class="media-body">
                			<h3 class="heading"> Premium Shipping </h3>
                			<p>Fast shipping options to customers, These fast shipping options, with tracking, can improve the customer experience by communicating a clear delivery day.</p>
              			</div>
            		</div>    
          		</div>
          	
          		<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            		<div class="media block-6 services">
              			<div class="icon d-flex justify-content-center align-items-center mb-4">
            				<span class="flaticon-003-medal"></span>
              			</div>
              			<div class="media-body">
                			<h3 class="heading">Superior Quality</h3>
                			<p>Mobile Phones straigh from the factory with no defects/problems.</p>
              			</div>
            		</div>      
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