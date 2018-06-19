<?php
	
	
	
// Adds the path/URL to the 'public' directory to whatever directory path is passed into the argument
// This allows us to use absolute paths, which is essential for all of our includes/requires to function properly no matter where they are included.

function url_for($script_path) {
	// adds the leading '/' if it isn't already passed through the argument
	if($script_path[0] != '/') {
		$script_path = "/" . $script_path;
	}
	return WWW_ROOT . $script_path;
}



function error_404() {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	exit();
}



function error_500() {
	header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
	exit();
}



function redirect_to ($location) {
	header("Location: " . $location);
	exit;
}