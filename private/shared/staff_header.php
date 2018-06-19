<!doctype html>
<html lang="en-us">
<head>
	<title>
	TFI - 
	<?php
		if(isset($page_title)) {
			echo htmlspecialchars($page_title);
		} else {
			echo "Staff Area";
		}
	?>
	</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo url_for('/stylesheets/staff.css');?>">
</head>

<body>
	<header>
		<h1>TFI Staff Area</h1>
	</header>
	<nav role="navigation">
		<ul>
			<li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
		</ul>
	</nav>