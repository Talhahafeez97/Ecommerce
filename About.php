<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title> About </title>

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
	          		<li class="nav-item active">
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
	<div class="hero-wrap hero-bread" style="background-image: url('Images/apple-sloppy.jpg');">
		<div class="container">
        	<div class="row no-gutters slider-texttt align-items-center justify-content-center">
          		<div class="col-md-10 ftco-animate text-center">
            		<h1 class="mb-0 bread" style="color: black;"> About </h1>
            		<p class="breadcrumbs">
            			<div class="page_link">
							<span class="mr-2">
								<a href="Home.php" style="color: black"> Home </a>
							</span> 
							<span style="color: black"> About </span>
						</div>
					</p>
          		</div>
        	</div>
      	</div>
    </div>
	
    <!--================ Content Area =================-->
	<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/bg_2.jpg);">
						<a href="https://vimeo.com/238480244" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-5 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Jessie`s <br>Tech <br></h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p>Satisfied customer is the best source of advertisement,<br> Our original editorial insight was that technology had migrated from the far fringes of the culture to the absolute center as mobile technology created a new generation of digital consumers. Now, we live in a dazzling world of screens that has ushered in revolutions in media, transportation, and science. The future is arriving faster than ever.</p>
							<p>We build powerful assistive features into Apple products to give people with physical limitations greater control over their lives. You can navigate onscreen keyboards and menus with a single tap using Switch Control, customize accessible Multi-Touch gestures to work best for you, or control HomeKit-enabled accessories using just your voice.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

    <!--================ Testimonials =================-->
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
			<div class="row justify-content-center mb-3 pb-3">
          		<div class="col-md-12 heading-section text-center ftco-animate">
          			<h1 class="big">Testimony</h1>
          		</div>
        	</div>   

        	<div class="row justify-content-center">
          		<div class="col-md-8 ftco-animate">
          			<div class="row ftco-animate">
		          		<div class="col-md-12">
		            		<div class="carousel-testimony owl-carousel ftco-owl">
		              			<div class="item">
		                			<div class="testimony-wrap py-4 pb-5">
		                  				<div class="user-img mb-4" style="background-image: url(Images/Person01.jpeg)">
		                    				<span class="quote d-flex align-items-center justify-content-center">
		                      					<i class="icon-quote-left"></i>
		                    				</span>
		                  				</div>
		                  				<div class="text text-center">
		                    				<p class="mb-4">Ordered many Apples products from Jessie`s.Satisfied by their services!</p>
		                    				<p class="name">Saad Ashfaq</p>
		                    				<span class="position">Customer</span>
		                  				</div>
		                			</div>
		              			</div>
		              			<div class="item">
		                			<div class="testimony-wrap py-4 pb-5">
		                  				<div class="user-img mb-4" style="background-image: url(Images/Person02.jpeg)">
		                    				<span class="quote d-flex align-items-center justify-content-center">
		                      					<i class="icon-quote-left"></i>
		                    				</span>
		                  				</div>
		                  				<div class="text text-center">
		                    				<p class="mb-4">Order iPhone 5C last year! Still working fine! Jessie`s never disappoints!</p>
		                    				<p class="name">Hamza Saleem</p>
		                    				<span class="position">Customer</span>
		                  				</div>
		                			</div>
		              			</div>
		              			<div class="item">
		                			<div class="testimony-wrap py-4 pb-5">
		                  				<div class="user-img mb-4" style="background-image: url(Images/Person03.jpeg)">
		                    				<span class="quote d-flex 	align-items-center justify-content-center">
		                      					<i class="icon-quote-left"></i>
		                    				</span>
		                  				</div>
		                  				<div class="text text-center">
		                    				<p class="mb-4">My order was delivered to me before delivery date ,couldn`t be more happy! Jessie`s never disappoints.</p>
		                    				<p class="name">Mehdi Nisar</p>
		                    				<span class="position">Customer</span>
		                  				</div>
		                			</div>
		              			</div>
		              			<div class="item">
		                			<div class="testimony-wrap py-4 pb-5">
		                  				<div class="user-img mb-4" style="background-image: url(Images/Person04.jpeg)">
		                    				<span class="quote d-flex align-items-center justify-content-center">
		                      					<i class="icon-quote-left"></i>
		                    				</span>
		                  				</div>
		                  				<div class="text text-center">
		                    				<p class="mb-4">Ordered many Apples products from Jessie`s.Satisfied by their services!.</p>
		                    				<p class="name">Abdul Hadi</p>
		                    					<span class="position">Customer</span>
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

