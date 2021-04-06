<?php
	include 'db.php';
	session_start();
	$email = $_SESSION['email']; //assigning the thrown variable to php variable
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$bgroup = $_POST['bgroup'];
	$pre_medical = $_POST['pre_medical'];
	$q = "UPDATE patient_table SET weight=$weight, height=$height, Blood_group='$bgroup',previous_medical='$pre_medical' WHERE email='$email'";
        
        if(mysqli_query($link,$q)){
   	     	echo "Updated ";
		header("Location: http://localhost/Remote_health_care/patient.html");
		echo $email;
        }
        else{
    	    	echo "Error ";
		echo $email;
        }
?>
