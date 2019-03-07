<?php // Filename: create-record.php
// set $pageTitle variable to display proper page title
$pageTitle = "Create Record";
// bring in header include file to display using require
require 'inc/layout/header.inc.php'; 
?>

<div class="container">
	<div class="row mt-5">
		<div class="col-lg-12">
			<h1>Create a New Record</h1>
			<!-- use magic constant of __DIR__ for the full path -->
			<!-- use to add a row to the table if all fields are 
			filled out correctly, or to display errors until filled out correctly -->
			<?php require_once __DIR__ .'/inc/create/content.inc.php'; ?>
			<!-- use to load up the page for every new record a user might want to enter -->
			<?php require_once __DIR__ .'/inc/shared/form.inc.php' ?>
		</div>
    </div>
</div>

<!-- bring in footer include file to display -->
<?php require 'inc/layout/footer.inc.php'; ?>