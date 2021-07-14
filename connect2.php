<?php
	if(isset($_POST['submit']))
	{
		if(isset($_POST['nume']))
		{
			$nume = $_POST['nume'];
			$email = $_POST['email'];
			$categorie = $_POST['categorie'];
			$locatie = $_POST['locatie'];
			$country = $_POST['country'];
			$state = $_POST['state'];
			$stilDans = $_POST['stilDans'];
			$sugestii = $_POST['sugestii'];
			$quantity = $_POST['quantity'];
			
			echo"$nume ";
			echo"$email ";
			echo"$categorie ";
			echo"$locatie ";
			echo"$country ";
			echo"$state ";
			echo"$stilDans ";
			echo"$sugestii ";
			
			$host = "localhost";
			$dbUsername = "root";
			$dbPassword = "";
			$dbName = "echipa";

			$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
			if ($conn->connect_error) {
					die('Could not connect to the database.');
				}
			else {
					$Select = "SELECT email FROM inscrieechipa WHERE nume = ? LIMIT 1";
					$Insert = "INSERT INTO inscrieechipa(nume, email, categorie, locatie, country, state, stilDans, sugestii, quantity) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
					$stmt = $conn->prepare($Select);
					$stmt->bind_param("s", $nume);
					$stmt->execute();
					$stmt->bind_result($resultEmail);
					$stmt->store_result();
					$stmt->fetch();
					$rnum = $stmt->num_rows;
					if ($rnum == 0) {
						$stmt->close();
						$stmt = $conn->prepare($Insert);
						$stmt->bind_param("sssssssss", $nume, $email, $categorie, $locatie, $country, $state, $stilDans, $sugestii, $quantity);
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