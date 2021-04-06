<?php
	include 'db.php';
	session_start();     
	    $email = $_POST['email'];
	    $pass = $_POST['pass'];
	    $_SESSION["email"] = $email; //throw email variable to other php page
	    $_SESSION["password"] = $pass; //throw password variable to other php page
            $query = "SELECT email,password FROM patient_table";
	    $flag = 1;
	
            $result = mysqli_query($link,$query);
	
            while($row = mysqli_fetch_array($result))
            {
                
		if(($row['email']==$email)&&($row['password']==$pass)){
			echo "Logged Sucessfully!";
			header("Location: http://localhost/Remote_health_care/patient.html");
			$flag=0;
			break;
		}
            }
	    if($flag==1){
		echo "Invalid UserId or password";
	    }
?>

