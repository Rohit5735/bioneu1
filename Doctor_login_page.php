<?php
	include 'db.php';
	session_start();     
	$email = $_POST['email_id'];
	$pass = $_POST['pass'];
	$_SESSION["email"] = $email;
	$_SESSION["password"] = $pass;
        $query = "SELECT email,password FROM Doctor_table";
	$flag = 1;
	
        $result = mysqli_query($link,$query);
	
        while($row = mysqli_fetch_array($result))
        {
                
		if(($row['email']==$email)&&($row['password']==$pass)){
			echo "Logged Sucessfully!";
			$q = "UPDATE Doctor_table SET Logged_in=1 WHERE email='$email'";
			mysqli_query($link,$q);
			header("Location: http://localhost/Remote_health_care/doctoreditprofile.html");
			$flag=0;
			break;
		}
        }
	if($flag==1){
		echo "Invalid UserId or password";
		header("Location: http://localhost/Remote_health_care/DoctorLogin.html");
	}
?>

