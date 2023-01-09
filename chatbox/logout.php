<?php
	session_start();
	
	session_destroy();
	$user = $_SESSION['username'];
	$message = " $user déconnecté!";
	header("location: index.php?message=$message");
?>