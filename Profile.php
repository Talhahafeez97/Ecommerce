<?php 
	session_start();
	if(!isset($_SESSION["Userr"])) {
		header("location:Login.php?False=true");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title> My Profile </title>

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
	
    <!--================ My Profile =================-->
    <?php
		include ("Connection.php");

		$Query = "SELECT * FROM customers WHERE
			usrN = '".$_SESSION["Userr"]."' ";
					
		$check_Query = mysqli_query($Connection, $Query);
		$num_Rows = mysqli_num_rows($check_Query);

		if ($num_Rows > 0) :
			while($customer = mysqli_fetch_array($check_Query)):
	?>

	<section class="ftco-section">
		<div class="container">
  			<div class="row justify-content-center">
    			<div class="col-md-4 col-sm-6 col-xs-12">
      				<div class="justify-content-center">
      					<div>
      						<img class="img-circle" src= "<?php echo $customer["usrAvatar"]?>"
                  style="max-width: 200px" style="max-height: 200">
                  <br> <br>
                  <h3> Weclome <?php echo $customer["userFirst"] ?> </h3>
      					</div>
      				</div>
    			</div>

    			<div class="col-md-8 col-sm-6 col-xs-12 personal-info">
    				<?php 
						if (isset($_GET["Success"]) ) {
							?>
							<div class="alert alert-success"> 
								Profile Updated!
							</div>
							<?php
						}  
            if (isset($_GET["Error"]) ) {
              ?>
              <div class="alert alert-danger"> 
                Something went Wrong!
              </div>
              <?php
            }              										  
					?>
      				<div class="alert alert-info alert-dismissable">
        				<a class="panel-close close" data-dismiss="alert">×</a> 
        				<i class="fa fa-coffee"></i>
        				Please Upload your Avatar!
      				</div>

      				<h3> My Profile </h3>
      				<form action="UpdateProfile.php" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
        				<div class="form-group">
          					<label class="col-lg-3 control-label">Username</label>
          					<div class="col-lg-8">
            					<input type="text" name="pUsr" readonly class="form-control"
            					value="<?php echo $customer["usrN"]; ?>" >
          					</div>
        				</div>
        			<div class="form-group">
          				<label class="col-lg-3 control-label">Email</label>
          				<div class="col-lg-8">
            				<input class="form-control" value="<?php echo $customer["usrEmail"]; ?>" type="text" readonly>
          				</div>
        			</div>
        			<div class="form-group">
          				<label class="col-lg-3 control-label">First Name</label>
          				<div class="col-lg-8">
            				<input class="form-control" value="<?php echo $customer["userFirst"]; ?>" type="text" readonly>
          				</div>
        			</div>
        			<div class="form-group">
          				<label class="col-lg-3 control-label">Last Name</label>
          				<div class="col-lg-8">
            				<input class="form-control" value="<?php echo $customer["usrLast"]; ?>" type="text" readonly>
          				</div>
        			</div>
        			<div class="form-group">
          				<label class="col-md-3 control-label">Password:</label>
          				<div class="col-md-8">
            				<input name="pPass" class="form-control" value="<?php echo $customer["usrPassword"]; ?>" type="password">
            				<br>
          				</div>
                  <input type="file" class="text-center center-block well well-sm" name="pimg" accept="Avatars/*" required>
        			</div>
        			<div class="form-group">
          				<label class="col-md-3 control-label"></label>
          				<div class="col-md-8">
            				<input class="btn btn-primary" value="Save Changes" type="submit" name="submit">
            				<span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
            				<input class="btn btn-default" value="Cancel" type="reset">
          				</div>
        			</div>
      			</form>
      			<?php
      				endwhile;
      			endif;
      			?>            
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
