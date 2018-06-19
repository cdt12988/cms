<?php require_once('../../../private/initialize.php'); ?>

<?php
	// Checks if 'id' isset, uses its value if yes, otherwise uses '1' instead
	$subject_id = $_GET['id'] ?? '1';
?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
	<a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to Subjects List</a>

	<div class="subject show">
		Subject ID: <?php echo htmlspecialchars($subject_id); ?>
	</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>