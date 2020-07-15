<?php
	session_start();
	if(!isset($_SESSION["Userr"])) {
		unset($_SESSION["shopping_cart"]);
		session_destroy();
		header("location:Shop.php?Logged=false");
	}
?>

<?php
	$product_ids = array();

	if(filter_input(INPUT_POST, "submit")) {
		if(isset($_SESSION["shopping_cart"])){
			$count = count($_SESSION["shopping_cart"]);
			$product_ids = array_column($_SESSION["shopping_cart"], "proID");		

			if(!in_array(filter_input(INPUT_GET, "id"), $product_ids)) {
				$_SESSION["shopping_cart"][$count] = array
				(
					"proID" => filter_input(INPUT_GET, "id"),
					"proName" => filter_input(INPUT_POST, "pname"),
					"proImage" => filter_input(INPUT_POST, "pimage"),
					"proPrice" => filter_input(INPUT_POST, "pprice"),
					"proQuantity" => filter_input(INPUT_POST, "pquantity")
				);
			}
			else{
				for($i = 0; $i <count($product_ids); $i++){
					if($product_ids[$i] == filter_input(INPUT_GET, "id")){
					$_SESSION["shopping_cart"][$i]["proQuantity"] += filter_input(INPUT_POST, "pquantity");
					}
				}
			}				
		}
		else {
			$_SESSION["shopping_cart"][0] = array
			(
				"proID" => filter_input(INPUT_GET, "id"),
				"proName" => filter_input(INPUT_POST, "pname"),
				"proImage" => filter_input(INPUT_POST, "pimage"),
				"proPrice" => filter_input(INPUT_POST, "pprice"),
				"proQuantity" => filter_input(INPUT_POST, "pquantity")
			);
		}
	}

	if(filter_input(INPUT_GET, "action") == "delete"){
		foreach ($_SESSION["shopping_cart"] as $key => $product) {
			if($product["proID"] == filter_input(INPUT_GET, "id")){
				unset($_SESSION["shopping_cart"][$key]);
			}
		}
		$_SESSION["shopping_cart"] = array_values($_SESSION["shopping_cart"]);
	}

	//pre_r($_SESSION);

	function pre_r($array){
		echo "<pre>";
		print_r($array);
		echo "<pre>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title> My Cart </title>

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
	<!--================ Header Menu Area =================-->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2" id="ftco-navbar">
		<div class="container">
	    	<a class="navbar-brand" href="Home.php"> Jessie's Tech </a>
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
							<li class="nav-item cta cta-colored active">
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
	<div class="hero-wrap hero-bread" style="background-image: url('Images/Shop.jpg');">
		<div class="container">
        	<div class="row no-gutters slider-texttt align-items-center justify-content-center">
          		<div class="col-md-9 ftco-animate text-center">
            		<h1 class="mb-0 bread" style="color: white"> Products </h1>
            		<p class="breadcrumbs">
						<span class="mr-2">
							<a href="Home.php" style="color: white"> Home </a>
						</span> 
						<span class="breadcrumbs-active" style="color: white"> Shop </span>
					</p>
          		</div>
        	</div>
      	</div>
    </div>
		
	<!--================ Cart =================-->		
	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						    	<tr class="text-center">
						        	<th>&nbsp;</th>
						        	<th>&nbsp;</th>
						        	<th>Product</th>
						        	<th>Price</th>
						        	<th>Quantity</th>
						        	<th>Total</th>
						      	</tr>
						    </thead>
						    <tbody>
						    	<?php
						    		if(!empty($_SESSION["shopping_cart"])):
						    			$Total = 0;
						    			foreach($_SESSION["shopping_cart"] as $Key => $product):
						    	?>
						     	<tr class="text-center">
						        	<td class="product-remove">
						        		<a href="Cart.php?action=delete&id=<?php echo $product["proID"]; ?>"><span class="ion-ios-close"></span></a>
						        	</td>

						        	<td class="image-prod">
						        		<img class ="img" src= "<?php echo $product["proImage"]?>">
						        	</td>
						        	<td class="product-name">
						        		<h3> <?php echo $product["proName"]; ?> </h3>
						        	</td>
						        	<td class="price"> <?php echo $product["proPrice"]; ?> </td>
						        	<td class="Quantity"> <?php echo $product["proQuantity"]; ?> </td>
						        	<td class="total">
						        		$ <?php
						        			echo number_format($product["proQuantity"]
						        				* $product["proPrice"], 2);
						        		?>
						        	</td>

						      	</tr><!-- END TR-->
						    </tbody>
						    <?php
						    	endforeach;
						    	endif;
						    ?>						    						    
						 </table>
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