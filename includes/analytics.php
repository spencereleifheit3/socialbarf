<?php

	/* -------------------------
		thesilverspurcafe.com

		Analytics File

		Version 1.0

		author: Spencer Leifheit

		------------------------

	*/


	date_default_timezone_set("America/Los_Angeles");

	$request = trim("http://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]);
	
	$ip = trim($_SERVER['REMOTE_ADDR']);	
		if($ip == NULL){
			$ip = '0.0.0.0';
		}
		if($ip == '::1'){
			$ip = '127.0.0.1';
		}


	$browser = trim($_SERVER['HTTP_USER_AGENT']);
		if($browser == NULL){
			$browser = 'none';
		}


	$refer = trim($_SERVER['HTTP_REFERER']);
		if ($refer == NULL) {
			$refer = 'self';
		}	

	$dt = trim(date("m/d/Y : H:i:s"));

	$query = "INSERT INTO `analytics` (request_url, request_ip, browser_agent, referer, time_stamp) VALUES ('$request', '$ip', '$browser', '$refer', '$dt')";

	// Perform a query, check for error
	if (!mysqli_query($conn,$query))
	  {
	  	echo("Error description: " . mysqli_error($conn));
	  }