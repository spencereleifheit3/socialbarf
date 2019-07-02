<?php

	// Define important variables
		DEFINE('MODELS_DIR', 'models');
		DEFINE('INCLUDE_DIR', 'includes');
		DEFINE('HELPERS_DIR', 'helpers');
		DEFINE('IMAGES_DIR', 'images');
		DEFINE('PAGES_DIR', 'pages');
		DEFINE('CSS_DIR', 'css');
		DEFINE('JS_DIR', 'js');

	/* Models Object
		Creates an Associative Array of models to be loaded
	*/

		// $siteModels = array(
		// 	'user' => 'user_model.php'
		// );


	/* Page Navigation Object
		Creates an Array of allowed pages for Site Navigation
		  to be interpreted by the Main Controller file
	 */
	
		$sitePages = array(
			'home',
			'wordpress_example',
			'test'
		);



