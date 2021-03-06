<?php require_once('../../../private/initialize.php'); ?>

<?php
	// This is just a stand in for information we will store in our DB once we get our DB up and running
	$subjects = [
		['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Thompson Financial'],
		['id' => '2', 'position' => '2', 'visible'=> '1', 'menu_name' => 'Consumer'],
		['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
		['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial']
	];
?>

<?php $page_title = "Subjects"; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
	<div class="subjects listing">
		<h1>Subjects</h1>
		
		<div class="actions">
			<a class="actions" href="<?php echo url_for('/staff/subjects/new.php'); ?>">Create New Subject</a>
		</div>
		
		<table class="list">
			<tr>
				<th>ID</th>
				<th>Postion</th>
				<th>Visible</th>
				<th>Name</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</tr>
			
		<?php foreach($subjects as $subject) { ?>
			<tr>
				<td><?php echo htmlspecialchars($subject['id']); ?></td>
				<td><?php echo htmlspecialchars($subject['position']); ?></td>
				<td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
				<td><?php echo htmlspecialchars($subject['menu_name']); ?></td>
				<td><a class="action" href="<?php echo url_for('/staff/subjects/show.php?id=' . htmlspecialchars(urlencode($subject['id']))); ?>">View</a></td>
				<td><a class="action" href="<?php echo url_for('/staff/subjects/edit.php?id=' . htmlspecialchars(urlencode($subject['id']))); ?>">Edit</a></td>
				<td><a class="action" href="<?php echo url_for('/staff/subjects/show.php?id=' . htmlspecialchars(urlencode($subject['id']))); ?>">Delete</a></td>
			</tr>
		<?php } ?>
		</table>
	</div>	
</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>