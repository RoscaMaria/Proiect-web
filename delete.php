<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "echipa";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	if ($conn->connect_error) {
		die('Could not connect to the database.');
	}


$query = "delete from inscrieechipa where nume='$_GET[nume]'";
$data = mysqli_query( $conn, $query);
if($data)
{header("refresh:1; url=jurat5.php");
echo"s-a sters";
}
else{
echo"nu s-a sters";
}
?>