<?php require_once('../../../private/initialize.php'); ?>

<?php
	$page_id = $_GET['id'] ?? '1';
?>

<?php $page_title = 'Show Page';?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
	<a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to Pages List</a>
	<div class="page show">
		Page ID: <?php echo htmlspecialchars($page_id); ?>
	</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>