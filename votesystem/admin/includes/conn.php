<?php
	$conn = new mysqli('localhost', 'root', '', 'lss_acu');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>