<!DOCTYPE html>
<html>
	<head>
		<title>Log In</title>
		<link href='forms.css' rel='stylesheet' type='text/css'>
		<link href='style.css' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<form method = "POST">
			<fieldset>
				<label>Tip user: </label><br>
						<select name = "type">
							<option value = "-1">alege tip user</option>
							<option value = "Jurat">Jurat</option>
							<option value = "Echipa">Echipa</option>
						</select><br><br>
				<label>Email:</label><br>
				<input type = "text" name = "username"><br><br>
				<label>Parola:</label><br>
				<input type = "password" name = "pwd"><br><br>
				<input type = "submit" name = "submit" value = "Login">
			</fieldset>
		</form>
	</body>
</html>

<?php
	$dbServer = 'localhost';
	$dbUser = 'root';
	$dbPassword = '';
	
	
	$con = mysqli_connect($dbServer, $dbUser, $dbPassword);
	if(!$con)
	{
		echo"nu s-a putut conecta".mysqli_error();
	}
		$db = mysqli_select_db($con, "inregistrare");
	if(!$db)
	{
		echo"baza de date nu a fost gasita".mysqli_error();
	}else{echo"s-a conectat la baza de date";}
	if(isset($_POST['submit']))
	{
		$type = $_POST['type'];
		$username = $_POST['username'];
		$password = $_POST['pwd'];
		
		$query = "select * from register where email='$username'
		and password='$password' and type='$type'";
		$result = mysqli_query($con,$query);
		
		echo"$query";
		while($row = mysqli_fetch_array($result))
		{
			if($row['email'] == $username
			&& $row['password'] == $password
			&& $row['type'] == 'Jurat')
			{
				header("Location: jurat5.php");
			}elseif($row['email'] == $username
			&& $row['password'] == $password
			&& $row['type'] == 'Echipa')
			{
				header("Location: inscrieEchipa5.html");
			}
		}
	}
	
?>