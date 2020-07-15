<?php
	include ("Connection.php");
	
if(isset($_POST["submit"])) {  
	$Check = "SELECT usrN FROM customers WHERE usrN = '".$_POST["usr"]."'";
	$check_Query = mysqli_query($Connection, $Check); 

	$num_Rows = mysqli_num_rows($check_Query);

	if ($num_Rows > 0) {
		header("location:Register.php?Error=401");
	}
	else {
		$Query = "INSERT INTO customers (usrN, usrEmail, userFirst, usrLast, usrPassword,
		           usrPhone, usrCity, usrAddress, usrApartment)
				  VALUES(
				  	'".$_POST["usr"]."',
				  	'".$_POST["email"]."',
				  	'".$_POST["fName"]."',
				  	'".$_POST["lName"]."',
				  	'".$_POST["uPass"]."',
				  	'".$_POST["pN"]."',
				  	'".$_POST["city"]."',
				  	'".$_POST["address"]."',
				  	'".$_POST["oApt"]."'
				  )";
		header("location:Register.php?Success");
	} 
}
	mysqli_query($Connection, $Query) or die(mysqli_error($Connection));
?>