<?php // Filename: display-records.php

// $pageTitle initialized in the config include file is set, 
// so that when the header include file is called in, the variable
// will correctly display as Record Management

$pageTitle = "Record Management";
require_once 'inc/layout/header.inc.php'; 
?>
<!-- HTML with responsive container to hold the content include file -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <!-- Bring in the content include file using require, to open
        database of student names, display the table of students,
        include the filtering, display the results,
        and then close the database. -->

        <?php require "inc/display/content.inc.php"; ?>
        </div>
    </div> <!-- end row -->
</div> <!-- end container -->
<!-- footer include file is called in to display -->
<?php require_once 'inc/layout/footer.inc.php'; ?>