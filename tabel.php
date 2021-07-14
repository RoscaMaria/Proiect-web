<?php

	$host = "localhost";
			$dbUsername = "root";
			$dbPassword = "";
			$dbName = "echipa";
			
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

			if ($conn->connect_error) {
					die('Could not connect to the database.');
				}
			$sql = "select nume, categorie, stilDans from inscrieechipa";
			$result = $conn->query($sql);
			
			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc(){
					echo"<tr><td>". $row["nume"]."</td><td>".$row["categorie"]."</td><td>".$row["stilDans"]."</td></tr>";
				}
				echo"</table>";
            }
			else{
				echo"0 results";
			}
			$conn-> close();
			
			

?>