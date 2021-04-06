<?php
	include 'db.php';
	session_start();     
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
        $date = $_POST['date'];
	$gender = $_POST['gender'];
	$q = "INSERT INTO patient_table (username,password,email,phone,D_O_B,gender) VALUES('$uname','$pass','$email',$phone,'$date','$gender')";
        
        if(mysqli_query($link,$q)){
   	     	echo "inserted";
		header("Location: http://localhost/Remote_health_care/patient_editprofile.html");
		
        }
        else{
    	    	echo "Error";
        }
?>
