<?php

//connection
$servername = "stud.cmi.hro.nl";
$username = "0894925";
$password = "71810da6";
$dbname = "0894925";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);}
	else {
			// echo "connected to db";
	}

	return $conn;

?>