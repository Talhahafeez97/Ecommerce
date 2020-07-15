<?php
	include ("Connection.php");
	session_start();

	if(isset($_POST["submit"])) {  
		$Check = "SELECT usrN,usrPassword FROM customers
		WHERE usrN = '".$_POST["usr"]."' AND usrPassword = '".$_POST["uPass"]."' ";

		$check_Query = mysqli_query($Connection, $Check); 
		$num_Rows = mysqli_num_rows($check_Query);

		if ($num_Rows > 0) {
			$_SESSION["Userr"] = $_POST["usr"];
			header("location:Home.php?Welcome");
		}
		else {
			header("location:Login.php?Error=402");
		} 
	}

	mysqli_query($Connection, $Query) or die(mysqli_error($Connection));	
?>