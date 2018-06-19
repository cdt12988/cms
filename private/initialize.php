<?php
	ob_start(); // ensures Output Buffering is always turned on (even if transfered to a server where it is turned off)
	
// Assign file paths to PHP constants
// __FILE__ returns the path to the current file (initialize.php)
// dirname() returns the directory name of the given path
define("PRIVATE_PATH", dirname(__FILE__)); 			// sets PRIVATE_PATH to the private directory path
define("PROJECT_PATH", dirname(PRIVATE_PATH));		// sets PROJECT_PATH to the globe_bank directory path
define("PUBLIC_PATH", PROJECT_PATH . '/public');	// sets PUBLIC_PATH to the public directory path
define("SHARED_PATH", PRIVATE_PATH . '/shared');	// sets SHARED_PATH to the shared directory path

// Assign the root URL to a PHP constant
// * Do not need to include the domain
// * Use same document root as webserver
// * Can set a hardcoded value:
// define("WWW_ROOT", '/~codythompson/cms/public');		This would define this ROOT constant as my root, but it wouldn't work anywhere else
// define("WWW_ROOT", '');								This would be used if we were on a production machine, the ROOT would simply be the domain name
// * Can dynamically find everything in URL up to "/public"
		// $_SERVER['SCRIPT_NAME'] returns the path of the current file relative to the site root.
		// A page located at www.example.com/foo/bar.php would return '/foo/bar.php' as it's $_SERVER['SCRIPT_NAME'].
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7; 	// finds the position of '/public' within the directory and saves it to a variable
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);	// holds the entire path from the end of the root up to & including '/public'
define("WWW_ROOT", $doc_root);									// defines WWW_ROOT as the path from the actual root to the '/public' directory
																// this essentially creates a mini-root for all of our PUBLIC content, which is...
																// ...the root of what all website users have access to -- the user portion of the site

require_once('functions.php');
	
