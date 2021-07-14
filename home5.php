<!DOCTYPE html>
<html lang = "ro">
	<head>
		<title>Home</title>
		<link href='style.css' rel='stylesheet' type='text/css'>
		<link href='styleImg.css' rel='stylesheet' type='text/css'>
		<link href='tabel.css' rel='stylesheet' type='text/css'>
		<link href='tabelEchipe.css' rel='stylesheet' type='text/css'>
		<link href='forms.css' rel='stylesheet' type='text/css'>
		<link href='exemplu.css' rel='stylesheet' type='text/css'>
		
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
						
					 
					   <li class = "copil"><a href="logIn7.php">Log In</a>
						<ul>
							<li><a href="inscriere5.html">Creaza cont</a></li>
						</ul>
					  </li>
			
					</ul>  
				</nav>
			
		</header>
	
		<main>
		
			<div class = "content">
				<div class = "continut">
					<h1 style = "color:teal">Step Up</h1>
					<p style = "font-size:15px; color:teal">Ne bucuram să vedem că 
					ne eşti alături şi la cea de-a 5-a ediţie a competiţiei de dans
					<span style = "font-size:25px; color:violet">Step Up</span></p>
				</div>
				<section>
					<h1 style = "color:teal">Arbitrii</h1>
					<p>Juraţii prezenţi la competiţia Step Up vor fi</p>
					<table id = "arbitrii">
						<tr>
							<th>Derek Hough</th>
							<th>Travis Wall</th>
							<th>Heidi Groskreutz</th>
						</tr>
						<tr>
							<td>
								<div class = "container">
									<img src = "derek.jpg" alt = "Derek Hough" width = "100%" >
									<div class = "overlay">
										<div class = "text">este un dansator american care este specializat pe 
									dans latin si dans de sala</div>
									</div>
								</div>
							</td>
							<td>
								<div class = "container">
									<img src = "travis2.jpg" alt = "Travis Wall" width = "100%">
									<div class = "overlay">
										<div class = "text">dansator, instructor si coregraf american, 
							specializat pe dans contemporan si jazz</div>
									</div>
								</div>
							</td>
							<td>
								<div class = "container">
									<img src = "heidi2.jpg" alt = "Heidi Groskreutz" width = "100%">
									<div class = "overlay">
										<div class = "text">dansatoare americana, specializata pe ballroom, 
							dans latin si swing</div>
									</div>
								</div>
							</td>
						</tr>
					</table>
				</section>
				
				<div class = "container">
					<div id = "slider">
						<ul class="slides">
							<a href = "#">
								<img class = "thumb" src = "poza1.jpg" width = "200" height = "200">
								<img class = "big" src = "big1.jpg" width = "920" height = "400">
							</a>
							<a href = "#">
								<img class = "thumb" src = "poza2.jpg" width = "200" height = "200">
								<img class = "big" src = "big2.jpg" width = "920" height = "400">
							</a>
						
							<a href = "#">
								<img class = "thumb" src = "poza4.jpg" width = "200" height = "200">
								<img class = "big" src = "big4.jpg" width = "920" height = "400">
							</a>
							<a href = "#">
								<img class = "thumb" src = "poza5.jpg" width = "200" height = "200">
								<img class = "big" src = "big5.jpg" width = "920" height = "400">
							</a>
							<a href = "#">
								<img class = "big featured" src = "big6.jpg" width = "920" height = "400">
							</a>
						</ul>
					</div>
				</div>
				<!--
				<div id="slideshow">
				<div>
				 <img name="slide" id="imgSlideshow" src="big1.jpg">
				</div>
				</div>

				<div id="button">

				<a href="#" id="startCycle" onclick="setTimer()">Play/Pause</a> 

				</div>
				-->
				
				<h1 style = "color:teal">Stiluri dans</h1>
				<div class = "p-4">
					<table id = "echipe" class = "table">
							<tr>
								<th>Nr.crt</th>
								<th>Stil</th>
								<th>Nr min membrii echipa</th>
							</tr>
								<?php

								$host = "localhost";
								$dbUsername = "root";
								$dbPassword = "";
								$dbName = "tabele";
										
								$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

								if ($conn->connect_error) {
										die('Could not connect to the database.');
									}
								$sql = "select nrCrt, stil, nrPers from stildans";
								$result = $conn->query($sql);
								
								if($result-> num_rows > 0){
									while($row = $result-> fetch_assoc()){
										echo"<tr>
										<td>". $row["nrCrt"]."</td>
										<td>".$row["stil"]."</td>
										<td>".$row["nrPers"]."</td>
										
										</tr>";
									}
									echo"</table>";
								}
								else{
									echo"0 results";
								}
								$conn-> close();

?>
<!--
							<tr>
								<td>1</td>
								<td>Latino
								<table style="width:100%">
									  <tr>
										<td>Bachata</td>
									  </tr>
									  <tr>
										<td>Salsa</td>
									</tr>
								</table></td>
								<td>2</td>
							</tr>
							
							<tr>
								<td>2</td>
								<td>Contemporan
								<table>
									  <tr>
										<td>Contemporan</td>
									  </tr>
									  <tr>
										<td>Improv</td>
									</tr>
								</table></td>
								<td>1</td>
							</tr>
							
							<tr>
								<td>3</td>
								<td>Street dance</td>
								<td>1</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Vals</td>
								<td>2</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Jive</td>
								<td>2</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Chacha</td>
								<td>2</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Jazz</td>
								<td>2</td>
							</tr>
					</table>
				</div>
			</div>
			-->
		</main>
	
		
		<div class = "footer">
		Website by Rosca Maria
		</div>
		<script language="javascript" type="text/javascript">
				var i = 0; 
				var path = new Array();
				//var timer = setInterval("slide()",2000);
				var timer;

				// LIST OF IMAGES 
				path[0] = "big2.jpg"; 
				path[1] = "big3.jpg"; 
				path[2] = "big4.jpg";
				path[3] = "big5.jpg";

				function slide() {
				document.getElementById("imgSlideshow").src = path[i];
				i = (i + 1)%path.length;
				//console.log(i);
				}

				function setTimer(){
				if (timer) {
				   // stop 
				   clearInterval( timer );
				   timer=null;
				}
				else {
				   timer = setInterval("slide()",2000);
				}
				}

				var imgNumber = 1;
				var numberOfImg = path.length;

				function previousImage() {
				if(imgNumber > 1) {
				imgNumber--;
				}
				else {
				imgNumber = numberOfImg;
				}

				document.getElementById("imgSlideshow").src = path[imgNumber-1];
				changeCounter(imgNumber, numberOfImg);
				}

				function nextImage(){
				if(imgNumber < numberOfImg){
				imgNumber++
				}
				else{
				imgNumber = 1
				}

				document.getElementById("imgSlideshow").src = path[imgNumber-1];
				changeCounter(imgNumber, numberOfImg);
				}

				function changeCounter(cur, total) {
				document.getElementById("counter").innerHTML = cur + "/" + total;
				}
				document.getElementById("counter").innerHTML = 1 + "/" + path.length;
				</script>
	</body>
</html>