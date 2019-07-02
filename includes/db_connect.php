<?php
	error_reporting(E_ALL);

	/* -------------------------
		thesilverspurcafe.com

		DB Connector File with logging

		Version 1.0

		author: Spencer Leifheit

		------------------------

	*/

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
