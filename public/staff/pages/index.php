<?php require_once("../../../private/initialize.php"); ?>

<?php
	// This is just a stand-in for information we will eventually be storing in our DB to use later on
	$pages = [
		['id' => '1', 'position' => '1', 'visible' => '1', 'page_name' => 'Thompson Financial'],
		['id' => '2', 'position' => '2', 'visible' => '1', 'page_name' => 'History'],
		['id' => '3', 'position' => '3', 'visible' => '1', 'page_name' => 'Leadership'],
		['id' => '4', 'position' => '4', 'visible' => '1', 'page_name' => 'Contact Us'],	
	];
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
	<div class="pages listing">
		<h1>Pages</h1>
		<div class="actions">
			<a class="actions" href="">Create New Page</a>
		</div>
		<table class="list">
			<tr>
				<th>ID</th>
				<th>Position</th>
				<th>Visible</th>
				<th>Page Name</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</tr>
		<?php foreach($pages as $page) { ?>
			<tr>
				<td><?php echo htmlspecialchars($page['id']); ?></td>
				<td><?php echo htmlspecialchars($page['position']); ?></td>
				<td><?php echo $page['visible'] == '1' ? 'true' : 'false'; ?></td>
				<td><?php echo htmlspecialchars($page['page_name']); ?></td>
				<td><a href="<?php echo url_for('/staff/pages/show.php?id=' . htmlspecialchars(urlencode($page['id']))); ?>">View</a></td>
				<td><a href="<?php echo url_for('/staff/pages/show.php?id=' . htmlspecialchars(urlencode($page['id']))); ?>">Edit</a></td>
				<td><a href="<?php echo url_for('/staff/pages/show.php?id=' . htmlspecialchars(urlencode($page['id']))); ?>">Delete</a></td>
			</tr>
		<?php } ?>
		</table>
	</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>