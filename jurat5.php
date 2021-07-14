<!DOCTYPE html>
<html lang = "ro">
	<head>
		<title>Pagina jurati</title>
		<link href='style.css' rel='stylesheet' type='text/css'>
		<link href='tabelEchipe.css' rel='stylesheet' type='text/css'>
		<link href='forms.css' rel='stylesheet' type='text/css'>
		<script src="tableSort.js"></script>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="exemplu2.js"></script>
		<link href='exemplu.css' rel='stylesheet' type='text/css'>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		
	</head>
	<body>
		<header class="cd-header">
			
				<div class="flip-container">
					<div class="flip-this">
						<img width="100" alt="logo" src = "logo.png">
					</div>
				</div>
				<nav>
					<ul id = "menu">
					  <li><a href="home5.php">Home</a></li>
				      <li><a href="reguli5.html">Regulament</a></li>
					  <li><a href="jurat5.html">Pagina Jurati</a></li>
					</ul>  
				</nav>
			
		</header>
	
		<main>
			<div class = "continut">
				<h2>Bine ai revenit!</h2>
			</div>
			<div class="container">
            

            <div id="slider">
                <ul class="slides">
                    <li class="slide slide1"><img class = "big" src = "big1.jpg" width = "920" height = "400"></li>
					<li class="slide slide2"><img class = "big" src = "big2.jpg" width = "920" height = "400"></li>
					<li class="slide slide3"><img class = "big" src = "big4.jpg" width = "920" height = "400"></li>
					<li class="slide slide4"><img class = "big" src = "dans4.jpg" width = "920" height = "400"></li>
					<li class="slide slide5"><img class = "big featured" src = "dans5.jpg" width = "920" height = "400"></li>
		</ul>
            </div>

        </div>
			<section>
				<h2>Lista note echipe</h2>
				<form id = "myform" name="note" method="POST"  action="insert.php">
				<label>Nume:</label><br>
					<input type = "text" name = "nume"><br><br>
					<label>Nota:</label><br>
					<input type = "text" name = "nota"><br><br>
					<label>Observatii:</label><br>
					<input type = "text" name = "observatii"><br><br>
					<input type = "submit" name = "submit" value = "submit" id = "submit">
				</form>
				
				<script type = "text/javascript">
					$(document).ready(function(){
						var form = $('#myform');
						$('#submit').click(function(){
							$.ajax({
								url: form.attr("action"),
								type: 'post',
								data: $("#myform input").serialize(),
								
								success: function(data){
									console.log(data);
								}
								
						
					});
					
				</script>
				<h3>Echipe inscrise</h3>
				<table id = "echipe" class = "table">
					<thead>
						<tr>
							<th><button>Echipa</button></th>
							<th><button>Categorie varsta</button></th>
							<th><button>Stil dans</button></th>
							<th><button>Nr membri </button></th>
							<th><button>Nota </button></th>
							<th><button>Observatii </button></th>
							<th><button>Stergeti </button></th>
						</tr>
					</thead>
					<?php

	$host = "localhost";
			$dbUsername = "root";
			$dbPassword = "";
			$dbName = "echipa";
			
			
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

			if ($conn->connect_error) {
					die('Could not connect to the database.');
				}
			$sql = "select nume, categorie, stilDans, quantity from inscrieechipa";
			$result = $conn->query($sql);
			
			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo"<tr>
					<td>". $row["nume"]."</td>
					<td>".$row["categorie"]."</td>
					<td>".$row["stilDans"]."</td>
					<td>".$row["quantity"]."</td>
					<td><a href = delete.php?nume=".$row['nume'].">Stergeti</a></td>
					
					</tr>";
				}
				echo"</table>";
            }
			else{
				echo"0 results";
			}
			?>
	
		</section>
		</main>
		<div class = "footer">
		Website by Rosca Maria
		</div>
	</body>
</html>