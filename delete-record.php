<?php // Filename: delete-record.php

// magic constant of __DIR__ returns the directory of the file when used with an include
// use to connect to database
require __DIR__ . "/inc/db/mysqli_connect.inc.php";
// use to bring in config file and display updated info
require __DIR__ . "/inc/app/config.inc.php";

// check to see if id is in the query string
if(isset($_GET['id'])){
    // build SQL for delete
    $sql = "DELETE FROM $db_table WHERE id={$_GET['id']} LIMIT 1";
    // perform query
    $result = $db->query($sql); 
    // if one row was affected then redirect browser back to display-records.php
    if($db->affected_rows == 1){
        header('location: display-records.php?message=I%20 successfully%20deleted%20that%20record%20for%20you.');
    } else {
        echo '<h1>Dude(tte). Please do not play with our site. GO AWAY!</h1>';
    }
}
?>