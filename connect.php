<?php
	if(isset($_POST['submit']))
	{
		if(isset($_POST['nume']) && isset($_POST['prenume'])
		&& isset($_POST['email']) &&isset($_POST['password']) &&
        isset($_POST['phone']) && 
        isset($_POST['gen']) && isset($_POST['type']))
		{
			$nume = $_POST['nume'];
			$prenume = $_POST['prenume'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$phone = $_POST['phone'];
			$gen = $_POST['gen'];
			$type = $_POST['type'];
			
			//database connection
			$host = "localhost";
			$dbUsername = "root";
			$dbPassword = "";
			$dbName = "inregistrare";

			$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

			if ($conn->connect_error) {
					die('Could not connect to the database.');
				}
				else {
					$Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
					$Insert = "INSERT INTO register(nume, prenume, email, password, phone, gen, type) values(?, ?, ?, ?, ?, ?, ?)";
					$stmt = $conn->prepare($Select);
					$stmt->bind_param("s", $email);
					$stmt->execute();
					$stmt->bind_result($resultEmail);
					$stmt->store_result();
					$stmt->fetch();
					$rnum = $stmt->num_rows;
					if ($rnum == 0) {
						$stmt->close();
						$stmt = $conn->prepare($Insert);
						$stmt->bind_param("sssssss",$nume, $prenume, $email, $password, $phone, $gen, $type);
						if ($stmt->execute()) {
							echo "New record inserted sucessfully.";
						}
						else {
							echo $stmt->error;
						}
					}
					else {
						echo "Someone already registers using this email.";
					}
					$stmt->close();
					$conn->close();
				}
			}
			else {
				echo "All field are required.";
				die();
			}
		}
		else {
			echo "Submit button is not set";
		}
	
	
	
?>