<?php
	$host = "localhost";
			$dbUsername = "root";
			$dbPassword = "";
			$dbName = "echipa";
			
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	
	extract($_POST);
	if(isset($_POST['submit']))
	{
		$q = "insert into note (nume, note, observatii) values
		('$nume', '$nota', '$observatii')";
		
		$query = mysqli_query($conn, $q);
		header('location: jurat5.php');
	}
	
?>
