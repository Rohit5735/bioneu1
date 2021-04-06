<?php
	include 'db.php';
	session_start();     
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$_SESSION["email"] = $email;
	$phone = $_POST['phone'];
        $date = $_POST['date'];
	$gender = $_POST['gender'];
	$specialisation = $_POST['specialisation'];
	$hospital_name = $_POST['hospital_name'];
	$exp = $_POST['exp'];
	$in_time = $_POST['in_time'];
	$out_time = $_POST['out_time'];
	$other = $_POST['other'];
	$q = "INSERT INTO Doctor_table (Username,password,email,phone,D_O_B,gender,specialisation,Hospital_name,Experience,In_time,Out_time,Any_other) VALUES ('$uname','$pass','$email',$phone,'$date','$gender','$specialisation','$hospital_name',$exp,'$in_time','$out_time','$other')";
        if(mysqli_query($link,$q)){
   	     	$qu = "UPDATE Doctor_table SET Logged_in=1 WHERE email='$email'";
		mysqli_query($link,$qu);
		header("Location: http://localhost/Remote_health_care/doctoreditprofile.html");
		
        }
        else{
    	    	echo "Error";
        }
?>
