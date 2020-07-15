<?php
	session_start();
	if(!isset($_SESSION["Userr"])) {
		header("location:Login.php?False=true");
	}

	include ("Connection.php");
	
	if(isset($_POST["submit"])) { 
		$avatar_path = $Connection->real_escape_string('Avatars/'.$_FILES['pimg']['name']);

		if(copy($_FILES['pimg']['tmp_name'], $avatar_path)){
			$_SESSION["usrAv"] = $avatar_path;
			
			$Query = "Update customers
			SET 
				usrPassword = '".$_POST["pPass"]."',
				usrAvatar = '$avatar_path'
			WHERE usrN = '".$_SESSION["Userr"]."' ";

			mysqli_query($Connection, $Query);

			header("location:Profile.php?Success=Update");
		}
		else{
			header("location:Profile.php?Error=Update");	
		}
	} 

	mysqli_query($Connection, $Query) or die(mysqli_error($Connection));
?>