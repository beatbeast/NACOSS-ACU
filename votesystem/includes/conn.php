<?php
	$conn = new mysqli('localhost', 'root', '', 'nacoss');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>