<html>
<head>
</head>
<body>
<center>
<table>
<?php
	include 'db.php';
	session_start();
	//$spe = $_POST['spe'];
	$query = "SELECT * FROM Doctor_table where Logged_in=1";
	$result = mysqli_query($link,$query);
	echo "<tr>";		
	echo "<td>Doctor_name </td>";
	echo "<td>Email </td>";
	echo "<td>Appointment</td>";
	echo "</tr>";
	while($row = mysqli_fetch_array($result)){
		echo "<tr>";		
		echo "<td>$row[Username] </td>";
		echo "<td>$row[email] </td>";
		echo "<td><div><button >Appoint</button></div></td>";
		echo "</tr>";
	}
?>
</table>
</center>
</body>
</html>
