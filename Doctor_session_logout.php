<?php
	include 'db.php';
	session_start();
	$email = $_SESSION['email'];
	$q = "UPDATE Doctor_table SET Logged_in=0 WHERE email='$email'";
	mysqli_query($link,$q);
	// remove all session variables
	session_unset();

	// destroy the session
	session_destroy();
	header("Location: http://localhost/Remote_health_care/Home.html");
?>
