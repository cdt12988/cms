<?php require_once('../../../private/initialize.php'); ?>

<?php
	// Handle form values sent from the form below
	$menu_name = $_POST['menu_name'] ?? '';
	$position =  $_POST['position'] ?? '';
	$visible = $_POST['visible'] ?? '';
	
	// Test output of form
	$test = 'Form Parameters: <br>';
	$test .= 'Menu Name: ' . $menu_name . '<br>';
	$test .= 'Position: ' . $position . '<br>';
	$test .= 'Visible: ' . $visible . '<br>';
	echo $test;
?>

<?php $page_title = 'Create Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
	<a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to Subjects List</a>
	<div class="subject new">
		<h1>Create Subject</h1>
		
		<form action="<?php echo url_for('/staff/subjects/new.php'); ?>" method="post">
			<dl>
				<dt>Menu Name</dt>
				<dd><input type="text" name="menu_name" value=""></dd>
			</dl>
			<dl>
				<dt>Position</dt>
				<dd>
					<select name="position">
						<option value="1">1</option>
					</select>
				</dd>
			</dl>
			<dl>
				<dt>Visible</dt>
				<dd>
					<input type="hidden" name="visible" value="0">
					<input type="checkbox" name="visible" value="1">
				</dd>
			</dl>
			<div id="operations">
				<input type="submit" value="Create Subject">
			</div>
		</form>
	</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>