<?php
	error_reporting(E_ALL);

	/*
		Simple Framework by Spencer Leifheit

		Version 1.0
	*/

	/* Main Controller File */

	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	// Set Config Folder Dependency
	DEFINE('CONFIG_DIR', 'config');

	// Load your DB Connector
	include (CONFIG_DIR.'/db_connect.php');

	// Load Site Definitions
	include (CONFIG_DIR.'/site_definitions.php');

	// Update log file
	include (INCLUDE_DIR.'/analytics.php');	

	// Load the Site Dependency Scripts
	include (INCLUDE_DIR.'/std_page.php');	

	// Load your Header
	include (INCLUDE_DIR.'/header.php');


	// Navigation Component -- ghetto AJAX Navigation
		$destinationPage = "home_page".".php";

		if(isset($_GET['nav_page']))
		{
			$checkPage = $_GET['nav_page'];

			foreach($sitePages as $sitePage){
				if ($checkPage == $sitePage){
					$destinationPage = $checkPage."_page.php";
					break;
				}
			}

		}

	include (PAGES_DIR.'/'.$destinationPage);

	// Load your Footer
	include (INCLUDE_DIR.'/footer.php');
