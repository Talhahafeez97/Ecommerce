<?php	
	session_start();
	unset($_SESSION["Userr"]);
	session_destroy();

	header("location:Home.php?Logout=true");
?>