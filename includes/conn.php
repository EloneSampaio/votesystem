<?php
	$conn = new mysqli('localhost', 'elone', 'elone.2014', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
