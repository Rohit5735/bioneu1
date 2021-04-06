<?php
	include 'db.php';
	session_start();
	$email = $_SESSION['email']; //assigning the thrown variable to php variable
	$phone = $_POST['phone'];
	$Hospital_name = $_POST['Hospital_name'];
	$In_time = $_POST['In_time'];
	$Out_time = $_POST['Out_time'];
	$q = "UPDATE Doctor_table SET phone=$phone, Hospital_name='$Hospital_name', In_time='$In_time',Out_time='$Out_time' WHERE email='$email'";
        
        if(mysqli_query($link,$q)){
   	     	echo "Updated ";
		echo $email;
        }
        else{
    	    	echo "Error ";
		echo $email;
        }
?>
