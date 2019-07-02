<?php

	$servername = "localhost";
	$username = "lesite";
	$password = "turdbird";
	$db = "leifheit_endeavors_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$_SESSION['DB'] = $conn;
