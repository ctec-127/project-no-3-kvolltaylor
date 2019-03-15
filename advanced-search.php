<?php // Filename: search-records.php

// Set $pageTitle variable to display proper page title before it's called in by the header include file
$pageTitle = "Advanced Search";
// Call in the include files for the header, the mysql connection to the database, the functions, and the config file
require_once 'inc/layout/header.inc.php';
require_once 'inc/db/mysqli_connect.inc.php';
// require 'inc/functions/functions.inc.php';
require_once 'inc/app/config.inc.php';
?>
HTML STUFF GOES HERE DUMMY!
<!-- bring in the footer include file and display it using require -->
<?php require_once 'inc/layout/footer.inc.php';?>

<div class="container">
    <div class="row mt-5">
		<div class="col-lg-12">
			<h1>Advanced Record Search</h1>
            <div class="row">
                <div class="col-lg-12 mt-4">
                </div> 
            </div> <!-- end row -->
         </div> <!-- end div col-lg-12 -->
    </div> <!-- end row mt-5 -->
</div> <!-- end container -->