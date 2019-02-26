<?php // Filename: content.inc.php

// bring in the below files using require
// __DIR__ is a magic constant that returns the directory of the file when used with an include
require __DIR__ . "/../db/mysqli_connect.inc.php";
require __DIR__ . "/../functions/functions.inc.php";

//initialize variables
//$orderby is set to default to sort by last name
//$filter is set to empty to leave unfiltered until the user makes a selection
$orderby = 'last_name';
$filter = '';

//checks to see if a selection has been made
if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
}

//checks to see if a column has been selected to sort the rows by
if (isset($_GET['sortby'])) {
    $orderby = $_GET['sortby'];
}

//checks to see if filter has been cleared and resets $filter to empty
if (isset($_GET['clearfilter'])){
    $filter = '';
}

// sets variable to pull out rows from table where the last name
//begins with the entered string, and then organizes them in
//ascending order
$sql = "SELECT * FROM $db_table WHERE last_name LIKE '$filter%' ORDER BY $orderby ASC";

// the variable $result contains the results of the query to
// the data base if it contains the selected filter string
$result = $db->query($sql);

// if there are no results for the filter, this echos out a message saying so
if ($result->num_rows == 0) {
    echo "<h2 class=\"mt-4 alert alert-warning\">No Records for <strong>last names</strong> starting with <strong>$filter</strong></h2>";
//if there was nothing typed in for a filter, then nothing will display in the result text telling the user which
//last names start with the entered filter string
} else {
    if(empty($filter)){
        $text = '';
    // if the filter string is not empty, then the result text will display this string when echoed out
    } else {
        $text = " - last names starting with $filter";
    }
    // echoing out how many records were found using that filter for last names
    echo "<h2 class=\"mt-4 alert alert-primary\">$result->num_rows Records" . $text . '</h2>';
}

// display alphabet filters
display_letter_filters($filter);

// display message if any
display_message();

// display the data
display_record_table($result);

# close the database
$db->close();