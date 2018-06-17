<?php
	
// Assign file paths to PHP constants
// __FILE__ returns the path to the current file (initialize.php)
// dirname() returns the directory name of the given path
define("PRIVATE_PATH", dirname(__FILE__)); 			// sets PRIVATE_PATH to the private directory path
define("PROJECT_PATH", dirname(PRIVATE_PATH));		// sets PROJECT_PATH to the globe_bank directory path
define("PUBLIC_PATH", PROJECT_PATH . '/public');	// sets PUBLIC_PATH to the public directory path
define("SHARED_PATH", PRIVATE_PATH . '/shared');	// sets SHARED_PATH to the shared directory path

require_once('functions.php');
	
