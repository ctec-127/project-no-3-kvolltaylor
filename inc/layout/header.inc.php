<?php // Filename: header.inc.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Echo out relevent page title for each page using the $pageTitle variable -->
    <!-- this way the variable can be defined on each page with the appropriate title to display -->
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
<!-- Use require to pull in the include file to bring in the config file with variable values on each page -->
<!-- Use require to pull in the inculde file for displaying the navigation bar html on each page -->
<?php require 'inc/app/config.inc.php';?> 
<?php require 'inc/layout/navbar.inc.php';?> 